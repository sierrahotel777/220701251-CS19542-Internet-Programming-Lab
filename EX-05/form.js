function validate() {
    // Get values from the form
    var fname = document.getElementById("f1").value.trim();
    var lname = document.getElementById("f2").value.trim();
    var email = document.getElementById("f3").value.trim();
    var gender = document.querySelector('input[name="gender"]:checked');
    var phone = document.getElementById("phone").value.trim();
    var dob = document.getElementById("db").value;
    var password = document.getElementById("ps").value;
    var confirmPassword = document.getElementById("cps").value;

    // Validate first name
    if (fname === "") {
        alert("First name is required.");
        return false;
    }

    // Validate last name
    if (lname === "") {
        alert("Last name is required.");
        return false;
    }

    // Validate email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate gender
    if (!gender) {
        alert("Please select a gender.");
        return false;
    }

    // Validate phone number
    if (phone === "") {
        alert("Contact number is required.");
        return false;
    }
    if (!/^\d{10}$/.test(phone)) { // Check for exactly 10 digits
        alert("Contact number must be exactly 10 digits.");
        return false;
    }

    // Validate date of birth
    if (dob === "") {
        alert("Date of birth is required.");
        return false;
    }

    // Validate password
    if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }

    // Validate confirm password
    if (confirmPassword === "") {
        alert("Please confirm your password.");
        return false;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    // If all validations pass
    return true;
}

function showpass(inputId) {
    var x = document.getElementById(inputId);
    x.type = (x.type === "password") ? "text" : "password";
}
