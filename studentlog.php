<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login to Thesis Library</title>
    <link rel="stylesheet" href="style.css"> <!-- Add your stylesheet link here -->
</head>
<body>

<header>
    <nav class="navbar">
        <div class="logo">
            <h2>Thesis Library</h2>
        </div>
        <div class="navmenu">
            <ul>
                <li><a href="landing.php">Home</a></li>
                <li><a href="supervisor.php">Supervisors</a></li>
                <li><a href="resources1.php">Resources</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="login">
    <h1>Login to Thesis Library</h1>
    <form action="login.php" class="form_design" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="sign.php">Sign up</a></p>
</div>

</body>
</html>

