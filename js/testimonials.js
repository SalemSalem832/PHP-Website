var one=document.getElementById('ind1')
var two=document.getElementById('ind2')
var three=document.getElementById('ind3')
var testi1=document.getElementById('testimonial1')
var testi2=document.getElementById('testimonial2')
var testi3=document.getElementById('testimonial3')

//Function to change opacity from 0.1 to 1 creating an unfade effect
function unfade(element) {
    var op = 0.1;
    element.style.display = 'block';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 20);
}
//function to hide everything and unfade first testimonial
function changeToOne() {
  one.style.backgroundColor="black";
  two.style.backgroundColor="white";
  three.style.backgroundColor="white";
  testi2.style.display="none";
  testi3.style.display="none";
  unfade(testi1);
}
//function to hide everything and unfade second testimonial
function changeToTwo() {
  one.style.backgroundColor="white";
  two.style.backgroundColor="black";
  three.style.backgroundColor="white";
  testi1.style.display="none";
  testi3.style.display="none";
  unfade(testi2);
}
//function to hide everything and unfade third testimonial
function changeToThree() {
  one.style.backgroundColor="white";
  two.style.backgroundColor="white";
  three.style.backgroundColor="black";
  testi1.style.display="none";
  testi2.style.display="none";
  unfade(testi3);
}
