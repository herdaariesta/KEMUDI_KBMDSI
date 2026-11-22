// KEMUDI HUB - Interactive Desktop Dashboard Application Logic
// Kabinet ImagiNesa 2026/2027 KBMDSI FILKOM UB

// --- State Data: Program Kerja ---
let prokerList = [
  {
    id: 1,
    code: 'KL-01',
    codePrefix: 'KL',
    name: 'DSI Informatics Expo 2026',
    pagu: 18500000,
    paguStr: 'Rp 18.500.000',
    division: 'Keilmuan',
    pic: 'Fahri Dewantoro',
    schedule: '18 - 20 Mei 2026',
    location: 'Gedung G FILKOM UB',
    progress: 95,
    progressLabel: '95% - Finalisasi Booth',
    status: 'Draft H-2 Acara',
    statusTheme: 'cyan'
  },
  {
    id: 2,
    code: 'PS-02',
    codePrefix: 'PS',
    name: 'LKMM-TD DSI 2026',
    pagu: 12000000,
    paguStr: 'Rp 12.000.000',
    division: 'PSDM',
    pic: 'Nadya Maharani',
    schedule: '06 - 07 Juni 2026',
    location: 'Kusuma Agrowisata',
    progress: 40,
    progressLabel: '40% - Open Recruitment',
    status: 'Belum Terbit',
    statusTheme: 'purple'
  },
  {
    id: 3,
    code: 'PM-01',
    codePrefix: 'PM',
    name: 'Bina Desa Digital: SIM BumDes',
    pagu: 14200000,
    paguStr: 'Rp 14.200.000',
    division: 'Pengmas',
    pic: 'Kian Syahid',
    schedule: '15 - 28 Juli 2026',
    location: 'Ds. Poncokusumo Malang',
    progress: 60,
    progressLabel: '60% - Survei Lapangan',
    status: 'Tahap Proposal',
    statusTheme: 'blue'
  },
  {
    id: 4,
    code: 'HM-02',
    codePrefix: 'HM',
    name: 'Studi Banding Eksternal 2026',
    pagu: 8900000,
    paguStr: 'Rp 8.900.000',
    division: 'Humas',
    pic: 'Aisyah Zahra',
    schedule: '12 - 14 Maret 2026',
    location: 'Surabaya & Depok',
    progress: 100,
    progressLabel: '100% - Selesai Total',
    status: 'Disahkan DPA (Paripurna)',
    statusTheme: 'green'
  },
  {
    id: 5,
    code: 'LB-01',
    codePrefix: 'LB',
    name: 'Survey Evaluasi Tengah Semester',
    pagu: 2450000,
    paguStr: 'Rp 2.450.000',
    division: 'Litbang',
    pic: 'Raka Gandesta',
    schedule: '01 - 15 Mei 2026',
    location: 'Portal DSI Online',
    progress: 90,
    progressLabel: '90% - Analisis Data',
    status: 'Review DPA',
    statusTheme: 'emerald'
  },
  {
    id: 6,
    code: 'PS-01',
    codePrefix: 'PS',
    name: 'Inaugurasi & Welcoming Party 2026',
    pagu: 11700000,
    paguStr: 'Rp 11.700.000',
    division: 'PSDM',
    pic: 'Baskara Arya',
    schedule: '22 Agustus 2026',
    location: 'Samantha Krida UB',
    progress: 25,
    progressLabel: '25% - Persetujuan Dekan',
    status: 'Review Proposal',
    statusTheme: 'purple'
  }
];

// --- State Data: Mutasi Kas Keuangan ---
let mutasiList = [
  {
    id: 1,
    date: '24 Mei 2026',
    title: 'Dana Sponsorship Bank Mandiri',
    sub: 'Termin 1 Tech Expo KBMDSI x Kerjasama Eksternal',
    type: 'masuk',
    amount: 2500000,
    amountStr: '+ Rp 2.500.000'
  },
  {
    id: 2,
    date: '21 Mei 2026',
    title: 'Konsumsi Rapat Pleno 2 Tengah Semester',
    sub: '32 Nasi Box Dapur Kirana Malang x BPH',
    type: 'keluar',
    amount: 525000,
    amountStr: '- Rp 525.000'
  },
  {
    id: 3,
    date: '18 Mei 2026',
    title: 'Penyetoran Kas Pengurus Tahap 2',
    sub: '14 Anggota Divisi PSDM & Humas',
    type: 'masuk',
    amount: 840000,
    amountStr: '+ Rp 840.000'
  },
  {
    id: 4,
    date: '12 Mei 2026',
    title: 'Pembelian Kertas HVS & Tinta Stempel BPH',
    sub: 'Gramedia Mall Olympic Garden (MOG) Malang',
    type: 'keluar',
    amount: 295000,
    amountStr: '- Rp 295.000'
  },
  {
    id: 5,
    date: '04 Mei 2026',
    title: 'Penjualan Merchandise & Lanyard KBMDSI',
    sub: 'Batch 01 Mahasiswa SI 2024 & 2025 x Danus',
    type: 'masuk',
    amount: 1040000,
    amountStr: '+ Rp 1.040.000'
  },
  {
    id: 6,
    date: '02 Mei 2026',
    title: 'Sewa Sound Mini & Kabel Ekstensi Outdoor',
    sub: 'Kegiatan Sambut Maba Gazebo FILKOM UB',
    type: 'keluar',
    amount: 400000,
    amountStr: '- Rp 400.000'
  }
];

// Current active filter variables
let currentDivisionFilter = 'all';
let currentFinanceFilter = 'all';
let cashflowChartInstance = null;

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  renderProkerTable(prokerList);
  renderMutasiTable(mutasiList);
  initCashflowChart();
  lucide.createIcons();
});

// --- Tab Navigation Switcher ---
function switchTab(tabId) {
  const views = ['proker', 'keuangan', 'dashboard', 'lpj', 'profil'];
  views.forEach(id => {
    const el = document.getElementById(`view-${id}`);
    const navBtn = document.getElementById(`nav-${id}`);
    if (el) {
      if (id === tabId) {
        el.classList.remove('hidden');
      } else {
        el.classList.add('hidden');
      }
    }
    if (navBtn) {
      if (id === tabId) {
        navBtn.className = 'nav-item active-nav w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold bg-kemudi-800 text-white shadow-sm shadow-kemudi-900/20 transition-all';
        // change icon color
        const icon = navBtn.querySelector('i');
        if (icon) icon.className = 'w-4 h-4 text-white';
      } else {
        navBtn.className = 'nav-item w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors';
        const icon = navBtn.querySelector('i');
        if (icon) icon.className = 'w-4 h-4 text-slate-400';
      }
    }
  });

  // Re-trigger icons & chart rendering if switching to finance tab
  lucide.createIcons();
  if (tabId === 'keuangan' && !cashflowChartInstance) {
    setTimeout(initCashflowChart, 100);
  }
}

// --- Render Proker Table ---
function renderProkerTable(items) {
  const tbody = document.getElementById('prokerTableBody');
  if (!tbody) return;

  if (items.length === 0) {
    tbody.innerHTML = `
      <tr>
        <td colspan="6" class="py-8 text-center text-slate-400 text-xs">
          <i data-lucide="inbox" class="w-8 h-8 mx-auto mb-2 opacity-50"></i>
          Tidak ada program kerja yang sesuai filter.
        </td>
      </tr>
    `;
    lucide.createIcons();
    document.getElementById('showingCount').textContent = '0';
    return;
  }

  tbody.innerHTML = items.map(item => {
    // Generate status badge styling
    let badgeHtml = '';
    if (item.status === 'Draft H-2 Acara') {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-cyan-50 text-cyan-700 border border-cyan-200">
        <span class="w-1.5 h-1.5 rounded-full bg-cyan-500"></span>${item.status}</span>`;
    } else if (item.status === 'Belum Terbit') {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-slate-100 text-slate-600 border border-slate-200">
        <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>${item.status}</span>`;
    } else if (item.status === 'Tahap Proposal') {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-blue-50 text-blue-700 border border-blue-200">
        <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>${item.status}</span>`;
    } else if (item.status === 'Disahkan DPA (Paripurna)') {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-800 border border-emerald-300">
        <i data-lucide="check-check" class="w-3 h-3 text-emerald-700"></i>${item.status}</span>`;
    } else if (item.status === 'Review DPA') {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-amber-50 text-amber-800 border border-amber-200">
        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>${item.status}</span>`;
    } else {
      badgeHtml = `<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-bold bg-purple-50 text-purple-700 border border-purple-200">
        <span class="w-1.5 h-1.5 rounded-full bg-purple-500"></span>${item.status}</span>`;
    }

    // Code badge color
    const prefix = item.codePrefix || item.code.substring(0, 2);

    return `
      <tr class="hover:bg-slate-50/80 transition-colors">
        <td class="py-4 px-6">
          <div class="flex items-center gap-3">
            <span class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-extrabold text-xs flex items-center justify-center border border-slate-200/60 shrink-0">
              ${prefix}
            </span>
            <div>
              <div class="font-extrabold text-slate-900 hover:text-kemudi-800 cursor-pointer flex items-center gap-2">
                <span>${item.name}</span>
                <span class="text-[10px] font-mono font-medium px-1.5 py-0.5 rounded bg-slate-100 text-slate-500">${item.code}</span>
              </div>
              <div class="text-[11px] text-slate-400 mt-0.5">Pagu Anggaran: <span class="font-semibold text-slate-700">${item.paguStr}</span></div>
            </div>
          </div>
        </td>

        <td class="py-4 px-6">
          <div class="font-bold text-slate-800">${item.division}</div>
          <div class="text-[11px] text-slate-500 flex items-center gap-1">
            <i data-lucide="user" class="w-3 h-3 text-slate-400"></i>
            <span>${item.pic}</span>
          </div>
        </td>

        <td class="py-4 px-6">
          <div class="font-bold text-slate-800">${item.schedule}</div>
          <div class="text-[11px] text-slate-500 flex items-center gap-1">
            <i data-lucide="map-pin" class="w-3 h-3 text-slate-400"></i>
            <span>${item.location}</span>
          </div>
        </td>

        <td class="py-4 px-6">
          <div class="w-44">
            <div class="flex items-center justify-between text-[11px] font-semibold text-slate-700 mb-1">
              <span>${item.progressLabel}</span>
            </div>
            <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden">
              <div class="bg-kemudi-700 h-2 rounded-full transition-all duration-500" style="width: ${item.progress}%"></div>
            </div>
          </div>
        </td>

        <td class="py-4 px-6">
          ${badgeHtml}
        </td>

        <td class="py-4 px-6 text-right">
          <div class="flex items-center justify-end gap-1">
            <button onclick="goToKasForProker('${item.name}')" class="p-1.5 text-slate-400 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-colors" title="Lihat Arus Kas Terkait">
              <i data-lucide="wallet" class="w-4 h-4"></i>
            </button>
            <button onclick="detailProker(${item.id})" class="p-1.5 text-slate-400 hover:text-kemudi-800 hover:bg-slate-100 rounded-lg transition-colors" title="Lihat Detail Proker">
              <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </button>
          </div>
        </td>
      </tr>
    `;
  }).join('');

  document.getElementById('showingCount').textContent = items.length;
  lucide.createIcons();
}

// --- Filter Proker Table ---
function filterDivision(division, btnEl) {
  currentDivisionFilter = division;

  // Update button visual states
  document.querySelectorAll('.div-filter-btn').forEach(btn => {
    btn.className = 'div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-slate-100 text-slate-600 hover:bg-slate-200 transition-all shrink-0';
  });
  btnEl.className = 'div-filter-btn px-4 py-1.5 rounded-full text-xs font-bold bg-kemudi-800 text-white transition-all shadow-xs shrink-0';

  filterProkerTable();
}

function filterProkerTable() {
  const searchTerm = (document.getElementById('prokerSearchInput')?.value || '').toLowerCase().trim();
  const statusFilter = document.getElementById('statusFilterSelect')?.value || 'all';

  let filtered = prokerList.filter(item => {
    const matchDivision = currentDivisionFilter === 'all' || item.division.toLowerCase() === currentDivisionFilter.toLowerCase();
    const matchStatus = statusFilter === 'all' || item.status === statusFilter;
    const matchSearch = searchTerm === '' || 
      item.name.toLowerCase().includes(searchTerm) || 
      item.code.toLowerCase().includes(searchTerm) || 
      item.pic.toLowerCase().includes(searchTerm) ||
      item.division.toLowerCase().includes(searchTerm);

    return matchDivision && matchStatus && matchSearch;
  });

  renderProkerTable(filtered);
}

function sortProkerTable(criteria) {
  let sorted = [...prokerList];
  if (criteria === 'pagu') {
    sorted.sort((a, b) => b.pagu - a.pagu);
  } else if (criteria === 'progres') {
    sorted.sort((a, b) => b.progress - a.progress);
  } else {
    // default jadwal / id
    sorted.sort((a, b) => a.id - b.id);
  }
  prokerList = sorted;
  filterProkerTable();
  showToast(`Diurutkan berdasarkan ${criteria}`, 'info');
}

// --- Render Mutasi Kas Table ---
function renderMutasiTable(items) {
  const tbody = document.getElementById('mutasiTableBody');
  if (!tbody) return;

  if (items.length === 0) {
    tbody.innerHTML = `
      <tr>
        <td colspan="4" class="py-8 text-center text-slate-400 text-xs">
          Tidak ada data transaksi mutasi kas.
        </td>
      </tr>
    `;
    return;
  }

  tbody.innerHTML = items.map(tx => {
    const isMasuk = tx.type === 'masuk';
    const pill = isMasuk 
      ? `<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-emerald-100 text-emerald-800">Masuk</span>`
      : `<span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-extrabold bg-rose-100 text-rose-700">Keluar</span>`;
    
    const amountClass = isMasuk ? 'text-emerald-700 font-extrabold' : 'text-rose-600 font-extrabold';

    return `
      <tr class="hover:bg-slate-50/80 transition-colors">
        <td class="py-3.5 px-6 font-medium text-slate-500 whitespace-nowrap">
          ${tx.date}
        </td>
        <td class="py-3.5 px-6">
          <div class="font-bold text-slate-900">${tx.title}</div>
          <div class="text-[11px] text-slate-400 mt-0.5">${tx.sub}</div>
        </td>
        <td class="py-3.5 px-6 text-center">
          ${pill}
        </td>
        <td class="py-3.5 px-6 text-right font-mono ${amountClass}">
          ${tx.amountStr}
        </td>
      </tr>
    `;
  }).join('');
}

function filterFinanceMutation(type, btnEl) {
  currentFinanceFilter = type;
  document.querySelectorAll('.finance-tab-btn').forEach(btn => {
    btn.className = 'finance-tab-btn px-3 py-1 rounded-lg hover:text-slate-900 text-slate-600';
  });
  btnEl.className = 'finance-tab-btn px-3 py-1 rounded-lg bg-white shadow-xs text-slate-900 font-bold';

  let filtered = mutasiList;
  if (type !== 'all') {
    filtered = mutasiList.filter(item => item.type === type);
  }
  renderMutasiTable(filtered);
}

// --- Initialize Chart.js: Cashflow Comparison ---
function initCashflowChart() {
  const ctx = document.getElementById('cashflowChart');
  if (!ctx) return;

  if (cashflowChartInstance) {
    cashflowChartInstance.destroy();
  }

  cashflowChartInstance = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
      datasets: [
        {
          label: 'Inflow (Pemasukan)',
          data: [1200000, 850000, 1050000, 2500000],
          backgroundColor: '#059669',
          borderRadius: 6,
          barPercentage: 0.6,
          categoryPercentage: 0.7
        },
        {
          label: 'Outflow (Pengeluaran)',
          data: [450000, 970000, 920000, 720000],
          backgroundColor: '#f43f5e',
          borderRadius: 6,
          barPercentage: 0.6,
          categoryPercentage: 0.7
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          backgroundColor: '#0f172a',
          titleFont: { family: 'Plus Jakarta Sans', size: 12, weight: 'bold' },
          bodyFont: { family: 'Plus Jakarta Sans', size: 11 },
          padding: 10,
          cornerRadius: 8,
          callbacks: {
            label: function(context) {
              return `${context.dataset.label}: Rp ${context.parsed.y.toLocaleString('id-ID')}`;
            }
          }
        }
      },
      scales: {
        x: {
          grid: { display: false },
          ticks: { font: { family: 'Plus Jakarta Sans', size: 11, weight: '600' }, color: '#64748b' }
        },
        y: {
          grid: { color: '#f1f5f9' },
          ticks: {
            font: { family: 'Plus Jakarta Sans', size: 10 },
            color: '#94a3b8',
            callback: function(val) {
              return 'Rp ' + (val / 1000000).toFixed(1) + ' jt';
            }
          }
        }
      }
    }
  });
}

// --- Modal Handlers ---
function openModal(id) {
  const el = document.getElementById(id);
  if (el) el.classList.remove('hidden');
}

function closeModal(id) {
  const el = document.getElementById(id);
  if (el) el.classList.add('hidden');
}

function openModalTambahProker() {
  openModal('modalTambahProker');
}

function openModalTambahTransaksi() {
  openModal('modalTambahTransaksi');
}

function openModalSOP() {
  openModal('modalSOP');
}

function openModalUploadLPJ() {
  openModal('modalUploadLPJ');
}

function openExportModal(type) {
  openModal('modalExport');
}

function openModalReminder(name, proker, deadline) {
  document.getElementById('reminderPicName').textContent = name;
  document.getElementById('reminderProkerName').textContent = `${proker} (Batas: ${deadline})`;
  openModal('modalReminder');
}

function sendReminderAction() {
  closeModal('modalReminder');
  showToast('Pengingat WhatsApp berhasil dikirimkan ke PIC!', 'success');
}

// --- Form Submissions ---
function submitTambahProker(e) {
  e.preventDefault();
  const nama = document.getElementById('inputProkerNama').value;
  const kode = document.getElementById('inputProkerKode').value;
  const divisi = document.getElementById('inputProkerDivisi').value;
  const pagu = document.getElementById('inputProkerPagu').value;
  const pic = document.getElementById('inputProkerPic').value;
  const jadwal = document.getElementById('inputProkerJadwal').value;
  const tempat = document.getElementById('inputProkerTempat').value;

  const rawNum = parseInt(pagu.replace(/[^0-9]/g, '')) || 5000000;

  const newProker = {
    id: prokerList.length + 1,
    code: kode,
    codePrefix: kode.substring(0, 2),
    name: nama,
    pagu: rawNum,
    paguStr: 'Rp ' + rawNum.toLocaleString('id-ID'),
    division: divisi,
    pic: pic,
    schedule: jadwal,
    location: tempat,
    progress: 10,
    progressLabel: '10% - Draf Proposal',
    status: 'Tahap Proposal',
    statusTheme: 'blue'
  };

  prokerList.unshift(newProker);
  filterProkerTable();
  closeModal('modalTambahProker');
  document.getElementById('formTambahProker').reset();
  showToast(`Program kerja "${nama}" berhasil didaftarkan!`, 'success');
}

function submitTambahTransaksi(e) {
  e.preventDefault();
  const desc = document.getElementById('inputTxDeskripsi').value;
  const jenis = document.getElementById('inputTxJenis').value;
  const nominal = document.getElementById('inputTxNominal').value;
  const tanggal = document.getElementById('inputTxTanggal').value;
  const pihak = document.getElementById('inputTxPihak').value;

  const rawNum = parseInt(nominal.replace(/[^0-9]/g, '')) || 250000;
  const isMasuk = jenis === 'Masuk';

  const newTx = {
    id: mutasiList.length + 1,
    date: tanggal,
    title: desc,
    sub: pihak,
    type: isMasuk ? 'masuk' : 'keluar',
    amount: rawNum,
    amountStr: (isMasuk ? '+ Rp ' : '- Rp ') + rawNum.toLocaleString('id-ID')
  };

  mutasiList.unshift(newTx);
  renderMutasiTable(mutasiList);
  closeModal('modalTambahTransaksi');
  document.getElementById('formTambahTransaksi').reset();
  showToast(`Transaksi "${desc}" berhasil dicatat!`, 'success');
}

// --- Utility Functions ---
function showToast(message, type = 'info') {
  const toast = document.getElementById('toastNotification');
  const msgEl = document.getElementById('toastMessage');
  const icon = document.getElementById('toastIcon');

  if (!toast || !msgEl) return;

  msgEl.textContent = message;
  toast.classList.remove('translate-y-20', 'opacity-0');
  toast.classList.add('translate-y-0', 'opacity-100');

  setTimeout(() => {
    toast.classList.remove('translate-y-0', 'opacity-100');
    toast.classList.add('translate-y-20', 'opacity-0');
  }, 3500);
}

function copyToClipboard(text, label) {
  navigator.clipboard.writeText(text).then(() => {
    showToast(`${label} (${text}) berhasil disalin!`, 'success');
  }).catch(() => {
    showToast(`Berhasil disalin: ${text}`, 'success');
  });
}

function simulateFileUpload() {
  showToast('Mengunggah berkas draft LPJ ke cloud FILKOM...', 'info');
  setTimeout(() => {
    closeModal('modalUploadLPJ');
    showToast('Berkas draft LPJ berhasil diunggah & masuk antrian review DPA.', 'success');
  }, 1200);
}

function downloadTemplates() {
  showToast('Mengunduh Paket_Berkas_Templates_PJ_DPA_2026.zip...', 'info');
}

function executeExport(format) {
  closeModal('modalExport');
  showToast(`Mengekspor rekap laporan format ${format}...`, 'success');
}

function broadcastReminder() {
  showToast('Pesan pengingat kas berhasil dikirim ke 9 pengurus yang belum lunas via WhatsApp gateway!', 'success');
}

function toggleNotifications() {
  const menu = document.getElementById('notificationMenu');
  if (menu) menu.classList.toggle('hidden');
}

function handleGlobalSearch(term) {
  term = term.toLowerCase().trim();
  if (!term) return;

  // Search across proker
  const matchedProker = prokerList.find(p => p.name.toLowerCase().includes(term) || p.pic.toLowerCase().includes(term));
  if (matchedProker) {
    switchTab('proker');
    const searchInput = document.getElementById('prokerSearchInput');
    if (searchInput) {
      searchInput.value = term;
      filterProkerTable();
    }
    return;
  }

  // Search across finance
  const matchedTx = mutasiList.find(m => m.title.toLowerCase().includes(term) || m.sub.toLowerCase().includes(term));
  if (matchedTx) {
    switchTab('keuangan');
    showToast(`Ditemukan transaksi terkait: "${matchedTx.title}"`, 'info');
  }
}

function goToKasForProker(name) {
  switchTab('keuangan');
  showToast(`Membuka buku kas terkait: "${name}"`, 'success');
}

function detailProker(id) {
  const item = prokerList.find(p => p.id === id);
  if (item) {
    showToast(`Membuka rincian proker: ${item.name} (${item.code})`, 'info');
  }
}
