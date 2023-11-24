function validateForm() {
    var fname = document.forms["signupForm"]["fname"].value.trim();
    var lname = document.forms["signupForm"]["lname"].value.trim();
    var address = document.forms["signupForm"]["address"].value.trim();
    var email = document.forms["signupForm"]["email"].value.trim();
    var password = document.forms["signupForm"]["password"].value.trim();
    var gender = document.forms["signupForm"]["gender"].value.trim();
    var bday = document.forms["signupForm"]["b_day"].value.trim();
    var valid = true;

    if (fname == "") {
        document.getElementById("fnameErr").innerHTML = "Please enter your first name.";
        valid = false;
    } else {
        document.getElementById("fnameErr").innerHTML = "";
    }

    if (lname == "") {
        document.getElementById("lnameErr").innerHTML = "Please enter your last name.";
        valid = false;
    } else {
        document.getElementById("lnameErr").innerHTML = "";
    }

    if (address == "") {
        document.getElementById("addErr").innerHTML = "Please enter your address.";
        valid = false;
    } else {
        document.getElementById("addErr").innerHTML = "";
    }

    if (email == "") {
        document.getElementById("emailErr").innerHTML = "Please enter your email address.";
        valid = false;
    } else if (!email.includes("@") || !email.includes(".")) {
        document.getElementById("emailErr").innerHTML = "Please enter a valid email address.";
        valid = false;
    } else {
        document.getElementById("emailErr").innerHTML = "";
    }

    if (password == "") {
        document.getElementById("passwordErr").innerHTML = "Please enter a password.";
        valid = false;
    } else if (password.length < 6) {
        document.getElementById("passwordErr").innerHTML = "Password must be at least 6 characters long.";
        valid = false;
    } else {
        document.getElementById("passwordErr").innerHTML = "";
    }

    if (gender == "" || gender == "Select your Gender") {
        document.getElementById("genderErr").innerHTML = "Please select your gender.";
        valid = false;
    } else {
        document.getElementById("genderErr").innerHTML = "";
    }

    if (bday == "") {
        document.getElementById("bdayrErr").innerHTML = "Please enter your birthday.";
        valid = false;
    } else {
        document.getElementById("bdayrErr").innerHTML = "";
    }

    return valid;
}
