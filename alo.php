<?php
$nameErr = $nimErr = "";
$name = $nim = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "*Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "*Nim is required";
  } else {
    $nim = test_input($_POST["nim"]);
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $nim = test_input($_POST["nim"]);



}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Nim: <input type="text" name="nim">
  <span class="error"> <?php echo $nimErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nim;
echo "<br>";

?>