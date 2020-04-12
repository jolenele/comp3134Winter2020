<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username" value="<?php echo $username;?>">
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    Password: <input type="password" name="password" value="<?php echo $password;?>">
    <span class="error"> <?php echo $passwordErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    </form>
<?php

session_start();
$session = $_SESSION['confirmation'];
$post = $_POST['confirmation'];
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!$username != "host") {
      $usernameErr = "Invalid username";
    }
    else{
        $usernameErr = "Username is correct";
    }
  }

  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (!$password != "pass") {
      $passwordErr = "Invalid password";
    }
    else{
        $passwordErr = "Password is correct";
    }
  }
}
?>
