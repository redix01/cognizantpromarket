import { useState, useEffect, ReactNode } from 'react';
import { usePage } from '@inertiajs/react';
import Sidebar from '@/Components/Sidebar';
import Header from '@/Components/Header';
import { CheckCircle, AlertCircle, X } from 'lucide-react';
import { PageProps } from '@/types';

interface AppLayoutProps {
  children: ReactNode;
}

export default function AppLayout({ children }: AppLayoutProps) {
  const [isSidebarOpen, setIsSidebarOpen] = useState(false);
  const [isMobile, setIsMobile] = useState(false);
  const [flashVisible, setFlashVisible] = useState(false);

  const { url, props } = usePage<PageProps>();
  const flash = props.flash;

  useEffect(() => {
    const checkMobile = () => setIsMobile(window.innerWidth < 1024);
    checkMobile();
    window.addEventListener('resize', checkMobile);
    return () => window.removeEventListener('resize', checkMobile);
  }, []);

  useEffect(() => {
    if (flash?.success || flash?.error) {
      setFlashVisible(true);
    }
  }, [flash?.success, flash?.error, url]);

  return (
    <div className="min-h-screen bg-[#0A0A0A] font-sans selection:bg-blue-600/30">
      <Sidebar
        isOpen={isSidebarOpen}
        setIsOpen={setIsSidebarOpen}
        isMobile={isMobile}
      />
      <div className="lg:pl-[260px] min-h-screen flex flex-col transition-all duration-300">
        <Header onMenuClick={() => setIsSidebarOpen(true)} />

        {flashVisible && (flash?.success || flash?.error) && (
          <div className="px-4 md:px-8 pt-4">
            {flash.success && (
              <div className="flex items-center gap-3 bg-emerald-500/10 border border-emerald-500/20 rounded-2xl px-5 py-4">
                <CheckCircle size={18} className="text-emerald-500 flex-shrink-0" />
                <p className="text-sm font-medium text-emerald-400 flex-1">{flash.success}</p>
                <button onClick={() => setFlashVisible(false)} className="text-zinc-500 hover:text-white transition-colors">
                  <X size={16} />
                </button>
              </div>
            )}
            {flash.error && (
              <div className="flex items-center gap-3 bg-rose-500/10 border border-rose-500/20 rounded-2xl px-5 py-4">
                <AlertCircle size={18} className="text-rose-500 flex-shrink-0" />
                <p className="text-sm font-medium text-rose-400 flex-1">{flash.error}</p>
                <button onClick={() => setFlashVisible(false)} className="text-zinc-500 hover:text-white transition-colors">
                  <X size={16} />
                </button>
              </div>
            )}
          </div>
        )}

        <main className="flex-1 p-4 md:p-8 max-w-[1600px] mx-auto w-full">
          {children}
        </main>
        <footer className="p-6 border-t border-[#1A1A1A] bg-[#0A0A0A] text-center">
          <p className="text-zinc-600 text-xs font-medium">
            &copy; 2026 WexMarket. All rights reserved.
            <span className="mx-2 text-[#222]">|</span>
            Secure Institutional Grade Trading Platform
          </p>
        </footer>
      </div>
    </div>
  );
}
