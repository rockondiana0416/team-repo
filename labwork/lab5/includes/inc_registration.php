<?php # Script HW5 - inc_registration.php
$page_title = 'Registration Confirmation';
?>

<?php #declare variables
    $first_name = "";
    $last_name = "";
    $email = "";
    $password = "";
    $confirm_password = "";


       echo "<h1>Registration Form</h1>";
       echo "<h2>Register today to help clean the world's oceans!</h2>";


      #Check for form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Store post data into our variables
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


      #form validation
   if(empty($first_name)) {
       echo "<p class=error>Please enter your first name!</p>";
   }

   if(empty($last_name)) {
       echo "<p class=error>Please enter your last name!</p>";
   }

   if(empty($email)) {
        echo "<p class=error>Please enter your email address!</p>";
   }

   if(empty($password)) {
       echo "<p class=error>Please enter a password!</p>";
   }

   if(empty($confirm_password) || $confirm_password != $password) {
       echo"<p class=error>Please confirm your password!</p>";
   }



    if($first_name && $last_name && $email && $password && $confirm_password === $password) {
        echo"<p class=success>You registered successfully! This is the information you provided:<br>" . "First Name:" . " " . $first_name .
        "<br>" . "Last Name:" . " " . $last_name . "<br>" . "Email Address:" . " " . $email . "<br>" . "Password:" .
        " " . $password . "</p>";
    }
    else{
        echo"<p class=error>Passwords did not match! Please try again!</p>";
    }
    }
?>


        <form action="register.php" method="POST">
            <p><label for ="first_name">First Name:</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>"></p>
           <p><label for ="last_name">Last Name:</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>"></p>
           <p><label for ="email">Email Address:</label>
            <input type="email" name="email" value="<?php echo $email; ?>"></p>
            <p><label for = "password">Password:</label>
            <input type="password" name="password" value="<?php echo $password; ?>"></p>
            <p><label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>"></p>

          <button>Register!</button>
        </form>