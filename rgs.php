<?PHP
$isPost=false;
$username="";
//check whether the button is clicked or not
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	//echo "button clicked";
}
?>
<center>
<body style="background-color:powderblue;">
<fieldset>
<head ><h1 style="background-color:blue;">Register as a vendor!</h1></head>
<form action="#" method="post">
<tr>
<td>Username :</td>
<td><input type="text" id="uname" name="uname"></td>
</tr>
<?php
if($isPost==true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>
<br><BR>
<tr>
<td>Password :</td>
<td><input type="password" id="pass" name="pass"></td></tr><br><br>
<tr><td>Email    :</td>
<td><input type="email" id="email" name="email" ></tr></td><br><br>
<td>Gender: <input type="radio" name="gender" value="Male"> Male</td
<td><input type="radio" name="gender" value="Female"> Female</td>
<td><input type="radio" name="gender" value="Others"> Others </td><br><br>


<td>Present Address:</td>
<td><textarea name="address"></textarea></td>
<br><br><br>
<td>Permanent Address:</td>
<td><textarea name = "address"></textarea></td>

<br><br><br>


<td>Company Name: </td>
<td><input type="name" id="cname" name="cname"></td><br><br>


<td>Payment method:<?td>
<td><br><input type="radio" name="payment method" value="Bank"> Bank</td><br>
<td><input type="radio" name="payment method" value="Bkash"> Bkash</td><br>
<input type="radio" name="payment method" value="Nagad"> Nagad </td> <br><br>
 <td><input type="submit" name="btnClick" value="Click">
</center>
</body>
</siwldset>
</form>