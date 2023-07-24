<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA QUIZ</title>
</head>
<link rel="stylesheet" href="signup.css">
<body>
   <center><h3>LogIn Here</h3></center>
   <form method="POST">
    <div class="container">
    <lable>UserName</lable> <br>
    <input type="text" name="username" id="username" placeholder="Enter Your Name" required>
    <br> 
    <lable>Password</lable><br>
    <input type="password" name="password" id="password" placeholder="Enter your Password"required> <br><br>
    <button type="submit" name="sub">Submit</button><br><br>
    <input type="checkbox" checked="checked">Remember Me
    <button type="button" name="cancelbtn"> Cancel</button>
    forget <a href="#">Password</a>

</div>
   </form>
   <?php
   if(isset($_POST['sub']))
   {
    require'_dbcon.php';
    $getusername = $_POST['username'];
    $getpass = $_POST['password'];
    
    $sql ="SELECT User_name, Password from user_details1 where User_name = '$getusername'";
    $sqlrs = mysqli_query($connect, $sql);
    $rowcount=mysqli_fetch_assoc($sqlrs);
    var_dump($rowcount);
   
    if($rowcount == 100) // TODO check array length
    {
        echo "User name is not available. Try another one";
        // TODO: return here else use if else condition
    } else {
        return $rowcount;
    }

    $user = $rowcount['User_name'];
    $conpass = $rowcount['Password'];
    if( $getpass != $conpass){
        echo "comform password properly";
    }

    if(($rowcount ==0) && ($getpass == $conpass)){
        echo "you have succeces fully sign_up";
        $gotologin = "<a href='login.php'>lLog in.</a>";
        echo $gotologin;

        $sql ="insert into user_details1 (User_name, Password) values ('$getusername', '$getpass')";
        $sqlrs = mysqli_query($connect, $sql);
    
    }
}




   ?>
</body>
</html>