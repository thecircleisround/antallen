<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "requests@ohenerecordings.com";
 
    $email_subject = "Recording Request";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['additional']) ||
   
        !isset($_POST['city'])     ||

        !isset($_POST['zip']) ||
        
        !isset($_POST['instrument'])  ||
      
        !isset($_POST['instrumentation'])  || 
    
        !isset($_POST['state'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $additional = $_POST['additional']; // required

    $state = $_POST['state'];
    
    $city = $_POST['city'];
    
    $zip = $_POST['zip'];
    
    $instrumentation = $_POST['instrumentation'];
    
    $instrument = $_POST['instrument'];
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($additional) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "State: ".clean_string($state)."\n";
    
    $email_message .= "City: ".clean_string($city)."\n";
    
    $email_message .= "Zip Code: ".clean_string($zip)."\n";

    $email_message .= "Instrumentation: ".clean_string($instrumentation)."\n";
    
    $email_message .= "Instrument: ".clean_string($instrument)."\n";
        
    $email_message .= "Additional Information: ".clean_string($additional)."\n";
    
  
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
<!DOCTYPE html PUBLIC>
<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Ohene</title>
    <meta name="viewport" content="initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Ohene Recordings official website">
    <meta name="keywords" content="Ohene Recordings, Antonio J. Allen, Antonio JoVaughn Allen, Antonio Allen, Jordan Taylor, JB Taylor">
    <meta name="author" content="Ohene Recordings">
    <!-- Externals-->
    <link rel="stylesheet" href="./css/Skeleton/css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/Skeleton/css/skeleton.css">
    <script type="text/javascript" src="./javascript/jquery.js">
    </script>
    <script type="text/javascript" src="./javascript/jPlayer-2.9.2/src/javascript/jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="./javascript/jPlayer-2.9.2/src/javascript/add-on/jplayer.playlist.js"></script>
    <script type="text/javascript" src="./javascript/audio.js"></script>
</head>

<body>
    <div class="container">
                <div class="four columns menu">

            <ul class="trade"><a href="./index.html">take me back</a>
            </ul>
        </div>
        <div class="eight columns" id="top">
            <p class="paragraph">
              Request received!
            </p>
        </div>

</body>


</html>

 
<?php
 
}
 
?>