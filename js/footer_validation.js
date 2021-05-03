var form=document.getElementById('newsletter')
var email = document.getElementById("news_email");

// adding an event listener so that validation is only done when user clicks signup button
form.addEventListener('submit', function(event){
  var emailV = email.value.trim() ;

  checkValid(email,emailV,event);
});
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


//         Validation and styling of all element attributes
function checkValid(element,value,event){
    if (checkEmpty(value)){
      element.style.borderColor="black";
      if (checkEmail(value)){
        element.style.borderColor="black";
        return true;
      }else{
        event.preventDefault() ;
        alert("fail")
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
