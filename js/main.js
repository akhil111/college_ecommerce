 /*code for index.html*/

function email_subscribe_validation_check()
{
  /*alert("bang bang");*/
  var a=document.getElementById('email_subscribe').value;
  if(!a.match(/\S/))
  {
    document.getElementById('email_subscribe_validation').innerHTML="email is required";
    document.getElementById('email_subscribe_validation').style.color="red";
    return false;
    }
  else
    return true;
}



/*===============================code for signup.html============================*/

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

   var password=document.getElementById('signup_password').value;
   var password1=document.getElementById('signup_password1').value;
   password=password.length;
   password1=password1.length;
   if(password1!==password)
   {
      document.getElementById('signup_error2').innerHTML="passwords are not matching";
      document.getElementById('signup_error2').style.color="red";

      return false;   
   }   
    
  if(password1===password)
   {
      document.getElementById('signup_error2').innerHTML="passwords are  matching";
      document.getElementById('signup_error2').style.color="green";

      return true ;   
   }
}

function signup_check()
{
  //location.href="index.php";
  
  //document.getElementById('signup_button').innerHTML="SIGNING IN....";
  /*if(signup_key() && signup_password_key1() &&signup_password_key())
  {

   return true;
} 
else

  {return false;}*/


  
}





  
    /*          $ $
              $     $
             $       $
              $ $ $  $

    */



/*code for signin.html*/
function signin_key()
{

   var email=document.getElementById('signin_email').value;
   

    

   
    var email_re=/[a-z0-9]+@+[a-z]+\.[a-z][a-z][a-z]?/gi;
    if(email_re.test(email) )
    {
       document.getElementById("signin_error").innerHTML="valid email";
       document.getElementById("signin_error").style.color="green";

       return true;
       
    }
    
    if(!email_re.test(email) )
    {
       document.getElementById("signin_error").innerHTML="invalid email";
       document.getElementById("signin_error").style.color="red";

       return false;
       
    }


    if(email.length>0)
    {
    	document.getElementById("signin_error").innerHTML="";
    	
    }

    if(email.length==0)
   {
          document.getElementById("signin_error").innerHTML="email is required";
             document.getElementByImd("signin_error").style.color="red";
             document.getElementById("signin_error").style.borderColor = "red";
             return false;
    }


}

function password_check()
{
  
   var password=document.getElementById('signin_password').value;
   if(password.length==0)
    {
       document.getElementById("signin_error1").innerHTML="password is required";
       document.getElementById("signin_error1").style.color="red";
   	   return false;
    }

    if(password.length>0)
    {
     
        document.getElementById("signin_error1").innerHTML="";
    	
    }

    if(password.length>3 && password.length<6)
    {   
        document.getElementById("signin_error1").innerHTML="password is weak";
        document.getElementById("signin_error1").style.color="green";

    	return true;

    }

    if(password.length>7 && password.length<=10)
    {   
        document.getElementById("signin_error1").innerHTML="password is strong";
        document.getElementById("signin_error1").style.color="green";

    	return true;
    }
}


function signin_check()
{
   
   var email=document.getElementById('signin_email').value;
   var password=document.getElementById('signin_password').value;
   if(email==null || password==null)
      {alert("asshole fill the fields");return false;}


   if(!signin_key() || !password_check())
     {
       
       document.getElementById('siginin_check_error').innerHTML="something went wrong"
       return false;

     }

     

 
  else
    {
       //alert("you are good to go");
       return true;
    }

    
 }




