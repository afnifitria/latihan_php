<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asignment_operator</title>
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
//Operator penugasan dasar di PHP adalah "=".
// Artinya operan kiri disetel ke nilai ekspresi penugasan di sebelah kanan.
$x = 10;  
echo $x;
?>  

<h5>addition<h5>
<?php
//Addition
$x = 20;  
$x += 100;

echo $x;
?>  

<h5>subtraction<h5>
<?php
//subtraction
$x = 50;
$x -= 30;

echo $x;
?>  

<h5>multiplication<h5>
<?php
//Multiplication
$x = 5;
$x *= 6;

echo $x;
?>  

<h5>division<h5>
<?php
//division
$x = 10;
$x /= 5;

echo $x;
?>  

<h5>modulus<h5>
<?php
//modulus
$x = 15;
$x %= 4;

echo $x;
?>  
</body>
</html>