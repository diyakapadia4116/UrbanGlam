//login form
function validateLogin() {
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    

    // Correct email pattern
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Updated password pattern: min 6 characters, includes uppercase, lowercase, digit, special
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{6,}$/;

    if (!email.match(emailPattern)) {
        alert("Enter a valid email address!");
        return false;
    }

    if (!password.match(passwordPattern)) {
        alert("Password must be at least 6 characters and include an uppercase letter, lowercase letter, number, and special character.");
        return false;
    }

    alert("Login Successfully!")
    window.location.href = "shop.html";
    return false;
}

//signUp form
function validateSignUp() {
    const name = document.getElementById("SignUpName").value.trim();
    const email = document.getElementById("SignUpEmail").value.trim();
    const password = document.getElementById("SignUpPassword").value;
    const Cpassword = document.getElementById("Cpassword").value;

    if (name === ""){
        alert("Enter a name!");
        return false;
    }
    //email pattern
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // password pattern: min 6 characters, includes uppercase, lowercase, digit, special
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{6,}$/;

    if (!email.match(emailPattern)) {
        alert("Enter a valid email address!");
        return false;
    }

    if (!password.match(passwordPattern)) {
        alert("Password must be at least 6 characters and include an uppercase letter, lowercase letter, number, and special character.");
        return false;
    }

    if(Cpassword !== password){
        alert("Confirm Password should be same as Password!");
        return false;
    }

    alert("SignUp Successfully!");
    window.location.href = "shop.html";
    return false;
} 



