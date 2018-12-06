<!DOCTYPE html>
<html>
<head>
   
	<meta charset="utf-8">
		<meta name="viewport" content="width-device-width , initial-scale=1, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <title>TFT</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
      <style>
          
          
          
          
    </style>
    </head>
    <body>
        
<div class="container-fluid">
        <div class="row">
    <div class="col-sm-offset-1 col-sm-10 contact">
            <h1>Contact us</h1>
        
        <?php
     
        $name="";
        $email="";
        $msg="";
        $errors="";
        $result="";
    //    $error="";
        if(isset($_POST["name"]))
           $name=$_POST["name"] ;
    //   $email=$_POST["email"];
        
        if(isset($_POST["email"]))
           $email=$_POST["email"] ;
      // $msg=$_POST["msg"];
        
        if(isset($_POST["msg"]))
           $msg=$_POST["msg"] ;
        $missingname='<p><strong>Please enter your name</strong></p>';
        $missingemail='<p><strong>Please enter your email</strong></p>';
        $invalidemail='<p><strong>Please enter valid email</strong></p>';
        $missingmsg='<p><strong>Please enter messege</strong></p>';
       # echo"anshika";
        if(isset($_POST["submit"])){
            if(!$name){
               $errors.=$missingname;
               // echo $missingname;
            }
            else{ 
               # echo"khjii";
$name=filter_var($name,FILTER_SANITIZE_STRING);
            }
            if(!$email){
                //echo"shcjd";
               $errors=$errors.$missingemail;
               // echo $missingemail;
            }
            else{
$email=filter_var($email,FILTER_SANITIZE_STRING);
            
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
              #echo "aha"; 
   $errors.=$invalidemail;
   // echo $invalidemail;
            }
            }
         if(!$msg){
                $errors=$errors.$missingmsg;
           //  echo "nishtha";
            }
            else{
                $msg=filter_var($msg,FILTER_SANITIZE_STRING);
            }
            
            if($errors){
                $resultmsg='<div class="alert alert-danger">' . $errors .'</div>';
           echo $resultmsg;}
        
        else{
            $to="validemailid.com";
            $subject="contact";
           
            $msg="
            <p>Name: $name </p>
             <p>Email: $email </p>
              <p>Message: <strong>$msg </strong></p>";
             $headers="Content-type: text/html";
            if(mail($to,$subject,$msg,$headers)){
                $result='<div class="alert alert-success">Thanks for your message</div>';
            }
            else{
                $result='<div class="alert alert-warning">Unable to send msg ! Try again!!</div>';
            }
        }
            echo $result;
        
        }
        ?>
        <form action=
"contact.php" method="POST">
            <div class="form-group">
            <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="<?php echo $name;?>"></div>
            
            
             <div class="form-group">
            <label for="email">Email:</label>
                <input type="text" name="email" placeholder="Email" id="email" class="form-control" value="<?php echo $email;?>">
            </div>
            
            
              <div class="form-group">
            <label for="message">Message:</label>
                <textarea  name="msg" id="msg" class="form-control" rows="5"><?php $msg;?>
                  </textarea>
            </div>
            
            <input type="submit" name="submit" class="btn btn-success btn-lg" value="send Message">
        </form>
            </div>
    </div></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
    
    
    
