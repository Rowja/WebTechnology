function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var fname = document.updateForm.f_name.value;
    var lname = document.updateForm.l_name.value;
    var uname = document.updateForm.u_name.value;
    var email = document.updateForm.u_email.value;
    var password = document.updateForm.u_pass.value;
    var birthday = document.updateForm.u_birthday.value;
    // var country = document.signupForm.country.value;
    // var gender = document.signupForm.gender.value;

    // Defining error variables with a default value
    var fnameErr=lnameErr=emailErr=unameErr=passwordErr=bdErr =true;

    // Validate first name
    if (fname == "") {
        printError("fnameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(fname) === false) {
            printError("fnameErr", "Please enter a valid first name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    // Validate last name
    if (lname == "") {
        printError("lnameErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(lname) === false) {
            printError("lnameErr", "Please enter a valid last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }
    if (uname == "") {
        printError("unameErr", "Please enter your username");
    } else {

            printError("unameErr", "");
            fnameErr = false;
    }
    //
    // Validate email address
    if (email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate password
    if (password == "") {
        printError("passwordErr", "Please enter your password");
    } else {

            printError("passwordErr", "");
            passwordErr = false;
    }

    // Validate country
    if (birthday == "") {
        printError("bdErr", "Please enter your Birthday");
    } else {
        printError("bdErr", "");
        countryErr = false;
    }
    //
    // // Validate gender
    // if (gender == "Select") {
    //     printError("genderErr", "Please select your gender");
    // } else {
    //     printError("genderErr", "");
    //     genderErr = false;
    // }

    // Prevent the form from being submitted if there are any errors
    if ((fnameErr||lnameErr||emailErr||unameErr||passwordErr||bdErr) == true)
     {
        return false;
    }
    else {


    }
};
