function signup_key()
{

 var email=document.getElementById('signup_email').value;
 var email_re=/[a-z0-9]+@+[a-z]+\.[a-z][a-z][a-z]?/gi;

    
   if(email_re.test(email) )
    {
       document.getElementById("signup_error").innerHTML="valid email";
       document.getElementById("signup_error").style.color="green";

       return true;
       
    }


    if(email.length==0)
    {
    	document.getElementById("signup_error").innerHTML="";
    	
    }

    if(!email_re.test(email) )
    {
       document.getElementById("signup_error").innerHTML="invalid email";
       document.getElementById("signup_error").style.color="red";

       return false;
       
    }
}
function signup_password_key()
{
  var password=document.getElementById('signup_password').value;
  if(password.length==0)
    {
       document.getElementById("signup_error1").innerHTML="password is required";
       document.getElementById("signup_error1").style.color="red";
       return false;
    }

    if(password.length>0)
    {
     
        document.getElementById("signup_error1").innerHTML="";
      
    }

    if(password.length>3 && password.length<6)
    {   
        document.getElementById("signup_error1").innerHTML="password is weak";
        document.getElementById("signup_error1").style.color="green";

      return true;

    }

    if(password.length>7 && password.length<=10)
    {   
        document.getElementById("signup_error1").innerHTML="password is strong";
        document.getElementById("signup_error1").style.color="green";

      return true;
    }
}

function signup_password_key1()
{

   var password=document.getElementById('signup_password');
   var password1=document.getElementById('signup_password1');
   /*password=password.value;
   password1=password1.value;*/
   if(document.getElementById('signup_password').value != document.getElementById('signup_password1').value)
   {
      document.getElementById('signup_error2').innerHTML="passwords are not matching";
      document.getElementById('signup_error2').style.color="red";

      return false;   
   }   
    
  if(document.getElementById('signup_password').value == document.getElementById('signup_password1').value)
   {
      document.getElementById('signup_error2').innerHTML="passwords are  matching";
      document.getElementById('signup_error2').style.color="green";

      return true ;   
   }
}

function signup_check()
{

 var password=document.getElementById('signup_password').value;
   var password1=document.getElementById('signup_password1').value;
   document.write(password);
   document.write(password1);

  document.getElementById('signup_button').innerHTML="SIGNING IN....";
  if(signup_key() && ignup_password_key1() &&ignup_password_key())
  {alert("you are good to go");} 
else
  alert("code sucks");


}

function akhil_button()
{

alert("dkfjkdjfdk");
window.open('404.html');

}


