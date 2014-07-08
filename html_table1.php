<?php
$t1 = microtime(true);
?>
<table border="0" cellspacing="0" width="50%" align="center">
<?php
for($i=1 ; $i <= 750 ; $i++)
{
  $color = ($i % 2 == 0) ? 'red':'green';
?>
  <tr>
    <td style="background-color:<?=$color?>"><?=$color?></td>
  </tr>
<?php
}

$t2 = microtime(true);
echo $t2-$t1;
?>
</table>

<style type="text/css">
    table tr td{
      text-align:center;
      border:1px solid blue;

    }
</style>
