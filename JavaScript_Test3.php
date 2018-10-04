<!DOCType <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--<meta name = "author" content = "Pawan Prabhat"> -->
    <title>JavaScript Example by Pawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" media="screen" href="main .css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>My &#x20B9; Javascript </h1>
    <button type="button" onclick="document.getElementById('demo').innerHTML = Date()"> &euro; Click to get Date and Time</button>
    <p id= "demo"></p>
    <p id= "demo1"></p>
<script>
    document.getElementById("demo1").innerHTML = Date();
    document.getElementById("demo1").style.fontFamily = "Courier";
    document.getElementById("demo1").style.color = "red";
</script>
<script>
function onoffswitch(sw) {
        var pic
        if (sw == 0) {
            pic = "pic_bulboff.gif" }
        else    {
            pic = "pic_bulbon.gif"
        }
        
        document.getElementById("bulb").src = pic;
    }
</script>

<img id=bulb src="pic_bulboff.gif" height="200" width="200">
<p>
    <button type = "button" onclick="onoffswitch(1)">Light On</button>
    <button type = "button" onclick="onoffswitch(0)"> Light Off</button>
</p>
<form>
    Input your first name
    <input type="text" name="first Name" \>
    Input your password
    <input type="password" name="Password" \>
    Input your email
    <input type="email" name="emailsdsdfsdaf" \>
    Select a file: 
    <input type="file" name="myFile">

    <input type="radio" name="first Name" \>
</form>

<?php echo="My first PHP script";?>
<?php ECHO "my first Php";?>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'guest';
         $dbpass = 'guest123';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);
?>

</body>
</html>