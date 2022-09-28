<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" type="text/css" href="stylesheet3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
</head>
<body>
<section class="nav">
        <nav>
            <div class="logo" id="logo">
                <h1>
                    <a>University Guardian</a>
                    <h2>Your Second Parent</h2>

                </h1>
            </div>
        </nav>
        
<div class="Sign-up-container">
    <div class="Sign-upBox">
    <h3>Create Account</h3>
    <form action="Registration.php" method="post">
        <div class="form-group">
            <br><label>Username</label><br>
            <input type="text" name="User" class="form-requirement" placeholder="type your username" required>
        </div>
        <div class="form-group">
            <br><label>Password</label><br>
            <input type="password" name="password" class="form-requirement" placeholder="type your password" required>
        </div>
        <button type="submit" class="muss">Create </button>
        <a href="login.php">Back</a>
        </form>

    </div>
    
</div>       
</body>
</html>