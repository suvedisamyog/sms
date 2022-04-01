function load(){
    document.getElementById("sname").focus();
 }

function sinupValidate(){


    var name=document.register.name.value;
    var email =document.register.email.value;
    var password =document.register.password.value;
 var cpassword=document.register.cpassword.value;
 
 
 if(name==null||name==""){
     document.getElementById("nameerror") .innerHTML ="Name required";
 
     return false;
 }
 if(name.length <=5 && name.length >=50){
     document.getElementById("nameerror") .innerHTML ="Name should be between 5 and 50 character";
     return false;
 }
 
 if(email==null||email==""){
     document.getElementById("mailerror") .innerHTML ="Email required";
 
     return false;
 }
 if(password==null||password==""){
     document.getElementById("passerror") .innerHTML ="Password cannot be empty";
 
     return false;
 }
 if(cpassword==null||cpassword==""){
     document.getElementById("cpasserror") .innerHTML ="Password cannot be empty";
 
     return false;
 }
 if(password != cpassword){
     document.getElementById("matcherror") .innerHTML ="Passwords donot match";
 return false;
 }
 
 }
