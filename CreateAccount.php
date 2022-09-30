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
        <script type="text/javascript">
        function validateName() {

var name = document.getElementById('contact-name').value;

if(name.length == 0) {

  producePrompt('Name is required', 'name-error' , 'red')
  return false;

}
if(name.length < 2){
  producePrompt('Name is atleast two characters', 'name-error','red')
  return false;
}

if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {

  producePrompt('First and last name, please.','name-error', 'red');
  return false;

}

producePrompt('green');
return true;

}

function validatePassword() {

var password = document.getElementsByName('password').value;

if(password.length == 0) {
producePrompt('password required.', 'password_error', 'red');
return false;
}

if(password.length < 2) {
producePrompt('password must a minimum of 5 and maximum of 5 characters .', 'password-error', 'red');
return false;
}


producePrompt( 'green');
return true;

}

function validateEmail () {

var email = document.getElementsByName('user_email').value;

if(email.length == 0) {

producePrompt('Input a valid email.','email-error', 'red');
return false;

}


producePrompt('Valid', 'email-error', 'green');
return true;

}
</script>        
<div class="Sign-up-container">
    <div class="Sign-upBox">
    <h3>Create Account</h3>
    <form action="Registration.php" method="post">
        <div class="form-group">
            <br><label>Username</label><br>
            <input type="text" name="username" class="form-requirement" placeholder="type username" required>
        </div>
        <div class="form-group">
            <br><label>Email</label><br>
            <input type="email" name="user_email" class="form-requirement" placeholder="type email address" onkeyup='validateEmail()' required>
            <span class='error-message' id='email-error'></span>
        </div>
        <div class="form-group">
            <br><label>Password</label><br>
            <input type="password" name="password" class="form-requirement" placeholder="type password" onkeyup='validatePassword()' required >
            <span class='error-message' id='password-error'></span>
        </div>
        <button type="submit" class="muss">Create </button>
        <a href="login.php">Back</a>
        </form>

    </div>
    
</div>       
</body>
</html>