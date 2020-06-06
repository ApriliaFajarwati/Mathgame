<?php
  session_start();
  $_SESSION['x'] = rand(0, 10);
  $_SESSION['y'] = rand(0, 10); 
  if (isset($_POST['submit1'])){
    setcookie('nama', $_POST['nama']);
    setcookie('email', $_POST['email']);
    header('location: soal.php');
  }
  if (isset($_POST['bukan'])){
    setcookie('nama', $_POST['nama']);
    setcookie('email', $_POST['email']);
    header('location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
</head>
<body>
<div id="body" style="width:400px; height:162px;">
	
    <div id="log_head"><strong>Pertanyaan</strong>
    </div>
   
    <form method="POST" action="benar.php">
    <table width="100%" height="100%" style="background:#FFF; ">
    <tr height="15"></tr>
    	<tr>
        	<td colspan ="2" align="center">Hallo <?php echo $_COOKIE['nama']?> , tetap semangat ya… you can do the best!!</td>
        </tr>
        <tr height="10"></tr>
        <tr>
            <td colspan ="2" align="center">Lives <?php echo $_SESSION['lives']?> | Score <?php echo $_SESSION['score']?> </td>
        </tr>
        <tr height="15"></tr>
        <tr>
        	<td colspan ="2" align="center">Berapakah <?php echo $_SESSION['x']?> + <?php echo $_SESSION['y']?> = </td>
            <td align="center"><input type ="text" name="hasil" align="center" style="height:40px;width:80%;" required></td>
        </tr>
        <tr height="15"></tr>
       <tr>
       		<td colspan ="2" align="center"><input type="submit" name="submit1" value="submit" style="background-color:#333; color:#ffffff; border:1px solid #333; width:100px; height:30;"></td>
       </tr>
       <tr height="10"></tr>
    </table>
    </form>
</div>
</body>
</html>