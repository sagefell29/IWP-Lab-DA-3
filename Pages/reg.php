 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>

 <?php
$fname = $_POST['FName'];
$lname = $_POST['LName'];
$Mname = $_POST['MName'];
$name = $fname + $Mname + $lname;
$passwd = $_POST['password'];
$cn = "+91" + $_POST['contactno'];
$acn = "91" + $_POST['acontactno'];
$age = $_POST['Age'];
$email = $_POST['Email'];
$bdate = $_POST['bdate'];
$sex = $_POST['Sex'];
$add = $_POST['hno'] + ", " + $_POST['cname'] + ", " + $_POST['lname'] + ", " + $_POST['cityname'] + ", " + $_POST['sname'];
$ctype = $_POST['ctype'];
$cnumber = $_POST['cnumber'];
$cname = $_POST['cardname'];
$pref = $_POST['pref1'];
$hoi = $_POST['pref2'];

echo "Name is" + $name;
echo "Password is" +  $passwd;
echo "Primary Contact Number is" + $cn;
echo "Alternate Contact Number is" + $acn;
echo "Age is" + $age;
echo "Email is" + $Email;
echo "Birth Date is" + $bdate;
echo "Sex is" + $sex;
echo "Address is" + $add;
echo "Card Name is" + $cname;
echo "Card Number is" + $cnumber;
echo "Your Preferences are" + $pref;
echo "Your History of Illnesses is" + $name;
?> 

 </body>
 </html>   
