<?php

$tbl =  '<table border="0" cellspacing="0" width="50%" align="center">';

for($i=1 ; $i <= 15 ; $i++)
{
  $color = ($i % 2 == 0) ? 'red':'green';


$tbl .= "<tr>
    <td style=\"background-color:$color\">
    $color
    </td>
  </tr>";

}

$tbl .= '</table>';
echo $tbl;
?>
<style type="text/css">
    table tr td{
      text-align:center;
      border:1px solid blue;

    }
</style>

