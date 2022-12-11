<?php 
    session_start();

    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

?>

<html>
<head>
    <title>PROFILE</title>
</head>
<body>
<fieldset>
            <legend>PROFILE</legend>
                <table>
                <tr>
                        <td>ID: </td>
                        <td><?php echo $_SESSION['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td><?php echo $_SESSION['username']; ?></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><?php echo $_SESSION['password']; ?></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                </table>
            </fieldset>
        <br><br>
        <a href="../views/home.php">Back to homepage</a>

</body>
</html>