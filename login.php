<!DOCTYPE  html>
<html>
<head>
	<title>login page</title>
</head>
<body style="background-color: #f1d6a9">
<h1>Sign In</h1>

<form method="POST">
    <input type="text" name="email" placeholder="Email"required><br>
    <input type="password" name="pwd" placeholder="Password" required><br>
    <button type="submit" name="submit"> Login </button><br>

 <?php

session_start();

 $_SESSION['mail'];
 $_SESSION['pass'];
 $_SESSION['array_data'];

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(isset($_POST["email"]) && isset($_POST["pwd"])){
            $file = fopen('file/sam.json', 'r');
            
    }

    ?>
</form>
</body>
</html>