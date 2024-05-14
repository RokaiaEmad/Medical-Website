function check() {
  let firstname = document.forms["myForm"]["registerFirstName"].value;
  let lastname = document.forms["myForm"]["registerLastName"].value;
  let Age = document.forms["myForm"]["registerAge"].value;
  let password = document.forms["myForm"]["registerPassword"].value;
  let confirm = document.forms["myForm"]["registerConfirmPassword"].value;
  let mail = document.forms["myForm"]["registeremail"].value;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let mobile = document.forms["myForm"]["registerPhoneNumber"].value;

  if (firstname.length < 2) {
    alert("please enter more than 1 letters for you first name");
    return false;
  }
  if (!isNaN(firstname)) {
    alert("please enter  letters only");
    return false;
  }
  if (lastname.length < 2) {
    alert("please enter more than 2 letters for your last name");
    return false;
  }
  if (!isNaN(lastname)) {
    alert("please enter letters only for you last name");
    return false;
  }
  if (isNaN(Age) || Age < 16 || Age > 100) {
    alert("Age must be between 16 and 100 years only");
    return false;


  }
  if (password.length < 8) {
    alert("password must be at least 8 characters")
    return false;
  }

  if (password.length > 18) {
    alert("password must be at most 18 characters")
    return false;
  }
  if (password != confirm) {
    alert("password and confirm password must be same")
    return false;
  }
  var pwd = /^(?=.*[a-z])/;
  var pwd1 = /^(?=.*[A-Z])/;
  var pwd2 = /^(?=.*[0-9])/;
  var pswd3 = /^(?=.*[!#$%&? "])/
 /* if (pwd.test(password) == false) {
    alert("Password Should contain atleast One lowerCase letter");
    return false;*/


  }

  if (pwd1.test(password) == false) {
    alert("Password Should contain atleast One UpperCase letter");
    return false;


  }
  if (pwd2.test(password) == false) {
    alert("Password Should contain atleast One Number");
    return false;


  }
  if (pswd3.test(password) == false) {
    alert("Password Should contain atleast One Special Character");
    return false;

  }
  if (!mail.match(mailformat)) {
    alert("please enter a valid mail");
    return false;
  }
  if (mobile.length != 11) {
    alert("phone number must contain 11 numbers")
    return false;
  }
  if (isNaN(mobile)) {
    alert("please enter number only")
    return false;
  }

}



