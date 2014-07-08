<?php
$t1 = microtime(true);
echo '<table border="0" cellspacing="0" width="50%" align="center">';

for($i=1 ; $i <= 750 ; $i++)
{
  $color = ($i % 2 == 0) ? 'red':'green';


echo "  <tr>
    <td style=\"background-color:$color\">
    $color
    </td>
  </tr>";

}

echo '</table>';
$t2 = microtime(true);
echo $t2-$t1;
?>
<style type="text/css">
    table tr td{
      text-align:center;
      border:1px solid blue;

    }
</style>

