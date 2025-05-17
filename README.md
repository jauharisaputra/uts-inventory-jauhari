# uts-inventory-jauhari
# UTS - Sistem Informasi Inventory Barang

Proyek ini merupakan tugas **UTS Pemrograman Web II**  
oleh **Jauhari Saputra (NIM: 230401011004)**  
Universitas Siber Asia

---

## 🔧 Deskripsi Proyek

Aplikasi **Sistem Informasi Inventory Barang** berbasis web ini dibuat menggunakan **PHP** dan **MySQL**.  
Digunakan untuk mengelola data barang seperti menambah, mengedit, menghapus, dan memantau stok.

---

## ⚙️ Teknologi yang Digunakan

- PHP 7+ (Native)
- MySQL (phpMyAdmin / Workbench)
- HTML, CSS (Custom CSS)
- Git & GitHub (version control)

---

## 🗃️ Struktur Database

**Nama Database:** `db_inventory`  
**Tabel:** `tb_inventory`

| Field           | Tipe Data      | Keterangan                   |
|----------------|----------------|------------------------------|
| id_barang       | INT (AI)       | Primary key                  |
| kode_barang     | VARCHAR(20)    | Kode unik barang             |
| nama_barang     | VARCHAR(50)    | Nama barang                  |
| jumlah_barang   | INT            | Jumlah stok tersedia         |
| satuan_barang   | VARCHAR(20)    | pcs / kg / liter / meter     |
| harga_beli      | DOUBLE(20,2)   | Harga per item               |
| status_barang   | BOOLEAN        | 1 = Available, 0 = Not Avail |

---

## 🔑 Akun Login

- **Username:** `admin`  
- **Password:** `admin123`

---

## ✅ Fitur Aplikasi

- Login & logout sederhana
- Dashboard utama
- Tambah, edit, hapus barang
- Fitur pemakaian barang (stok berkurang)
- Fitur tambah stok (stok bertambah)
- Status otomatis update jika stok 0
- Tampilan rapi dengan custom CSS

---

## 📷 Screenshots

> (Tambahkan screenshot jika mau)

---

## 🚀 Cara Menjalankan

1. Clone repo:
   ```bash
   git clone https://github.com/jauharisaputra/uts-inventory-jauhari.git
