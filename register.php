<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>

  <link rel="stylesheet" href="registerStyle.css">
  </head>
  <body>
    <h1>Sign up for an Account</h1>


<div id= "form">
    <form action = "register.php" method="post">
        <div class = "form-group">
          <label for ="First name"> First name:</label>
          <input name = "fname" type = "text">
        </div>
        <div class = "form-group">
          <label for = "Last name"> Last name: </label>
          <input name = "lname" type = "text">
      </div>
      <div class = "form-group">
        <label for = "Username"> Username: </label>
        <input name = "username" type = "text">
      <div class = "form-group">
        <label for ="Password">Password: </label>
        <input type ="password" name="password">
      </div>
      <div class = "form-group">
        <label for = "Email"> Email: </label>
        <input name = "email" type = "text">
      </div>
        <input type = "submit" name = "submit" id = "submit">

   </form>
</div>
<?php
  if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["username"])
      && isset($_POST["password"]) && isset($_POST["email"])){
    if ($_POST["fname"] && $_POST["lname"] && $_POST["username"] && $_POST["password"]
        && $_POST["email"]){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
<<<<<<< HEAD
    $acctnum = rand(100000,199999); //expand random number range if needed
=======
    $acctnum = rand(100000,199999);
>>>>>>> 01256dc1bd0a1e511fb752ad8bd665409de8f4b3

    //Create connection
    $conn = mysqli_connect("localhost", "root", "", "userbank"); //change "userbank" based on database name

    //Check connection
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

    //Register user
    $sql = "INSERT INTO bankaccount (fname, lname, username, password, email, acctnum) VALUES
            ('$fname','$lname','$username','$password','$email','$acctnum')";

    // echo $sql;
    $results = mysqli_query($conn, $sql);

    if ($results) {
<<<<<<< HEAD
        echo "Registered."; //As a toast message
=======
        echo "Registered.";
>>>>>>> 01256dc1bd0a1e511fb752ad8bd665409de8f4b3
    } else {
        echo mysqli_error($conn);
      }

      mysqli_close($conn); // close connection


    } else {
      echo "A field is empty."; //Also as a toast message
    }
  } //else {
      //echo "Form was not submitted.";
    // }
    ?>
  </body>
</html>
