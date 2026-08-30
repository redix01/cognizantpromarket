import { useState, useEffect, PropsWithChildren } from 'react';
import { Link, usePage } from '@inertiajs/react';
import BrandLogo from '@/Components/BrandLogo';
import Header from '@/Components/Header';
import {
    LayoutDashboard, Users, ShieldCheck, ArrowUpCircle, ArrowDownCircle,
    Database, Pickaxe, UserCheck, CreditCard, Zap, ArrowLeftRight,
    Settings, ArrowLeft, LogOut, ChartCandlestick, Mail,
} from 'lucide-react';

const adminNav = [
    { label: 'Dashboard',       icon: LayoutDashboard, route: 'admin.dashboard' },
    { label: 'Users',           icon: Users,           route: 'admin.users.index' },
    { label: 'Send Mail',       icon: Mail,            route: 'admin.mail.index' },
    { label: 'KYC',             icon: ShieldCheck,     route: 'admin.kyc.index' },
    { label: 'Deposits',        icon: ArrowUpCircle,   route: 'admin.deposits.index' },
    { label: 'Withdrawals',     icon: ArrowDownCircle, route: 'admin.withdrawals.index' },
    { label: 'Staking Plans',   icon: Database,        route: 'admin.staking-plans.index' },
    { label: 'Mining Plans',    icon: Pickaxe,         route: 'admin.mining-plans.index' },
    { label: 'Experts',         icon: UserCheck,       route: 'admin.experts.index' },
    { label: 'Deposit Methods', icon: CreditCard,      route: 'admin.deposit-methods.index' },
    { label: 'Trade Room',      icon: ChartCandlestick, route: 'admin.trade-room.index' },
    { label: 'Trade Orders',    icon: Zap,             route: 'admin.orders.index' },
    { label: 'Swap History',    icon: ArrowLeftRight,  route: 'admin.swaps.index' },
    { label: 'Settings',        icon: Settings,        route: 'admin.settings.index' },
];

export default function AdminLayout({ children }: PropsWithChildren) {
    const { url, props } = usePage();
    const user = props.auth?.user as Record<string, any> | undefined;
    const [isSidebarOpen, setIsSidebarOpen] = useState(false);
    const [isMobile, setIsMobile] = useState(false);

    useEffect(() => {
        const check = () => setIsMobile(window.innerWidth < 1024);
        check();
        window.addEventListener('resize', check);
        return () => window.removeEventListener('resize', check);
    }, []);

    const isActive = (routeName: string) => {
        try {
            const generated = route(routeName);
            // route() returns a full URL; usePage().url is pathname only — normalise both
            const routePath = generated.startsWith('http')
                ? new URL(generated).pathname
                : generated.split('?')[0];
            const currentPath = url.split('?')[0];
            return currentPath === routePath || currentPath.startsWith(routePath + '/');
        } catch {
            return false;
        }
    };

    return (
        <div className="min-h-screen bg-[#0A0A0A] font-sans selection:bg-amber-600/30">
            {isMobile && isSidebarOpen && (
                <div
                    onClick={() => setIsSidebarOpen(false)}
                    className="fixed inset-0 bg-black/80 backdrop-blur-md z-40 lg:hidden"
                />
            )}

            <aside className={`fixed top-0 left-0 bottom-0 bg-[#0C0C0C] border-r border-[#1F1F1F] z-50 flex flex-col w-[260px] transition-transform duration-300 ${(!isMobile || isSidebarOpen) ? 'translate-x-0' : '-translate-x-full'}`}>
                <div className="p-6 border-b border-[#1A1A1A] flex items-center justify-between">
                    <div className="flex items-center gap-3">
                        <div className="flex flex-col gap-1">
                            <BrandLogo className="h-10 w-auto object-contain" alt="WaxxMarket Admin" />
                            <span className="text-[10px] font-bold uppercase tracking-widest text-amber-600 pl-1">Admin Panel</span>
                        </div>
                    </div>
                    {isMobile && (
                        <button onClick={() => setIsSidebarOpen(false)} className="p-2 text-zinc-500 hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                        </button>
                    )}
                </div>

                <nav className="flex-1 overflow-y-auto py-6 px-4 space-y-1.5">
                    {adminNav.map((item) => {
                        const active = isActive(item.route);
                        const Icon = item.icon;
                        return (
                            <Link
                                key={item.route}
                                href={route(item.route)}
                                onClick={() => isMobile && setIsSidebarOpen(false)}
                                className={`w-full flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 group relative ${
                                    active
                                        ? 'bg-amber-600/10 text-white'
                                        : 'text-zinc-500 hover:text-white hover:bg-[#1A1A1A]/80'
                                }`}
                            >
                                {active && <div className="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-amber-600 rounded-full shadow-[0_0_8px_rgba(217,119,6,0.6)]" />}
                                <Icon size={18} className={active ? 'text-amber-500' : 'text-zinc-500 group-hover:text-zinc-300 transition-colors'} />
                                <span className={`font-medium text-sm tracking-wide ${active ? 'text-white' : ''}`}>{item.label}</span>
                            </Link>
                        );
                    })}
                </nav>

                <div className="p-4 border-t border-[#1A1A1A] space-y-1.5">
                    <Link
                        href={route('dashboard')}
                        onClick={() => isMobile && setIsSidebarOpen(false)}
                        className="w-full flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 text-zinc-500 hover:text-white hover:bg-[#1A1A1A]/80"
                    >
                        <ArrowLeft size={18} />
                        <span className="font-medium text-sm tracking-wide">Back to App</span>
                    </Link>
                    <Link
                        href={route('logout')}
                        method="post"
                        as="button"
                        onClick={() => isMobile && setIsSidebarOpen(false)}
                        className="w-full flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 text-zinc-500 hover:text-white hover:bg-[#1A1A1A]/80"
                    >
                        <LogOut size={18} />
                        <span className="font-medium text-sm tracking-wide">Logout</span>
                    </Link>
                </div>

                <div className="p-4 border-t border-[#1A1A1A]">
                    <div className="bg-[#141414] rounded-2xl p-4 flex items-center gap-3">
                        <div className="w-10 h-10 rounded-full bg-gradient-to-tr from-amber-600 to-orange-500 flex items-center justify-center font-bold text-white shadow-lg flex-shrink-0">
                            {user?.name?.charAt(0)?.toUpperCase() || 'A'}
                        </div>
                        <div className="flex flex-col overflow-hidden">
                            <span className="text-sm font-bold text-white truncate">{user?.name || 'Admin'}</span>
                            <div className="flex items-center gap-1.5">
                                <div className="w-1.5 h-1.5 bg-amber-600 rounded-full animate-pulse" />
                                <span className="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Administrator</span>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <div className="lg:pl-[260px] min-h-screen flex flex-col transition-all duration-300">
                <Header onMenuClick={() => setIsSidebarOpen(true)} />
                <main className="flex-1 p-4 md:p-8 max-w-[1600px] mx-auto w-full">
                    {children}
                </main>
                <footer className="p-6 border-t border-[#1A1A1A] bg-[#0A0A0A] text-center">
                    <p className="text-zinc-600 text-xs font-medium">
                        &copy; 2026 WaxxMarket. Admin Panel.
                        <span className="mx-2 text-[#222]">|</span>
                        Secure Administration Interface
                    </p>
                </footer>
            </div>
        </div>
    );
}
