<!DOCTYPE html>
<html ng-app>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.7/angular.min.js">
</script>
 <link rel="stylesheet" type="text/css" href="webpage.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <div id="nav">

  <ul>
    <li><a href="Contact.php"> Contact </a></li>
    <li><a href="AboutMe.html"> About Me </a></li>
    <li><a href="Business.html"> Business </a></li>
    <li><a href="Street.html"> Street </a></li>
    <li><a href="Nature.html"> Nature </a></li>
  </ul>
  <p id="logo"><a href="webpage.html"> Icyportraitsgta </a></p>
  <a href="https://www.instagram.com/icyportraitsgta/" class="fa fa-instagram fa-2x"></a>
</div>
<div id="description">
  <!-- Creating the contact forms using HTML !-->
  <form method="post" name="emailform" action="Contact.php">
    Enter Name: <input type="text" name="name"> <br>
    Enter Email: <input type="text" name="email"> <br>
    Message: <textarea name="message"></textarea> <br>
    <input type="submit" value="Send">
  </form>
  <!-- Assigned variables using php and used POST !-->
  <?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    // Using the above php variables to compose an email message  //

      $email_from = 'alihaider2011@live.ca';
      $email_subject = "New Form submission";
      $email_body = "You have received a new message from the user $name.\n".
  	                            "Here is the message:\n $message";

     // php code to send the email //

      $to = "dutchland2013@hotmail.com";
      $headers = "From: $email_from \r\n";
      $headers = "Reply-To: $visitor_email \r\n";
      mail($to, $email_subject,$email_body, $headers);

      // Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
      ?>



</div>


</body>
</html>
