  <?php

  $dbName = 'nb163';
  $username = 'root';
  $password = '';
  $host = 'localhost';
  # Host is localhost because apache and mysql are on same machine,
  #so for php mysql is local


  mysql_connect($host, $username, $password) or die(mysql_error());

  mysql_select_db($dbName) or die(mysql_error());


  /***
   * Used to insert Values In Db/Table
   * @param $tblName STRING e.g 'users'
   * @param $arr ARRAY e.g array('colName1'=>'colValue1',
   *                             'colName2'=>'colValue2')
   * @return INT LAST INSERT ID
   * @usage $id = insert('users', $_POST);
   * ***/

  function insert($tblName='', $arr=array())
  {
    if(empty($tblName) ||  empty($arr)){
      return false;
    }

    $query = "INSERT INTO `$tblName` SET ";
    foreach($arr as $colName=>$colValue){
      $query .= "`$colName`='$colValue', ";
    }
    $query = rtrim($query, ", ");
    pr($query);
    mysql_query($query) or die(mysql_error());
    return mysql_insert_id();
  }

  /***
   * Used to update Values In Db/Table
   * @param $tblName STRING e.g 'users'
   * @param $arr ARRAY e.g array('colName1'=>'colValue1',
   *                             'colName2'=>'colValue2')
   * @return INT UPDATED ROWS
   * @usage $rows = updateByID('users',$id, $_POST);
   * ***/

  function updateByID($tblName='', $id=0, $arr=array())
  {
    if(empty($tblName) ||  empty($arr) || $id==0){
      return false;
    }

    $query = "UPDATE `$tblName` SET ";
    foreach($arr as $colName=>$colValue){
      $query .= "`$colName`='$colValue', ";
    }
    $query = rtrim($query, ", ");
    $query .= " WHERE `id`='$id'";
    pr($query);
    mysql_query($query) or die(mysql_error());
    return mysql_affected_rows();
  }
