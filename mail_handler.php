//Mail sending function
$subject = $_POST['name'];
$to = $_POST['email'];
$from = "AykesKC@gmail.com";

//data
$msg = "Thank you for contacting me! Please allow up to 48 hours for a response. <br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

mail($to,$from,$subject,$msg,$headers);
echo "Mail Sent.";
