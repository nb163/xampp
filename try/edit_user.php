<?php
require_once("./includes/header.php");
require_once("./includes/left_menu.php");
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Update User</h1>
<!------------------------FORM START ------------------------------------>
<?php
  pr1($_POST);
  pr1($_FILES);
  if(isset($_POST['uname']) && !empty($_POST['uname'])) {
    $id = $_REQUEST['id'];
    $_POST['hobbies'] = implode(',',$_POST['hobbies']);

    ################# uppload avatar start ############
      if(isset($_FILES['e_avatar']) && $_FILES['e_avatar']['error']==0){

        $fileName = date('dmYHis').'_'.uniqid().'_'.$_FILES['e_avatar']['name'];
        $src = $_FILES['e_avatar']['tmp_name'];
        $dest = "./uploads/$fileName";
        if(is_uploaded_file($src)){
          move_uploaded_file($src, $dest);
          $_POST['avatar'] = $fileName;
        }
        unlink("./uploads/".$_POST['current_avatar']);
      }

      unset($_POST['current_avatar']);
    ####################################################

    $rows = updateByID('users',$id, $_POST);


    header("location:show_all_users.php");
    exit;

  }


  if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
    $id = $_REQUEST['id'];

    $fetchQuery = "SELECT * FROM `users` WHERE `id`='$id'";
    $fetchResult = mysql_query($fetchQuery) or die(mysql_error());
    $user = mysql_fetch_assoc($fetchResult);
    pr1($user);

$hobbiesArray = explode(',',$user['hobbies']);

$isCr = in_array('cr',$hobbiesArray) ? 'checked':'';
$isHk = in_array('hk',$hobbiesArray) ? 'checked':'';
$isFb = in_array('fb',$hobbiesArray) ? 'checked':'';
$isTn = in_array('tn',$hobbiesArray) ? 'checked':'';
$isCh = in_array('ch',$hobbiesArray) ? 'checked':'';
$isSw = in_array('sw',$hobbiesArray) ? 'checked':'';

  }


?>
<form id="signupForm" action="edit_user.php" enctype="multipart/form-data" method="post" class="form-horizontal" role="form">

<input type="hidden12" name="id" value="<?=$user['id']?>"  />
<input type="hidden12" name="current_avatar" value="<?=$user['avatar']?>"  />

  <div class="form-group">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6">
      <input type="text" name="uname" value="<?=$user['uname']?>" class="form-control" placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" disabled value="<?=$user['email']?>" class="form-control" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Hobbies</label>
    <div class="col-sm-6">
      <label><input type="checkbox" value="cr" <?=$isCr?> name="hobbies[]">Cricket</label><br>
      <label><input type="checkbox" value="hk" <?=$isHk?> name="hobbies[]">Hockey</label><br>
      <label><input type="checkbox" value="fb" <?=$isFb?> name="hobbies[]">FootBall</label><br>
      <label><input type="checkbox" value="tn" <?=$isTn?> name="hobbies[]">Tennnis</label><br>
      <label><input type="checkbox" value="ch" <?=$isCh?> name="hobbies[]">Chess</label><br>
      <label><input type="checkbox" value="sw" <?=$isSw?> name="hobbies[]">Swimming</label><br>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Avatar</label>
    <div class="col-sm-6">

      <input type="file" class="form-control" name="e_avatar" ><br>
      <img height="90" width="120" src="./uploads/<?=($user['avatar'])?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-success">Edit User</button>
    </div>
  </div>
</form>

<!------------------------FORM END ------------------------------------>

        </div><!---end col-sm-9 col-sm-offset-3 col-md-10-->
<?php
require_once("./includes/footer.php");
?>
