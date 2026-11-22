<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-50">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KEMUDI HUB | Kabinet ImagiNesa 2026/2027 KBMDSI FILKOM UB</title>
  
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
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
              950: '#052e16',
              dark: '#064e3b',
              accent: '#00a86b',
            }
          },
          boxShadow: {
            'card': '0 1px 3px 0 rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.03)',
            'card-hover': '0 10px 25px -5px rgba(0, 0, 0, 0.06), 0 8px 10px -6px rgba(0, 0, 0, 0.04)',
            'subtle': '0 0 0 1px rgba(0, 0, 0, 0.04), 0 2px 4px rgba(0,0,0,0.02)',
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }
    ::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #94a3b8;
    }
    .badge-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      display: inline-block;
    }
    .card-gradient-bank {
      background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);
    }
  </style>
</head>
<body class="h-full text-slate-800 antialiased flex flex-col font-sans">

  <!-- Desktop App Container -->
  <div class="flex h-screen overflow-hidden bg-[#F8FAFC]">

    <!-- ==================== SIDEBAR ==================== -->
    <aside id="sidebar" class="w-72 bg-white border-r border-slate-200/80 flex flex-col justify-between shrink-0 transition-all duration-300 z-30 shadow-sm">
      
      <!-- Top Branding -->
      <div>
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-800 to-kemudi-600 flex items-center justify-center text-white shadow-md shadow-emerald-900/10">
              <i data-lucide="compass" class="w-6 h-6"></i>
            </div>
            <div>
              <div class="flex items-center gap-1.5">
                <span class="font-extrabold text-base tracking-tight text-slate-900">KEMUDI</span>
                <span class="text-xs font-bold px-1.5 py-0.5 rounded bg-emerald-100 text-emerald-800 uppercase tracking-wider">HUB</span>
              </div>
              <p class="text-[11px] font-medium text-slate-400 leading-tight">Kabinet ImagiNesa 2026/2027</p>
            </div>
          </div>
        </div>

        <!-- Section: Navigasi Utama -->
        <div class="px-4 py-5">
          <p class="px-3 text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Navigasi Utama</p>
          <nav class="space-y-1.5">
            
            <!-- Nav Item: Dashboard -->
            <button onclick="switchTab('dashboard')" id="nav-dashboard" class="nav-item w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
              <i data-lucide="layout-dashboard" class="w-4 h-4 text-slate-400"></i>
              <span>Dashboard</span>
            </button>

            <!-- Nav Item: Manajemen Proker (Default Active) -->
            <button onclick="switchTab('proker')" id="nav-proker" class="nav-item active-nav w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold bg-kemudi-800 text-white shadow-sm shadow-kemudi-900/20 transition-all">
              <div class="flex items-center gap-3">
                <i data-lucide="calendar-check-2" class="w-4 h-4 text-white"></i>
                <span>Manajemen Proker</span>
              </div>
              <span class="text-[10px] bg-white/20 text-white font-bold px-2 py-0.5 rounded-full">12</span>
            </button>

            <!-- Nav Item: Kas & Keuangan -->
            <button onclick="switchTab('keuangan')" id="nav-keuangan" class="nav-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
              <div class="flex items-center gap-3">
                <i data-lucide="wallet-cards" class="w-4 h-4 text-slate-400"></i>
                <span>Kas & Keuangan</span>
              </div>
              <span class="text-[10px] bg-emerald-100 text-emerald-800 font-bold px-2 py-0.5 rounded-full">Surplus</span>
            </button>

            <!-- Nav Item: Pengajuan LPJ/LAK -->
            <button onclick="switchTab('lpj')" id="nav-lpj" class="nav-item w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
              <i data-lucide="file-check" class="w-4 h-4 text-slate-400"></i>
              <span>Pengajuan LPJ / LAK</span>
            </button>

            <!-- Nav Item: Halaman Profil -->
            <button onclick="switchTab('profil')" id="nav-profil" class="nav-item w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
              <i data-lucide="user-cog" class="w-4 h-4 text-slate-400"></i>
              <span>Halaman Profil</span>
            </button>

          </nav>
        </div>
      </div>

      <!-- Bottom Info & Profile -->
      <div class="p-4 border-t border-slate-100 space-y-3 bg-slate-50/50">
        <!-- Server Status Card -->
        <div class="p-2.5 rounded-xl bg-white border border-slate-200/80 shadow-xs flex items-center justify-between">
          <div class="flex items-center gap-2">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            <span class="text-[11px] font-medium text-slate-600">Server FILKOM UB: <span class="font-bold text-slate-800">Normal</span></span>
          </div>
          <i data-lucide="wifi" class="w-3.5 h-3.5 text-emerald-600"></i>
        </div>

        <!-- User Profile Card -->
        <div class="flex items-center gap-3 p-2 rounded-xl bg-white border border-slate-200/70 shadow-xs">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
                 alt="Rani Pratama" 
                 class="w-10 h-10 rounded-full object-cover border border-emerald-500 ring-2 ring-emerald-50" />
            <span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-emerald-500 ring-2 ring-white"></span>
          </div>
          <div class="overflow-hidden flex-1">
            <h4 class="text-xs font-bold text-slate-900 truncate">Rani Pratama</h4>
            <p class="text-[11px] text-slate-500 truncate">Sekretaris 1 BPH</p>
          </div>
          <button onclick="showToast('Buka pengaturan akun', 'info')" class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100">
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
          </button>
        </div>
      </div>
    </aside>

    <!-- ==================== MAIN CONTENT WRAPPER ==================== -->
    <div class="flex-1 flex flex-col h-full overflow-hidden">
      
      <!-- Top Navigation Header -->
      <header class="h-18 px-8 bg-white border-b border-slate-200/80 flex items-center justify-between shrink-0 z-20">
        
        <!-- Search bar -->
        <div class="flex items-center gap-3 w-96">
          <div class="relative w-full">
            <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
            <input type="text" 
                   id="globalSearchInput"
                   placeholder="Cari program kerja, bukti kas, LPJ, PIC..." 
                   class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-medium text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-kemudi-600 focus:bg-white transition-all"
                   onkeyup="handleGlobalSearch(this.value)">
          </div>
        </div>

        <!-- Right Badges & Controls -->
        <div class="flex items-center gap-4">
          <!-- Kabinet Pill Badge -->
          <div class="hidden md:flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-50 border border-cyan-200/80 text-cyan-800 text-xs font-semibold">
            <i data-lucide="award" class="w-3.5 h-3.5 text-cyan-600"></i>
            <span>Kabinet ImagiNesa 2026/2027</span>
          </div>

          <!-- Notification Bell -->
          <div class="relative">
            <button onclick="toggleNotifications()" class="p-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-xl transition-colors relative">
              <i data-lucide="bell" class="w-5 h-5"></i>
              <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500 ring-2 ring-white"></span>
            </button>
            <!-- Dropdown Notification -->
            <div id="notificationMenu" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-2xl shadow-xl border border-slate-100 p-4 z-50">
              <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                <span class="font-bold text-xs text-slate-900">Notifikasi Terbaru</span>
                <span class="text-[10px] text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full font-bold">2 Baru</span>
              </div>
              <div class="py-2 space-y-2.5">
                <div class="p-2 rounded-xl bg-amber-50/70 border border-amber-100 text-xs text-slate-700">
                  <p class="font-bold text-amber-900">Tenggat LPJ H-3</p>
                  <p class="text-[11px] text-slate-600 mt-0.5">DSI Informatics Expo 2026 batas akhir 03 Juni 2026.</p>
                </div>
                <div class="p-2 rounded-xl bg-emerald-50/70 border border-emerald-100 text-xs text-slate-700">
                  <p class="font-bold text-emerald-900">Pemasukan Kas Terkonfirmasi</p>
                  <p class="text-[11px] text-slate-600 mt-0.5">Dana Sponsorship Bank Mandiri Rp 2.500.000 masuk.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="h-6 w-px bg-slate-200"></div>

          <!-- User Quick Menu -->
          <div class="flex items-center gap-3">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
                 alt="Rani" 
                 class="w-9 h-9 rounded-full object-cover border border-emerald-600 ring-2 ring-emerald-50" />
            <div class="hidden lg:block text-left">
              <div class="text-xs font-bold text-slate-900">Rani Pratama</div>
              <div class="text-[10px] font-medium text-slate-400">Sekretaris 1 BPH KBMDSI</div>
            </div>
          </div>
        </div>

      </header>

      <!-- Main Scrollable Body -->
      <main class="flex-1 overflow-y-auto px-8 py-7">

        <!-- ======================================================== -->
        <!-- VIEW 1: MANAJEMEN PROGRAM KERJA (PAGE 1)                  -->
        <!-- ======================================================== -->
        <section id="view-proker" class="space-y-7 max-w-7xl mx-auto">
          
          <!-- Breadcrumb & Page Header -->
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
              <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-1.5">
                <span>Kabinet ImagiNesa 2026/2027</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span>KBMDSI FILKOM UB</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span class="text-emerald-800 font-bold">Manajemen Program Kerja</span>
              </div>
              <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Manajemen Program Kerja</h1>
              <p class="text-xs text-slate-500 mt-1 max-w-2xl leading-relaxed">
                Pusat kendali eksekusi kegiatan, sinkronisasi progres panitia, monitoring birokrasi persetujuan DPA, serta transparansi penyerapan anggaran tahun kerja berjalan.
              </p>
            </div>

            <!-- Top Actions -->
            <div class="flex items-center gap-3 shrink-0">
              <button onclick="openExportModal('proker')" class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-slate-200 hover:border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-bold rounded-xl shadow-xs transition-all">
                <i data-lucide="download" class="w-4 h-4 text-slate-500"></i>
                <span>Ekspor Rekap (XLS / PDF)</span>
              </button>
              <button onclick="openModalTambahProker()" class="inline-flex items-center gap-2 px-4 py-2.5 bg-kemudi-800 hover:bg-kemudi-900 text-white text-xs font-bold rounded-xl shadow-md shadow-kemudi-900/15 transition-all">
                <i data-lucide="plus" class="w-4 h-4"></i>
                <span>Tambah Proker Baru</span>
              </button>
            </div>
          </div>

          <!-- Row of 4 Metric Summary Cards -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            
            <!-- Stat 1: Total Proker -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Program Kerja</span>
                <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                  <i data-lucide="calendar" class="w-4 h-4"></i>
                </div>
              </div>
              <div class="mt-3">
                <div class="text-3xl font-extrabold text-slate-900" id="stat-total-proker">12</div>
                <div class="flex items-center gap-1.5 mt-2 text-xs font-medium text-slate-500">
                  <span class="badge-dot bg-emerald-500"></span>
                  <span>100% Terverifikasi Draf DPA</span>
                </div>
              </div>
            </div>

            <!-- Stat 2: Sedang Berjalan -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Sedang Berjalan</span>
                <div class="w-9 h-9 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                  <i data-lucide="clock" class="w-4 h-4"></i>
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

            <!-- Stat 3: Terlewat / Disahkan -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div class="flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Terlewat / Disahkan</span>
                <div class="w-9 h-9 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                  <i data-lucide="check-circle-2" class="w-4 h-4"></i>
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

            <!-- Stat 4: Pagu Terserap (Terkoneksi ke Kas & Keuangan) -->
            <div onclick="switchTab('keuangan')" class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-xs hover:shadow-card hover:border-emerald-300 cursor-pointer transition-all flex flex-col justify-between group" title="Klik untuk membuka Kas & Keuangan">
              <div class="flex items-center justify-between">
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 group-hover:text-emerald-800 transition-colors">Pagu Terserap</span>
                <div class="w-9 h-9 rounded-xl bg-lime-50 text-lime-700 flex items-center justify-center group-hover:bg-emerald-100 group-hover:text-emerald-800 transition-colors">
                  <i data-lucide="pie-chart" class="w-4 h-4"></i>
                </div>
              </div>
              <div class="mt-3">
                <div class="text-3xl font-extrabold text-slate-900">72.1%</div>
                <div class="flex items-center justify-between gap-1.5 mt-2 text-xs font-medium text-slate-500">
                  <span>Rp 18.450.000 <span class="text-slate-400">/ 25.59M</span></span>
                  <span class="text-[10px] font-bold text-emerald-700 group-hover:text-emerald-900 flex items-center gap-0.5">Buku Kas <i data-lucide="arrow-right" class="w-3 h-3 group-hover:translate-x-0.5 transition-transform"></i></span>
                </div>
              </div>
            </div>

          </div>

          <!-- SOP / LPJ Announcement Banner (Emerald High-Contrast Box) -->
          <div class="rounded-2xl bg-gradient-to-r from-kemudi-900 via-kemudi-800 to-emerald-800 p-6 text-white shadow-md shadow-emerald-950/20 relative overflow-hidden">
            <!-- Background Watermark Graphic -->
            <div class="absolute -right-6 -bottom-8 opacity-10 pointer-events-none text-white">
              <i data-lucide="shield-check" class="w-56 h-56"></i>
            </div>

            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-5 relative z-10">
              <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center shrink-0">
                  <i data-lucide="shield-alert" class="w-6 h-6 text-emerald-200"></i>
                </div>
                <div>
                  <div class="flex items-center gap-2.5">
                    <h3 class="text-base font-extrabold text-white tracking-tight">Kepatuhan Standar Operasional Prosedur (SOP) LPJ/LAK</h3>
                    <span class="text-[10px] font-extrabold bg-emerald-400/20 text-emerald-200 border border-emerald-400/30 px-2 py-0.5 rounded-full uppercase tracking-wider">Teliti & Tepat</span>
                  </div>
                  <p class="text-xs text-emerald-100/90 mt-1.5 max-w-3xl leading-relaxed">
                    Sesuai ketetapan Kongres DPA KBMDSI FILKOM UB Bab IV Pasal 12, seluruh kepanitiaan pelaksana wajib melampirkan berkas fisik & digital LPJ maksimal 14 hari kalender pasca hari terakhir acara untuk menjamin pencairan termin berikutnya.
                  </p>
                </div>
              </div>

              <div class="flex items-center gap-3 shrink-0 self-end lg:self-center">
                <button onclick="openModalSOP()" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/30 text-white rounded-xl text-xs font-bold flex items-center gap-2 transition-all">
                  <i data-lucide="file-text" class="w-4 h-4"></i>
                  <span>Baca SOP Lengkap</span>
                </button>
                <button onclick="openModalUploadLPJ()" class="px-4 py-2 bg-white hover:bg-emerald-50 text-kemudi-900 rounded-xl text-xs font-bold flex items-center gap-2 shadow-sm transition-all">
                  <i data-lucide="upload-cloud" class="w-4 h-4 text-kemudi-800"></i>
                  <span>Unggah Draft LPJ</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Proker Data Table & Filter Section Card -->
          <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
            
            <!-- Division Pill Filters -->
            <div class="p-5 border-b border-slate-100 flex items-center gap-2 overflow-x-auto pb-4">
              <button onclick="filterDivision('all', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-kemudi-800 text-white transition-all shadow-xs shrink-0">
                Semua Divisi <span class="ml-1 opacity-80">(12)</span>
              </button>
              <button onclick="filterDivision('Keilmuan', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                Keilmuan <span class="ml-1 opacity-80">(2)</span>
              </button>
              <button onclick="filterDivision('PSDM', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                PSDM <span class="ml-1 opacity-80">(3)</span>
              </button>
              <button onclick="filterDivision('Pengmas', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                Pengmas <span class="ml-1 opacity-80">(2)</span>
              </button>
              <button onclick="filterDivision('Litbang', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                Litbang <span class="ml-1 opacity-80">(1)</span>
              </button>
              <button onclick="filterDivision('Humas', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                Humas <span class="ml-1 opacity-80">(2)</span>
              </button>
              <button onclick="filterDivision('BPH', this)" class="div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0">
                Kestari / BPH <span class="ml-1 opacity-80">(2)</span>
              </button>
            </div>

            <!-- Search, Dropdown Filter & Sort Row -->
            <div class="px-5 py-4 bg-slate-50/70 border-b border-slate-100 flex flex-col md:flex-row items-center justify-between gap-3">
              <div class="relative w-full md:w-80">
                <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
                <input type="text" 
                       id="prokerSearchInput" 
                       placeholder="Cari kode, nama proker, atau PIC..." 
                       class="w-full pl-9 pr-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-kemudi-600"
                       onkeyup="filterProkerTable()">
              </div>

              <div class="flex items-center gap-3 w-full md:w-auto">
                <!-- Status Dropdown -->
                <select id="statusFilterSelect" onchange="filterProkerTable()" class="px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-kemudi-600">
                  <option value="all">Semua Status LPJ/LAK</option>
                  <option value="Draft H-2 Acara">Draft H-2 Acara</option>
                  <option value="Belum Terbit">Belum Terbit</option>
                  <option value="Tahap Proposal">Tahap Proposal</option>
                  <option value="Disahkan DPA (Paripurna)">Disahkan DPA (Paripurna)</option>
                  <option value="Review DPA">Review DPA</option>
                  <option value="Review Proposal">Review Proposal</option>
                </select>

                <!-- Sort Dropdown -->
                <select id="sortFilterSelect" onchange="sortProkerTable(this.value)" class="px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-xs font-medium text-slate-700 focus:outline-none focus:ring-1 focus:ring-kemudi-600">
                  <option value="jadwal">Urutkan: Jadwal Terdekat</option>
                  <option value="pagu">Urutkan: Pagu Tertinggi</option>
                  <option value="progres">Urutkan: Progres Tertinggi</option>
                </select>
              </div>
            </div>

            <!-- Table of Programs -->
            <div class="overflow-x-auto">
              <table class="w-full text-left border-collapse" id="prokerTable">
                <thead>
                  <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider bg-slate-50/50">
                    <th class="py-3.5 px-6">Kode & Nama Program</th>
                    <th class="py-3.5 px-6">Divisi & PIC</th>
                    <th class="py-3.5 px-6">Jadwal & Tempat</th>
                    <th class="py-3.5 px-6">Progres Eksekusi</th>
                    <th class="py-3.5 px-6">Status LPJ / LAK</th>
                    <th class="py-3.5 px-6 text-right">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs text-slate-700" id="prokerTableBody">
                  <!-- Rows injected via JavaScript -->
                </tbody>
              </table>
            </div>

            <!-- Pagination & Table Summary Footer -->
            <div class="p-4 px-6 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500">
              <div id="prokerPaginationInfo">
                Menampilkan <span class="font-bold text-slate-700" id="showingCount">6</span> dari <span class="font-bold text-slate-700" id="totalCount">12</span> program kerja terdaftar
              </div>
              <div class="flex items-center gap-1.5">
                <button class="w-8 h-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 disabled:opacity-50" disabled>
                  <i data-lucide="chevron-left" class="w-4 h-4"></i>
                </button>
                <button class="w-8 h-8 rounded-lg bg-kemudi-800 text-white font-bold flex items-center justify-center">1</button>
                <button onclick="showToast('Halaman 2 sedang disinkronkan', 'info')" class="w-8 h-8 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 font-medium flex items-center justify-center">2</button>
                <button onclick="showToast('Halaman berikutnya', 'info')" class="w-8 h-8 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 flex items-center justify-center">
                  <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </button>
              </div>
            </div>

          </div>

          <!-- Bottom Section: 2 Columns for Desktop (Alur Birokrasi & Tenggat LPJ) -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <!-- Left Column: Alur Birokrasi & Standarisasi LPJ DPA (7 Cols) -->
            <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-2">
                  <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-700 flex items-center justify-center">
                      <i data-lucide="git-merge" class="w-4 h-4"></i>
                    </div>
                    <div>
                      <h3 class="text-sm font-extrabold text-slate-900">Alur Birokrasi & Standarisasi LPJ DPA</h3>
                      <p class="text-[11px] text-slate-400">Alur pengesahan pertanggungjawaban panitia pelaksana Kabinet ImagiNesa</p>
                    </div>
                  </div>
                  <span class="text-xs text-emerald-700 bg-emerald-50 px-2.5 py-1 rounded-full font-bold">Resmi</span>
                </div>

                <!-- 4 Step Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mt-5">
                  
                  <!-- Step 01 -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/60 hover:bg-emerald-50/30 hover:border-emerald-200 transition-all">
                    <div class="flex items-center justify-between mb-1.5">
                      <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 font-extrabold text-xs flex items-center justify-center">01</span>
                      <i data-lucide="file-check-2" class="w-4 h-4 text-emerald-600"></i>
                    </div>
                    <h4 class="text-xs font-bold text-slate-900">Pengajuan Proposal & RAB</h4>
                    <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">Persetujuan substansi dan teknis ke Himpunan & verifikasi pagu DPA M-10 acara.</p>
                  </div>

                  <!-- Step 02 -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/60 hover:bg-emerald-50/30 hover:border-emerald-200 transition-all flex flex-col justify-between">
                    <div>
                      <div class="flex items-center justify-between mb-1.5">
                        <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 font-extrabold text-xs flex items-center justify-center">02</span>
                        <i data-lucide="banknote" class="w-4 h-4 text-emerald-600"></i>
                      </div>
                      <h4 class="text-xs font-bold text-slate-900">Pencairan Dana Termin 70%</h4>
                      <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">Bendahara Umum mencairkan cek operasional setelah paraf SPJ lewat dekanat.</p>
                    </div>
                    <button onclick="switchTab('keuangan')" class="mt-2 text-[10px] font-bold text-emerald-800 hover:text-emerald-950 flex items-center gap-1 self-start">
                      <span>Cek Buku Kas Bendahara</span>
                      <i data-lucide="arrow-up-right" class="w-3 h-3"></i>
                    </button>
                  </div>

                  <!-- Step 03 -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/60 hover:bg-emerald-50/30 hover:border-emerald-200 transition-all">
                    <div class="flex items-center justify-between mb-1.5">
                      <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 font-extrabold text-xs flex items-center justify-center">03</span>
                      <i data-lucide="receipt" class="w-4 h-4 text-emerald-600"></i>
                    </div>
                    <h4 class="text-xs font-bold text-slate-900">Eksekusi Hari-H & Nota</h4>
                    <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">Kompilasi kuitansi asli bermaterai & logistik pengeluaran divisi lapangan.</p>
                  </div>

                  <!-- Step 04 -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/60 hover:bg-emerald-50/30 hover:border-emerald-200 transition-all">
                    <div class="flex items-center justify-between mb-1.5">
                      <span class="w-6 h-6 rounded-lg bg-emerald-100 text-emerald-800 font-extrabold text-xs flex items-center justify-center">04</span>
                      <i data-lucide="award" class="w-4 h-4 text-emerald-600"></i>
                    </div>
                    <h4 class="text-xs font-bold text-slate-900">Sidang Pleno & Bebas Tanggungan</h4>
                    <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">Maksimal H+14 presentasi di depan Komisi Pengawasan DPA KBMDSI.</p>
                  </div>

                </div>
              </div>

              <!-- Template Download Box -->
              <div class="mt-5 p-3.5 rounded-xl bg-emerald-50/70 border border-emerald-200 flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                  <div class="w-9 h-9 rounded-lg bg-emerald-700 text-white flex items-center justify-center shrink-0">
                    <i data-lucide="folder-archive" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <h5 class="text-xs font-bold text-emerald-950">Paket Berkas & Templates PJ DPA 2026</h5>
                    <p class="text-[11px] text-emerald-800">Format lembar revisi, excel RAB, & formulir LPJ baku.</p>
                  </div>
                </div>
                <button onclick="downloadTemplates()" class="px-3 py-1.5 bg-emerald-800 hover:bg-emerald-900 text-white rounded-lg text-xs font-bold flex items-center gap-1.5 transition-all shrink-0">
                  <i data-lucide="download" class="w-3.5 h-3.5"></i>
                  <span>Unduh (ZIP)</span>
                </button>
              </div>
            </div>

            <!-- Right Column: Tenggat LPJ Terdekat (5 Cols) -->
            <div class="lg:col-span-5 bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-4">
                  <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center">
                      <i data-lucide="clock-alert" class="w-4 h-4"></i>
                    </div>
                    <div>
                      <h3 class="text-sm font-extrabold text-slate-900">Tenggat LPJ Terdekat</h3>
                      <p class="text-[11px] text-slate-400">Monitoring batas pelaporan kepanitiaan</p>
                    </div>
                  </div>
                  <span class="text-xs text-amber-800 bg-amber-100 font-bold px-2 py-0.5 rounded-full">Urgent</span>
                </div>

                <!-- Deadline List Items -->
                <div class="space-y-3">
                  
                  <!-- Item 1: DSI Informatics Expo -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:bg-slate-50 transition-all">
                    <div class="flex items-center justify-between">
                      <h4 class="text-xs font-bold text-slate-900">DSI Informatics Expo 2026</h4>
                      <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">Sisa 3 Hari</span>
                    </div>
                    <div class="flex items-center justify-between text-[11px] text-slate-500 mt-1">
                      <span>Batas Akhir: <strong class="text-slate-700">03 Juni 2026</strong></span>
                      <span>PIC: <strong class="text-slate-700">Fahri D.</strong></span>
                    </div>
                    <div class="flex items-center justify-between mt-2.5 pt-2 border-t border-slate-100">
                      <span class="text-[11px] text-slate-500">Status Berkas: <strong class="text-amber-700">Draft Bab 1-3</strong></span>
                      <button onclick="openModalReminder('Fahri Dewantoro', 'DSI Informatics Expo 2026', '03 Juni 2026')" class="px-2.5 py-1 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-lg text-[11px] font-bold flex items-center gap-1 transition-all">
                        <i data-lucide="send" class="w-3 h-3"></i>
                        <span>Ingatkan PIC</span>
                      </button>
                    </div>
                  </div>

                  <!-- Item 2: Survey Evaluasi Tengah Semester -->
                  <div class="p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:bg-slate-50 transition-all">
                    <div class="flex items-center justify-between">
                      <h4 class="text-xs font-bold text-slate-900">Survey Evaluasi Tengah Semester</h4>
                      <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Aman (Draft OK)</span>
                    </div>
                    <div class="flex items-center justify-between text-[11px] text-slate-500 mt-1">
                      <span>Batas Akhir: <strong class="text-slate-700">29 Mei 2026</strong></span>
                      <span>PIC: <strong class="text-slate-700">Raka G.</strong></span>
                    </div>
                    <div class="flex items-center justify-between mt-2.5 pt-2 border-t border-slate-100">
                      <span class="text-[11px] text-slate-500">Status Berkas: <strong class="text-emerald-700">Review QAI Qr0-1</strong></span>
                      <button onclick="showToast('Membuka pratinjau dokumen...', 'info')" class="px-2.5 py-1 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 rounded-lg text-[11px] font-bold flex items-center gap-1 transition-all">
                        <i data-lucide="eye" class="w-3 h-3"></i>
                        <span>Tinjau Doc</span>
                      </button>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Calendar Link Card -->
              <div class="mt-4 pt-4 border-t border-slate-100">
                <button onclick="showToast('Membuka kalender kerja terintegrasi...', 'info')" class="w-full py-2 px-3 bg-slate-50 hover:bg-emerald-50/60 border border-slate-200 text-slate-700 hover:text-emerald-800 rounded-xl text-xs font-bold flex items-center justify-center gap-2 transition-all">
                  <i data-lucide="calendar" class="w-4 h-4 text-emerald-700"></i>
                  <span>Buka Kalender Kerja KBMDSI</span>
                </button>
              </div>
            </div>

          </div>

        </section>

        <!-- ======================================================== -->
        <!-- VIEW 2: KAS & KEUANGAN ORGANISASI (PAGE 2)                -->
        <!-- ======================================================== -->
        <section id="view-keuangan" class="hidden space-y-7 max-w-7xl mx-auto">
          
          <!-- Breadcrumb & Page Header -->
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
              <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-1.5">
                <span>KEMUDI FINANCIAL LEDGER</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span>KABINET IMAGINESA 2026/2027</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span class="text-emerald-800 font-bold">Kas, Iuran & Keuangan</span>
              </div>
              <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Kas, Iuran & Keuangan Organisasi</h1>
              <p class="text-xs text-slate-500 mt-1 max-w-2xl leading-relaxed">
                Transparansi dan pembukuan arus kas riil lima Departemen Sistem Informasi Kabinet ImagiNesa periode kepengurusan 2026/2027.
              </p>
            </div>

            <!-- Top Actions -->
            <div class="flex items-center gap-3 shrink-0">
              <button onclick="switchTab('proker')" class="px-3 py-2 bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-bold rounded-xl flex items-center gap-1.5 transition-all">
                <i data-lucide="arrow-left" class="w-3.5 h-3.5"></i>
                <span>Ke Manajemen Proker</span>
              </button>
              <div class="relative">
                <select id="periodFilterSelect" onchange="filterFinancePeriod(this.value)" class="px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 shadow-xs focus:outline-none focus:ring-1 focus:ring-kemudi-600">
                  <option value="2026-genap">Periode: Jan - Jun 2026 (Semester Genap)</option>
                  <option value="2025-ganjil">Periode: Jul - Des 2025 (Semester Ganjil)</option>
                </select>
              </div>
              <button onclick="openModalTambahTransaksi()" class="inline-flex items-center gap-2 px-4 py-2.5 bg-kemudi-800 hover:bg-kemudi-900 text-white text-xs font-bold rounded-xl shadow-md shadow-kemudi-900/15 transition-all">
                <i data-lucide="plus" class="w-4 h-4"></i>
                <span>+ Input Transaksi Baru</span>
              </button>
            </div>
          </div>

          <!-- Top 3 Financial Summary Cards (Desktop Grid 3 Columns) -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <!-- Card 1: Total Pemasukan -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between">
                  <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Pemasukan (Inflow)</span>
                  <span class="text-[11px] font-extrabold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800">+18.4% MoM</span>
                </div>
                <div class="mt-3">
                  <div class="text-3xl font-extrabold text-slate-900 tracking-tight" id="val-total-inflow">Rp 6.000.000</div>
                </div>
              </div>
              <div class="mt-4 pt-3 border-t border-slate-100 space-y-1.5 text-xs">
                <div class="flex items-center justify-between text-slate-500">
                  <span>Iuran Kas Pengurus</span>
                  <span class="font-bold text-slate-700">Rp 2.460.000</span>
                </div>
                <div class="flex items-center justify-between text-slate-500">
                  <span>Sponsorship & Dana Usaha (Danus)</span>
                  <span class="font-bold text-slate-700">Rp 3.540.000</span>
                </div>
              </div>
            </div>

            <!-- Card 2: Total Pengeluaran -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between">
                  <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Pengeluaran (Outflow)</span>
                  <span class="text-[11px] font-extrabold px-2 py-0.5 rounded-full bg-rose-100 text-rose-700">29.1% dari pagu</span>
                </div>
                <div class="mt-3">
                  <div class="text-3xl font-extrabold text-slate-900 tracking-tight" id="val-total-outflow">Rp 1.750.000</div>
                </div>
              </div>
              <div class="mt-4 pt-3 border-t border-slate-100 space-y-1 text-xs">
                <div class="flex items-center justify-between text-slate-500">
                  <span>Operasional & ATK</span>
                  <span class="font-bold text-slate-700">Rp 420.000</span>
                </div>
                <div class="flex items-center justify-between text-slate-500">
                  <span>Kesekretariatan</span>
                  <span class="font-bold text-slate-700">Rp 510.000</span>
                </div>
                <div class="flex items-center justify-between text-slate-500">
                  <span>Konsumsi Pleno & Rapat Kerja</span>
                  <span class="font-bold text-slate-700">Rp 820.000</span>
                </div>
              </div>
            </div>

            <!-- Card 3: Saldo Kas Riil Organisasi -->
            <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs hover:shadow-card transition-all flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between">
                  <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Saldo Kas Riil Organisasi</span>
                  <span class="text-[11px] font-extrabold px-2 py-0.5 rounded-full bg-emerald-700 text-white">Surplus Sehat</span>
                </div>
                <div class="mt-3">
                  <div class="text-3xl font-extrabold text-emerald-800 tracking-tight" id="val-saldo-kas">Rp 4.250.000</div>
                </div>
              </div>
              <div class="mt-4 pt-3 border-t border-slate-100">
                <div class="flex items-center justify-between text-xs text-slate-500 mb-1.5">
                  <span>Giro Mandiri (KBMDSI)</span>
                  <span class="font-bold text-emerald-700">Rasio 70.8% Aman</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden">
                  <div class="bg-emerald-600 h-2 rounded-full" style="width: 70.8%"></div>
                </div>
              </div>
            </div>

          </div>

          <!-- Main 2-Column Split: Left 8 Cols (Table & Chart), Right 4 Cols (Iuran & Bank Account) -->
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <!-- Left Area: Table Mutasi Kas + Bar Chart (8 Cols) -->
            <div class="lg:col-span-8 space-y-6">
              
              <!-- Buku Mutasi Kas Terkini -->
              <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                <div class="p-5 border-b border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                  <div>
                    <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
                      <i data-lucide="book-open" class="w-4 h-4 text-emerald-700"></i>
                      <span>Buku Mutasi Kas Terkini</span>
                    </h3>
                    <p class="text-[11px] text-slate-400 mt-0.5">Daftar pembukuan arus uang masuk & keluar KBMDSI FILKOM UB</p>
                  </div>
                  
                  <div class="flex items-center gap-2">
                    <!-- Filter Tabs: Semua, Masuk, Keluar -->
                    <div class="flex items-center bg-slate-100 p-1 rounded-xl text-xs font-bold text-slate-600">
                      <button onclick="filterFinanceMutation('all', this)" class="finance-tab-btn px-3 py-1 rounded-lg bg-white shadow-xs text-slate-900">Semua (28)</button>
                      <button onclick="filterFinanceMutation('masuk', this)" class="finance-tab-btn px-3 py-1 rounded-lg hover:text-slate-900">Masuk (+9)</button>
                      <button onclick="filterFinanceMutation('keluar', this)" class="finance-tab-btn px-3 py-1 rounded-lg hover:text-slate-900">Keluar (-19)</button>
                    </div>

                    <button onclick="openExportModal('keuangan')" class="p-2 border border-slate-200 hover:bg-slate-50 text-slate-600 rounded-xl text-xs font-bold flex items-center gap-1.5 transition-all">
                      <i data-lucide="download" class="w-3.5 h-3.5"></i>
                      <span>Unduh Rekap</span>
                    </button>
                  </div>
                </div>

                <!-- Table of Transactions -->
                <div class="overflow-x-auto">
                  <table class="w-full text-left border-collapse" id="mutasiTable">
                    <thead>
                      <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider bg-slate-50/50">
                        <th class="py-3 px-6">Tanggal</th>
                        <th class="py-3 px-6">Deskripsi & Pihak Terkait</th>
                        <th class="py-3 px-6 text-center">Jenis</th>
                        <th class="py-3 px-6 text-right">Nominal</th>
                      </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-xs text-slate-700" id="mutasiTableBody">
                      <!-- Rows injected via JavaScript -->
                    </tbody>
                  </table>
                </div>

                <!-- Footer Pagination -->
                <div class="p-4 px-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                  <div>Menampilkan <strong class="text-slate-700">6</strong> dari <strong class="text-slate-700">28</strong> transaksi kas terverifikasi</div>
                  <div class="flex items-center gap-1.5">
                    <button class="w-7 h-7 rounded-lg bg-kemudi-800 text-white font-bold flex items-center justify-center">1</button>
                    <button class="w-7 h-7 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 font-medium flex items-center justify-center">2</button>
                    <button class="w-7 h-7 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 font-medium flex items-center justify-center">3</button>
                    <button class="w-7 h-7 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-600 flex items-center justify-center">
                      <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                  </div>
                </div>
              </div>

              <!-- Komparasi Arus Kas Mingguan (Interactive Chart Widget) -->
              <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                  <div>
                    <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
                      <i data-lucide="bar-chart-3" class="w-4 h-4 text-emerald-700"></i>
                      <span>Komparasi Arus Kas Mingguan (Mei 2026)</span>
                    </h3>
                    <p class="text-[11px] text-slate-400 mt-0.5">Perbandingan uang masuk versus pengeluaran departemen per 7 hari kalender</p>
                  </div>
                  <div class="flex items-center gap-4 text-xs font-semibold">
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-sm bg-emerald-600"></span>
                      <span class="text-slate-600">Inflow (Pemasukan)</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                      <span class="w-3 h-3 rounded-sm bg-rose-500"></span>
                      <span class="text-slate-600">Outflow (Pengeluaran)</span>
                    </div>
                  </div>
                </div>

                <!-- Canvas Chart Container -->
                <div class="h-64 w-full">
                  <canvas id="cashflowChart"></canvas>
                </div>

                <div class="mt-4 pt-4 border-t border-slate-100 flex flex-col sm:flex-row items-start sm:items-center justify-between text-xs text-slate-500 gap-2">
                  <div class="flex items-center gap-2">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-emerald-600"></i>
                    <span>Surplus tertinggi diperoleh pada <strong class="text-slate-800">Minggu ke-4</strong> berkat pencairan Termin 1 sponsorship.</span>
                  </div>
                  <span class="font-bold text-slate-700">Target Cadangan: Rp 2.000.000</span>
                </div>
              </div>

            </div>

            <!-- Right Area: Iuran Pengurus & Rekening Resmi Card (4 Cols) -->
            <div class="lg:col-span-4 space-y-6">
              
              <!-- Iuran Pengurus Tracker Card -->
              <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                  <div class="flex items-center gap-2">
                    <i data-lucide="users-round" class="w-4 h-4 text-emerald-700"></i>
                    <h3 class="text-sm font-extrabold text-slate-900">Iuran Pengurus</h3>
                  </div>
                  <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-full bg-cyan-100 text-cyan-800 uppercase">Mei 2026</span>
                </div>
                <p class="text-[11px] text-slate-400">Target wajib: <strong class="text-slate-700">Rp 60.000 / pengurus</strong> untuk pembiayaan operasional himpunan.</p>

                <!-- Progress Metric -->
                <div class="mt-4 p-4 rounded-xl bg-slate-50/70 border border-slate-100">
                  <div class="flex items-center justify-between text-xs font-bold text-slate-800 mb-1.5">
                    <span>41 / 50 Pengurus</span>
                    <span class="text-emerald-700">82% Terkumpul</span>
                  </div>
                  <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                    <div class="bg-emerald-600 h-2.5 rounded-full transition-all duration-500" style="width: 82%"></div>
                  </div>
                  <div class="flex items-center justify-between text-[11px] text-slate-500 mt-2 font-medium">
                    <span>Terkumpul: <strong class="text-emerald-700">Rp 2.460.000</strong></span>
                    <span>Sisa: <strong class="text-rose-600">Rp 540.000</strong></span>
                  </div>
                </div>

                <!-- Pengurus Status List -->
                <div class="mt-4 space-y-2">
                  <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">Status Pembayaran</p>

                  <div class="divide-y divide-slate-100 max-h-56 overflow-y-auto pr-1">
                    
                    <div class="py-2 flex items-center justify-between text-xs">
                      <div>
                        <div class="font-bold text-slate-800">Rani Pratama</div>
                        <div class="text-[10px] text-slate-400">Sekretaris 1 BPH</div>
                      </div>
                      <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-extrabold text-[10px] flex items-center gap-1">
                        <i data-lucide="check" class="w-3 h-3"></i> Lunas
                      </span>
                    </div>

                    <div class="py-2 flex items-center justify-between text-xs">
                      <div>
                        <div class="font-bold text-slate-800">Fakhri Al-Ghofiqi</div>
                        <div class="text-[10px] text-slate-400">Kadiv Keilmuan & Riset</div>
                      </div>
                      <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-extrabold text-[10px] flex items-center gap-1">
                        <i data-lucide="check" class="w-3 h-3"></i> Lunas
                      </span>
                    </div>

                    <div class="py-2 flex items-center justify-between text-xs">
                      <div>
                        <div class="font-bold text-slate-800">Bagas Raditya</div>
                        <div class="text-[10px] text-slate-400">Staf Dept. Pengmas</div>
                      </div>
                      <span class="px-2 py-0.5 rounded-full bg-rose-100 text-rose-700 font-extrabold text-[10px]">
                        Belum Bayar
                      </span>
                    </div>

                    <div class="py-2 flex items-center justify-between text-xs">
                      <div>
                        <div class="font-bold text-slate-800">Annisa Nabila</div>
                        <div class="text-[10px] text-slate-400">Kadiv PSDM</div>
                      </div>
                      <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-extrabold text-[10px] flex items-center gap-1">
                        <i data-lucide="check" class="w-3 h-3"></i> Lunas
                      </span>
                    </div>

                    <div class="py-2 flex items-center justify-between text-xs">
                      <div>
                        <div class="font-bold text-slate-800">Dimas Kuncoro</div>
                        <div class="text-[10px] text-slate-400">Staf Divisi Humas</div>
                      </div>
                      <span class="px-2 py-0.5 rounded-full bg-rose-100 text-rose-700 font-extrabold text-[10px]">
                        Belum Bayar
                      </span>
                    </div>

                  </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100">
                  <button onclick="broadcastReminder()" class="w-full py-2 bg-indigo-50 hover:bg-indigo-100 text-indigo-700 border border-indigo-200 rounded-xl text-xs font-bold flex items-center justify-center gap-2 transition-all">
                    <i data-lucide="send" class="w-3.5 h-3.5"></i>
                    <span>Broadcast Reminder Kas Pengurus</span>
                  </button>
                </div>
              </div>

              <!-- Rekening Resmi KBMDSI & QRIS Card -->
              <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-xs space-y-4">
                <div class="flex items-center gap-2">
                  <i data-lucide="landmark" class="w-4 h-4 text-emerald-700"></i>
                  <h3 class="text-sm font-extrabold text-slate-900">Rekening Resmi KBMDSI</h3>
                </div>

                <!-- ATM Virtual Card Style -->
                <div class="card-gradient-bank p-5 rounded-2xl text-white shadow-lg shadow-emerald-950/20 relative overflow-hidden">
                  <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-extrabold tracking-wider opacity-90 uppercase">Bank Mandiri (Giro)</span>
                    <i data-lucide="credit-card" class="w-5 h-5 opacity-80"></i>
                  </div>
                  <div class="text-[10px] uppercase tracking-wider font-semibold opacity-75">KBMDSI FILKOM UNIVERSITAS BRAWIJAYA</div>
                  <div class="mt-2 text-lg font-mono font-bold tracking-widest flex items-center justify-between">
                    <span>144-00-2983741-2</span>
                    <button onclick="copyToClipboard('144-00-2983741-2', 'Nomor Rekening Mandiri')" title="Salin Nomor Rekening" class="p-1 rounded bg-white/20 hover:bg-white/30 text-white transition-all">
                      <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                    </button>
                  </div>
                  <div class="mt-3 flex items-center justify-between text-[10px]">
                    <span class="px-2 py-0.5 rounded bg-emerald-900/60 font-semibold">Giro Operasional Resmi</span>
                    <span class="font-mono">EXP: 12/28</span>
                  </div>
                </div>

                <!-- QRIS Box -->
                <div class="p-4 rounded-xl border border-slate-200 bg-slate-50 text-center flex flex-col items-center">
                  <div class="flex items-center gap-1.5 text-xs font-bold text-slate-800 mb-2">
                    <i data-lucide="qr-code" class="w-4 h-4 text-emerald-700"></i>
                    <span>QRIS Standar Nasional KBMDSI</span>
                  </div>
                  
                  <!-- Crisp High Quality SVG QR Code Simulation -->
                  <div class="w-36 h-36 bg-white p-2 rounded-xl border border-slate-200 shadow-xs flex items-center justify-center">
                    <svg viewBox="0 0 100 100" class="w-full h-full text-slate-900 fill-current">
                      <!-- Corners -->
                      <rect x="5" y="5" width="25" height="25" rx="3" fill="#064e3b" />
                      <rect x="9" y="9" width="17" height="17" fill="white" />
                      <rect x="13" y="13" width="9" height="9" fill="#064e3b" />

                      <rect x="70" y="5" width="25" height="25" rx="3" fill="#064e3b" />
                      <rect x="74" y="9" width="17" height="17" fill="white" />
                      <rect x="78" y="13" width="9" height="9" fill="#064e3b" />

                      <rect x="5" y="70" width="25" height="25" rx="3" fill="#064e3b" />
                      <rect x="9" y="74" width="17" height="17" fill="white" />
                      <rect x="13" y="78" width="9" height="9" fill="#064e3b" />

                      <!-- Grid Patterns -->
                      <rect x="35" y="8" width="8" height="8" fill="#14532d" />
                      <rect x="48" y="8" width="8" height="8" fill="#14532d" />
                      <rect x="35" y="22" width="14" height="8" fill="#14532d" />
                      
                      <rect x="8" y="35" width="8" height="14" fill="#14532d" />
                      <rect x="22" y="42" width="8" height="8" fill="#14532d" />
                      
                      <!-- Center Data Blocks -->
                      <rect x="36" y="36" width="28" height="28" rx="4" fill="#059669" />
                      <text x="50" y="54" font-size="10" font-weight="bold" fill="white" text-anchor="middle" font-family="sans-serif">KBM</text>

                      <rect x="70" y="36" width="8" height="15" fill="#14532d" />
                      <rect x="84" y="42" width="10" height="8" fill="#14532d" />
                      <rect x="72" y="58" width="14" height="8" fill="#14532d" />

                      <rect x="36" y="70" width="14" height="8" fill="#14532d" />
                      <rect x="42" y="82" width="18" height="10" fill="#14532d" />
                      <rect x="68" y="72" width="12" height="12" fill="#14532d" />
                      <rect x="84" y="84" width="8" height="8" fill="#14532d" />
                    </svg>
                  </div>

                  <p class="text-[10px] text-slate-500 mt-2 font-medium">
                    Mendukung BCA, GoPay, OVO, ShopeePay & Livin Mandiri
                  </p>
                </div>

                <!-- Info Catatan Transfer -->
                <div class="p-3 rounded-xl bg-amber-50/70 border border-amber-200/80 text-[11px] text-slate-600">
                  <div class="font-bold text-amber-900 mb-0.5">Wajib Catat Berita Transfer:</div>
                  <code class="text-[10px] bg-white px-1.5 py-0.5 rounded border border-amber-200 font-mono text-slate-800">[Nama] - [Divisi] - [TujuanKas]</code>
                  <p class="mt-1 text-[10px] text-slate-500">Contoh: <i>Rani-BPH-IuranKasKecilMei</i></p>
                </div>
              </div>

            </div>

          </div>

        </section>

        <!-- ======================================================== -->
        <!-- VIEW 3: DASHBOARD OVERVIEW & QUICK METRICS               -->
        <!-- ======================================================== -->
        <section id="view-dashboard" class="hidden space-y-7 max-w-7xl mx-auto">
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
              <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-1.5">
                <span>KEMUDI HUB</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                <span class="text-emerald-800 font-bold">Ringkasan Eksekutif</span>
              </div>
              <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">Dashboard Utama Kabinet ImagiNesa</h1>
              <p class="text-xs text-slate-500 mt-1">Snapshot real-time performa organisasi, proker aktif, dan kesehatan kas himpunan.</p>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs">
              <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Program Kerja Berjalan</h3>
              <div class="text-3xl font-extrabold text-slate-900">8 / 12 Proker</div>
              <p class="text-xs text-emerald-700 mt-1 font-semibold">66.7% sedang dalam eksekusi aktif</p>
              <button onclick="switchTab('proker')" class="mt-4 text-xs font-bold text-emerald-800 hover:text-emerald-900 flex items-center gap-1">
                Buka Manajemen Proker <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
              </button>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs">
              <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Saldo Bersih Organisasi</h3>
              <div class="text-3xl font-extrabold text-emerald-800">Rp 4.250.000</div>
              <p class="text-xs text-slate-500 mt-1 font-medium">Surplus dari total pemasukan Rp 6.000.000</p>
              <button onclick="switchTab('keuangan')" class="mt-4 text-xs font-bold text-emerald-800 hover:text-emerald-900 flex items-center gap-1">
                Buka Kas & Keuangan <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
              </button>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs">
              <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Kepatuhan LPJ DPA</h3>
              <div class="text-3xl font-extrabold text-slate-900">100% On-Track</div>
              <p class="text-xs text-slate-500 mt-1 font-medium">Tidak ada pelanggaran batas waktu H+14</p>
              <button onclick="openModalSOP()" class="mt-4 text-xs font-bold text-emerald-800 hover:text-emerald-900 flex items-center gap-1">
                Periksa SOP LPJ <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
              </button>
            </div>
          </div>
        </section>

        <!-- VIEW 4: PENGAJUAN LPJ/LAK -->
        <section id="view-lpj" class="hidden space-y-7 max-w-7xl mx-auto">
          <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs text-center">
            <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-emerald-800 flex items-center justify-center mx-auto mb-4">
              <i data-lucide="file-check-2" class="w-8 h-8"></i>
            </div>
            <h2 class="text-xl font-bold text-slate-900">Portal Pengajuan LPJ & LAK Online</h2>
            <p class="text-xs text-slate-500 max-w-md mx-auto mt-2 leading-relaxed">
              Kirimkan berkas digital LPJ yang sudah ditandatangani oleh Ketua Pelaksana dan DPA untuk ditinjau oleh Sekretaris Umum & Bendahara Umum.
            </p>
            <div class="mt-6 flex justify-center gap-3">
              <button onclick="openModalUploadLPJ()" class="px-5 py-2.5 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-xl text-xs font-bold flex items-center gap-2">
                <i data-lucide="upload-cloud" class="w-4 h-4"></i>
                <span>Unggah Berkas Baru</span>
              </button>
              <button onclick="openModalSOP()" class="px-5 py-2.5 border border-slate-200 hover:bg-slate-50 text-slate-700 rounded-xl text-xs font-bold">
                Unduh Format Standar
              </button>
            </div>
          </div>
        </section>

        <!-- VIEW 5: HALAMAN PROFIL -->
        <section id="view-profil" class="hidden space-y-7 max-w-7xl mx-auto">
          <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs max-w-3xl">
            <div class="flex items-center gap-5">
              <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=180&h=180&q=80" 
                   alt="Rani Pratama" 
                   class="w-20 h-20 rounded-2xl object-cover border-2 border-emerald-600 ring-4 ring-emerald-50" />
              <div>
                <h2 class="text-lg font-bold text-slate-900">Rani Pratama</h2>
                <p class="text-xs text-slate-500">Sekretaris 1 Badan Pengurus Harian (BPH)</p>
                <div class="flex items-center gap-2 mt-2">
                  <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800">Admin Utama</span>
                  <span class="text-[10px] font-medium text-slate-400">NIM: 245150201111042</span>
                </div>
              </div>
            </div>

            <div class="mt-6 pt-6 border-t border-slate-100 grid grid-cols-2 gap-4 text-xs">
              <div>
                <span class="text-slate-400">Departemen</span>
                <p class="font-bold text-slate-800 mt-0.5">Sistem Informasi FILKOM UB</p>
              </div>
              <div>
                <span class="text-slate-400">Status Akses</span>
                <p class="font-bold text-emerald-700 mt-0.5">Verified DPA & Dekanat</p>
              </div>
              <div>
                <span class="text-slate-400">Email Institusi</span>
                <p class="font-bold text-slate-800 mt-0.5">ranipratama@student.ub.ac.id</p>
              </div>
              <div>
                <span class="text-slate-400">Masa Bakti</span>
                <p class="font-bold text-slate-800 mt-0.5">2026 - 2027</p>
              </div>
            </div>
          </div>
        </section>

      </main>
    </div>
  </div>

  <!-- ==================== MODALS & POPUPS ==================== -->

  <!-- Modal: Tambah Proker Baru -->
  <div id="modalTambahProker" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full border border-slate-200 shadow-2xl p-6 overflow-hidden animate-in fade-in duration-200">
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
          <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-700"></i>
          <span>Tambah Program Kerja Baru</span>
        </h3>
        <button onclick="closeModal('modalTambahProker')" class="text-slate-400 hover:text-slate-600">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="formTambahProker" onsubmit="submitTambahProker(event)" class="mt-4 space-y-4 text-xs">
        <div>
          <label class="block font-bold text-slate-700 mb-1">Nama Program Kerja</label>
          <input type="text" id="inputProkerNama" required placeholder="Contoh: DSI Summit 2026" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Kode Proker</label>
            <input type="text" id="inputProkerKode" required placeholder="Contoh: KL-03" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none uppercase">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Divisi Penanggung Jawab</label>
            <select id="inputProkerDivisi" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
              <option value="Keilmuan">Keilmuan</option>
              <option value="PSDM">PSDM</option>
              <option value="Pengmas">Pengmas</option>
              <option value="Litbang">Litbang</option>
              <option value="Humas">Humas</option>
              <option value="BPH">Kestari / BPH</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Pagu Anggaran (Rp)</label>
            <input type="text" id="inputProkerPagu" required placeholder="Contoh: 10.000.000" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Nama PIC (Penanggung Jawab)</label>
            <input type="text" id="inputProkerPic" required placeholder="Contoh: Rizky Pratama" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Jadwal Pelaksanaan</label>
            <input type="text" id="inputProkerJadwal" required placeholder="Contoh: 10 - 12 Oktober 2026" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Tempat / Lokasi</label>
            <input type="text" id="inputProkerTempat" required placeholder="Contoh: Gedung F FILKOM UB" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
        </div>

        <div class="flex justify-end gap-2 pt-3 border-t border-slate-100">
          <button type="button" onclick="closeModal('modalTambahProker')" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-xl hover:bg-slate-50 font-bold">Batal</button>
          <button type="submit" class="px-4 py-2 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-xl font-bold">Simpan Program</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal: Input Transaksi Baru -->
  <div id="modalTambahTransaksi" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-lg w-full border border-slate-200 shadow-2xl p-6 overflow-hidden">
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
          <i data-lucide="plus-circle" class="w-4 h-4 text-emerald-700"></i>
          <span>Input Transaksi Kas Organisasi</span>
        </h3>
        <button onclick="closeModal('modalTambahTransaksi')" class="text-slate-400 hover:text-slate-600">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="formTambahTransaksi" onsubmit="submitTambahTransaksi(event)" class="mt-4 space-y-4 text-xs">
        <div>
          <label class="block font-bold text-slate-700 mb-1">Deskripsi Transaksi</label>
          <input type="text" id="inputTxDeskripsi" required placeholder="Contoh: Pembelian Spanduk Dies Natalis" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Jenis Arus Kas</label>
            <select id="inputTxJenis" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
              <option value="Masuk">Pemasukan (+ Inflow)</option>
              <option value="Keluar">Pengeluaran (- Outflow)</option>
            </select>
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Nominal (Rp)</label>
            <input type="text" id="inputTxNominal" required placeholder="Contoh: 350.000" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Tanggal Transaksi</label>
            <input type="text" id="inputTxTanggal" required value="25 Mei 2026" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Pihak Terkait / Divisi</label>
            <input type="text" id="inputTxPihak" required placeholder="Contoh: Divisi Humas & Eksternal" class="w-full px-3 py-2 border border-slate-200 rounded-xl focus:ring-1 focus:ring-kemudi-600 focus:outline-none">
          </div>
        </div>

        <div class="flex justify-end gap-2 pt-3 border-t border-slate-100">
          <button type="button" onclick="closeModal('modalTambahTransaksi')" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-xl hover:bg-slate-50 font-bold">Batal</button>
          <button type="submit" class="px-4 py-2 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-xl font-bold">Catat Transaksi</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal: Baca SOP Lengkap -->
  <div id="modalSOP" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full border border-slate-200 shadow-2xl p-6 overflow-hidden">
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <div class="flex items-center gap-2">
          <i data-lucide="shield-check" class="w-5 h-5 text-emerald-700"></i>
          <h3 class="text-sm font-extrabold text-slate-900">SOP Pelaporan Pertanggungjawaban (LPJ/LAK)</h3>
        </div>
        <button onclick="closeModal('modalSOP')" class="text-slate-400 hover:text-slate-600">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <div class="py-4 space-y-3.5 text-xs text-slate-600 max-h-96 overflow-y-auto leading-relaxed">
        <div class="p-3 bg-emerald-50 rounded-xl border border-emerald-100 text-emerald-900 font-medium">
          <strong>Ketetapan Kongres DPA KBMDSI FILKOM UB Bab IV Pasal 12:</strong><br>
          "Setiap kepanitiaan yang telah menyelesaikan rangkaian kegiatan operasional wajib menyusun dan mengesahkan LPJ paling lambat 14 hari kalender."
        </div>

        <h4 class="font-bold text-slate-900 text-xs">Ketentuan Administrasi Berkas:</h4>
        <ul class="list-disc pl-5 space-y-1.5">
          <li><strong>Nota & Kuitansi Asli:</strong> Setiap pengeluaran di atas Rp 5.000.000 wajib menggunakan materai Rp 10.000 dan cap basah penyedia jasa.</li>
          <li><strong>Lampiran Dokumentasi:</strong> Memuat presensi kehadiran peserta, rundown realisasi jam-ke-jam, serta dokumentasi visual minimum 6 foto resolusi tinggi.</li>
          <li><strong>Pencairan Sisa Termin:</strong> Sisa termin 30% anggaran akan ditransfer oleh Bendahara Umum maksimal 3 hari kerja setelah pengesahan paripurna Komisi DPA.</li>
        </ul>
      </div>

      <div class="flex justify-end gap-2 pt-3 border-t border-slate-100">
        <button onclick="closeModal('modalSOP')" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl text-xs font-bold">Tutup</button>
        <button onclick="downloadTemplates(); closeModal('modalSOP');" class="px-4 py-2 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-xl text-xs font-bold flex items-center gap-1.5">
          <i data-lucide="download" class="w-3.5 h-3.5"></i>
          <span>Unduh Template Dokumen</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal: Unggah Draft LPJ -->
  <div id="modalUploadLPJ" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full border border-slate-200 shadow-2xl p-6">
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
          <i data-lucide="upload-cloud" class="w-4 h-4 text-emerald-700"></i>
          <span>Unggah Berkas Draft LPJ / LAK</span>
        </h3>
        <button onclick="closeModal('modalUploadLPJ')" class="text-slate-400 hover:text-slate-600">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <div class="py-5">
        <div class="border-2 border-dashed border-slate-200 hover:border-emerald-500 rounded-2xl p-6 text-center cursor-pointer transition-colors bg-slate-50/50 hover:bg-emerald-50/30" onclick="simulateFileUpload()">
          <i data-lucide="file-up" class="w-10 h-10 text-slate-400 hover:text-emerald-600 mx-auto mb-2"></i>
          <p class="text-xs font-bold text-slate-700">Klik untuk memilih file PDF atau ZIP</p>
          <p class="text-[11px] text-slate-400 mt-1">Maksimal ukuran file: 25 MB</p>
        </div>
        <p class="text-[11px] text-slate-400 mt-2 text-center">Pastikan lembar pengesahan telah diparaf oleh Ketua Pelaksana.</p>
      </div>

      <div class="flex justify-end gap-2 pt-3 border-t border-slate-100">
        <button onclick="closeModal('modalUploadLPJ')" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-xl text-xs font-bold">Batal</button>
        <button onclick="simulateFileUpload()" class="px-4 py-2 bg-kemudi-800 hover:bg-kemudi-900 text-white rounded-xl text-xs font-bold">Kirim Berkas</button>
      </div>
    </div>
  </div>

  <!-- Modal: Ingatkan PIC -->
  <div id="modalReminder" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-md w-full border border-slate-200 shadow-2xl p-6">
      <div class="flex items-center justify-between pb-3 border-b border-slate-100">
        <h3 class="text-sm font-extrabold text-slate-900 flex items-center gap-2">
          <i data-lucide="message-square" class="w-4 h-4 text-emerald-700"></i>
          <span>Kirim Pengingat Tenggat LPJ</span>
        </h3>
        <button onclick="closeModal('modalReminder')" class="text-slate-400 hover:text-slate-600">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <div class="py-4 space-y-3 text-xs">
        <div>
          <span class="text-slate-400">Penerima:</span>
          <div class="font-bold text-slate-900 text-sm" id="reminderPicName">Fahri Dewantoro</div>
          <div class="text-[11px] text-slate-500" id="reminderProkerName">DSI Informatics Expo 2026</div>
        </div>

        <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-slate-700 text-xs leading-relaxed">
          <p class="font-bold text-emerald-900 mb-1">Preview Pesan WhatsApp Otomatis:</p>
          "Halo <strong>Fahri D.</strong>, mengingatkan dari BPH KBMDSI bahwa tenggat pengumpulan berkas LPJ untuk <strong>DSI Informatics Expo 2026</strong> adalah pada <strong class="text-rose-600">03 Juni 2026 (sisa 3 hari)</strong>. Silakan segera finalisasi Bab 1-3 melalui KEMUDI HUB. Terima kasih!"
        </div>
      </div>

      <div class="flex justify-end gap-2 pt-3 border-t border-slate-100">
        <button onclick="closeModal('modalReminder')" class="px-4 py-2 border border-slate-200 text-slate-600 rounded-xl font-bold text-xs">Batal</button>
        <button onclick="sendReminderAction()" class="px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white rounded-xl font-bold text-xs flex items-center gap-1.5">
          <i data-lucide="send" class="w-3.5 h-3.5"></i>
          <span>Kirim Notifikasi</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Modal: Ekspor Rekap -->
  <div id="modalExport" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-sm w-full border border-slate-200 shadow-2xl p-6 text-center">
      <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center mx-auto mb-3">
        <i data-lucide="file-spreadsheet" class="w-6 h-6"></i>
      </div>
      <h3 class="text-sm font-extrabold text-slate-900">Ekspor Rekap Laporan</h3>
      <p class="text-xs text-slate-500 mt-1">Pilih format unduhan data yang diinginkan</p>

      <div class="grid grid-cols-2 gap-3 mt-5">
        <button onclick="executeExport('Excel (.xlsx)')" class="p-3 rounded-xl border border-slate-200 hover:border-emerald-500 hover:bg-emerald-50/40 flex flex-col items-center gap-1.5 transition-all">
          <i data-lucide="table" class="w-5 h-5 text-emerald-700"></i>
          <span class="text-xs font-bold text-slate-800">Microsoft Excel</span>
          <span class="text-[10px] text-slate-400">.XLSX Format</span>
        </button>

        <button onclick="executeExport('PDF Laporan')" class="p-3 rounded-xl border border-slate-200 hover:border-rose-500 hover:bg-rose-50/40 flex flex-col items-center gap-1.5 transition-all">
          <i data-lucide="file-text" class="w-5 h-5 text-rose-600"></i>
          <span class="text-xs font-bold text-slate-800">Dokumen PDF</span>
          <span class="text-[10px] text-slate-400">Siap Cetak / DPA</span>
        </button>
      </div>

      <div class="mt-4 pt-3 border-t border-slate-100">
        <button onclick="closeModal('modalExport')" class="w-full py-2 text-xs font-bold text-slate-500 hover:text-slate-800">Tutup</button>
      </div>
    </div>
  </div>

  <!-- Toast Notification Pill -->
  <div id="toastNotification" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 px-4 py-3 rounded-2xl bg-slate-900 text-white shadow-2xl text-xs font-semibold">
    <i data-lucide="info" id="toastIcon" class="w-4 h-4 text-emerald-400 shrink-0"></i>
    <span id="toastMessage">Pemberitahuan berhasil</span>
  </div>

  <!-- Application Logic Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
