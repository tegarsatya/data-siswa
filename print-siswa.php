<?php
include 'code crud/logo.php';
include 'code crud/config.php';
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_GET['id'])){
    $sql = mysqli_query($connect, "SELECT * FROM data_siswa WHERE no_id = '$_GET[id]' ");
    $data = mysqli_fetch_array($sql);
    if($data) {
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

} }

    $sekolah = mysqli_query($connect, "SELECT * FROM profil_sekolah WHERE no_id = '1' ");
    $data1 = mysqli_fetch_array($sekolah);
    if($data1) {
     $nama_sekolah = $data1['nama_sekolah'];
     $alamat_sekolah = $data1['alamat_sekolah'];
     $no_tlp = $data1['no_tlp'];
     $kepsek = $data1['kepsek'];
     $nis_kepsek = $data1['nis_kepsek'];
     $wakil_kepsek = $data1['wakil_kepsek'];
     $nis_wakil = $data1['nis_wakil'];
     $logo_sekolah = $data1['logo_sekolah'];
     $logo_awal = $data1['logo_sekolah'];
 }

$nama = 'adi';
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Print Siswa</title>
</head>
    <style>
        body { font-family: Times New Roman;}
        .logo { width : 100px;}
            hr { border-color : black; color : black;}
        .foto-siswa {
            display: block;
            margin-left: 263px;
            width: 150px;
        }
    </style>
<body>
<table width="100%">
        <tr>
            <td style="width:150px;"><img src="logo/'. $logo_sekolah .'" alt="" srcset="" class="logo"></td>
            <td style="text-align: center;">
            <h1>'. $nama_sekolah .'</h1>
            <p style="word-wrap: break-word; width : 150px;">'. $alamat_sekolah .'</p>
            <p>Telp : '. $no_tlp .'</p>
            <td style="width:100px;">&nbsp;</td>
        </td>
        </tr>
    </table>
    <hr />
    <h2 style="text-align: center;">Biodata Siswa</h2>
    <br >
    <h3>* Data Siswa</h3>
    <table>
        <tr>
            <td width="56%">Nama Lengkap</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $nama_siswa .'</td>
        </tr>
        <tr>
            <td>No Nis</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $nis .'</td>
        </tr>
        <tr>
            <td>No Nisn</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $nisn .'</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $jenis_kelamin .'</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $agama .'</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $tgl_lahir .'</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $tmp_lahir .'</td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $alamat_tinggal .'</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $kelas .'</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $jurusan .'</td>
        </tr>
    </table>
    <br>
    <h3>* Data Orang Tua</h3>
    <table>
        <tr>
            <td width="58%"><h4>Data OrangTua Laki Laki</h4></td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $nama_ayah .'</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $pekerjaan_ayah .'</td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $pendidikan_ayah .'</td>
        </tr>
        <tr>
            <td>Alamat Tinggal</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $alamat_ayah .'</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td width="58%"><h4>Data OrangTua Perempuan</h4></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $nama_ibu .'</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $pekerjaan_ibu .'</td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $pendidikan_ibu .'</td>
        </tr>
        <tr>
            <td>Alamat Tinggal</td>
            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
            <td>'. $alamat_ibu .'</td>
        </tr>
    </table>
    <br><br><br>
    <table width="100%">
        <tr>
            <td style="text-align: center;">Wakil Kepala Sekolah</td>
            <td style="text-align: center;">Kepala Sekolah</td>
        </tr>
        <tr>
            <td style="text-align: center;">&nbsp;</td>
            <td style="text-align: center;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center;">&nbsp;</td>
            <td style="text-align: center;">&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center;">'. $wakil_kepsek .'</td>
            <td style="text-align: center;">'. $kepsek .'</td>
        </tr>
        <tr>
            <td style="text-align: center;">'. $nis_wakil .'</td>
            <td style="text-align: center;">'. $nis_kepsek .'</td>
        </tr>
    </table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
$mpdf->WriteHTML($html);
$mpdf->Output('biodata-siswa.pdf', \Mpdf\Output\Destination::INLINE);
exit; 
?>