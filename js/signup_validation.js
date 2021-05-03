var form=document.getElementById('form')
var first = document.getElementById("first");
var last = document.getElementById("last");
var email = document.getElementById("email");
var pass1 = document.getElementById("password");
var pass2 = document.getElementById("password_retype");
var org = document.getElementById("organization");

// adding an event listener so that validation is only done when user clicks signup button
form.addEventListener('submit', function(event){

  var firstV = first.value.trim() ;
  var lastV = last.value.trim() ;
  var emailV = email.value.trim() ;
  var pass1V = pass1.value.trim() ;
  var pass2V = pass2.value.trim() ;
  var orgV = org.value.trim() ;

  checkValid(first,firstV,1,event)
  checkValid(last,lastV,1,event)
  checkValid(email,emailV,2,event)
  checkValid(pass1,pass1V,3,event)
  checkValid(pass2,pass2V,3,event)
  checkValid(org,orgV,3,event)
  checkPass(pass2,pass1V,pass2V,event)
});

//         Validating that only alphabetical letters are used in name
function checkChar(str) {
  var len = str.length;
  for (i = 0; i < len; i++) {
    code = str.charCodeAt(i);
    if (!(code > 64 && code < 91) && !(code > 96 && code < 123)) {
      return false;}
  }
  return true;
};

//         Validating that element is not empty
function checkEmpty(str){
  if (str=="") {
    return false;
  }else{
    return true;
  }
};

//         Validating email(no illegal characters and an @ is present)
function checkEmail(str){
  if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(str))
  {
    return true;
  }else{
    return false;
  }
}

//         Validating password similarity
function checkPass(elem2,value1,value2,event){
  if (value1 == value2){
    return true;
  }else{
    event.preventDefault() ;
    elem2.value="";
    elem2.style.borderColor="red";
    elem2.placeholder="Passwords do not match!";
    return false;
  }
}

//         Validation of all element attributes
function checkValid(element,value,type,event){
  if (type == 1){
    if (checkEmpty(value)){
      element.style.borderColor="black";
      if (checkChar(value)){
        element.style.borderColor="black";
        return true;
      }else{
        event.preventDefault() ;
        element.value="";
        element.style.borderColor="red";
        element.placeholder="The name can only be alphabetical!";
        return false;
      }
    }else{
      event.preventDefault() ;
      element.value="";
      element.style.borderColor="red";
      element.placeholder="Name field cannot be empty!";
      return false;
    }}
  if (type == 2) {
    if (checkEmpty(value)){
      element.style.borderColor="black";
      if (checkEmail(value)){
        element.style.borderColor="black";
        return true;
      }else{
        event.preventDefault() ;
        element.value="";
        element.style.borderColor="red";
        element.placeholder="Please enter a valid email!";
      }
    }else{
      event.preventDefault() ;
      element.value="";
      element.style.borderColor="red";
      element.placeholder="Email field cannot be empty!";
      return false;
    }
  }
  if (type == 3) {
    if (checkEmpty(value)){
      element.style.borderColor="black";
      return true;
      }else{
      event.preventDefault() ;
      element.value="";
      element.style.borderColor="red";
      element.placeholder="Field cannot be empty!";
      return false;
    }
  }}
