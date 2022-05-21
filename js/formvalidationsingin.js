function clearErrors() {
    errors = document.getElementsByClassName("formerror");
    for (let item of errors) {
      item.innerHTML = "";
    }
  }
  function seterror(id, error) {
    //sets error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName("formerror")[0].innerHTML = error;
  }

  function validateForm() {
    var returnval = true;
    clearErrors();
    //perform validation and if validation fails, set the value of returnval to false
    var name = document.forms["myForm"]["fname"].value;
    var email = document.forms["myForm"]["femail"].value;
    var password = document.forms["myForm"]["fpass"].value;

    if (name.length < 5) {
      seterror("name", "*Name shoud be greater than 5 character");
      returnval = false;
    }

    if (email.length > 25) {
      seterror("email", "*Email length too long for input Email");
      returnval = false;
    }
    
    if(email.length < 11){
        seterror("email","*Email should in abc@gmail.com format")
    }

    if (password.length < 9) {
      seterror("password", "*Password should be atleast 9 character long");
      returnval = false;
    }
    
    return returnval;
  }