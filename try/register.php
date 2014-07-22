<?php
require_once("./includes/header.php");
require_once("./includes/left_menu.php");
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
<!------------------------FORM START ------------------------------------>
<?

  //pr1($_FILES);
  if(isset($_POST['email']) && !empty($_POST['email'])) {
    unset($_POST['cpassword']);
    $_POST['added_date'] = date('Y-m-d H:i:s');
    $_POST['status'] = '1';

    $id = insert('users', $_POST);

  }
?>
<form id="signupForm" enctype="multipart/form-data" method="post" class="form-horizontal" role="form">

  <div class="form-group">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6">
      <input type="text" name="uname" value="Rasmus <?=date('d-m-H-s')?>" class="form-control" placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" value="<?=date('d_m_H_m_s')?>@gmail.com" class="form-control" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" value="1q1q@1q1q" class="form-control" id="passwordId" name="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-6">
      <input type="password" value="1q1q@1q1q" class="form-control" name="cpassword" placeholder="Confirm Password">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Avatar</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" name="avatar" >
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-success">Add User</button>
    </div>
  </div>
</form>

<!------------------------FORM END ------------------------------------>

        </div><!---end col-sm-9 col-sm-offset-3 col-md-10-->
<?php
require_once("./includes/footer.php");
?>
