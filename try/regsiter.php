<form action="" name="register" method="post">

  <table  align="center">
    <thead>
      <tr>
        <th colspan="2">Please fill the details below.</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Name :</td>
        <td><input
        type="text"
        required
        placeholder="My Name is.."
        maxlength="50"
        onCopy="return false"
        onPaste="return false"
        autocomplete="off"
        name="uname" /></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><input type="email" placeholder="My Email is.." required name="email" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" placeholder="Password"
required  name="password" /></td>
      </tr>
      <tr>
        <td>Confirm Password :</td>
        <td><input type="password" required   placeholder="Confirm Password"
name="cpassword" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="balpreet"  value="I am done!!"/></td>
      </tr>
    </tbody>
  </table>

</form>

<style type="text/css">
body{
  background-color: #D0F4FB;
  font-family: Comic Sans MS;
}
table{
  background-color: #BFFDBD;
  width:70%;
  border-collapse: collapse;
}
table tr td, table tr th{
  border:1px solid #1AC437;
  font-size: 20px;
  padding:5px 10px;
}
table tr th{
  color:#fff;
  background-color: #000;
  padding:10px;

}

table tr td:nth-child(2n+1){
  text-align: right;
}
input[type="text"],
input[type="password"],
input[type="email"]
{
    font-size: 20px;
    padding:5px 10px;
    border:1px solid green;
    border-radius:0px 20px 0px 20px;
    color:blue;
    background-color: #CCC1FD;
    box-shadow: 10px 10px 10px gray;
}
input[type="submit"]
{
    font-size: 20px;
    padding:5px 10px;
    color:white;
    background-color: #ADADAD;
    border:1px solid gray;
    border-radius:10px;
box-shadow: 10px 10px 10px gray;

}
input[type="submit"]:hover
{
  background-color: gray;
  cursor: pointer;
}
</style>
