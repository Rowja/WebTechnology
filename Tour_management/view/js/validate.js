// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var f_name = document.signupForm.fname.value;
    var l_name = document.signupForm.lname.value;
    var address = document.signupForm.address.value;
    var email = document.signupForm.email.value;
    var password = document.signupForm.password.value;
   // var country = document.signupForm.country.value;
    var gender = document.signupForm.gender.value;
    var phone = document.signupForm.phone.value;


    // Defining error variables with a default value
    var fnameErr = lnameErr = addErr = emailErr = genderErr =passwordErr= true;

    // Validate first name
    if (f_name == "") {
        printError("fnameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(f_name) === false) {
            printError("fnameErr", "Please enter a valid first name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    // Validate last name
    if (l_name == "") {
        printError("lnameErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(l_name) === false) {
            printError("lnameErr", "Please enter a valid last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }

    if (address == "") {
        printError("addErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(address) === false) {
            printError("addErr", "Please enter a valid last name");
        } else {
            printError("addErr", "");
            addErr = false;
        }
    }

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
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Password should contain at least one number, one uppercase character and one special character");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }

    // Validate country
    //if (country == "Select") {
       // printError("countryErr", "Please select your country");
   // } else {
       // printError("countryErr", "");
       // countryErr = false;
  //  }

    // Validate gender
    if (gender == "Select") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }

    //if (phone=="")
    //{
       // printError("phoneErr", "Please enter valid phone number");
    //}
   // else if (strlen($_POST["phone"]) != 11) {
          //  $phoneerr = "Your Phone Number Must Contain Exactly 11 Digits !";
    //}

    // Prevent the form from being submitted if there are any errors
    if ((fnameErr || lnameErr ||addErr || passwordErr || emailErr || genderErr ) == true)
     {
        return false;
    }
    else {


    }
};
