<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
h2{
    color:#ffbf00;
}
body {
    background-color:black;
    color: #ffe699;
    font-size:20px;
    font-family:'Lucida Sans';
    word-spacing: 2px;
    padding: 35px;
    margin : 25px;
} 
#b1{
    height: 35px;
    width: 100px;
    color : black;
    border:none;
    border-radius: 5px;
    font-size: medium;
    font-weight:550;
}
#t1,#t2,#t3{
    height:20px;
    width:200px;
}
</style>
</head>
<body>  
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if (empty($_GET["name"])) { $nameErr = "Name is required";} 
else {
$name = test_input($_GET["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {$nameErr = "Only letters and white space allowed";}
}
if (empty($_GET["email"])) {
$emailErr = "Email is required";} else {
$email = test_input($_GET["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";}}
if (empty($_GET["website"])) {
$website = "";
} else {
$website = test_input($_GET["website"]);   
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
$websiteErr = "Invalid URL";}}
if (empty($_GET["comment"])) {
$comment = "";} 
else {$comment = test_input($_GET["comment"]);}
if (empty($_GET["gender"])) {
$genderErr = "Gender is required";} 
else {$gender = test_input($_GET["gender"]);}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;}
?>
<h2>PHP FORM (GET METHOD)</h2>
<p><span class="error">* required field</span></p>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<table> 
<tbody>
<tr><td><label for="name">Name</label></td><td><input id="t1" type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span></td></tr>
<tr><td><label for="email">E-mail</label></td><td> <input id="t2" type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span></td></tr>
<tr><td><label for="website">Website</label></td><td> <input id="t3" type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span></td></tr>
<tr><td><label for="comment">Comment</label></td><td> <textarea  name="comment" rows="4" cols="30"><?php echo $comment;?></textarea></td></tr>
<tr><td><label for="gender">Gender</label></td><td>
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
<span class="error">* <?php echo $genderErr;?></span></td></tr>
</tbody>
</table><br>
<input id="b1" type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Received Input:</h2>";
echo $name."<br>";
echo $email."<br>";
echo $website."<br>";
echo $comment."<br>";
echo $gender."<br>";
?>
</body>
</html>