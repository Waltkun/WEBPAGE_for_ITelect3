const signUpButton = document.getElementById('signUpButton'); 
const signInButton = document.getElementById('signInButton'); 
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');

// "Sign Up" Log in to Register
signUpButton.addEventListener('click', function () {
    signInForm.style.display = 'none';
    signUpForm.style.display = 'block';
});

// "Sign In" Register to Log in
signInButton.addEventListener('click', function () {
    signUpForm.style.display = 'none';
    signInForm.style.display = 'block';
});

