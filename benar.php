<?php
    session_start();
    $jawaban = strval($_SESSION['x']+$_SESSION['y']);
    if ($_POST['hasil'] != $jawaban) {
        $_SESSION['lives'] = $_SESSION['lives'] - 1;
        $_SESSION['score'] = $_SESSION['score'] - 2;
        header('location: salah.php');
    } else {
        $_SESSION['score'] = $_SESSION['score'] + 10;
    }
    if ($_SESSION['lives'] == 0) {
        header('location: gameover.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathemathic Game</title>
</head>
<body>
    <div id="body" style="width:400px; height:162px;">
	
    <div id="log_head"><strong>Mathematics Game</strong>
    </div>
   
    <form method="POST" action="benar.php">
    <table width="100%" height="100%" style="background:#FFF; ">
    <tr height="15"></tr>
    	<tr>
        	<td colspan ="2" align="center">Hallo <?php echo $_COOKIE['nama']?> , Selamat jawaban Anda benar…</td>
            
        </tr>
        <tr height="15"></tr>
        <tr>
            <td colspan ="2" align="center">Lives <?php echo $_SESSION['lives']?> | Score <?php echo $_SESSION['score']?> </td>
        </tr>
        <tr height="15"></tr>
        <tr>
            <td colspan ="2" align="center" ><a href="soal.php">Soal Selanjutnya </a></td>
        </tr>
        <tr height="15"></tr>
    </table>
    </form>
</div>
</body>
</html>