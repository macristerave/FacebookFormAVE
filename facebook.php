<!DOCTYPE html>
<html>
<head>
    <title>Facebook Log In</title>
</head>
    <link rel="stylesheet" type="text/css" href="design.css">
<body>
<form method="POST">   
<div class="B">

<table border="0" align="left">
  <tr>
    <td>

    <p style="font-family: Calibri; font-size: 40px; font-weight: bold; margin:10px; color: white;">&emsp;&emsp;&emsp;&emsp;facebook</p> 

    </td>
    </tr>  
  </table>


<table border="0" align="right" cellspacing="15px" style="margin-right:115px">
<tr>
  <td>
    <b style="font-family: Calibri; font-size: 16px;" >Email or phone</b><br>
    <input type="Text"     name="em">
  </td>

  <td>
    <b style="font-family: Calibri; font-size: 16px;">Password</b><br>
    <input type="Password" name="pa">
  </td>

  <td>
    <br>
    <input type="Submit" name="login" value="Log In" style="font-weight: bold; background-color: #4267B2;border: 1px solid rgb(0,0,0,.2); font-size:15px;color: white;">
  </td>
  </table>
  </div>

<div class="C">
<b style="font-size: 35px; color: black; font-weight: bold;">
Connect with friends and the world<br> around you on Facebook.
<br> </b> <br>

<img src="paper.png" alt="picture" style="width: 38px; height:38px;  vertical-align: middle;"> 
<font size="4"><b style="color: black;"> See photos and updates </b>from friends in News Feed.</font><br><br>

<img src="pc.png" alt="picture" style="width: 40px; height:40px;  vertical-align: middle;"> 
<font size="4"><b   style="color: black;">Share what's new 
</b> in your life on your Timeline.</font><br><br>

<img src="share.png" alt="picture" style="width: 50px; height:50px;  vertical-align: middle;"> 
<font size="4"> <b style="color: black;">Find more </b>  of what you're looking for with Facebook Search.</font> </div>


<div class="S">
<h1>Sign Up</h1>It's quick and easy.<br><br>

<input style="padding: 6px; font-size: 13px; border-radius: 3px; width: 163px;" type="text" name="fname" placeholder="First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
<input style="padding: 6px; font-size: 13px; border-radius: 3px; width: 163px; " type="text" name="lname" placeholder="Last Name"><br><br>

<input style="padding: 6px; font-size: 13px; border-radius: 3px; width: 373px;" type="text" name="email" placeholder="Mobile Number or Email"><br><br>

<input style="padding: 6px; font-size: 13px; border-radius: 3px; width: 373px;" type="text" name="password" placeholder="New Password"><br><br>

<b style="color: gray;"><br><br>
Birthday<br>
</b>

<b style="color: #3b5998">Birthday <br></b>
<input type="date" id="namebox" name="birthday">

<br> <br>

<b style="color: gray;"> 
Gender<br>
</b>

<input style="font-size: 30px" type="Radio" 
name="gender" value="Female">Female
<input style="font-size: 30px" type="Radio" 
name="gender" value="Male">Male
<input style="font-size: 30px" type="Radio" 
name="gender" value="Custom">Custom

<br>

<p style="font-size: 14px;">By clicking Sign Up, you agree to our <b style="color: #3b5998;">Terms, Data Policy</b> and <br> <b style="color: #3b5998;">Cookies Policy</b>.You may receive SMS Notifications from us and <br> can opt out any time. </p>


<input style="font-size: 17px; text-align: center; background-color: limegreen; padding:3px; border-radius: 6px; font-weight: bold; width: 140px; color: white; height: 35px;" type="Submit" name="submit" value="Sign Up" >
<br>

<hr style="color: black">

<b style="font-size: 16px; color:#3b5998; font-weight: bold;">
Create a Page </b> for a celebrity, band or business.
<br> </b> <br>


 
    <br>
    <br>    
    <br>
    <br>

<?php

        $servername="localhost";
        $username="root";
        $password="";
        $databasename="dbfacebook";


        $connect= mysqli_connect($servername, $username, $password, $databasename);
?>


<?php
        if (isset($_POST ['submit'])){
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            $gender = $_POST['gender'];

            

            $insert = "INSERT INTO tblfacebook (fname,lname,email,password,birthday,gender ) VALUES ('$firstname','$lastname','$email', '$password','$birthday','$gender')";

            $query = mysqli_query($connect,$insert);
            if ($query==True )
            {
                    echo "<b>Record added </b>";
                    header("location: facebook.php");
                }
                else {
                    echo "<b>Record not added </b>";
                }
            }
            
        ?>


<?php



        $servername="localhost";
        $username="root";
        $password="";
        $databasename="dbfacebook";


        $connect= mysqli_connect($servername, $username, $password, $databasename);

        if (isset($_POST ['login'])){

        $e = $_POST['em'];
        $p = $_POST['pa'];


            $query= "SELECT * FROM tblfacebook WHERE email = '$e' AND password = '$p'";
            $result = mysqli_query($connect, $query);
            $count= mysqli_num_rows($result);

            if ($count>0)
            {
                header("location: login.php");
            }
            else {
                echo "<h3><b>Username/Password is Incorrect</b></h3>";
            }
        }

?>


             </form>

    <br>
    <br>
</body>
</html>