<!DOCTYPE html>

<html>
    <head>
        <?php
        try{
            require_once 'ConnectToDB.php';
        }
        catch(Exception $ex){
            $error = $ex->getMessage();
        }
        ?>
        <meta charset="UTF-8">
        <title>Testing</title>
    </head>
    <body>
        <h1>Testing Mysql Connection</h1>
        <?php
        if(isset($error)){
            echo "<p>$error</p>";
        }
        else{
            echo "<p>Connected</p>";
        }      
        ?>
    </body>
</html>