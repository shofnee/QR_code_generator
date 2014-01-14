<?php
//data variables

//qr code image height & width
$w = '150';
$h = '150';

$data = 'this is my email info@shofnee.com';

//this will give you a 150 by 150 qr code for the data saved in the ($data) variable
echo 'https://chart.googleapis.com/chart?cht=qr&chl='.$data.'&chs='.$w.'x'.$h.';



?>
