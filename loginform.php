 <!-- php code for the login.html page -->

 <?php

   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $tcz = $_POST["tcz"];
   $ts = filter_input(INPUT_POST, "ts", FILTER_VALIDATE_INT);
   $login = $_POST["login"];
   $terms = filter_input(INPUT_POST,"terms",FILTER_VALIDATE_BOOLEAN);

  // checking the terms box 
    if (! $terms) {
    	die("Terms must be accepted!");
    } else {
    	// after successful check in, return to index page.
    	 // header("location: index.html");
    }


  // calling the database

  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login_db";

  // Create connection
  $conn = mysqli_connect("localhost", "root", "", "login_db");

  // Check connection
  if ($conn ===false) {
  	 die("ERROR: Could not connect. "
  	 	. mysqli_connect_error());
  }

  //Taking all 7 values from data(input)
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];
  $tcz = $_REQUEST['tcz'];
  $ts = $_REQUEST['ts'];
  $login = $_REQUEST['login'];


  // Performing insert query excution
  // here our table name is login

  $sql = "INSERT INTO login (name,email,phone,tcz,ts,login)
  	VALUES ('$name', '$email', '$phone', '$tcz', '$ts','$login')";
  	if (mysqli_query($conn, $sql)) {
  		echo "New record has been added successfully!";
  	} else {
  		echo "Error: " . $sql . ":-" . mysqli_error($conn);
  	}
  	mysqli_close($conn);
?>
<!-- link after successful updating -->
<br>
<a href="login.html">Next Person</a>
<a href="index.html">Retun to home page</a>