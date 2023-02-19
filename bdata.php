<?php
// Connect Ke  MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "MLT_1";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Select all data from the "xyz" table
$sql = 'SELECT * FROM Afrial';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "Staff No: " .  $row["StaffNo"] . "<br>";
    echo "First Name: " .  $row["FName"] . "<br>";
    echo "Last Name: " .  $row["IName"] . "<br>";
    echo "Position: " .  $row["Position"] . "<br>";
    echo "Sex: " .  $row["Sex"] . "<br>";
    echo "DOB: " .  $row["DOB"] . "<br>";
    echo "Salary: " .  $row["salary"] . "<br>";
    echo "BranchNo: " .  $row["branchNo"] . "<br> <hr>";

    // echo "Description: " .  $row["description"] . "<br><br>";
  }
} else {
  echo "0 results";
}

// Close the connection
mysqli_close($conn);
