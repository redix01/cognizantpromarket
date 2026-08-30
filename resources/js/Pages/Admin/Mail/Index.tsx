import { FormEvent, useMemo, useState } from 'react';
import { Head, useForm, usePage } from '@inertiajs/react';
import AdminLayout from '@/Layouts/AdminLayout';
import { Check, Mail, Palette, Search, Send, Sparkles, Users } from 'lucide-react';
import { PageProps } from '@/types';

type AdminUser = {
  id: number;
  name: string;
  email: string;
};

type MailDefaults = {
  subject: string;
  heading: string;
  header_label: string;
  header_color: string;
  accent_color: string;
  footer_text: string;
};

type MailForm = {
  user_ids: number[];
  manual_emails: string;
  subject: string;
  heading: string;
  message: string;
  header_label: string;
  header_color: string;
  accent_color: string;
  footer_text: string;
  action_label: string;
  action_url: string;
};

type Props = {
  users: AdminUser[];
  defaults: MailDefaults;
};

export default function AdminMailIndex({ users, defaults }: Props) {
  const { flash } = usePage<PageProps>().props;
  const [search, setSearch] = useState('');

  const { data, setData, post, processing, errors, reset } = useForm<MailForm>({
    user_ids: [],
    manual_emails: '',
    subject: defaults.subject,
    heading: defaults.heading,
    message: '',
    header_label: defaults.header_label,
    header_color: defaults.header_color,
    accent_color: defaults.accent_color,
    footer_text: defaults.footer_text,
    action_label: '',
    action_url: '',
  });
  const recipientError = errors.manual_emails || (errors as Partial<Record<string, string>>).recipients;

  const filteredUsers = useMemo(() => {
    const needle = search.trim().toLowerCase();

    if (!needle) {
      return users;
    }

    return users.filter((user) =>
      `${user.name} ${user.email}`.toLowerCase().includes(needle),
    );
  }, [search, users]);

  const selectedUsers = useMemo(
    () => users.filter((user) => data.user_ids.includes(user.id)),
    [data.user_ids, users],
  );

  const manualCount = useMemo(() => (
    data.manual_emails
      .split(/[\s,;]+/)
      .map((email) => email.trim())
      .filter(Boolean).length
  ), [data.manual_emails]);

  const toggleUser = (userId: number) => {
    setData(
      'user_ids',
      data.user_ids.includes(userId)
        ? data.user_ids.filter((id) => id !== userId)
        : [...data.user_ids, userId],
    );
  };

  const selectFilteredUsers = () => {
    const nextIds = new Set(data.user_ids);
    filteredUsers.forEach((user) => nextIds.add(user.id));
    setData('user_ids', Array.from(nextIds));
  };

  const clearSelectedUsers = () => setData('user_ids', []);

  const submit = (event: FormEvent) => {
    event.preventDefault();
    post(route('admin.mail.store'), {
      preserveScroll: true,
      onSuccess: () => reset('user_ids', 'manual_emails', 'message', 'action_label', 'action_url'),
    });
  };

  return (
    <AdminLayout>
      <Head title="Admin - Send Mail" />
      <header className="mb-8 flex flex-col gap-1">
        <h1 className="text-3xl font-bold bg-gradient-to-r from-white to-zinc-500 bg-clip-text text-transparent tracking-tight">Send Mail</h1>
        <p className="text-zinc-500 text-sm font-medium">Compose branded email messages for selected users or external addresses.</p>
      </header>

      {flash.success && (
        <div className="mb-6 flex items-center gap-3 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm font-semibold text-emerald-400">
          <Check size={16} />
          {flash.success}
        </div>
      )}

      <form onSubmit={submit} className="grid grid-cols-1 gap-6 2xl:grid-cols-[minmax(0,1fr)_430px]">
        <div className="space-y-6">
          <section className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-5 md:p-6">
            <div className="mb-5 flex items-center justify-between gap-4">
              <div className="flex items-center gap-2">
                <Users size={16} className="text-amber-500" />
                <h2 className="text-sm font-bold text-white">Recipients</h2>
              </div>
              <div className="text-xs font-bold text-zinc-500">
                {selectedUsers.length + manualCount} selected
              </div>
            </div>

            <div className="grid grid-cols-1 gap-5 xl:grid-cols-[minmax(0,1fr)_360px]">
              <div>
                <div className="mb-3 flex flex-col gap-3 sm:flex-row">
                  <div className="relative flex-1">
                    <Search size={16} className="absolute left-3 top-1/2 -translate-y-1/2 text-zinc-500" />
                    <input
                      value={search}
                      onChange={(event) => setSearch(event.target.value)}
                      placeholder="Search users..."
                      className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] py-2.5 pl-10 pr-4 text-sm text-white placeholder-zinc-500 focus:border-zinc-600 focus:outline-none"
                    />
                  </div>
                  <button
                    type="button"
                    onClick={selectFilteredUsers}
                    className="rounded-xl border border-[#1A1A1A] px-4 py-2.5 text-xs font-bold text-zinc-300 transition-colors hover:border-amber-500/40 hover:text-white"
                  >
                    Select Visible
                  </button>
                  <button
                    type="button"
                    onClick={clearSelectedUsers}
                    className="rounded-xl border border-[#1A1A1A] px-4 py-2.5 text-xs font-bold text-zinc-500 transition-colors hover:text-white"
                  >
                    Clear
                  </button>
                </div>

                <div className="max-h-72 overflow-y-auto rounded-2xl border border-[#1A1A1A] bg-[#0A0A0A]">
                  {filteredUsers.length === 0 ? (
                    <div className="px-4 py-8 text-center text-sm font-medium text-zinc-500">No matching users</div>
                  ) : filteredUsers.map((user) => {
                    const checked = data.user_ids.includes(user.id);

                    return (
                      <label key={user.id} className="flex cursor-pointer items-center gap-3 border-b border-[#151515] px-4 py-3 last:border-b-0 hover:bg-[#151515]">
                        <input
                          type="checkbox"
                          checked={checked}
                          onChange={() => toggleUser(user.id)}
                          className="rounded border-[#333] bg-[#0A0A0A] text-amber-600 focus:ring-amber-600"
                        />
                        <span className="flex min-w-0 flex-1 flex-col">
                          <span className="truncate text-sm font-bold text-white">{user.name}</span>
                          <span className="truncate text-xs text-zinc-500">{user.email}</span>
                        </span>
                      </label>
                    );
                  })}
                </div>
              </div>

              <div>
                <label htmlFor="manual_emails" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Manual Emails</label>
                <textarea
                  id="manual_emails"
                  rows={9}
                  value={data.manual_emails}
                  onChange={(event) => setData('manual_emails', event.target.value)}
                  placeholder="client@example.com, investor@example.com"
                  className="w-full resize-none rounded-2xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white placeholder-zinc-600 focus:border-zinc-600 focus:outline-none"
                />
                {recipientError && (
                  <p className="mt-2 text-xs font-semibold text-rose-400">{recipientError}</p>
                )}
              </div>
            </div>
          </section>

          <section className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-5 md:p-6">
            <div className="mb-5 flex items-center gap-2">
              <Mail size={16} className="text-blue-500" />
              <h2 className="text-sm font-bold text-white">Message</h2>
            </div>

            <div className="grid gap-4 md:grid-cols-2">
              <div>
                <label htmlFor="subject" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Subject</label>
                <input
                  id="subject"
                  value={data.subject}
                  onChange={(event) => setData('subject', event.target.value)}
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white focus:border-zinc-600 focus:outline-none"
                />
                {errors.subject && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.subject}</p>}
              </div>
              <div>
                <label htmlFor="heading" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Header Title</label>
                <input
                  id="heading"
                  value={data.heading}
                  onChange={(event) => setData('heading', event.target.value)}
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white focus:border-zinc-600 focus:outline-none"
                />
                {errors.heading && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.heading}</p>}
              </div>
            </div>

            <div className="mt-4">
              <label htmlFor="message" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Body</label>
              <textarea
                id="message"
                rows={10}
                value={data.message}
                onChange={(event) => setData('message', event.target.value)}
                placeholder="Type your message..."
                className="w-full resize-y rounded-2xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm leading-7 text-white placeholder-zinc-600 focus:border-zinc-600 focus:outline-none"
              />
              {errors.message && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.message}</p>}
            </div>
          </section>

          <section className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-5 md:p-6">
            <div className="mb-5 flex items-center gap-2">
              <Palette size={16} className="text-fuchsia-400" />
              <h2 className="text-sm font-bold text-white">Template</h2>
            </div>

            <div className="grid gap-4 md:grid-cols-2">
              <div>
                <label htmlFor="header_label" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Header Label</label>
                <input
                  id="header_label"
                  value={data.header_label}
                  onChange={(event) => setData('header_label', event.target.value)}
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white focus:border-zinc-600 focus:outline-none"
                />
                {errors.header_label && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.header_label}</p>}
              </div>
              <div>
                <label htmlFor="footer_text" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Footer</label>
                <input
                  id="footer_text"
                  value={data.footer_text}
                  onChange={(event) => setData('footer_text', event.target.value)}
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white focus:border-zinc-600 focus:outline-none"
                />
                {errors.footer_text && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.footer_text}</p>}
              </div>
              <div>
                <label htmlFor="header_color" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Header Color</label>
                <div className="flex overflow-hidden rounded-xl border border-[#1A1A1A] bg-[#0A0A0A]">
                  <input
                    id="header_color"
                    type="color"
                    value={data.header_color}
                    onChange={(event) => setData('header_color', event.target.value)}
                    className="h-12 w-14 border-0 bg-transparent p-1"
                  />
                  <input
                    value={data.header_color}
                    onChange={(event) => setData('header_color', event.target.value)}
                    className="min-w-0 flex-1 bg-transparent px-3 text-sm font-bold text-white focus:outline-none"
                  />
                </div>
                {errors.header_color && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.header_color}</p>}
              </div>
              <div>
                <label htmlFor="accent_color" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Button Color</label>
                <div className="flex overflow-hidden rounded-xl border border-[#1A1A1A] bg-[#0A0A0A]">
                  <input
                    id="accent_color"
                    type="color"
                    value={data.accent_color}
                    onChange={(event) => setData('accent_color', event.target.value)}
                    className="h-12 w-14 border-0 bg-transparent p-1"
                  />
                  <input
                    value={data.accent_color}
                    onChange={(event) => setData('accent_color', event.target.value)}
                    className="min-w-0 flex-1 bg-transparent px-3 text-sm font-bold text-white focus:outline-none"
                  />
                </div>
                {errors.accent_color && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.accent_color}</p>}
              </div>
              <div>
                <label htmlFor="action_label" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Button Label</label>
                <input
                  id="action_label"
                  value={data.action_label}
                  onChange={(event) => setData('action_label', event.target.value)}
                  placeholder="Open Dashboard"
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white placeholder-zinc-600 focus:border-zinc-600 focus:outline-none"
                />
                {errors.action_label && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.action_label}</p>}
              </div>
              <div>
                <label htmlFor="action_url" className="mb-2 block text-xs font-bold uppercase tracking-widest text-zinc-500">Button URL</label>
                <input
                  id="action_url"
                  value={data.action_url}
                  onChange={(event) => setData('action_url', event.target.value)}
                  placeholder="https://example.com/dashboard"
                  className="w-full rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-4 py-3 text-sm text-white placeholder-zinc-600 focus:border-zinc-600 focus:outline-none"
                />
                {errors.action_url && <p className="mt-2 text-xs font-semibold text-rose-400">{errors.action_url}</p>}
              </div>
            </div>
          </section>

          <div className="flex justify-end">
            <button
              type="submit"
              disabled={processing}
              className="flex items-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-bold text-black transition-all hover:bg-zinc-200 disabled:opacity-50"
            >
              <Send size={16} />
              {processing ? 'Sending...' : 'Send Mail'}
            </button>
          </div>
        </div>

        <aside className="space-y-6">
          <section className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-5">
            <div className="mb-4 flex items-center gap-2">
              <Sparkles size={16} className="text-amber-500" />
              <h2 className="text-sm font-bold text-white">Preview</h2>
            </div>

            <div className="overflow-hidden rounded-2xl border border-zinc-200 bg-white text-zinc-900">
              <div style={{ backgroundColor: data.header_color }} className="p-6 text-white">
                <img src="/img/logo.png" alt="WexMarket" className="mb-5 h-10 w-auto object-contain" />
                {data.header_label && <p className="mb-2 text-[10px] font-bold uppercase tracking-widest text-white/70">{data.header_label}</p>}
                <h3 className="text-2xl font-black leading-tight">{data.heading || 'Message heading'}</h3>
              </div>
              <div className="p-6">
                <div className="whitespace-pre-wrap text-sm leading-7 text-zinc-700">
                  {data.message || 'Your message will appear here.'}
                </div>
                {data.action_label && data.action_url && (
                  <div className="mt-6">
                    <span style={{ backgroundColor: data.accent_color }} className="inline-flex rounded-lg px-4 py-3 text-sm font-black text-white">
                      {data.action_label}
                    </span>
                  </div>
                )}
              </div>
              <div className="border-t border-zinc-200 bg-zinc-50 p-5">
                <p className="text-xs leading-6 text-zinc-500">{data.footer_text}</p>
              </div>
            </div>
          </section>

          <section className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-5">
            <h2 className="mb-4 text-sm font-bold text-white">Selected Users</h2>
            {selectedUsers.length === 0 ? (
              <p className="text-sm font-medium text-zinc-500">No users selected</p>
            ) : (
              <div className="space-y-2">
                {selectedUsers.slice(0, 8).map((user) => (
                  <div key={user.id} className="rounded-xl border border-[#1A1A1A] bg-[#0A0A0A] px-3 py-2">
                    <p className="truncate text-sm font-bold text-white">{user.name}</p>
                    <p className="truncate text-xs text-zinc-500">{user.email}</p>
                  </div>
                ))}
                {selectedUsers.length > 8 && (
                  <p className="pt-2 text-xs font-bold text-zinc-500">+{selectedUsers.length - 8} more users</p>
                )}
              </div>
            )}
          </section>
        </aside>
      </form>
    </AdminLayout>
  );
}
