import { useState, FormEvent } from 'react';
import { Head, useForm } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';
import { Check, Copy, Upload, ShieldCheck, ChevronRight, Info } from 'lucide-react';

interface DepositMethod {
  id: number;
  currency: string;
  network: string;
  name: string;
  address: string;
  icon: string;
  min_amount: number;
  max_amount: number;
  usd_price: number | null;
}

interface DepositProps {
  methods: DepositMethod[];
}

export default function Deposit({ methods }: DepositProps) {
  const [selectedMethod, setSelectedMethod] = useState<DepositMethod | null>(methods[0] ?? null);
  const [copied, setCopied] = useState(false);
  const { data, setData, post, processing, errors } = useForm({
    deposit_method_id: methods[0]?.id ?? 0,
    amount: '',
    proof: null as File | null,
  });

  const handleCopy = () => {
    if (!selectedMethod?.address) {
      return;
    }

    navigator.clipboard.writeText(selectedMethod.address);
    setCopied(true);
    setTimeout(() => setCopied(false), 2000);
  };

  const handleSubmit = (e: FormEvent) => {
    e.preventDefault();
    post(route('deposit.store'));
  };

  const selectMethod = (method: DepositMethod) => {
    setSelectedMethod(method);
    setData('deposit_method_id', method.id);
  };

  const usdAmount = parseFloat(data.amount || '0');
  const cryptoEstimate = selectedMethod?.usd_price && usdAmount > 0
    ? usdAmount / selectedMethod.usd_price
    : 0;

  if (!selectedMethod) {
    return (
      <AppLayout>
        <Head title="Deposit" />
        <header className="mb-8 flex flex-col gap-1">
          <h1 className="text-3xl font-bold bg-gradient-to-r from-white to-zinc-500 bg-clip-text text-transparent capitalize tracking-tight">Deposit</h1>
          <p className="text-zinc-500 text-sm font-medium">Fund your account securely.</p>
        </header>
        <div className="max-w-2xl">
          <div className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-6 lg:p-8 space-y-3">
            <h2 className="text-xl font-bold text-white">No deposit methods available</h2>
            <p className="text-sm text-zinc-400 leading-relaxed">
              There are currently no active deposit methods configured by the admin, so this page cannot accept a deposit request yet.
            </p>
            <p className="text-xs text-zinc-500 uppercase tracking-widest">
              Admin action required: create or reactivate at least one deposit method.
            </p>
          </div>
        </div>
      </AppLayout>
    );
  }

  return (
    <AppLayout>
      <Head title="Deposit" />
      <header className="mb-8 flex flex-col gap-1">
        <h1 className="text-3xl font-bold bg-gradient-to-r from-white to-zinc-500 bg-clip-text text-transparent capitalize tracking-tight">Deposit</h1>
        <p className="text-zinc-500 text-sm font-medium">Fund your account securely.</p>
      </header>
      <div className="space-y-6">
        <div className="grid grid-cols-1 xl:grid-cols-2 gap-8">
          <div className="space-y-6">
            <div className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-6 lg:p-8 space-y-6">
              <div>
                <h2 className="text-xl font-bold text-white">Choose Method</h2>
                <p className="text-sm text-zinc-500 mt-1">Select your preferred cryptocurrency for deposit.</p>
              </div>
              <div className="space-y-2 max-h-[400px] overflow-y-auto custom-scrollbar pr-2">
                {methods.map((method) => (
                  <button key={method.id} onClick={() => selectMethod(method)}
                    className={`w-full flex items-center justify-between p-4 rounded-2xl border transition-all duration-200 group ${
                      selectedMethod.id === method.id ? 'bg-blue-600/10 border-blue-600 shadow-[0_0_15px_rgba(37,99,235,0.1)]' : 'bg-[#0A0A0A] border-[#1A1A1A] hover:border-zinc-700'
                    }`}>
                    <div className="flex items-center gap-3">
                      <img src={method.icon} alt={method.name} className="w-8 h-8 rounded-full p-1 bg-[#1A1A1A]" />
                      <span className={`text-sm font-bold ${selectedMethod.id === method.id ? 'text-white' : 'text-zinc-400 group-hover:text-zinc-200'}`}>{method.name}</span>
                    </div>
                    {selectedMethod.id === method.id && (
                      <div className="w-5 h-5 bg-blue-600 rounded-full flex items-center justify-center"><Check size={12} className="text-white" /></div>
                    )}
                  </button>
                ))}
              </div>
              <div className="pt-4 space-y-4">
                <div className="bg-[#0A0A0A] border border-[#1A1A1A] rounded-2xl p-6 space-y-4">
                  <div className="flex items-center justify-between">
                    <label className="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Network Address</label>
                    <div className="flex items-center gap-1.5 text-[10px] font-bold text-emerald-500">
                      <ShieldCheck size={12} /><span>Verified Network</span>
                    </div>
                  </div>
                  <div className="bg-[#111] border border-[#222] rounded-xl p-4 break-all font-mono text-sm text-zinc-300 leading-relaxed relative group">
                    {selectedMethod.address}
                  </div>
                  <button onClick={handleCopy}
                    className={`w-full py-4 rounded-xl font-bold text-sm tracking-wide transition-all flex items-center justify-center gap-2 ${
                      copied ? 'bg-emerald-500 text-black' : 'bg-white/5 border border-white/10 text-white hover:bg-white/10'
                    }`}>
                    {copied ? <><Check size={18} /> Copied to Clipboard</> : <><Copy size={18} /> Tap to Copy Address</>}
                  </button>
                </div>
              </div>
            </div>
            <div className="bg-amber-500/10 border border-amber-500/20 p-4 rounded-2xl flex gap-3">
              <Info className="text-amber-500 shrink-0" size={20} />
              <p className="text-xs text-amber-200/70 leading-relaxed font-medium">
                Only send <span className="text-amber-400 font-bold">{selectedMethod.currency}</span> to this address.
              </p>
            </div>
          </div>

          <div className="space-y-6">
            <form onSubmit={handleSubmit} className="bg-[#111] border border-[#1A1A1A] rounded-3xl p-6 lg:p-8 space-y-6">
              <div>
                <h2 className="text-xl font-bold text-white">Submit Payment</h2>
                <p className="text-sm text-zinc-500 mt-1">Enter details after completing the transfer.</p>
              </div>
              <div className="space-y-5">
                <div className="space-y-2">
                  <label className="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Method</label>
                  <div className="bg-[#0A0A0A] border border-[#1A1A1A] rounded-2xl p-4 flex items-center justify-between text-zinc-400">
                    <div className="flex items-center gap-3">
                      <img src={selectedMethod.icon} className="w-6 h-6 p-0.5 rounded-full bg-[#1A1A1A]" alt="" />
                      <span className="text-sm font-bold text-white">{selectedMethod.name.split('(')[0]}</span>
                    </div>
                    <ChevronRight size={16} className="text-zinc-600" />
                  </div>
                </div>
                <div className="space-y-2">
                  <label className="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Amount ($)</label>
                  <input type="number" required value={data.amount} onChange={(e) => setData('amount', e.target.value)}
                    placeholder="Enter amount in USD"
                    className="w-full bg-[#0A0A0A] border border-[#1A1A1A] rounded-2xl p-4 text-sm text-white focus:border-blue-600 outline-none transition-colors placeholder:text-zinc-700 font-mono" />
                  <div className="flex justify-between text-[11px] text-zinc-500 px-1">
                    <span>
                      Live price: {selectedMethod.usd_price ? `$${selectedMethod.usd_price.toLocaleString(undefined, { maximumFractionDigits: 6 })}` : 'Unavailable'}
                    </span>
                    <span>
                      Estimated {selectedMethod.currency}: {cryptoEstimate.toLocaleString(undefined, { maximumFractionDigits: 8 })}
                    </span>
                  </div>
                  {errors.amount && <p className="text-xs text-rose-500 mt-1">{errors.amount}</p>}
                </div>
                <div className="space-y-2">
                  <label className="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Payment Proof</label>
                  <div className="relative group">
                    <input type="file" onChange={(e) => setData('proof', e.target.files?.[0] || null)}
                      className="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept=".png,.jpg,.jpeg,.pdf" />
                    <div className="bg-[#0A0A0A] border-2 border-dashed border-[#1A1A1A] group-hover:border-blue-600/50 rounded-2xl p-8 flex flex-col items-center justify-center gap-3 transition-all">
                      <div className="p-3 bg-white/5 rounded-2xl text-zinc-400 group-hover:text-blue-500 transition-colors"><Upload size={24} /></div>
                      <div className="text-center">
                        <p className="text-sm font-bold text-white">Click or drag to upload</p>
                        <p className="text-[10px] text-zinc-500 mt-1 uppercase tracking-wider">PNG, JPG, PDF (MAX 5MB)</p>
                      </div>
                    </div>
                  </div>
                  {errors.proof && <p className="text-xs text-rose-500 mt-1">{errors.proof}</p>}
                </div>
                <button type="submit" disabled={processing}
                  className="w-full py-5 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-500 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-[0_0_30px_rgba(37,99,235,0.2)] disabled:opacity-50 disabled:cursor-not-allowed">
                  {processing ? (
                    <div className="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                  ) : (
                    <>Complete Deposit Request <ChevronRight size={18} /></>
                  )}
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </AppLayout>
  );
}
