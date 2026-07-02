# Aplikasi QR Inventaris Perpustakaan SMA Kharisma Nurul Amal

## Deskripsi
Aplikasi web untuk mengelola inventaris buku dan barang perpustakaan sekolah dengan sistem QR Code yang terintegrasi.

## Fitur Utama
- ✅ Manajemen Data Buku dan Barang
- ✅ Generate QR Code Otomatis
- ✅ Scan QR Code untuk Verifikasi
- ✅ Laporan Inventaris
- ✅ Manajemen User (Admin & Operator)
- ✅ Dashboard Real-time
- ✅ Export Data (Excel, PDF)

## Tech Stack
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla & jQuery)
- **Backend**: PHP 7.4+
- **Database**: MySQL 8.0+
- **QR Code**: QR Code Library (JavaScript & PHP)
- **Server**: Apache 2.4+

## Instalasi

### Prerequisites
- PHP 7.4 atau lebih baru
- MySQL 8.0 atau lebih baru
- Apache Web Server
- Composer (opsional)

### Langkah Instalasi

1. Clone repository:
```bash
git clone https://github.com/shutterkharisma-bit/perpustakaansmakna.git
cd perpustakaansmakna
```

2. Copy `.env.example` ke `.env`:
```bash
cp .env.example .env
```

3. Konfigurasi database di file `.env`

4. Import database:
```bash
mysql -u username -p database_name < database/schema.sql
```

5. Atur permissions:
```bash
chmod -R 755 .
chmod -R 777 uploads/
chmod -R 777 logs/
```

6. Akses aplikasi: `http://localhost/perpustakaansmakna`

## Default Login
- **Username**: admin
- **Password**: admin123

## Struktur Direktori
```
perpustakaansmakna/
├── config/              # Konfigurasi aplikasi
├── database/            # Schema & migration
├── public/              # Assets (CSS, JS, images)
├── uploads/             # File upload
├── src/                 # Source code
│   ├── controllers/     # Controller logic
│   ├── models/          # Database models
│   ├── views/           # Template files
│   └── utils/           # Helper functions
├── logs/                # Application logs
└── index.php            # Entry point
```

## Penggunaan

### Untuk Admin
1. Login ke dashboard
2. Kelola user dan permissions
3. Lihat laporan komprehensif
4. Export data

### Untuk Operator
1. Tambah data buku/barang
2. Generate QR Code
3. Scan untuk verifikasi
4. Update status inventaris

## Support
Untuk bantuan, silakan buka issue di GitHub repository ini.

## License
MIT License - 2024
