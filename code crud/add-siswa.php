<?php
include 'config.php';
if (isset($_POST['input'])) {
    $nama_file = $_FILES['foto_siswa']['name'];
    $tmp_file = $_FILES['foto_siswa']['tmp_name'];
    $path = "foto-siswa/" . $nama_file; // Alamat Penyimapan foto siswa

    if (move_uploaded_file($tmp_file,$path )) {
        $conn = mysqli_query($connect, "INSERT INTO data_siswa 
            (nama_siswa, nis, nisn, jenis_kelamin, agama, tgl_lahir, tmp_lahir, alamat_tinggal, nama_panggilan, kewarganegaraan_siswa, jumlah_saudara, anak_ke, anak_yatim, tinggal_dengan, transportasi_kesekolah, bb, tb, gol_darah, penyakit_diderita, kelas, jurusan, jarak_kesekolah, foto_siswa, tanggal_diterima, asal_smp, tgl_ijazah_smp, no_ijazah_smp, tahun_skhun, no_skhun, tanggal_diterima_siswa_pindahan, asal_sma, alasan_pindah, nama_wali, agama_wali, tempat_lahir, tanggal_lahir, kewarganegaraan, alamat_wali, nomor_telepon, pekerjaan_wali, penghasilan_wali, hub_dengan_siswa, nama_ayah, pekerjaan_ayah, pendidikan_ayah, alamat_ayah, tanggal_lahir_ayah, kewarganegaraan_ayah, nomor_telepon_ayah, penghasilan_ayah, nama_ibu, pekerjaan_ibu, pendidikan_ibu, alamat_ibu, tanggal_lahir_ibu, kewarganegaraan_ibu, nomor_telepon_ibu, penghasilan_ibu)
            VALUES ('$_POST[nama_siswa]',
                    '$_POST[nis]',
                    '$_POST[nisn]',
                    '$_POST[jenis_kelamin]',
                    '$_POST[agama]',
                    '$_POST[tgl_lahir]',
                    '$_POST[tmp_lahir]',
                    '$_POST[alamat_tinggal]',
                    '$_POST[nama_panggilan]',
                    '$_POST[kewarganegaraan_siswa]',
                    '$_POST[jumlah_saudara]',
                    '$_POST[anak_ke]',
                    '$_POST[anak_yatim]',
                    '$_POST[tinggal_dengan]',
                    '$_POST[transportasi_kesekolah]',
                    '$_POST[bb]',
                    '$_POST[tb]',
                    '$_POST[gol_darah]',
                    '$_POST[penyakit_diderita]',
                    '$_POST[kelas]',
                    '$_POST[jurusan]',
                    '$_POST[jarak_kesekolah]',
                    '".$nama_file."',
                    '$_POST[tanggal_diterima]',
                    '$_POST[asal_smp]',
                    '$_POST[tgl_ijazah_smp]',
                    '$_POST[no_ijazah_smp]',
                    '$_POST[tahun_skhun]',
                    '$_POST[no_skhun]',
                    '$_POST[tanggal_diterima_siswa_pindahan]',
                    '$_POST[asal_sma]',
                    '$_POST[alasan_pindah]',
                    '$_POST[nama_wali]',
                    '$_POST[agama_wali]',
                    '$_POST[tempat_lahir]',
                    '$_POST[tanggal_lahir]',
                    '$_POST[kewarganegaraan]',
                    '$_POST[alamat_wali]',
                    '$_POST[nomor_telepon]',
                    '$_POST[pekerjaan_wali]',
                    '$_POST[penghasilan_wali]',
                    '$_POST[hub_dengan_siswa]',
                    '$_POST[nama_ayah]',
                    '$_POST[pekerjaan_ayah]',
                    '$_POST[pendidikan_ayah]',
                    '$_POST[alamat_ayah]',
                    '$_POST[tanggal_lahir_ayah]',
                    '$_POST[kewarganegaraan_ayah]',
                    '$_POST[nomor_telepon_ayah]',
                    '$_POST[penghasilan_ayah]',
                    '$_POST[nama_ibu]',
                    '$_POST[pekerjaan_ibu]',
                    '$_POST[pendidikan_ibu]',
                    '$_POST[alamat_ibu]',
                    '$_POST[tanggal_lahir_ibu]',
                    '$_POST[kewarganegaraan_ibu]',
                    '$_POST[nomor_telepon_ibu]',
                    '$_POST[penghasilan_ibu]'
                     )");
        if ($conn) {
?>
            <script>
                swal({
                    title: "Input Siswa Berhasil",
                    text: "",
                    type: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "input-siswa";
                    }
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                swal({
                    title: "Input Siswa Gagal",
                    text: "",
                    type: "error"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "input-siswa";
                    }
                });
            </script>
<?php }
    }
} ?>