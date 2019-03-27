<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <form method="post" action="process.php">
        <input type="text" placeholder="Username"
            name="username"/>
        <input type="text" placeholder="Password"
            name="password"/>
        <input type="submit" value="Submit"/>
    </form>
    <?php 
        // var_dump($_GET);
        
        if (@$_GET['auth'] === 'invalid') {
            echo 'The User exists, but the password is invalid';
        } else if(@$_GET['auth'] === 'no-account') {
            echo 'The User does not exist';
        }
    ?>
</body>
</html>