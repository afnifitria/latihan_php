<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if_elseif_else
        
    </title>
</head>
<style>
  body {
    background-color: pink;
  }
</style>
<body>
<header>
        <!--identitas-->
        <table border="2" cellpadding="10">
            <tr>
                <th>nama</th>
                <th>kelas</th>
                <th>tanggal praktikum</th>
                <th>foto</th>
            </tr>
            <tr>
                <td>afni fitria dewi</td>
                <td>XI RPL</td>
                <td>05 - 02 - 2024</td>
                <td><img src="anip.jpg" alt="" width="100"></td>
            </tr>
            <tr>
            </tr>   
        </table>
    </header>
    <?php
    //Keluaran "have a good morning!" jika waktu saat ini kurang dari 10, 
    //dan "have a good day!" jika waktu saat ini kurang dari 20.
    // Jika tidak maka akan muncul output "have a good night!"
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
</body>
</html>