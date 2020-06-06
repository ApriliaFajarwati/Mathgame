<?php
    session_start();
    if (isset($_COOKIE['nama'])){
        $status = true;
    } else {
        $status = false;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Game</title>
</head>
<body>
<div id="body" style="width:500px; height:100px;">
<div id="head"><h2>Mathematics Game</h2>
</div>
<table class="tabel" width="100%" height="100%" style="background:#FFF; ">
<tr align=center>
<td align="center">
<form method="POST" action="soal.php">
    <?php
    if ($status == false){
    ?>
        Masukkan Nama Anda : <input type ="text" name="nama" align="center" style="height:40px;width:80%;" required><br/>
        Masukkan Email Anda : <input type ="email" name="email" align="center" style="height:40px;width:80%;" required><br/>
        <input type="submit" name="submit1" value="Start game" require>

    <?php
    } else {
        echo "<p>Hello ".$_COOKIE['nama'].", selamat datang kembali di permainan ini!!!</p>";
        echo "<button type=submit name=submit2>Start Game</button>"; 
        echo "Bukan Anda ? <button type=submit name=bukan>klik disini";
    }
    
    ?>

</form>
    <?php
        $_SESSION['lives'] = 5;
        $_SESSION['score'] = 0;
    ?>
</td>
</tr>
</table>
</body>
</html>