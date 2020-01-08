<?php
  // This check relies on there being an <input> with the name 'submit' in your form.
  // i.e. <input type="submit" name="submit">Send Form</input>
  if (isset($_POST['submit'])) {
    $to = "abbylee94@outlook.com"; // Update with email.
    $subject = "Application Submission";
    
    // Create new fields here for each field in your form.
    // Ideally you would want some validation here too.
    $field1 = $_POST['name'];
    $field2 = $_POST['email'];
    $field3 = $_POST['message'];
    $field4 = $_POST['field4'];
    $headers = "From: abbilee33.github.io\n";
   
    $message = "Field 1: $field1\nField 2: $field2\nField 3: $field3\nField 4: $field4\n";
   
    echo "Form Sent";
    mail($to, $subject, $message, $headers);
  } else {
    echo "Form failed to send. Please contact me directly.";
  }
?>
