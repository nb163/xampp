<?php
require_once("./includes/header.php");
require_once("./includes/left_menu.php");
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">All Users</h1>
<!------------------------FORM START ------------------------------------>
<?php

  $selectQuery = "SELECT * FROM `users`";
  $selectResult = mysql_query($selectQuery) or die(mysql_error());


?>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Added Date</th>
      <th>Modified Date</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
<?php
while($user = mysql_fetch_assoc($selectResult))
{
  pr($user);
?>
    <tr>
      <td ><?=$user['id']?></td>
      <td ><?=$user['uname']?></td>
      <td ><a href="mailto:<?=$user['email']?>"><?=$user['email']?></a></td>
      <td ><?=date('d-M-Y',strtotime($user['added_date']))?></td>
      <td ><?=date('d-M-Y',strtotime($user['modified_date']))?></td>
      <td ><?=getStatus($user['status'])?></td>
    </tr>
<?php
} //end while
?>
  </tbody>
</table>
<!------------------------FORM END ------------------------------------>

        </div><!---end col-sm-9 col-sm-offset-3 col-md-10-->
<?php
require_once("./includes/footer.php");
?>
