<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 Pinky Polar Chart - Tugas P13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pink-bg: #fff0f6;
            --pink-card: #ffffff;
            --pink-primary: #ff6b9d;
            --pink-dark: #d63384;
            --pink-soft: #ffe3ec;
            --pink-border: #ffc2d1;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #fff0f6 0%, #ffe5ec 50%, #f8edeb 100%);
            min-height: 100vh;
            color: #592e42;
            overflow-x: hidden;
        }

        /* Dekorasi Elemen Lucu Melayang */
        .floating-deco {
            position: fixed;
            font-size: 1.6rem;
            opacity: 0.45;
            pointer-events: none;
            animation: floatAnim 4s ease-in-out infinite;
            z-index: 0;
        }
        @keyframes floatAnim {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(8deg); }
        }

        .navbar-pink {
            background: linear-gradient(90deg, #ff758f 0%, #ff8fa3 100%);
            border-bottom: 3px solid #ffc2d1;
        }

        .cute-card {
            background: var(--pink-card);
            border: 2px solid var(--pink-border);
            border-radius: 22px;
            box-shadow: 0 8px 20px rgba(255, 107, 157, 0.12);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
            z-index: 1;
        }

        .cute-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(255, 107, 157, 0.2);
        }

        .card-header-pink {
            background-color: #fff5f8;
            border-bottom: 2px dashed var(--pink-border);
            border-radius: 20px 20px 0 0 !important;
            color: var(--pink-dark);
        }

        .btn-pink {
            background-color: var(--pink-primary);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.2s;
        }
        .btn-pink:hover, .btn-pink.active {
            background-color: var(--pink-dark);
            color: white;
            transform: scale(1.04);
        }

        .btn-outline-pink {
            background-color: #fff;
            color: var(--pink-dark);
            border: 2px solid var(--pink-border);
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.2s;
        }
        .btn-outline-pink:hover {
            background-color: var(--pink-soft);
            color: var(--pink-dark);
            border-color: var(--pink-primary);
        }

        .kpi-bubble {
            width: 52px;
            height: 52px;
            border-radius: 18px;
            background: var(--pink-soft);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .form-control-pink {
            border: 2px solid var(--pink-border);
            border-radius: 14px;
        }
        .form-control-pink:focus {
            border-color: var(--pink-primary);
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 157, 0.25);
        }

        .table-pink thead {
            background-color: #ffe3ec;
            color: var(--pink-dark);
        }
    </style>
</head>
<body>

<!-- Dekorasi Lucu Background -->
<div class="floating-deco" style="top: 12%; left: 3%;">🌸</div>
<div class="floating-deco" style="top: 28%; right: 4%; animation-delay: 1s;">🎀</div>
<div class="floating-deco" style="bottom: 18%; left: 5%; animation-delay: 2s;">✨</div>
<div class="floating-deco" style="bottom: 10%; right: 6%; animation-delay: 1.5s;">💖</div>

<!-- Navbar -->
<nav class="navbar navbar-pink shadow-sm mb-4 py-3">
    <div class="container">
        <span class="navbar-brand text-white fw-bold mb-0 fs-4">
            🎀 PinkyPolar Dashboard
        </span>
        <span class="badge bg-white text-danger rounded-pill px-3 py-2 fw-bold shadow-sm">
            🌸 J0404251032 - Mega Amalia
        </span>
    </div>
</nav>

<div class="container pb-5">
    <!-- Panel Kontrol Interaktif -->
    <div class="cute-card p-3 mb-4">
        <div class="row g-3 align-items-center justify-content-between">
            <!-- Pilih Dataset -->
            <div class="col-lg-auto d-flex flex-wrap align-items-center gap-2">
                <span class="fw-bold me-1">🍓 Kategori:</span>
                <button type="button" class="btn btn-pink btn-sm px-3 btn-dataset active" data-key="mood">Daily Mood</button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3 btn-dataset" data-key="belajar">Produktivitas</button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3 btn-dataset" data-key="wishlist">Budgeting</button>
            </div>

            <!-- Pilih Palet Warna -->
            <div class="col-lg-auto d-flex flex-wrap align-items-center gap-2">
                <span class="fw-bold me-1">🎨 Warna:</span>
                <button type="button" class="btn btn-outline-pink btn-sm px-3 btn-palette active" data-palette="strawberry">Strawberry</button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3 btn-palette" data-palette="cotton">Cotton Candy</button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3 btn-palette" data-palette="berry">Berry Pop</button>
            </div>

            <!-- Tombol Aksi Lucu -->
            <div class="col-lg-auto d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-outline-pink btn-sm px-3" id="btnSpin" title="Putar Grafik">
                    🎡 Putar
                </button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3" id="btnLegend" title="Ubah Posisi Keterangan">
                    📍 Posisi Label
                </button>
                <button type="button" class="btn btn-outline-pink btn-sm px-3" id="btnReset">
                    🔄 Reset
                </button>
                <button type="button" class="btn btn-pink btn-sm px-3" id="btnDownload">
                    📸 Simpan PNG
                </button>
            </div>
        </div>
    </div>

    <!-- 3 Kartu Statistik Lucu -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="cute-card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="kpi-bubble">👑</div>
                    <div>
                        <small class="text-muted fw-semibold d-block">Paling Tinggi</small>
                        <h5 class="fw-bold mb-0 text-danger" id="kpiMax">-</h5>
                        <small class="fw-bold" style="color: #d63384;" id="kpiMaxLabel">-</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cute-card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="kpi-bubble">🌷</div>
                    <div>
                        <small class="text-muted fw-semibold d-block">Rata-Rata Skor</small>
                        <h5 class="fw-bold mb-0 text-danger" id="kpiAvg">-</h5>
                        <small class="text-muted fw-semibold" id="kpiTotalLabel">Dari 5 item</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="cute-card p-3 h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="kpi-bubble">🧸</div>
                    <div>
                        <small class="text-muted fw-semibold d-block">Perlu Ditingkatkan</small>
                        <h5 class="fw-bold mb-0 text-danger" id="kpiMin">-</h5>
                        <small class="fw-bold" style="color: #ff6b9d;" id="kpiMinLabel">-</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="row g-4">
        <!-- Polar Chart Card -->
        <div class="col-lg-7">
            <div class="cute-card h-100">
                <div class="card-header card-header-pink py-3 px-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0" id="chartTitle">✨ Daily Mood & Self-Care Tracker</h6>
                    <span class="badge rounded-pill" style="background-color: #ffccd5; color: #a4133c;">Polar Area</span>
                </div>
                <div class="card-body d-flex flex-column align-items-center justify-content-center p-4">
                    <div style="width: 100%; max-width: 460px;">
                        <canvas id="polarChart"></canvas>
                    </div>
                    <small class="text-muted mt-3">💡 Tip: Klik nama label di bawah grafik untuk menyembunyikan/menampilkan bagian!</small>
                </div>
            </div>
        </div>

        <!-- Panel Tambah & Edit Data Interaktif -->
        <div class="col-lg-5">
            <!-- Form Tambah Item -->
            <div class="cute-card mb-4">
                <div class="card-header card-header-pink py-3 px-4">
                    <h6 class="fw-bold mb-0">➕ Tambah Sektor Baru</h6>
                </div>
                <div class="card-body p-3">
                    <form id="formAddData" class="row g-2">
                        <div class="col-7">
                            <input type="text" id="inputLabel" class="form-control form-control-sm form-control-pink" placeholder="Contoh: Baca Novel 📖" required>
                        </div>
                        <div class="col-3">
                            <input type="number" id="inputValue" class="form-control form-control-sm form-control-pink" placeholder="Nilai" min="1" required>
                        </div>
                        <div class="col-2 d-grid">
                            <button type="submit" class="btn btn-pink btn-sm">Add</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabel Interaktif (+ / - Nilai Langsung) -->
            <div class="cute-card">
                <div class="card-header card-header-pink py-3 px-4 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">📋 Rincian & Edit Cepat</h6>
                    <span class="badge bg-white text-danger border border-danger-subtle rounded-pill">Klik +/-</span>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 table-pink">
                            <thead>
                                <tr>
                                    <th class="ps-3">Item</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-end">Porsi</th>
                                    <th class="text-center pe-3">Hapus</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const rawDatasets = @json($datasets);
    let currentKey = 'mood';
    let activeData = JSON.parse(JSON.stringify(rawDatasets[currentKey]));

    const palettes = {
        strawberry: [
            'rgba(255, 117, 143, 0.78)',
            'rgba(255, 143, 163, 0.78)',
            'rgba(255, 179, 193, 0.78)',
            'rgba(255, 77, 109, 0.78)',
            'rgba(201, 24, 74, 0.72)',
            'rgba(255, 204, 213, 0.85)',
            'rgba(247, 37, 133, 0.72)'
        ],
        cotton: [
            'rgba(255, 153, 200, 0.78)',
            'rgba(252, 246, 189, 0.85)',
            'rgba(208, 244, 222, 0.85)',
            'rgba(169, 222, 249, 0.82)',
            'rgba(228, 193, 249, 0.82)',
            'rgba(255, 181, 167, 0.82)'
        ],
        berry: [
            'rgba(247, 37, 133, 0.75)',
            'rgba(181, 23, 158, 0.75)',
            'rgba(114, 9, 183, 0.72)',
            'rgba(255, 112, 166, 0.78)',
            'rgba(255, 151, 112, 0.78)',
            'rgba(233, 30, 99, 0.75)'
        ]
    };

    let currentPalette = 'strawberry';
    const legendPositions = ['bottom', 'right', 'top'];
    let legendIdx = 0;

    // Set font default Chart.js
    Chart.defaults.font.family = "'Quicksand', sans-serif";
    Chart.defaults.font.weight = '600';

    const ctx = document.getElementById('polarChart').getContext('2d');
    const polarChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: activeData.labels,
            datasets: [{
                label: activeData.satuan,
                data: activeData.data,
                backgroundColor: palettes[currentPalette],
                borderColor: '#ffffff',
                borderWidth: 2.5
            }]
        },
        options: {
            responsive: true,
            animation: {
                animateRotate: true,
                animateScale: true
            },
            scales: {
                r: {
                    beginAtZero: true,
                    grid: { color: 'rgba(255, 107, 157, 0.18)' },
                    angleLines: { color: 'rgba(255, 107, 157, 0.18)' },
                    ticks: {
                        backdropColor: 'transparent',
                        color: '#a4133c'
                    }
                }
            },
            plugins: {
                legend: {
                    position: legendPositions[legendIdx],
                    labels: {
                        usePointStyle: true,
                        pointStyle: 'circle',
                        padding: 16,
                        color: '#592e42'
                    }
                },
                tooltip: {
                    backgroundColor: '#ff4d6d',
                    titleFont: { size: 14 },
                    bodyFont: { size: 13 },
                    padding: 10,
                    cornerRadius: 12,
                    callbacks: {
                        label: function(context) {
                            return ` ${context.label}: ${context.raw} ${activeData.satuan}`;
                        }
                    }
                }
            }
        }
    });

    function renderDashboard() {
        const labels = activeData.labels;
        const values = activeData.data;
        const satuan = activeData.satuan;

        document.getElementById('chartTitle').textContent = activeData.judul;
        polarChart.data.labels = labels;
        polarChart.data.datasets[0].data = values;
        polarChart.data.datasets[0].label = satuan;
        polarChart.data.datasets[0].backgroundColor = palettes[currentPalette];
        polarChart.update();

        if (values.length > 0) {
            const maxVal = Math.max(...values);
            const minVal = Math.min(...values);
            const sumVal = values.reduce((a, b) => a + b, 0);
            const avgVal = (sumVal / values.length).toFixed(1);

            document.getElementById('kpiMax').textContent = `${maxVal} ${satuan}`;
            document.getElementById('kpiMaxLabel').textContent = labels[values.indexOf(maxVal)];

            document.getElementById('kpiMin').textContent = `${minVal} ${satuan}`;
            document.getElementById('kpiMinLabel').textContent = labels[values.indexOf(minVal)];

            document.getElementById('kpiAvg').textContent = `${avgVal} ${satuan}`;
            document.getElementById('kpiTotalLabel').textContent = `Dari ${values.length} item aktif`;

            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';
            labels.forEach((label, idx) => {
                const pct = ((values[idx] / sumVal) * 100).toFixed(1);
                tbody.innerHTML += `
                    <tr>
                        <td class="ps-3 fw-bold" style="font-size: 0.9rem;">${label}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group">
                                <button class="btn btn-outline-pink py-0 px-2" onclick="ubahNilai(${idx}, -5)">-</button>
                                <span class="px-2 fw-bold d-flex align-items-center bg-light">${values[idx]}</span>
                                <button class="btn btn-outline-pink py-0 px-2" onclick="ubahNilai(${idx}, 5)">+</button>
                            </div>
                        </td>
                        <td class="text-end">
                            <span class="badge rounded-pill" style="background-color: #ffe3ec; color: #c9184a;">${pct}%</span>
                        </td>
                        <td class="text-center pe-3">
                            <button class="btn btn-sm text-danger p-0" onclick="hapusSektor(${idx})" title="Hapus">
                                <i class="bi bi-x-circle-fill fs-5"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });
        }
    }

    function ubahNilai(index, delta) {
        const nilaiBaru = activeData.data[index] + delta;
        if (nilaiBaru >= 1) {
            activeData.data[index] = nilaiBaru;
            renderDashboard();
        }
    }

    function hapusSektor(index) {
        if (activeData.labels.length <= 2) {
            alert('Minimal harus ada 2 item di grafik ya 🌸');
            return;
        }
        activeData.labels.splice(index, 1);
        activeData.data.splice(index, 1);
        renderDashboard();
    }

    // Switch Dataset
    document.querySelectorAll('.btn-dataset').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.btn-dataset').forEach(b => {
                b.classList.remove('btn-pink', 'active');
                b.classList.add('btn-outline-pink');
            });
            this.classList.remove('btn-outline-pink');
            this.classList.add('btn-pink', 'active');

            currentKey = this.dataset.key;
            activeData = JSON.parse(JSON.stringify(rawDatasets[currentKey]));
            renderDashboard();
        });
    });

    // Switch Palet Warna
    document.querySelectorAll('.btn-palette').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.btn-palette').forEach(b => {
                b.classList.remove('btn-pink', 'active');
                b.classList.add('btn-outline-pink');
            });
            this.classList.remove('btn-outline-pink');
            this.classList.add('btn-pink', 'active');

            currentPalette = this.dataset.palette;
            renderDashboard();
        });
    });

    // Efek Putar Chart
    document.getElementById('btnSpin').addEventListener('click', function() {
        polarChart.options.rotation = (polarChart.options.rotation || 0) + 90;
        polarChart.update();
    });

    // Ubah Posisi Legend
    document.getElementById('btnLegend').addEventListener('click', function() {
        legendIdx = (legendIdx + 1) % legendPositions.length;
        polarChart.options.plugins.legend.position = legendPositions[legendIdx];
        polarChart.update();
    });

    // Tambah Sektor Baru
    document.getElementById('formAddData').addEventListener('submit', function(e) {
        e.preventDefault();
        const label = document.getElementById('inputLabel').value.trim();
        const val = parseFloat(document.getElementById('inputValue').value);
        if (label && !isNaN(val)) {
            activeData.labels.push(label);
            activeData.data.push(val);
            this.reset();
            renderDashboard();
        }
    });

    // Reset Data
    document.getElementById('btnReset').addEventListener('click', function() {
        activeData = JSON.parse(JSON.stringify(rawDatasets[currentKey]));
        renderDashboard();
    });

    // Simpan PNG
    document.getElementById('btnDownload').addEventListener('click', function() {
        const link = document.createElement('a');
        link.download = `pinky-polar-chart-${currentKey}.png`;
        link.href = document.getElementById('polarChart').toDataURL('image/png');
        link.click();
    });

    renderDashboard();
</script>

</body>
</html>