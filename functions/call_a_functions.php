<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>call a function</title>
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
                <td><img src="anip.jpg" alt="" width="100"> </td>
            </tr>
            <tr>
            </tr>   
        </table>
    </header>
<?php
//Untuk memanggil fungsi tersebut, cukup tulis namanya diikuti tanda kurung ()
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 

</body>
</html>