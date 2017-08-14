!DOCTYPE HTML>  
<html>
<head>
<style>
* {
    max-width: 100%;
    color: #2c2d2b;
}
body{
    margin:0;
    padding: 0;
}
.button-container{
    padding: 20px;
    text-align: center;
}
button.btn{
    background-color: #ff7a6b;
    border-radius: 3px;
    border: none;
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    width: 80%;
}
.center-text{
    text-align: center;
}
.error {color: #ff7a6b;}
input.text-input, textarea.text-input{
    border-radius: 3px;
    border: 1px solid #eeeeee;
    padding: 5px 0;
    margin: 5px 0 5px;
    width: 100%;
}
.panel-container{
    background-color:#4280b8;
    padding: 100px 20px;   
}
.panel{
    background-color: #ffffff;
    border-radius: 3px;
    border: 1px solid #eeeeee;
    display: block;
    margin: 0 auto;
    max-width: 500px;
    padding: 20px;
    width:80%;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $messageErr = "";
$name = $email = $gender = $message = $website = "";

// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if Name was submitted
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }
    // Check if Email was submitted
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }
    // Check if Website was submitted
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
    } else {
        $website = $_POST["website"];
    }
    // Check if Message was submitted
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = $_POST["message"];
    }
    // Check if Gender was submitted
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }
}

?>
<div class="panel-container">
    <div class="panel">
        <h2 class="center-text">Send Me A Message</h2>
        <p><span class="error">* required field.</span></p>
        <form method="post" action="">  
            <label for="name">Name <span class="error">* <?php echo $nameErr;?></span></label>
            <input class="text-input" type="text" name="name" value="<?php echo $name;?>">
            <label for="email">E-mail <span class="error">* <span class="error"> <?php echo $emailErr;?></span></label>
            <input class="text-input" type="email" name="email" value="<?php echo $email;?>">
            <label for="website">Website <span class="error">* <span class="error"><?php echo $websiteErr;?></span></label>
            <input class="text-input" type="text" name="website" value="<?php echo $website;?>">
            <label for="message">Message <span class="error">* <?php echo $messageErr;?></span></label>
            <textarea class="text-input" name="message" rows="5" cols="40"><?php echo $message;?></textarea>
            <label for="gender">Gender  <span class="error">* <?php echo $genderErr;?></span></label>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <div class="button-container">
            <button class="btn" type="submit" name="submit">Send Me A Message</button>
        </div
        </form>
    </div>
</div>
<?php
echo "<h2>Your Input:</h2>";
echo "Name: ".$name;
echo "<br>";
echo "E-mail: ".$email;
echo "<br>";
echo "Website: ".$website;
echo "<br>";
echo "Message: ".$message;
echo "<br>";
echo "Gender: ".$gender;
?>

</body>
</html>
