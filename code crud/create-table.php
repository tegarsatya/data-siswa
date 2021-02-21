<?php
include 'config-database.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* =============== Buat Table Data Siswa ================== */
$sql = "CREATE TABLE data_siswa (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_siswa` varchar(150) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tgl_lahir` text NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `kewarganegaraan_siswa` varchar(50) NOT NULL,
  `jumlah_saudara` varchar(100) NOT NULL,
  `anak_ke` int(42) NOT NULL,
  `anak_yatim` varchar(30) NOT NULL,
  `tinggal_dengan` varchar(50) NOT NULL,
  `transportasi_kesekolah` varchar(60) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(60) NOT NULL,
  `gol_darah` varchar(40) NOT NULL,
  `penyakit_diderita` varchar(90) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jarak_kesekolah` varchar(40) NOT NULL,
  `foto_siswa` varchar(100) NOT NULL,
  `tanggal_diterima` varchar(64) NOT NULL,
  `asal_smp` varchar(42) NOT NULL,
  `tgl_ijazah_smp` varchar(12) NOT NULL,
  `no_ijazah_smp` int(32) NOT NULL,
  `tahun_skhun` varchar(23) NOT NULL,
  `no_skhun` int(32) NOT NULL,
  `tanggal_diterima_siswa_pindahan` varchar(32) NOT NULL,
  `asal_sma` varchar(42) NOT NULL,
  `alasan_pindah` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `agama_wali` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(64) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `alamat_wali` text NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `hub_dengan_siswa` varchar(50) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `tanggal_lahir_ayah` varchar(31) NOT NULL,
  `kewarganegaraan_ayah` varchar(31) NOT NULL,
  `nomor_telepon_ayah` int(31) NOT NULL,
  `penghasilan_ayah` int(24) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `tanggal_lahir_ibu` varchar(45) NOT NULL,
  `kewarganegaraan_ibu` varchar(23) NOT NULL,
  `penghasilan_ibu` int(32) NOT NULL,
  `nomor_telepon_ibu` int(31) NOT NULL
  )";

if ($conn->query($sql) === TRUE) {
  // Jika Berhasil Lanjut
} else {
  // Table data siswa sudah ada ..
}
/* ================= Akhir Table Data Sisiwa ==================== */

// wali
$sql = "CREATE TABLE data_wali (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_wali` varchar(100) NOT NULL,
  `agama_wali` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(64) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `alamat_wali` text NOT NULL,
  `nomor_telepon` int(15) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `hub_dengan_siswa` varchar(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  // Jika Berhasil Lanjut
} else {
 
}

// akhir wali

// ayah
$sql = "CREATE TABLE data_ayah (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `tanggal_lahir_ayah` varchar(31) NOT NULL,
  `kewarganegaraan_ayah` varchar(31) NOT NULL,
  `nomor_telepon_ayah` int(31) NOT NULL,
  `penghasilan_ayah` int(24) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  // Jika Berhasil Lanjut
} else {
}

// akhir ayah

// ibu
$sql = "CREATE TABLE data_ibu (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
   `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `tanggal_lahir_ibu` varchar(45) NOT NULL,
  `kewarganegaraan_ibu` varchar(23) NOT NULL,
  `penghasilan_ibu` int(32) NOT NULL,
  `nomor_telepon_ibu` int(31) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  // Jika Berhasil Lanjut
} else {
}

// akhir ibu

/*============ Buat Table Profil Sekolah ======================== */
$sql1 = "CREATE TABLE profil_sekolah (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nis_kepsek` varchar(100) NOT NULL,
  `wakil_kepsek` varchar(100) NOT NULL,
  `nis_wakil` varchar(100) NOT NULL,
  `logo_sekolah` varchar(100) NOT NULL
  )";

if ($conn->query($sql1) === TRUE) {
  // Buat profil berhasil lanjut ..
  
} else {
  // table profil sudah ada ..
}

/* Isi table profil sekolah agar tidak terjadi error pas pertama instal di pc baru */
$sql1 = "INSERT INTO `profil_sekolah` (`no_id`, `nama_sekolah`, `alamat_sekolah`, `no_tlp`, `kepsek`, `nis_kepsek`, `wakil_kepsek`, `nis_wakil`, `logo_sekolah`) VALUES
('', 'SMK Uji Coba', 'Uji Coba', '0263-264340 / 0263-271787', 'Uji Coba', '20203729', 'Uji Coba', '20203729', 'adi.png')";

if ($conn->query($sql1) === TRUE) {
	// Insert username berhasil
} else {
  // Jangan lakukan insert kembali karna sudah ada
}
/*============ Akhir Table Profil Sekolah ======================== */

/* =============== Buat table user login ========================== */
$sql2 = "CREATE TABLE user_login (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
  )";

if ($conn->query($sql2) === TRUE) {
  // Table user berhasil di buat
  
} else {
  // Table user sudah ada ..
}

$pss = "admin"; // password default
$pss2 = md5($pss); // buat pasword jadi karakter sembunyi

$sql2 = "INSERT INTO user_login (no_id, username, password)
VALUES ('', 'admin', '$pss2')";
if ($conn->query($sql2) === TRUE) {
  // Insert username berhasil
  echo '<script>window.location="../index"</script>'; /* Jika Semua Berhasil Maka Arahkan Ke halaman Index */
} else {
  // Jangan lakukan insert kembali karna sudah ada
}
/* =============== Akhir table user login ========================== */

$conn->close(); /* Tutup query koneksi */
?>