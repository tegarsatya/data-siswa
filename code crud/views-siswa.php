<?php
include 'config.php';
if (isset($_GET['id'])) {
    $sql = mysqli_query($connect, "SELECT * FROM data_siswa WHERE no_id = '$_GET[id]' ");
    $data = mysqli_fetch_array($sql);
    if ($data) {
        // Data Siswa
        $no_id = $data['no_id'];
        $nama_siswa = $data['nama_siswa'];
        $nis = $data['nis'];
        $nisn = $data['nisn'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $tgl_lahir = $data['tgl_lahir'];
        $tmp_lahir = $data['tmp_lahir'];
        $alamat_tinggal = $data['alamat_tinggal'];
        $kelas = $data['kelas'];
        $jurusan = $data['jurusan'];
        $foto_siswa = $data['foto_siswa'];
        // Data Ayah
        $nama_ayah = $data['nama_ayah'];
        $pekerjaan_ayah = $data['pekerjaan_ayah'];
        $pendidikan_ayah = $data['pendidikan_ayah'];
        $alamat_ayah = $data['alamat_ayah'];
        // Data Ibu
        $nama_ibu = $data['nama_ibu'];
        $pekerjaan_ibu = $data['pekerjaan_ibu'];
        $pendidikan_ibu = $data['pendidikan_ibu'];
        $alamat_ibu = $data['alamat_ibu'];
        $nama_wali = $data['nama_wali'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $kewarganegaraan = $data['kewarganegaraan'];
        $alamat_wali = $data['alamat_wali'];
        $nomor_telepon = $data['nomor_telepon'];
        $pekerjaan_wali = $data['pekerjaan_wali'];
        $penghasilan_wali = $data['penghasilan_wali'];
        $hub_dengan_siswa = $data['hub_dengan_siswa'];
        $nama_panggilan = $data['nama_panggilan'];
        $kewarganegaraan_siswa = $data['kewarganegaraan_siswa'];
        $jumlah_saudara = $data['jumlah_saudara'];
        $anak_ke = $data['anak_ke'];
        $anak_yatim = $data['anak_yatim'];
        $jarak_kesekolah = $data['jarak_kesekolah'];
        $tinggal_dengan = $data['tinggal_dengan'];
        $transportasi_kesekolah = $data['transportasi_kesekolah'];
        $tb = $data['tb'];
        $bb = $data['bb'];
        $gol_darah = $data['gol_darah'];
        $penyakit_diderita = $data['penyakit_diderita'];
        $tanggal_diterima = $data['tanggal_diterima'];
        $asal_smp = $data['asal_smp'];
        $tgl_ijazah_smp = $data['tgl_ijazah_smp'];
        $no_ijazah_smp = $data['no_ijazah_smp'];
        $tahun_skhun = $data['tahun_skhun'];
        $no_skhun = $data['no_skhun'];
        $tanggal_diterima_siswa_pindahan = $data['tanggal_diterima_siswa_pindahan'];
        $asal_sma = $data['asal_sma'];
        $alasan_pindah = $data['alasan_pindah'];
        $tanggal_lahir_ayah = $data['tanggal_lahir_ayah'];
        $tanggal_lahir_ibu = $data['tanggal_lahir_ibu'];
        $kewarganegaraan_ayah = $data['kewarganegaraan_ayah'];
        $kewarganegaraan_ibu = $data['kewarganegaraan_ibu'];
        $nomor_telepon_ayah = $data['nomor_telepon_ayah'];
        $penghasilan_ayah = $data['penghasilan_ayah'];
        $penghasilan_ibu = $data['penghasilan_ibu'];
        $nomor_telepon_ibu = $data['nomor_telepon_ibu'];
    }
}
if (isset($_POST['update'])) {
    if (empty($_POST['nama_siswa'])) {
        echo "<script>alert('Anda Belom Melakukan Perubahan...');document.location='views-data';</script>";
    } else {
        $nama_file = $_FILES['foto_siswa']['name'];
        $tmp_file = $_FILES['foto_siswa']['tmp_name'];
        $path = "foto-siswa/" . $nama_file;
        if ($nama_file == '') {
            // Jika Gambar tidak di ganti 
            // Tetap lakukan perubahan tanpa ada gambar...
            $upedit = mysqli_query($connect, "UPDATE data_siswa SET 
                                nama_siswa = '$_POST[nama_siswa]',
                              nis = '$_POST[nis]',
                              nisn = '$_POST[nisn]',
                              jenis_kelamin = '$_POST[jenis_kelamin]',
                              agama = '$_POST[agama]',
                              tgl_lahir = '$_POST[tgl_lahir]',
                              tmp_lahir = '$_POST[tmp_lahir]',
                              alamat_tinggal = '$_POST[alamat_tinggal]',
                              nama_panggilan = '$_POST[nama_panggilan]',
                              kewarganegaraan_siswa = '$_POST[kewarganegaraan_siswa]',
                              jumlah_saudara = '$_POST[jumlah_saudara]',
                              anak_ke = '$_POST[anak_ke]',
                              anak_yatim = '$_POST[anak_yatim]',
                              tinggal_dengan = '$_POST[tinggal_dengan]',
                              transportasi_kesekolah = '$_POST[transportasi_kesekolah]',
                             bb = '$_POST[bb]',
                            tb = '$_POST[tb]',
                            gol_darah = '$_POST[gol_darah]',
                            penyakit_diderita = '$_POST[penyakit_diderita]',
                             kelas = '$_POST[kelas]',
                            jurusan = '$_POST[jurusan]',
                            jarak_kesekolah = '$_POST[jarak_kesekolah]',
                              tanggal_diterima = '$_POST[tanggal_diterima]',
                                asal_smp = '$_POST[asal_smp]',
                                tgl_ijazah_smp = '$_POST[tgl_ijazah_smp]',
                                no_ijazah_smp = '$_POST[no_ijazah_smp]',
                                tahun_skhun = '$_POST[tahun_skhun]',
                                no_skhun = '$_POST[no_skhun]',
                                tanggal_diterima_siswa_pindahan = '$_POST[tanggal_diterima_siswa_pindahan]',
                                asal_sma = '$_POST[asal_sma]',
                                alasan_pindah = '$_POST[alasan_pindah]',
                              nama_wali = '$_POST[nama_wali]',
                              agama_wali = '$_POST[agama_wali]',
                              tempat_lahir = '$_POST[tempat_lahir]',
                                tanggal_lahir = '$_POST[tanggal_lahir]',
                                kewarganegaraan = '$_POST[kewarganegaraan]',
                                alamat_wali = '$_POST[alamat_wali]',
                                nomor_telepon = '$_POST[nomor_telepon]',
                                pekerjaan_wali = '$_POST[pekerjaan_wali]',
                                penghasilan_wali = '$_POST[penghasilan_wali]',
                                hub_dengan_siswa = '$_POST[hub_dengan_siswa]',
                                nama_ayah = '$_POST[nama_ayah]',
                                pekerjaan_ayah = '$_POST[pekerjaan_ayah]',
                                pendidikan_ayah = '$_POST[pendidikan_ayah]',
                                alamat_ayah = '$_POST[alamat_ayah]',
                                tanggal_lahir_ayah = '$_POST[tanggal_lahir_ayah]',
                                kewarganegaraan_ayah = '$_POST[kewarganegaraan_ayah]',
                                nomor_telepon_ayah = '$_POST[nomor_telepon_ayah]',
                                penghasilan_ayah = '$_POST[penghasilan_ayah]',
                              penghasilan_ibu = '$_POST[penghasilan_ibu]',
                                nomor_telepon_ibu = '$_POST[nomor_telepon_ibu]',
                                nama_ibu = '$_POST[nama_ibu]',
                                pekerjaan_ibu = '$_POST[pekerjaan_ibu]',
                                pendidikan_ibu = '$_POST[pendidikan_ibu]',
                                alamat_ibu = '$_POST[alamat_ibu]',                                 
                                tanggal_lahir_ibu = '$_POST[tanggal_lahir_ibu]',
                                kewarganegaraan_ibu = '$_POST[kewarganegaraan_ibu]',
                                foto_siswa ='" . $nama_file . "' 
                                WHERE no_id = '$_GET[id]' ");
            if ($upedit) {
?>
                <script>
                    swal({
                        title: "Data siswa brhasil dirubah",
                        text: "",
                        type: "success"
                    }).then(okay => {
                        if (okay) {
                            window.location.href = "data-siswa";
                        }
                    });
                </script>
            <?php
            } else {
                //Merubah Profil Gagal
            }
        } else { // Jika Gambar dan lainya di rubah Maka Lakukan Perubahan untuk semua
            if (move_uploaded_file($tmp_file, $path)) {
                $uppdate = mysqli_query($connect, "UPDATE data_siswa SET 
                              nama_siswa = '$_POST[nama_siswa]',
                              nis = '$_POST[nis]',
                              nisn = '$_POST[nisn]',
                              jenis_kelamin = '$_POST[jenis_kelamin]',
                              agama = '$_POST[agama]',
                              tgl_lahir = '$_POST[tgl_lahir]',
                              tmp_lahir = '$_POST[tmp_lahir]',
                              alamat_tinggal = '$_POST[alamat_tinggal]',
                              nama_panggilan = '$_POST[nama_panggilan]',
                              kewarganegaraan_siswa = '$_POST[kewarganegaraan_siswa]',
                              jumlah_saudara = '$_POST[jumlah_saudara]',
                              anak_ke = '$_POST[anak_ke]',
                              anak_yatim = '$_POST[anak_yatim]',
                              tinggal_dengan = '$_POST[tinggal_dengan]',
                              transportasi_kesekolah = '$_POST[transportasi_kesekolah]',
                             bb = '$_POST[bb]',
                            tb = '$_POST[tb]',
                            gol_darah = '$_POST[gol_darah]',
                            penyakit_diderita = '$_POST[penyakit_diderita]',
                             kelas = '$_POST[kelas]',
                            jurusan = '$_POST[jurusan]',
                            jarak_kesekolah = '$_POST[jarak_kesekolah]',
                              tanggal_diterima = '$_POST[tanggal_diterima]',
                                asal_smp = '$_POST[asal_smp]',
                                tgl_ijazah_smp = '$_POST[tgl_ijazah_smp]',
                                no_ijazah_smp = '$_POST[no_ijazah_smp]',
                                tahun_skhun = '$_POST[tahun_skhun]',
                                no_skhun = '$_POST[no_skhun]',
                                tanggal_diterima_siswa_pindahan = '$_POST[tanggal_diterima_siswa_pindahan]',
                                asal_sma = '$_POST[asal_sma]',
                                alasan_pindah = '$_POST[alasan_pindah]',
                              nama_wali = '$_POST[nama_wali]',
                              agama_wali = '$_POST[agama_wali]',
                              tempat_lahir = '$_POST[tempat_lahir]',
                                tanggal_lahir = '$_POST[tanggal_lahir]',
                                kewarganegaraan = '$_POST[kewarganegaraan]',
                                alamat_wali = '$_POST[alamat_wali]',
                                nomor_telepon = '$_POST[nomor_telepon]',
                                pekerjaan_wali = '$_POST[pekerjaan_wali]',
                                penghasilan_wali = '$_POST[penghasilan_wali]',
                                hub_dengan_siswa = '$_POST[hub_dengan_siswa]',
                                nama_ayah = '$_POST[nama_ayah]',
                                pekerjaan_ayah = '$_POST[pekerjaan_ayah]',
                                pendidikan_ayah = '$_POST[pendidikan_ayah]',
                                alamat_ayah = '$_POST[alamat_ayah]',
                                tanggal_lahir_ayah = '$_POST[tanggal_lahir_ayah]',
                                kewarganegaraan_ayah = '$_POST[kewarganegaraan_ayah]',
                                nomor_telepon_ayah = '$_POST[nomor_telepon_ayah]',
                                penghasilan_ayah = '$_POST[penghasilan_ayah]',
                              penghasilan_ibu = '$_POST[penghasilan_ibu]',
                                nomor_telepon_ibu = '$_POST[nomor_telepon_ibu]',
                                nama_ibu = '$_POST[nama_ibu]',
                                pekerjaan_ibu = '$_POST[pekerjaan_ibu]',
                                pendidikan_ibu = '$_POST[pendidikan_ibu]',
                                alamat_ibu = '$_POST[alamat_ibu]',                                 
                                tanggal_lahir_ibu = '$_POST[tanggal_lahir_ibu]',
                                kewarganegaraan_ibu = '$_POST[kewarganegaraan_ibu]',
                                foto_siswa ='" . $nama_file . "' 
                                WHERE no_id = '$_GET[id]' ");
            }
            unlink("foto-siswa/" . $foto_siswa);
        }
        if ($uppdate) {
            ?>
            <script>
                swal({
                    title: "Data siswa brhasil dirubah",
                    text: "",
                    type: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "data-siswa";
                    }
                });
            </script>
<?php
        } else {
            //Merubah Profil Gagagl
        }
    }
}
?>