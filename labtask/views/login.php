<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login Page</title>
</head>
<body>
        <form method="post" action="../controllers/loginCheck.php">
            <fieldset>
                <legend>Login</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        
                        <td><input type="checkbox" name="password" value=""></td>
                        <td>Remember Me</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Submit">
                            <a href="registration.php">Registration</a>
                        </td>
                        
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>