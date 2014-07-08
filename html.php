<table border = "0" cellspacing = "0" width = "50%" align = "center">
<?php
for ($i=1; $i<5 ; $i++)
{
if($i % 2==0){
$color = 'red';
}else{
  $color = 'green';
}
$color = ($i % 2 == 0)? 'red': 'green';
?>
<tr>
  <td style= "background-color : <?=$color?>"><?=$color?></td>
  </tr>
  <?php
}
?>
</table>

<style type="text/css">
table tr td{
  text-align : center;
  border : 1px salid blue;
  }
</style>
