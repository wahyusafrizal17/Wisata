# SMJ Rent - Company Profile & Booking Travel

Website company profile dan booking travel untuk **SMJ Rent** (PT. Sejahtera Mitra Jaya) - rental mobil premium dan paket wisata.

## Tech Stack

- **Laravel 12**
- **TailwindCSS**
- **MySQL** / SQLite (default)
- **Blade Template**
- **AlpineJS**
- **Laravel Migration & Seeder**

## Fitur

### Frontend
- Landing page dengan Hero, Tentang Kami, Layanan, Keunggulan
- Preview Paket Wisata & Armada Mobil
- Testimoni slider
- Halaman Pricelist (Armada)
- Halaman Paket Wisata (Lokal & Internasional)
- Detail Paket Wisata
- Drop Off Bandara
- Galeri dengan masonry grid & lightbox
- Halaman Kontak
- WhatsApp Booking System
- SEO (meta, Open Graph, Sitemap)

### Admin Dashboard
- CRUD Mobil
- CRUD Paket Wisata
- CRUD Galeri
- CRUD Banner
- CRUD Testimoni

## Instalasi

```bash
# Clone & masuk folder
cd Wisata

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Database (SQLite - default)
# Pastikan file database/database.sqlite ada
touch database/database.sqlite

# Atau MySQL - edit .env:
# DB_CONNECTION=mysql
# DB_DATABASE=wisata
# DB_USERNAME=root
# DB_PASSWORD=

# Migration & Seeder
php artisan migrate --seed

# Build assets
npm run build

# Jalankan server
php artisan serve
```

## Login Admin

- **URL:** `/login`
- **Email:** admin@smjrent.com
- **Password:** password

## Konfigurasi

Edit `config/smj.php` atau variabel di `.env`:

```
WHATSAPP_NUMBER=6281234567890
CONTACT_EMAIL=info@smjrent.com
CONTACT_ADDRESS=Jakarta, Indonesia
INSTAGRAM_URL=https://instagram.com/smjrent
LINKTREE_URL=https://linktr.ee/smjrent
GOOGLE_MAPS_EMBED=<iframe ...></iframe>
```

## Struktur

```
app/
├── Http/Controllers/
│   ├── Admin/          # Admin CRUD controllers
│   ├── HomeController
│   ├── CarController
│   ├── TourPackageController
│   └── ...
├── Models/
├── Helpers/
resources/views/
├── layouts/
│   ├── frontend.blade.php
│   └── admin.blade.php
├── components/frontend/
├── home.blade.php
├── cars/
├── tour-packages/
└── admin/
```

## Development

```bash
# Run dev server dengan hot reload
npm run dev

# Di terminal lain
php artisan serve
```
