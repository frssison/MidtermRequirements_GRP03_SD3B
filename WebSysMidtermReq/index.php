<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div id="login">
        <form action="login.php" method="post" class="indexform">
            <h1>Group 3 : Midterm Assessment</h1>
            <h2>User Login</h2>
            <?php   //This lets us have different values depending on conditions by '$_GET'ing that result of a condition from a session. 
                    //<p> class toh btw
                if (isset($_GET['error'])) {
                    echo '<p class="error">' . $_GET['error'] . '</p>';
                }
            ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            <div>
                <button type="submit">Login</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>