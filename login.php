
<?
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="hasil.php" method="post">
<table width=250" border="1">
  <tr>
    <td>username</td>
    <td>:</td>
    <td>
      <input name="username" type="text" id="username" />
    </td>
  </tr>
  <tr>
    <td>password</td>
    <td>:</td>
    <td><input name="password" type="password" id="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
  </tr>
</table>

</form>
</body>
</html>
