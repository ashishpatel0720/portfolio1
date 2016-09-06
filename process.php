<?php
function redirect_to($path){
    header('Location : '.$path);
}
if(isset($_POST['submit'])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$to      = "ashishpatel0720@gmail.com";
	$subject = "A message for you! :)";
	$message = $name . " | " . $email . "\n\n" . $message;
	$headers = "From: ".$name;

	$flag=mail($to, $subject, $message, $headers);
    if($flag==TRUE){
        redirect_to('index.php#contact?responce=1');
    }
    else
       redirect_to('index.php#contact?responce=0');
}  
 
?>