<?php include_once 'database.php';

    $id = $_GET['id'];
if(count($_POST)>0) {
    echo $_POST['last_name'] ."lastname";
mysqli_query($conn,"UPDATE chk set

 first_name='" . $_POST['first_name'] . "',
  last_name='" . $_POST['last_name'] . "',
   email='" . $_POST['email'] . "'
    WHERE id='" . $id . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM chk WHERE id ='" .  $id . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 