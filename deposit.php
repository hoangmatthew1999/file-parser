<?php
  session_start();
  //connnect to localhost
  $conn = mysqli_connect("localhost","root","","userbank");
  echo "connected! <br>";
  //check connection
  if(!$conn){
      die("Connection failed" . mysqli_connect_error());
  }

    $userID = $_SESSION['userID'];
//$userID =167053; //was using this line for testing (to avoid having to log in)
$message = "";

$form = "SELECT * FROM accounts WHERE userID='$userID'";
$formresult = mysqli_query($conn, $form);

if(isset($_POST['SubmitButton'])){ //check if form was submitted
        $amount = $_POST['amount']; //get input text
        $account = $_POST['account'];


        $sql = "SELECT acctNum, balance FROM accounts WHERE userID='$userID' AND acctName = '$account' ";
        $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);

            $acctNum = $row["acctNum"];
            $balance = $row["balance"];

        $newbalance = $balance + $amount;

        $sql2 = "UPDATE accounts SET balance='$newbalance' WHERE userID='$userID'AND acctName = '$account'" ;

              if ($conn->query($sql2) === TRUE) {
                 echo "Record updated successfully";
             } else {
                 echo "Error updating record: " . $conn->error;
             }
  //$message = "Success! You deposited $".$amount " into " .$account;
}

  // Close connection
  mysqli_close($conn);
?>

<html>
  <head> <!This is the title of the webpage>
    <meta charset="utf-8">
    <title>Deposit</title>
    <link rel="stylesheet" href="deposit.css">
  </head>

  <body>  <!This is the title page>
      <div class = "row">
          <div id = "grad1", class = "header"><h1>
           <p class = "custom1"> BANK NAME</p>
         </h1></div>
          <div id = ""
      		<div class="topnav">
      			<a href="" style="float: right;"> Sign Out</a>
      			<a href="userpage2.php" style="float: left;"> Return</a>
      				</div>
      			</div>

          <div class = "rightcolumn">
                <div class= "account">
                       <h2> Navigation </h2>
                       <a href="userpage2.php" style="float: left;"> Home</a>
                       <a href= "" style= "float: left;"> Account Settings</a>
                       <a href= "" style= "float: left;"> </a>
                </div>
          </div>

            <div class = "leftcolumn">
                  <div class = "column">
                        <h1> Deposit to Account</h1>
                        <form action="" method="post">
                              <p> Account name: <select id="account" name="account">
                              <?php
                                        while($row1 = $formresult->fetch_assoc()):;?>
                                        <option value="<?php echo $row1["acctName"];?>"><?php echo $row1["acctName"];?></option>
                                  <?php endwhile;?>
                                </select></p>
                          <p>Amount ($): <input type="text" name = "amount"> </p>
                          <input type="submit" name = "SubmitButton">
                        </form>
                        <?php echo $message; ?>
                       </div>
                  </div>

  </body>
</html>
