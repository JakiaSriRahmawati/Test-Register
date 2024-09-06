<?php
$kode = $_GET ['id'];

$sql = mysqli_query($koneksi, "DELETE FROM custemer where id= '$kode'");
if ($sql){

?>
<script type="text/javascript">
    alert ("Data berhasil dihapus");
    window.location.href="?page=custemer"
</script>
<?php
}
?>