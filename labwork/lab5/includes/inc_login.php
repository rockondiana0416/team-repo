<?php

#declare variables
$email = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store post data into our variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate
    if(empty($email)) {
         echo "<p class=error>Please enter a valid email address.</p>";
                      }
    if(empty($password)) {
       echo "<p class=error>Please enter a password!</p>";
   }

if($email && $password){
    echo"<p class=success>Login was successful!</p>";
}
   else{
       echo"<p class=error>Please enter email address and password to login!</p>";
       echo"<p class=error>The submitted email address and password does not match those on file!</p>";
       echo"<p class=error>Try again!</p>";
   }
}
?>

           <form action="login.php" method="post">
           <p><label for ="email">Email Address:</label>
            <input type="email" name="email" value="<?php echo $email; ?>"></p>
            <p><label for = "password">Password:</label>
            <input type="password" name="password" value="<?php echo $password; ?>"></p>

          <button>Log In!</button>
          </form>

