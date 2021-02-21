<?php
  include 'code crud/config.php';
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Siswa</title>
</head>
<style>
    table {width : 100%; border-collapse: collapse; border: 1px solid #ACACAC;}
    table tr td {border: 1px solid black;}
</style>
<body style="border: 0.1pt solid #ccc">
    <table>
        <thead>
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Nis</td>
            <td>Nisn</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Alamat Tinggal</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td>Nama Ayah</td>
            <td>Pekerjaan Ayah</td>
            <td>Pendidikan Ayah</td>
            <td>Alamat Tempat Tinggal Ayah</td>
            <td>Nama Ibu</td>
            <td>Pekerjaan Ibu</td>
            <td>Pendidikan Ibu</td>
            <td>Alamat Tempat Tinggal Ibu</td>
        </tr>
        </thead>
        <tbody>
        <?php 
        $no = 1;
        $conn = mysqli_query($connect, "SELECT * FROM data_siswa ORDER BY nama_siswa ASC");
        while($row = mysqli_fetch_array($conn)){
            ?>
            <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            <td><?php echo $row['nis']; ?></td>
            <td><?php echo $row['nisn']; ?></td>
            <td><?php echo $row['jenis_kelamin']; ?></td>
            <td><?php echo $row['agama']; ?></td>
            <td><?php echo $row['tgl_lahir']; ?></td>
            <td><?php echo $row['tmp_lahir']; ?></td>
            <td><?php echo $row['alamat_tinggal']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td><?php echo $row['jurusan']; ?></td>
            <td><?php echo $row['nama_ayah']; ?></td>
            <td><?php echo $row['pekerjaan_ayah']; ?></td>
            <td><?php echo $row['pendidikan_ayah']; ?></td>
            <td><?php echo $row['alamat_ayah']; ?></td>
            <td><?php echo $row['nama_ibu']; ?></td>
            <td><?php echo $row['pekerjaan_ibu']; ?></td>
            <td><?php echo $row['pendidikan_ibu']; ?></td>
            <td><?php echo $row['alamat_ibu']; ?></td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
</body>
</html>