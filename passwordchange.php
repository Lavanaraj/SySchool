<?php
	include_once "DBOperations.php";
	include_once "User.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();
        $link= mysqli_connect("localhost", "root", "", "syschool") or die("Something wrong with the server, try again later");
        $sqll = "SELECT * FROM user WHERE user_id='{$_SESSION['user']}'";            
        $res = mysqli_query($link,$sqll);
        if($row=mysqli_fetch_assoc($res)){  
        	if($row['pw']==md5($_POST['currentPassword'])){
        		if($_POST['newPassword']==$_POST['confirmPassword']){
        			$database = new DBOperations();
        			$user = new User($row['user_id'],md5($_POST['newPassword']),$row['type']);	
        			$database->changePassword($user);
        			header("location: homestudent.php");
        		}else{
					Print '<script>confirm("Password Mismatched!");</script>';
					Print '<script>window.location.assign("changePassword.php")</script>';
				}
    		}else{
				Print '<script>confirm("Password Mismatched!");</script>';
				Print '<script>window.location.assign("changePassword.php")</script>';
			}
		}
	?>
</body>
</html>