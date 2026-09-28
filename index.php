<?php
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- REGISTER (hidden at start) -->
<div class="container" id="signUp" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <label for="fName">First Name</label>
        </div>

        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="reg-email" placeholder="Email" required>
            <label for="reg-email">Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="reg-password" placeholder="Password" required>
            <label for="reg-password">Password</label>
        </div>

        <input type="submit" class="button" value="Sign Up" name="SignUp">
    </form>

    <p class="or">--------or--------</p>

    <div class="icons">
        <a href="https://accounts.google.com" target="_blank" rel="noopener"><i class="fab fa-google"></i></a>
        <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>
    </div>

    <div class="links">
        <p>Already have an account?</p>
        <button type="button" id="signInButton">Sign In</button>
    </div>
</div>

<!-- LOG IN -->
<div class="container" id="signIn">
    <h1 class="form-title">Log In</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="log-email" placeholder="Email" required>
            <label for="log-email">Email</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="log-password" placeholder="Password" required>
            <label for="log-password">Password</label>
        </div>

        <p class="recover">
            <a href="#">Recover Password</a>
        </p>

        <input type="submit" class="button" value="Sign In" name="SignIn">
    </form>

    <p class="or">--------or--------</p>

    <div class="icons">
        <a href="https://accounts.google.com" target="_blank" rel="noopener"><i class="fab fa-google"></i></a>
        <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>
    </div>

    <div class="links">
        <p>Don't have an account yet? </p>
        <button type="button" id="signUpButton"> Sign Up</button>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
