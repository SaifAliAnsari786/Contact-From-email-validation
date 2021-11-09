<?php 
if(isset($_POST['submit'])){
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // request method is post
    // now handle the form data

    // declare name and email variables
    $first_name =  $last_name = $your_company_name = $email = $your_subject = $message ='';

    if (empty($_POST['first_name'])) {
      $nameError = 'Name should be filled';
    } else {
      $name = trim(htmlspecialchars($_POST['name']));
    }

    if (empty($_POST['last_name'])) {
      $lastnameError = 'Please add your lastName';
    } else {
      $last_name = trim(htmlspecialchars($_POST['name']));
    }

      if (empty($_POST['your_company_name'])) {
      $companynameError = 'Please add your company name';
    } else {
      $your_company_name = trim(htmlspecialchars($_POST['name']));
    }

      if (empty($_POST['email'])) {
      $emailError = 'Please add your email';
    } else {
      $email = trim(htmlspecialchars($_POST['name']));
    }

      if (empty($_POST['your_subject'])) {
      $subjectError = 'Please add your subject';
    } else {
      $your_subject = trim(htmlspecialchars($_POST['name']));
    }

      if (empty($_POST['message'])) {
      $messageError = 'Please add your message';
    } else {
      $message = trim(htmlspecialchars($_POST['name']));
    }

    if (($_POST['message']) && ($_POST['your_subject']) && ($_POST['email']) && ($_POST['your_company_name']) && ($_POST['last_name']) && ($_POST['first_name']) ) {
        // Send email

     $to = "saifalibay20@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
    $your_company_name = $_POST['your_company_name'];
    $subject = $_POST['your_subject'];
    $subject2 = $_POST['your_subject'];
    $message = "Name:-".$first_name ."\n\n"."Your company name:-".$your_company_name. "\n\n" ."Message:-".$_POST['message'];
    $message2 = $first_name . " "  . " Mail Sensubmissiont. Thank you:" . "\n\n" ." we will contact you shortly.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sensubmissiont. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
  }
}
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
<style>

form{
    display: flex;
    justify-content: space-between;
    max-width: 50%;
    margin: 0 auto;
}
input[type=submit] {
  width: 100%;
  background-color: transparent;
  color: #7c7c7d;
  padding: 10px 4px;
  
  border: 1px solid #7c7c7d;
  border-radius: none;
  cursor: pointer;
}
input[type=submit]:hover{
    background-color: black;
}
input[type=text]:focus{
    border: 1px solid black;
}
input[type=text] {
  width: 100%;
  background-color: #fff;
  color: #7c7c7d;
  padding: 1px 2px;
  margin: 8px 0;
  border: 0.5px soild black;
  border-radius: 4px;
  height: 30px;
  
border: 1px solid #eee;
}

.error {
			color:red;
}

</style>
</head>
<body>

    <form action="" method="post">
    <div class="left">
        <input type="text" name="first_name" placeholder=" Your first name "><br>
        <span class="error"><?php if (isset($nameError)) echo $nameError ?></span>


        <input type="text" name="last_name" placeholder=" Your last name"><br>
        <span class="error"><?php if (isset($lastnameError)) echo $lastnameError ?></span>

        <input type="text" name="your_company_name" placeholder="Your company name:"><br>
        <span class="error"><?php if (isset($companynameError)) echo $companynameError ?></span>

          <input type="text" name="email" placeholder=" Your Email"><br>
          <span class="error"><?php if (isset($emailError)) echo $emailError ?></span>
          <input type="submit" name="submit" value="Submit">
    </div>
    <div class="right">
    
         <input type="text" name="your_subject" placeholder="Your subject"><br>
         <span class="error"><?php if (isset($subjectError)) echo $subjectError ?></span>
<textarea rows="5" name="message" cols="30" placeholder=" Your  Message"></textarea><br>
        <span class="error"><?php if (isset($messageError)) echo $messageError ?></span>

    </div>
</form>

</body>
</html>