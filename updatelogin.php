<!DOCTYPE html>
<html>
<head>
     <title>my connectivity</title>
</head>
<body>

<?php
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
           $servername="localhost";
           $username="root";
           $password="";
           $database="internet";

           $email=$_POST['email'];
           $pass=$_POST['pass'];
	   $repass=$_POST['repass'];
           $address=$_POST['address'];

           $con=mysqli_connect($servername,$username,$password,$database);


           $sql="UPDATE `login` SET `email`='sree',`pass`='sree',`repass`='sree',`address`='345' WHERE email='chandu'  ";
           
           $result= mysqli_query($con,$sql);
         
           if($result)
                    echo "SUCCESSFULLY UPDATED";
           else
                    echo "NOT UPDATED";

           
      }

?>


<form action="/project/updatelogin.php" method="POST">

      E-Mail: <input type="text" id="email" name="email" /><br><br>
      Password: <input type="text" id="pass" name="pass" /><br><br>
      Confirm Password: <input type="text" id="repass" name="repass" /><br><br>
      Address: <input type="text" id="address" name="address" /><br><br>
                <input type="submit" id="submit" name= "submit" /> 

     


</form>
</body>
</html>	