var form=document.getElementById('form')
var email = document.getElementById("email");
var pass = document.getElementById("password");

// adding an event listener so that validation is only done when user clicks signup button
form.addEventListener('submit', function(event){

  var emailV = email.value.trim() ;
  var passV = pass.value.trim() ;

  checkValid(email,emailV,event)
  checkValid(pass,passV,event)
});


//         Validating that element is not empty
function checkEmpty(str){
  if (str=="") {
    return false;
  }else{
    return true;
  }
};
//         Validation and styling using checkEmpty() function
function checkValid(element,value,event){
    if (checkEmpty(value)){
      element.style.borderColor="black";
      }else{
        event.preventDefault() ;
        element.value="";
        element.style.borderColor="red";
        element.placeholder="This field cannot be empty!";
        return false;
      }
    }
