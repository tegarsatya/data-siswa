<?php
error_reporting(0);
session_start();
include 'code crud/logo.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <title>Input Siswa</title>
    <link rel="shortcut icon" href="logo/<?php echo $logo_sekolah; ?>" type="image/x-icon">
</head>

<body>
    <div id="none">
        <?php include 'navbar.php'; ?>
        <div class="container mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col">
                                <h5><span style="color: red;">*</span> Data Siswa</h5>
                                <div class="form-group">
                                    <input type="text" name="nama_siswa" class="form-control rounded-lg" placeholder="Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nis" class="form-control rounded-lg" placeholder="Nis" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nisn" class="form-control rounded-lg" placeholder="Nisn" required>
                                </div>
                                <div class="form-group">
                                    <select type="text" name="jenis_kelamin" class="form-control rounded-lg" required>
                                        <option value="">-- Jenis Kelamin --</option>
                                        <option value="Laki-Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select type="text" name="agama" class="form-control rounded-lg" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control rounded-lg" placeholder="Tanggal Lahir" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tmp_lahir" class="form-control rounded-lg" placeholder="Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="alamat_tinggal" class="form-control rounded-lg" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama_panggilan" class="form-control rounded-lg" placeholder="nama_panggilan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kewarganegaraan_siswa" class="form-control rounded-lg" placeholder="kewarganegaraan_siswa" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jumlah_saudara" class="form-control rounded-lg" placeholder="jumlah_saudara" required>
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <input type="text" name="anak_ke" class="form-control rounded-lg" placeholder="anak_ke" required>
                                </div>
                                <!--  -->
                                <div class="form-group">
                                    <input type="text" name="anak_yatim" class="form-control rounded-lg" placeholder="anak_yatim" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tinggal_dengan" class="form-control rounded-lg" placeholder="tinggal_dengan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="transportasi_kesekolah" class="form-control rounded-lg" placeholder="transportasi menuju sekolahan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="bb" class="form-control rounded-lg" placeholder="berat badan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tb" class="form-control rounded-lg" placeholder="tinggi badan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="gol_darah" class="form-control rounded-lg" placeholder="Golongan Darah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="penyakit_diderita" class="form-control rounded-lg" placeholder="Penyakit Yang Diderita" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kelas" class="form-control rounded-lg" placeholder="Kelas" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jurusan" class="form-control rounded-lg" placeholder="Jurusan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="jarak_kesekolah" class="form-control rounded-lg" placeholder="jarak_kesekolah" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="foto_siswa" id="foto_siswa" required>
                                        <label class="custom-file-label" for="foto_siswa"><input type="text" class="form-control rounded-lg" id="foto_siswa1" style="color: black; position: absolute; margin-left : -12px ;margin-top : -7px;" for="foto_siswa" placeholder="Foto Siswa"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <h5><span style="color: red;">*</span>Pendidikan Siswa Sebelumnya</h5>
                                <div class="form-group">
                                    <input type="text" name="asal_smp" class="form-control rounded-lg" placeholder="Asal Smp" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tanggal_diterima" id="tanggal_diterima" class="form-control rounded-lg" placeholder="Tanggal Diterima" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tgl_ijazah_smp" id="tgl_ijazah_smp" class="form-control rounded-lg" placeholder="Tanggal Ijazah Keluar" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_ijazah_smp" class="form-control rounded-lg" placeholder="no_ijazah_smp" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tahun_skhun" class="form-control rounded-lg" placeholder="Tahun Skhun Keluar" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_skhun" class="form-control rounded-lg" placeholder="Nomor Skhun" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tanggal_diterima_siswa_pindahan" id="tanggal_diterima_siswa_pindahan" class="form-control rounded-lg" placeholder="tgl_diterima_siswa_pindah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="asal_sma" class="form-control rounded-lg" placeholder="asal_sma" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="alasan_pindah" class="form-control rounded-lg" placeholder="alasan_pindah" required></textarea>
                                </div>
                                <h5><span style="color: red;">*</span>Data Wali</h5>
                                <div class="form-group">
                                    <input type="text" name="nama_wali" class="form-control rounded-lg" placeholder="nama_wali" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="agama_wali" class="form-control rounded-lg" placeholder="agama_wali" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control rounded-lg" placeholder="tempat_lahir" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control rounded-lg" placeholder="tanggal_lahir" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="kewarganegaraan" class="form-control rounded-lg" placeholder="kewarganegaraan" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat_wali" class="form-control rounded-lg" placeholder="alamat_wali" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nomor_telepon" class="form-control rounded-lg" placeholder="nomor_telepon" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pekerjaan_wali" class="form-control rounded-lg" placeholder="pekerjaan_wali" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="penghasilan_wali" class="form-control rounded-lg" placeholder="penghasilan_wali" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="hub_dengan_siswa" class="form-control rounded-lg" placeholder="hub_dengan_siswa" required>
                                </div>
                            </div>
                            <div class="col">
                                <h5><span style="color: red;">*</span> Data Ayah</h5>
                                <div class="form-group">
                                    <input type="text" name="nama_ayah" class="form-control rounded-lg" placeholder="Nama Ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pekerjaan_ayah" class="form-control rounded-lg" placeholder="Pekerjaan Ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pendidikan_ayah" class="form-control rounded-lg" placeholder="Pendidikan Terakhir Ayah" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="alamat_ayah" class="form-control rounded-lg" placeholder="Alamat Lengkap Ayah" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" class="form-control rounded-lg" placeholder="tanggal_lahir_ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kewarganegaraan_ayah" class="form-control rounded-lg" placeholder="kewarganegaraan_ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nomor_telepon_ayah" class="form-control rounded-lg" placeholder="nomor_telepon_ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="penghasilan_ayah" class="form-control rounded-lg" placeholder="penghasilan_ayah" required>
                                </div>
                                <h5><span style="color: red;">*</span> Data Ibu</h5>
                                <div class="form-group">
                                    <input type="text" name="nama_ibu" class="form-control rounded-lg" placeholder="Nama Ibu" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pekerjaan_ibu" class="form-control rounded-lg" placeholder="Pekerjaan Ibu" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pendidikan_ibu" class="form-control rounded-lg" placeholder="Pendidikan Terakhir Ibu" required>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="alamat_ibu" class="form-control rounded-lg" placeholder="Alamat Lengkap Ibu" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" class="form-control rounded-lg" placeholder="tanggal_lahir_ayah" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kewarganegaraan_ibu" class="form-control rounded-lg" placeholder="kewarganegaraan_ibu" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nomor_telepon_ibu" class="form-control rounded-lg" placeholder="nomor_telepon_ibu" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="penghasilan_ibu" class="form-control rounded-lg" placeholder="penghasilan_ibu" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="input"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Siswa</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script defer src="fontawesome/js/all.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <?php include 'code crud/add-siswa.php'; ?>
    <?php if ($_SESSION['stat_login'] != true) {
        $pesan = "Maaf Anda Belom Login";
        $status = "error";
        $link_back = "index";
    ?>
        <script>
            /* Sweet Alert Belom Login */
            var x = document.getElementById("none");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            swal({
                title: "Maaf anda belom login !",
                text: "Silahkan login terlebih dahulu !",
                type: "warning"
            }).then(okay => {
                if (okay) {
                    window.location.href = "index";
                }
            });
        </script>
    <?php unset($_SESSION['stat_login']);
    } ?>
</body>

</html>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $('#foto_siswa').change(function(e) {
            var foto_siswa = e.target.files[0].name;
            $('#foto_siswa1').val(foto_siswa);

        });
    });
    $(function() {
        $("#tgl_lahir").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tanggal_diterima").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tanggal_diterima_siswa_pindahan").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tgl_ijazah_smp").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tanggal_lahir").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tanggal_lahir_ayah").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        $("#tanggal_lahir_ibu").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    $(function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    });
</script>