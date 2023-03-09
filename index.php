<!DOCTYPE HTML>  
<html>
<head>
<script>
function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
  //  return false;
  }

  let y= document.forms["myForm"]["email"].value;
  if (y == "")  {
    alert("Email is required");
  } 
/*
  let y= document.forms["myForm"]["email"].value;
  if (y == "") {
    alert("Email must be filled out");
    return false;
  }

  let z = document.forms["myForm"]["gender"].value;
  if (z== male) {
    alert("You are male");
  }
  elseif(z==female){
    alert("You are female");
  }
  else{
    alert("You choose others");
  }
*/

}
function date(){
    document.getElementById("add").innerhtml=Date();
    
}
</script>
</head>
<body>  

<?php
// define variables and set to empty values
$id=$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id=test_input($_POST["id"]);
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p id="add">What is time ?</p>
<form name="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">  
  id:   <input type="number" name="id"> <br><br>
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="email" name="email">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit" onclick="validateForm()" onclick="date()">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>
<?php
$name=$_POST['name'];
if(!preg_match("/^[A-Z a-z]*$/",$name)){
    echo "Only letter and white space is allowed";
}else{
    echo $name;
}
/*
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
*/

?>


</body>
</html>