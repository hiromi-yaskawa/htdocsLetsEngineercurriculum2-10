<?php
//直方体の体積を求める関数を作成してください。
function getTriangleArea($vertical, $Horizontal , $Height){
$area= $vertical * $Horizontal *$Height;
print"直方体の体積".$area."です。";
}
?>

</br>

<?php
//その関数を使用し、縦=5cm、横=10cm、高さ=8cmの直方体の体積を求めてください。
getTriangleArea(5,10,8);
?>
