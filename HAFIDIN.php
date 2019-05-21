<?php
$nameErr =  $nimErr = "";
$name =  $nim = "";
$nimmx = true;

if(isset($_POST['submit'])){
  $name = test_input($_POST["name"]);
  $nim = test_input($_POST["nim"]);

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "Nim is required";
  } else {
    $nim = test_input($_POST["nim"]);
  } 

  if(strlen($_POST['nim']) !=10){
    $nimmx = false;
    $nimErr = "Nim Must Be 10 Character";
  }
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Validation Name & Nim</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nim: <input type="number" name="nim">
  <span class="error">* <?php echo $nimErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>


<?php
if( !empty($name) and !empty($nim) and $nimmx){
  echo "<h2>Good Morning & Welcome</h2>";
  echo "Your Name Is --"; echo $name ."--<br>";
  echo "Your Nim  Is  --"; echo $nim . "--<br>";
  echo "Created By : HAFIDHIN";
    }
?>
