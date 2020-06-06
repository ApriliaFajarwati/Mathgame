<?php
    session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body>
    <div id="body" style="width:400px; height:162px;">
	
    <div id="log_head"><strong>Hall Of Fame</strong>
    </div>
   
    <form method="POST" action="index.php">
    <table width="100%" height="100%" style="background:#FFF; ">
    <tr height="15"></tr>
    	<tr>
        	<td colspan ="2" align="center">Hallo <?php echo $_COOKIE['nama']?> , Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.</td>
        </tr>
        <tr height="10"></tr>
        <tr>
            <td colspan ="2" align="center">Score <?php echo $_SESSION['score']?> </td>
        </tr>
        <tr height="15"></tr>
        <tr>
       		<td colspan ="2" align="center"><input type="submit" name="submit" value="Main Lagi" style="background-color:#333; color:#ffffff; border:1px solid #333; width:200px; height:30;"></td>
       </tr>
       <tr height="15"></tr>
    
    </form>
    <?php
        $query=mysqli_query($koneksi, "insert into tb_data set nama='".$_COOKIE['nama']."', email='".$_COOKIE['email']."', score='".$_SESSION['score']."'");
    ?>

    
    <table width="100%" height="100%" border = "1" align="center" style="background:#FFF; ">
    <tr class="head" align="center" >
        <td width = 90 px>No</td>
        <td width = 300 px>Nama</td>
        <td width = 170 px>Score</td>
    </tr>

    <?php 
    $result=mysqli_query($koneksi, "SELECT * FROM tb_data ORDER BY score DESC");
    $no=1;
    foreach($result as $row){
            $no++;
            echo "<tr class ='isi'>
            <td>  $no </td>
            <td>".$row['nama']. "</td>
            <td>".$row['score']."</td>
            </tr>";
            if ($no>10) {
            break;
            }
        }
    ?>

    </table>
    
</div>
</body>
</html>