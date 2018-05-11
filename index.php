
<?php
		  if(isset($_POST['login']))
		  {
			  $username=$_POST['username'];
			  $password=$_POST['password'];
			  
			  $query= "select * from user WHERE username='$username' AND password='$password'";
			  
			  $query_run = mysqli_query($con,$query);
			  if(mysqli_num_rows($query_run)>0)
			  {
				  $_SESSION['username']=$username;
				  header('location:homepage.php');
			  }
              else
			  {
					echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			  }
		  }  
		  
		  ?>

