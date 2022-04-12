$errors = ";

$myemail = 'girish.bkrishnan2002@gmail.com';//<—Put Your email address here. if(empty($_POST['name']))

{

$errors .= "\n Error: name is required";

}

$name = $_POST['name'];

$message = $_POST['ContactComment'];


$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Message \n $message";

$headers = "From: $myemail\n";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header(‘Location: home.html’);

