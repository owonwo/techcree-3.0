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
        <div class="alert">
        <?php 
            // var_dump($_GET);
            
            if (@$_GET['auth'] === 'invalid') {
                echo 'The User exists, but the password is invalid';
            } else if(@$_GET['auth'] === 'no-account') {
                echo 'The User does not exist';
            }
        ?>
        </div>
        <input type="text" placeholder="Username"
            name="username"/>
        <input type="text" placeholder="Password"
            name="password"/>
        <input type="submit" value="Submit"/>
    </form>

    <style>
       body {
    background: royalblue;
}

form {
    border-radius: 5px;
    background-color: white;
    box-shadow: 0 0 3px 2px rgba(black, .4);
    max-width: 300px;
    padding: 15px;
    margin: 50px auto;
    display: flex;
    flex-direction: column;
}


form input {
    height: 50px;
    border-radius: 10px;
    border: solid 1px #eee;
    text-indent: 15px;
    margin-bottom: 10px;
    display: block;
}

form input[type=submit]{
    background-color: white;
    border-color: royalblue;
    color: royalblue;
    text-indent: 0;
    font-size: larger;
}

.alert {
    font-size: smaller;
    background-color: indianred;
    padding: 5px;
    border-radius: 3px;
    margin-bottom: 15px;
    font-family: 'Segoe UI', sans;
    color: white;
}
    </style>
</body>
</html>