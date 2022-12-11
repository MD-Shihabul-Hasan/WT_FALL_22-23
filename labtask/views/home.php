<?php 
    session_start();

    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }

?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
    
    
        <h1>Welcome <?php echo $_SESSION['username']; ?>!</h1>
        <a href="../controllers/profile.php">Profile</a>
        <br>
        <a href="../controllers/logout.php">Logout</a>
        <br>
        <a href="../controllers/dbprint.php">Database Table</a>
</body>
</html>