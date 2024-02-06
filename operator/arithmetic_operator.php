<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arithmetic_operator</title>
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
    
<!--contoh operator penjumlahan/addition-->
<h5>+ addition<h5>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  

<!--contoh operator pengurangan/subtraction-->
<h5>- subtraction<h5>
<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  

<!--contoh operator perkalian/multiplication-->
<h5>x multiplication<h5>
    <?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  

<!--contoh operator pembagian/division-->
<h5>/ division<h5>
 <?php
$x = 10;  
$y = 6;

echo $x / $y;
?>  

<!--contoh operator sisa bagi/modulus-->
<h5>% modulus<h5>
<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  

<!--contoh operation pangkat-->
<h5>** exponantiation<h5>
<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>  



</body>
</html>
