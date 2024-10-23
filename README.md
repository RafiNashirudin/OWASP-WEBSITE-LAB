### Struktur Database

1. **Database**: `company_profile`
2. **Tabel**:
   - `users`
   - `service_requests`

### 1. **Buat Database**
```sql
CREATE DATABASE company_profile;
USE company_profile;
```

### 2. **Tabel Users**
Tabel ini akan menyimpan informasi pengguna (admin) yang dapat login ke halaman admin.
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Contoh untuk memasukkan data admin
INSERT INTO users (username, password) VALUES ('admin', 'admin123');
```

### 3. **Tabel Service Requests**
Tabel ini akan menyimpan permintaan layanan yang dibuat oleh pengguna.
```sql
CREATE TABLE service_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service VARCHAR(100) NOT NULL,
    details TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Langkah-langkah Pembuatan Database

1. **Login ke MySQL**:
   Gunakan command line atau GUI seperti phpMyAdmin untuk login ke MySQL.

2. **Jalankan Skrip SQL**:
   Salin dan tempel skrip di atas ke dalam jendela SQL untuk membuat database dan tabel.

3. **Verifikasi**:
   Setelah menjalankan skrip, Anda dapat memverifikasi tabel dengan menggunakan perintah berikut:
   ```sql
   SHOW TABLES;
   ```

4. **Cek Struktur Tabel**:
   Untuk memeriksa struktur tabel, gunakan perintah:
   ```sql
   DESCRIBE users;
   DESCRIBE service_requests;
   ```

### Keterangan Tabel

- **Tabel `users`**:
  - `id`: ID unik untuk setiap pengguna.
  - `username`: Nama pengguna untuk login.
  - `password`: Password pengguna (disarankan untuk menggunakan hashing dalam implementasi yang aman).

- **Tabel `service_requests`**:
  - `id`: ID unik untuk setiap permintaan layanan.
  - `service`: Nama layanan yang diminta.
  - `details`: Rincian tambahan tentang permintaan.
  - `created_at`: Waktu saat permintaan dibuat.
