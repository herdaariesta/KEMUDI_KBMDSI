<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=1512, initial-scale=1.0">
  <title>KEMUDI HUB | MacBook Pro 1512 x 982 - Manajemen Proker</title>
  
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
          colors: {
            kemudi: {
              50: '#f0fdf4',
              100: '#dcfce7',
              200: '#bbf7d0',
              300: '#86efac',
              400: '#4ade80',
              500: '#22c55e',
              600: '#16a34a',
              700: '#15803d',
              800: '#166534',
              900: '#14532d',
              dark: '#064e3b',
            }
          }
        }
      }
    }
  </script>

  <style>
    * {
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
    }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #F8FAFC;
      color: #1E293B;
      width: 1512px;
      overflow-x: hidden;
    }
    .badge-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      display: inline-block;
    }
  </style>
</head>
<body class="bg-[#F8FAFC]">

  <!-- Main Container: Exactly 1512px Width for MacBook Pro 14" -->
  <div style="width: 1512px;" class="mx-auto flex bg-[#F8FAFC] text-slate-800">

    <!-- ==================== SIDEBAR (260px) ==================== -->
    <aside style="width: 260px; min-height: 100vh;" class="bg-white border-r border-slate-200/80 flex flex-col justify-between shrink-0 p-5">
      <div>
        <!-- Top Logo -->
        <div class="pb-5 border-b border-slate-100 flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-900 to-emerald-600 flex items-center justify-center text-white shadow-md shadow-emerald-950/20 font-extrabold text-base">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
            </svg>
          </div>
          <div>
            <div class="flex items-center gap-1.5">
              <span class="font-extrabold text-base tracking-tight text-slate-900">KEMUDI</span>
              <span class="text-[10px] font-extrabold px-1.5 py-0.5 rounded bg-emerald-100 text-emerald-800 tracking-wider">HUB</span>
            </div>
            <p class="text-[11px] font-medium text-slate-400">Kabinet ImagiNesa 2026/2027</p>
          </div>
        </div>

        <!-- Navigation Menu -->
        <div class="py-5">
          <p class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Navigasi Utama</p>
          <nav class="space-y-1.5">
            
            <a href="#" class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400">
                <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
              </svg>
              <span>Dashboard</span>
            </a>

            <!-- Active Menu: Manajemen Proker -->
            <a href="#" class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-bold bg-[#14532d] text-white shadow-sm shadow-emerald-950/20">
              <div class="flex items-center gap-3">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" class="text-white">
                  <path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="m9 16 2 2 4-4"></path>
                </svg>
                <span>Manajemen Proker</span>
              </div>
              <span class="text-[10px] bg-white/20 text-white font-bold px-2 py-0.5 rounded-full">12</span>
            </a>

            <a href="macbook-pro-1512x982-keuangan.html" class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50 transition-colors">
              <div class="flex items-center gap-3">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400">
                  <rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line>
                </svg>
                <span>Kas & Keuangan</span>
              </div>
              <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded-full">Surplus</span>
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400">
                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="m9 15 2 2 4-4"></path>
              </svg>
              <span>Pengajuan LPJ / LAK</span>
            </a>

            <a href="#" class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400">
                <circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 1 0-16 0"></path>
              </svg>
              <span>Halaman Profil</span>
            </a>

          </nav>
        </div>
      </div>

      <!-- Bottom Profile & Status -->
      <div class="space-y-3 pt-4 border-t border-slate-100">
        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center justify-between text-[11px] font-medium text-slate-600">
          <div class="flex items-center gap-2">
            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
            <span>Server FILKOM UB: <strong class="text-slate-800">Normal</strong></span>
          </div>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-emerald-600">
            <path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line>
          </svg>
        </div>

        <div class="flex items-center gap-3 p-2 rounded-xl bg-white border border-slate-200/80 shadow-xs">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
               alt="Rani" 
               class="w-9 h-9 rounded-full object-cover border border-emerald-600 ring-2 ring-emerald-50" />
          <div class="overflow-hidden flex-1 text-xs">
            <div class="font-bold text-slate-900 truncate">Rani Pratama</div>
            <div class="text-[10px] text-slate-400 truncate">Sekretaris 1 BPH KBMDSI</div>
          </div>
        </div>
      </div>
    </aside>

    <!-- ==================== MAIN CONTENT (1252px) ==================== -->
    <div style="width: 1252px;" class="flex flex-col bg-[#F8FAFC]">
      
      <!-- Top Header Bar -->
      <header class="h-16 px-8 bg-white border-b border-slate-200/80 flex items-center justify-between shrink-0">
        <div class="w-96 relative">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2">
            <circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" 
                 placeholder="Cari program kerja, bukti kas, LPJ, PIC..." 
                 class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-emerald-700 focus:bg-white transition-all">
        </div>

        <div class="flex items-center gap-4">
          <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-50 border border-cyan-200/80 text-cyan-800 text-xs font-semibold">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-cyan-600">
              <circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
            </svg>
            <span>Kabinet ImagiNesa 2026/2027</span>
          </div>

          <div class="relative p-2 text-slate-500 hover:text-slate-800 rounded-xl hover:bg-slate-100 cursor-pointer">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500 ring-2 ring-white"></span>
          </div>

          <div class="h-6 w-px bg-slate-200"></div>

          <div class="flex items-center gap-2.5">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
                 alt="Rani" 
                 class="w-8 h-8 rounded-full object-cover border border-emerald-600 ring-2 ring-emerald-50" />
            <div class="text-left">
              <div class="text-xs font-bold text-slate-900">Rani Pratama</div>
              <div class="text-[10px] font-medium text-slate-400">Sekretaris 1 BPH</div>
            </div>
          </div>
        </div>
      </header>

      <!-- Page Scrollable Body -->
      <main class="p-8 space-y-6">

        <!-- Page Header & Action Buttons -->
        <div class="flex items-center justify-between">
          <div>
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-1">
              <span>Kabinet ImagiNesa 2026/2027</span>
              <span>›</span>
              <span>KBMDSI FILKOM UB</span>
              <span>›</span>
              <span class="text-emerald-800 font-bold">Manajemen Program Kerja</span>
            </div>
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Manajemen Program Kerja</h1>
            <p class="text-xs text-slate-500 mt-1 max-w-2xl leading-relaxed">
              Pusat kendali eksekusi kegiatan, sinkronisasi progres panitia, monitoring birokrasi persetujuan DPA, serta transparansi penyerapan anggaran tahun kerja berjalan.
            </p>
          </div>

          <div class="flex items-center gap-3 shrink-0">
            <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-bold rounded-xl shadow-xs transition-all">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-500">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line>
              </svg>
              <span>Ekspor Rekap (XLS / PDF)</span>
            </button>
            <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-[#14532d] hover:bg-emerald-950 text-white text-xs font-bold rounded-xl shadow-md shadow-emerald-950/20 transition-all">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line>
              </svg>
              <span>+ Tambah Proker Baru</span>
            </button>
          </div>
        </div>

        <!-- 4 Metric Summary Cards Row (Desktop 4-Columns) -->
        <div class="grid grid-cols-4 gap-5">
          
          <!-- Card 1: Total Proker -->
          <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Program Kerja</span>
              <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
              </div>
            </div>
            <div class="mt-3">
              <div class="text-3xl font-extrabold text-slate-900">12</div>
              <div class="flex items-center gap-1.5 mt-2 text-xs font-medium text-slate-500">
                <span class="badge-dot bg-emerald-500"></span>
                <span>100% Terverifikasi Draf DPA</span>
              </div>
            </div>
          </div>

          <!-- Card 2: Sedang Berjalan -->
          <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Sedang Berjalan</span>
              <div class="w-9 h-9 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
            </div>
            <div class="mt-3">
              <div class="text-3xl font-extrabold text-slate-900">08</div>
              <div class="flex items-center gap-1.5 mt-2 text-xs font-medium text-slate-500">
                <span class="font-semibold text-cyan-700">Fase Aktif:</span>
                <span>7 Persiapan, 1 Lapangan</span>
              </div>
            </div>
          </div>

          <!-- Card 3: Terlewat / Disahkan -->
          <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Terlewat / Disahkan</span>
              <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
              </div>
            </div>
            <div class="mt-3">
              <div class="text-3xl font-extrabold text-slate-900">04</div>
              <div class="flex items-center gap-1.5 mt-2 text-xs font-medium text-slate-500">
                <span class="font-semibold text-emerald-700">Paripurna DPA:</span>
                <span>4 Terevaluasi</span>
              </div>
            </div>
          </div>

          <!-- Card 4: Pagu Terserap (Link ke Kas & Keuangan) -->
          <a href="macbook-pro-1512x982-keuangan.html" class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs hover:border-emerald-300 transition-all flex flex-col justify-between group">
            <div class="flex items-center justify-between">
              <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 group-hover:text-emerald-800 transition-colors">Pagu Terserap</span>
              <div class="w-9 h-9 rounded-xl bg-lime-50 text-lime-700 flex items-center justify-center group-hover:bg-emerald-100 transition-colors">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                </svg>
              </div>
            </div>
            <div class="mt-3">
              <div class="text-3xl font-extrabold text-slate-900">72.1%</div>
              <div class="flex items-center justify-between mt-2 text-xs font-medium text-slate-500">
                <span>Rp 18.450.000 <span class="text-slate-400">/ 25.59M</span></span>
                <span class="text-[10px] font-bold text-emerald-700 flex items-center gap-0.5">Buku Kas ↗</span>
              </div>
            </div>
          </a>

        </div>

        <!-- Banner SOP LPJ/LAK -->
        <div class="rounded-2xl bg-gradient-to-r from-emerald-950 via-[#14532d] to-emerald-800 p-6 text-white shadow-md shadow-emerald-950/20 flex items-center justify-between">
          <div class="flex items-start gap-4">
            <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center shrink-0">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-emerald-200">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div>
              <div class="flex items-center gap-2.5">
                <h3 class="text-sm font-extrabold text-white tracking-tight">Kepatuhan Standar Operasional Prosedur (SOP) LPJ/LAK</h3>
                <span class="text-[10px] font-extrabold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30 px-2 py-0.5 rounded-full uppercase tracking-wider">Teliti & Tepat</span>
              </div>
              <p class="text-xs text-emerald-100/90 mt-1 max-w-3xl leading-relaxed">
                Sesuai ketetapan Kongres DPA KBMDSI FILKOM UB Bab IV Pasal 12, seluruh kepanitiaan pelaksana wajib melampirkan berkas fisik & digital LPJ maksimal 14 hari kalender pasca hari terakhir acara untuk menjamin pencairan termin berikutnya.
              </p>
            </div>
          </div>

          <div class="flex items-center gap-3 shrink-0">
            <button class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/30 text-white rounded-xl text-xs font-bold transition-all">
              Baca SOP Lengkap
            </button>
            <button class="px-4 py-2 bg-white hover:bg-emerald-50 text-emerald-950 rounded-xl text-xs font-bold shadow-sm transition-all">
              Unggah Draft LPJ
            </button>
          </div>
        </div>

        <!-- Proker Table Card -->
        <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
          
          <!-- Division Tabs -->
          <div class="p-4 border-b border-slate-100 flex items-center gap-2 overflow-x-auto text-xs font-bold">
            <button class="px-4 py-1.5 rounded-full bg-[#14532d] text-white shadow-xs">Semua Divisi (12)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">Keilmuan (2)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">PSDM (3)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">Pengmas (2)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">Litbang (1)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">Humas (2)</button>
            <button class="px-4 py-1.5 rounded-full bg-slate-100 text-slate-600 hover:bg-slate-200">Kestari / BPH (2)</button>
          </div>

          <!-- Filter & Search Row -->
          <div class="px-5 py-3.5 bg-slate-50/70 border-b border-slate-100 flex items-center justify-between gap-3 text-xs">
            <div class="w-80 relative">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-slate-400 absolute left-3 top-1/2 -translate-y-1/2">
                <circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
              <input type="text" placeholder="Cari kode, nama proker, atau PIC..." class="w-full pl-9 pr-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-emerald-700">
            </div>

            <div class="flex items-center gap-3">
              <select class="px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700">
                <option>Semua Status LPJ/LAK</option>
              </select>
              <select class="px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700">
                <option>Urutkan: Jadwal Terdekat</option>
              </select>
            </div>
          </div>

          <!-- Table Content -->
          <table class="w-full text-left border-collapse text-xs">
            <thead>
              <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase bg-slate-50/50">
                <th class="py-3.5 px-6">Kode & Nama Program</th>
                <th class="py-3.5 px-6">Divisi & PIC</th>
                <th class="py-3.5 px-6">Jadwal & Tempat</th>
                <th class="py-3.5 px-6">Progres Eksekusi</th>
                <th class="py-3.5 px-6">Status LPJ / LAK</th>
                <th class="py-3.5 px-6 text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">
              
              <!-- Row 1 -->
              <tr class="hover:bg-slate-50/80 transition-colors">
                <td class="py-4 px-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">KL</span>
                    <div>
                      <div class="font-extrabold text-slate-900 flex items-center gap-2">
                        <span>DSI Informatics Expo 2026</span>
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">KL-01</span>
                      </div>
                      <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <strong class="text-slate-700">Rp 18.500.000</strong></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">Keilmuan</div>
                  <div class="text-[11px] text-slate-500">Fahri Dewantoro</div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">18 - 20 Mei 2026</div>
                  <div class="text-[11px] text-slate-500">Gedung G FILKOM UB</div>
                </td>
                <td class="py-4 px-6 w-44">
                  <div class="text-[11px] font-semibold text-slate-700 mb-1">95% - Finalisasi Booth</div>
                  <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 95%"></div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-cyan-50 text-cyan-700 border border-cyan-200 flex items-center gap-1.5 w-fit">
                    <span class="badge-dot bg-cyan-500"></span> Draft H-2 Acara
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <a href="macbook-pro-1512x982-keuangan.html" class="p-1.5 text-slate-400 hover:text-emerald-700 inline-block" title="Buka Arus Kas">↗</a>
                </td>
              </tr>

              <!-- Row 2 -->
              <tr class="hover:bg-slate-50/80 transition-colors">
                <td class="py-4 px-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">PS</span>
                    <div>
                      <div class="font-extrabold text-slate-900 flex items-center gap-2">
                        <span>LKMM-TD DSI 2026</span>
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">PS-02</span>
                      </div>
                      <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <strong class="text-slate-700">Rp 12.000.000</strong></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">PSDM</div>
                  <div class="text-[11px] text-slate-500">Nadya Maharani</div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">06 - 07 Juni 2026</div>
                  <div class="text-[11px] text-slate-500">Kusuma Agrowisata</div>
                </td>
                <td class="py-4 px-6 w-44">
                  <div class="text-[11px] font-semibold text-slate-700 mb-1">40% - Open Recruitment</div>
                  <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 40%"></div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 text-slate-600 border border-slate-200 flex items-center gap-1.5 w-fit">
                    <span class="badge-dot bg-slate-400"></span> Belum Terbit
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <a href="macbook-pro-1512x982-keuangan.html" class="p-1.5 text-slate-400 hover:text-emerald-700 inline-block">↗</a>
                </td>
              </tr>

              <!-- Row 3 -->
              <tr class="hover:bg-slate-50/80 transition-colors">
                <td class="py-4 px-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">PM</span>
                    <div>
                      <div class="font-extrabold text-slate-900 flex items-center gap-2">
                        <span>Bina Desa Digital: SIM BumDes</span>
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">PM-01</span>
                      </div>
                      <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <strong class="text-slate-700">Rp 14.200.000</strong></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">Pengmas</div>
                  <div class="text-[11px] text-slate-500">Kian Syahid</div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">15 - 28 Juli 2026</div>
                  <div class="text-[11px] text-slate-500">Ds. Poncokusumo Malang</div>
                </td>
                <td class="py-4 px-6 w-44">
                  <div class="text-[11px] font-semibold text-slate-700 mb-1">60% - Survei Lapangan</div>
                  <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 60%"></div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-50 text-blue-700 border border-blue-200 flex items-center gap-1.5 w-fit">
                    <span class="badge-dot bg-blue-500"></span> Tahap Proposal
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <a href="macbook-pro-1512x982-keuangan.html" class="p-1.5 text-slate-400 hover:text-emerald-700 inline-block">↗</a>
                </td>
              </tr>

              <!-- Row 4 -->
              <tr class="hover:bg-slate-50/80 transition-colors">
                <td class="py-4 px-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">HM</span>
                    <div>
                      <div class="font-extrabold text-slate-900 flex items-center gap-2">
                        <span>Studi Banding Eksternal 2026</span>
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">HM-02</span>
                      </div>
                      <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <strong class="text-slate-700">Rp 8.900.000</strong></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">Humas</div>
                  <div class="text-[11px] text-slate-500">Aisyah Zahra</div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">12 - 14 Maret 2026</div>
                  <div class="text-[11px] text-slate-500">Surabaya & Depok</div>
                </td>
                <td class="py-4 px-6 w-44">
                  <div class="text-[11px] font-semibold text-slate-700 mb-1">100% - Selesai Total</div>
                  <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 100%"></div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-800 border border-emerald-300 flex items-center gap-1.5 w-fit">
                    ✓ Disahkan DPA (Paripurna)
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <a href="macbook-pro-1512x982-keuangan.html" class="p-1.5 text-slate-400 hover:text-emerald-700 inline-block">↗</a>
                </td>
              </tr>

              <!-- Row 5 -->
              <tr class="hover:bg-slate-50/80 transition-colors">
                <td class="py-4 px-6">
                  <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">LB</span>
                    <div>
                      <div class="font-extrabold text-slate-900 flex items-center gap-2">
                        <span>Survey Evaluasi Tengah Semester</span>
                        <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">LB-01</span>
                      </div>
                      <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <strong class="text-slate-700">Rp 2.450.000</strong></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">Litbang</div>
                  <div class="text-[11px] text-slate-500">Raka Gandesta</div>
                </td>
                <td class="py-4 px-6">
                  <div class="font-bold text-slate-800">01 - 15 Mei 2026</div>
                  <div class="text-[11px] text-slate-500">Portal DSI Online</div>
                </td>
                <td class="py-4 px-6 w-44">
                  <div class="text-[11px] font-semibold text-slate-700 mb-1">90% - Analisis Data</div>
                  <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-emerald-600 h-2 rounded-full" style="width: 90%"></div>
                  </div>
                </td>
                <td class="py-4 px-6">
                  <span class="px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-50 text-amber-800 border border-amber-200 flex items-center gap-1.5 w-fit">
                    <span class="badge-dot bg-amber-500"></span> Review DPA
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <a href="macbook-pro-1512x982-keuangan.html" class="p-1.5 text-slate-400 hover:text-emerald-700 inline-block">↗</a>
                </td>
              </tr>

            </tbody>
          </table>

          <!-- Pagination Footer -->
          <div class="p-4 px-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
            <div>Menampilkan <strong class="text-slate-700">5</strong> dari <strong class="text-slate-700">12</strong> program kerja terdaftar</div>
            <div class="flex items-center gap-1.5">
              <button class="w-7 h-7 rounded-lg bg-[#14532d] text-white font-bold flex items-center justify-center">1</button>
              <button class="w-7 h-7 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 font-medium flex items-center justify-center">2</button>
              <button class="w-7 h-7 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 flex items-center justify-center">›</button>
            </div>
          </div>

        </div>

        <!-- Bottom 2-Columns Section (Alur Birokrasi & Tenggat LPJ) -->
        <div class="grid grid-cols-12 gap-6">
          
          <!-- Left: Alur Birokrasi & Standarisasi LPJ DPA (7 Cols) -->
          <div class="col-span-7 bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-2.5">
                  <div class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-800 flex items-center justify-center font-bold">
                    ⎇
                  </div>
                  <div>
                    <h3 class="text-xs font-extrabold text-slate-900">Alur Birokrasi & Standarisasi LPJ DPA</h3>
                    <p class="text-[10px] text-slate-400">Alur pengesahan pertanggungjawaban panitia pelaksana</p>
                  </div>
                </div>
                <span class="text-[10px] text-emerald-800 bg-emerald-50 font-bold px-2 py-0.5 rounded-full border border-emerald-200">Resmi</span>
              </div>

              <!-- 4 Steps Grid -->
              <div class="grid grid-cols-2 gap-3 mt-3 text-xs">
                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/70">
                  <div class="flex justify-between items-center mb-1">
                    <span class="w-5 h-5 rounded-md bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center">01</span>
                    <span class="text-[10px] text-slate-400">M-10</span>
                  </div>
                  <h4 class="font-bold text-slate-900 text-[11px]">Pengajuan Proposal & RAB</h4>
                  <p class="text-[10px] text-slate-500 mt-0.5">Persetujuan substansi teknis ke Himpunan & DPA.</p>
                </div>

                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/70">
                  <div class="flex justify-between items-center mb-1">
                    <span class="w-5 h-5 rounded-md bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center">02</span>
                    <a href="macbook-pro-1512x982-keuangan.html" class="text-[10px] text-emerald-700 font-bold hover:underline">Kas ↗</a>
                  </div>
                  <h4 class="font-bold text-slate-900 text-[11px]">Pencairan Dana Termin 70%</h4>
                  <p class="text-[10px] text-slate-500 mt-0.5">Bendum mencairkan cek setelah paraf dekanat.</p>
                </div>

                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/70">
                  <div class="flex justify-between items-center mb-1">
                    <span class="w-5 h-5 rounded-md bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center">03</span>
                    <span class="text-[10px] text-slate-400">Hari-H</span>
                  </div>
                  <h4 class="font-bold text-slate-900 text-[11px]">Eksekusi Hari-H & Nota</h4>
                  <p class="text-[10px] text-slate-500 mt-0.5">Kompilasi kuitansi asli bermaterai & nota kasir.</p>
                </div>

                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/70">
                  <div class="flex justify-between items-center mb-1">
                    <span class="w-5 h-5 rounded-md bg-emerald-100 text-emerald-800 font-bold text-[10px] flex items-center justify-center">04</span>
                    <span class="text-[10px] text-slate-400">H+14</span>
                  </div>
                  <h4 class="font-bold text-slate-900 text-[11px]">Sidang Pleno & Bebas Tanggungan</h4>
                  <p class="text-[10px] text-slate-500 mt-0.5">Maksimal H+14 presentasi di hadapan DPA.</p>
                </div>
              </div>
            </div>

            <div class="mt-4 p-3 rounded-xl bg-emerald-50/80 border border-emerald-200 flex items-center justify-between text-xs">
              <div>
                <strong class="text-emerald-950 font-bold">Paket Berkas & Templates PJ DPA 2026</strong>
                <p class="text-[10px] text-emerald-800">Format revisi, excel RAB, dan dokumen LPJ baku.</p>
              </div>
              <button class="px-3 py-1.5 bg-[#14532d] hover:bg-emerald-950 text-white rounded-lg font-bold text-xs flex items-center gap-1">
                Unduh (ZIP)
              </button>
            </div>
          </div>

          <!-- Right: Tenggat LPJ Terdekat (5 Cols) -->
          <div class="col-span-5 bg-white rounded-2xl border border-slate-200/80 p-5 shadow-xs flex flex-col justify-between">
            <div>
              <div class="flex items-center justify-between mb-3">
                <div>
                  <h3 class="text-xs font-extrabold text-slate-900">Tenggat LPJ Terdekat</h3>
                  <p class="text-[10px] text-slate-400">Monitoring batas waktu kepanitiaan</p>
                </div>
                <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-amber-100 text-amber-800">Urgent</span>
              </div>

              <div class="space-y-3">
                
                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/50">
                  <div class="flex items-center justify-between">
                    <h4 class="text-xs font-bold text-slate-900">DSI Informatics Expo 2026</h4>
                    <span class="text-[9px] font-bold px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">Sisa 3 Hari</span>
                  </div>
                  <div class="flex items-center justify-between text-[11px] text-slate-500 mt-1">
                    <span>Batas Akhir: <strong class="text-slate-700">03 Juni 2026</strong></span>
                    <span>PIC: <strong class="text-slate-700">Fahri D.</strong></span>
                  </div>
                  <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100 text-[11px]">
                    <span class="text-slate-500">Status Berkas: <strong class="text-amber-700">Draft Bab 1-3</strong></span>
                    <button class="px-2.5 py-1 bg-[#14532d] text-white rounded-lg text-[10px] font-bold">
                      Ingatkan PIC
                    </button>
                  </div>
                </div>

                <div class="p-3 rounded-xl border border-slate-100 bg-slate-50/50">
                  <div class="flex items-center justify-between">
                    <h4 class="text-xs font-bold text-slate-900">Survey Evaluasi Tengah Semester</h4>
                    <span class="text-[9px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Aman (Draft OK)</span>
                  </div>
                  <div class="flex items-center justify-between text-[11px] text-slate-500 mt-1">
                    <span>Batas Akhir: <strong class="text-slate-700">29 Mei 2026</strong></span>
                    <span>PIC: <strong class="text-slate-700">Raka G.</strong></span>
                  </div>
                  <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100 text-[11px]">
                    <span class="text-slate-500">Status: <strong class="text-emerald-700">Review QAI Qr0-1</strong></span>
                    <button class="px-2.5 py-1 bg-white border border-slate-200 text-slate-700 rounded-lg text-[10px] font-bold">
                      Tinjau Doc
                    </button>
                  </div>
                </div>

              </div>
            </div>

            <button class="w-full mt-4 py-2 bg-slate-50 hover:bg-emerald-50 border border-slate-200 text-slate-700 rounded-xl text-xs font-bold text-center">
              📅 Buka Kalender Kerja KBMDSI
            </button>
          </div>

        </div>

      </main>

    </div>

  </div>

</body>
</html>
