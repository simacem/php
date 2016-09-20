<?php
include "koneksi.php";
$id_getway = $_POST['id_getway'];
$id_paring = $_POST['id_paring'];
$Jenis = $_POST['jenis'];
//$status=$_POST['status'];

$query_insert = "insert into th(id_getway,id_paring,Jenis,status)values('$id_getway', '$id_paring','$Jenis',1)";
$insert = mysql_query($query_insert);

if($insert)
    {
    include("redirectview.php");
    }

else
    {
    echo "Gagal update ... ";
    echo "<META HTTP-EQUIV=Refresh CONTENT='2; URL=lihatdata.php'>";
    }
?>

