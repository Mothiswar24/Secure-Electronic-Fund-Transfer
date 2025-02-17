function Validation(){
if(document.form.username.value==""){
  document.getElementById("result").innerHTML="Enter Username*";
  return false;
}
else if(document.form.Password.value=="")
{
  document.getElementById("result").innerHTML="Enter password*";
  return false;
}
}



const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
container.classList.remove("sign-up-mode");
});


function validations(){
  if(document.forms.ac.value==""){
    document.getElementById("results").innerHTML="Enter Account Number*";
    return false;
  }
  else if(document.forms.username1.value==""){
    document.getElementById("results").innerHTML="Enter Username*";
    return false;
  }
 else if(document.forms.password.value==""){
  document.getElementById("results").innerHTML="Enter password*";
  return false;
 }
 else if(document.forms.password.value.length<6){
  document.getElementById("results").innerHTML=" password length should be greater than 6*";
  return false;
 }
 else if(document.forms.cpassword.value==""){
  document.getElementById("results").innerHTML="Enter confirm password*";
  return false;
 }
 else if(document.forms.password.value != document.forms.cpassword.value){
  document.getElementById("results").innerHTML="passwords does not match";
  return false;
 }
}