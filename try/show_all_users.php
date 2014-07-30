<?php
require_once("./includes/header.php");
require_once("./includes/left_menu.php");
#ALTER TABLE `users` ADD `avatar` VARCHAR(255) NOT NULL ;
#ALTER TABLE `users` ADD `hobbies` VARCHAR(255) NOT NULL ;

?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">All Users</h1>
<!------------------------FORM START ------------------------------------>
<?php

  # Delete Records
  if(isset($_GET['action']) && ($_GET['action']=='delete'))
  {
    $id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : 0;

    $deleteQuery = "DELETE FROM `users`
                    WHERE `id`='$id'";
    mysql_query($deleteQuery);
    if(mysql_affected_rows() == 1){
      echo "<h4>Record Deleted Successfully</h4>";
    }

  }

  # Update Status
  if(isset($_GET['status']) && ($_GET['status']!=''))
  {
    $newStatus = $_GET['status']==1 ? 0 : 1;

    $id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : 0;

    $updateQuery = "UPDATE `users` SET `status`='$newStatus'
                    WHERE `id`='$id'";
    mysql_query($updateQuery);
    if(mysql_affected_rows() == 1){
      echo "<h4>Status Updated Successfully</h4>";
    }

  }

  $where = '';
  if(isset($_GET['search']) && !empty($_GET['search'])){
    $search = trim($_GET['search']);
    $where = " WHERE `email` LIKE '%$search%' OR
    `uname` LIKE '%$search%' ";
  }

  $selectQuery = "SELECT * FROM `users` $where ORDER BY `added_date` DESC";
  pr1($selectQuery);
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
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php
while($user = mysql_fetch_assoc($selectResult))
{
  pr($user);
  $status = $user['status'];
  $id = $user['id'];
?>
    <tr>
      <td ><?=$id?></td>
      <td ><?=$user['uname']?></td>
      <td ><a href="mailto:<?=$user['email']?>"><?=$user['email']?></a></td>
      <td ><?=date('d-M-Y',strtotime($user['added_date']))?></td>
      <td >

        <a href="./uploads/<?=($user['avatar'])?>"
        target="_blank">
        <img height="90" width="120" src="./uploads/<?=($user['avatar'])?>">
        </a>

      </td>
      <td ><a href="show_all_users.php?id=<?=$id?>&status=<?=$status?>"><?=getStatus($status)?></a></td>
      <td >
        <a onClick="return confirm('Are you sure ?')" href="show_all_users.php?id=<?=$id?>&action=delete">Delete</a> /
        <a href="edit_user.php?id=<?=$id?>">Edit</a>

      </td>
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
