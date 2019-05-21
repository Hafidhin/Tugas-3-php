<?php
$nameErr =  $nimErr = "";
$name =  $nim = "";
$nimmx = true;

if(isset($_POST['submit'])){
  $name = test_input($_POST["name"]);
  $nim = test_input($_POST["nim"]);

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  
  if (empty($_POST["nim"])) {
    $nimErr = "Nim is required";
  } 

  if(strlen($_POST['nim']) >10){
      $nimmx = false;
      $nimErr = "Nim Cannot More Than 10 Number";
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
<h5>* Required Field</h5>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name; ?>" > *
  <?php echo $nameErr; ?>
  <br><br>
  NIM: <input type="number" name="nim" value="<?php echo $nim; ?>" > *
  <?php echo $nimErr; ?>
  <br><br>
  <input type="submit" name="submit" value="SUBMIT">
</form>


<?php
if( !empty($name) and !empty($nim) and $nimmx){
  echo "<h2>Good Morning & Welcome</h2>";
  echo "Your Name Is #"; echo $name ."#<br>";
  echo "Your Nim  Is  #"; echo $nim . "#";
    }
?>