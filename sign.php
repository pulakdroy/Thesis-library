<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1">
    <title> Login and Signup </title>
    <link rel="stylesheet" href="style.css">
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
   <div class ="singup">
        <h1>Sign up</h1>

        <form action="create_account.php"   method="post">
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Student ID</label>
            <input type="text" name="s_id" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Phone number</label>
            <input type="text" name="phn" required>
            <label>Department</label>
            <input type="text" name="dept" required>
            <label>Password </label>
            <input type="password" name="password" required>
            <input type="submit" name="submit" value="Submit">
        </form>  
        <p> Alrady have an account?<a href="studentlog.php">Login</a> </p>
    </div>   
    </div>
    <form>
</body>
</html>