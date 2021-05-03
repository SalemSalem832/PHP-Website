var form=document.getElementById('schedule')
var first = document.getElementById("first");
var last = document.getElementById("last");
var email = document.getElementById("email");
var org = document.getElementById("organization");
var solution = document.getElementById("choice");
var service = document.getElementById("choice2");
var date = document.getElementById("date");
var time = document.getElementById("time");
var comments = document.getElementById("comments");
// adding an event listener so that validation is only done when user clicks signup button
form.addEventListener('submit', function(event){

  var firstV = first.value.trim() ;
  var lastV = last.value.trim() ;
  var emailV = email.value.trim() ;
  var orgV = org.value.trim() ;
  var serviceV = service.value.trim() ;
  var dateV = date.value.trim() ;
  var timeV = time.value.trim() ;
  var commentsV = comments.value.trim() ;

  checkValid(first,firstV,1,event);
  checkValid(last,lastV,1,event);
  checkValid(email,emailV,2,event);
  checkValid(org,orgV,3,event);
  checkValid(service,serviceV,3,event);
  checkValid(date,dateV,3,event);
  checkValid(time,timeV,3,event);
  checkValid(comments,commentsV,3,event);
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
