<?php

namespace App\Services;

use App\Models\PlatformSetting;

class PlatformSettingsService
{
    public function get(string $key, ?string $default = null): ?string
    {
        $value = PlatformSetting::query()
            ->where('key', $key)
            ->value('value');

        if ($value !== null && $value !== '') {
            return $value;
        }

        return $this->definitions()[$key]['default'] ?? $default;
    }

    public function getAdminMailAddress(): string
    {
        return (string) ($this->get('mail_admin_address') ?: config('mail.admin_address', 'admin@waxxmarket.com'));
    }

    public function getAdminMailName(): string
    {
        return (string) ($this->get('mail_admin_name') ?: config('mail.admin_name', 'Admin'));
    }

    public function getMailFromName(): string
    {
        return (string) ($this->get('mail_from_name') ?: config('mail.from.name'));
    }

    public function getSiteName(): string
    {
        return (string) ($this->get('site_name') ?: config('app.name'));
    }

    public function getFloat(string $key, float $default = 0): float
    {
        $value = $this->get($key);

        if ($value === null || $value === '') {
            return $default;
        }

        return is_numeric($value) ? (float) $value : $default;
    }

    public function getPercent(string $key, float $default = 0): float
    {
        return max(0, $this->getFloat($key, $default));
    }

    public function getAdminFormGroups(): array
    {
        $stored = PlatformSetting::query()
            ->get()
            ->keyBy('key');

        $groups = [];

        foreach ($this->definitions() as $key => $definition) {
            $group = $definition['group'];

            if (! isset($groups[$group])) {
                $groups[$group] = [
                    'name' => $group,
                    'description' => $this->groupDescriptions()[$group] ?? null,
                    'settings' => [],
                ];
            }

            $setting = $stored->get($key);

            $groups[$group]['settings'][] = [
                'key' => $key,
                'label' => $definition['label'],
                'description' => $definition['description'],
                'group' => $group,
                'type' => $definition['type'],
                'value' => $setting?->value ?? $definition['default'],
                'placeholder' => $definition['placeholder'] ?? null,
            ];
        }

        return array_values($groups);
    }

    public function definitionFor(string $key): ?array
    {
        return $this->definitions()[$key] ?? null;
    }

    public function definitions(): array
    {
        return [
            'site_name' => [
                'group' => 'General',
                'label' => 'Site Name',
                'description' => 'Platform name shown across the admin-managed experience.',
                'type' => 'text',
                'default' => 'WaxxMarket',
                'placeholder' => 'WaxxMarket',
            ],
            'site_description' => [
                'group' => 'General',
                'label' => 'Site Description',
                'description' => 'Short description for the platform.',
                'type' => 'textarea',
                'default' => 'Multi-asset trading and investment platform.',
                'placeholder' => 'Describe the platform',
            ],
            'support_email' => [
                'group' => 'General',
                'label' => 'Support Email',
                'description' => 'Primary email address shown for customer support.',
                'type' => 'email',
                'default' => 'support@waxxmarket.com',
                'placeholder' => 'support@waxxmarket.com',
            ],
            'support_phone' => [
                'group' => 'General',
                'label' => 'Support Phone',
                'description' => 'Primary customer support phone number.',
                'type' => 'text',
                'default' => '',
                'placeholder' => '+1 000 000 0000',
            ],
            'mail_admin_address' => [
                'group' => 'Mail',
                'label' => 'MAIL_ADMIN_ADDRESS',
                'description' => 'Inbox that receives new registration, KYC, deposit, and withdrawal requests.',
                'type' => 'email',
                'default' => 'admin@waxxmarket.com',
                'placeholder' => 'admin@waxxmarket.com',
            ],
            'mail_admin_name' => [
                'group' => 'Mail',
                'label' => 'MAIL_ADMIN_NAME',
                'description' => 'Display name used for admin notification recipients.',
                'type' => 'text',
                'default' => 'Admin',
                'placeholder' => 'Admin',
            ],
            'mail_from_name' => [
                'group' => 'Mail',
                'label' => 'Mail From Name',
                'description' => 'Human-readable sender name used in platform emails.',
                'type' => 'text',
                'default' => 'WaxxMarket',
                'placeholder' => 'WaxxMarket',
            ],
            'livechat_widget_code' => [
                'group' => 'Integrations',
                'label' => 'Live Chat Widget Code',
                'description' => 'Paste the full live chat embed code here. It will load on the landing page and user support page.',
                'type' => 'textarea',
                'default' => '',
                'placeholder' => '<script>...</script>',
            ],
            'trading_fee' => [
                'group' => 'Fees',
                'label' => 'Trading Fee (%)',
                'description' => 'Applied to executed user trades as a percentage of order subtotal.',
                'type' => 'number',
                'default' => '0.1',
                'placeholder' => '0.1',
            ],
            'swap_fee' => [
                'group' => 'Fees',
                'label' => 'Swap Fee (%)',
                'description' => 'Applied to user swaps as a percentage of the converted asset amount.',
                'type' => 'number',
                'default' => '0.05',
                'placeholder' => '0.05',
            ],
            'withdrawal_fee' => [
                'group' => 'Fees',
                'label' => 'Withdrawal Fee (%)',
                'description' => 'Applied to user withdrawal requests as a percentage of the requested amount.',
                'type' => 'number',
                'default' => '1.0',
                'placeholder' => '1.0',
            ],
            'min_deposit' => [
                'group' => 'Limits',
                'label' => 'Minimum Deposit',
                'description' => 'Reference minimum deposit amount.',
                'type' => 'number',
                'default' => '10',
                'placeholder' => '10',
            ],
            'min_withdrawal' => [
                'group' => 'Limits',
                'label' => 'Minimum Withdrawal',
                'description' => 'Applied to user withdrawals as the minimum allowed request amount.',
                'type' => 'number',
                'default' => '5',
                'placeholder' => '5',
            ],
            'max_withdrawal' => [
                'group' => 'Limits',
                'label' => 'Maximum Withdrawal',
                'description' => 'Applied to user withdrawals as the maximum allowed request amount.',
                'type' => 'number',
                'default' => '50000',
                'placeholder' => '50000',
            ],
            'kyc_notice' => [
                'group' => 'Compliance',
                'label' => 'KYC Notice',
                'description' => 'Admin-managed message for compliance teams and future UI usage.',
                'type' => 'textarea',
                'default' => 'Identity verification is required before accessing restricted features.',
                'placeholder' => 'Enter KYC notice',
            ],
        ];
    }

    private function groupDescriptions(): array
    {
        return [
            'General' => 'Core platform identity and support contact details.',
            'Mail' => 'Addresses and sender metadata used for operational notifications.',
            'Integrations' => 'External embeds and third-party integrations exposed to users.',
            'Fees' => 'Admin-managed fee references used across the business.',
            'Limits' => 'Admin-managed deposit and withdrawal thresholds.',
            'Compliance' => 'Messages and controls related to verification workflows.',
        ];
    }
}
