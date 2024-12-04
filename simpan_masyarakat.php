<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];

$sql=mysqli_query($conn,"INSERT INTO masyarakat values('$nik','$nama','$user','$pass','$telp','$alamat','$email')");
if($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location="index.php";
    </script>
<?php
}
?>