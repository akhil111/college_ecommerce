function getData()
{
var xhr= new XMLHttpRequest();

xhr.onreadystatechange=function()
{
   if(xhr.readyState === 4)
   {
   
     
   	document.getElementById('bang').innerHTML=xhr.responseText;
   	//document.getElementById('box').innerHTML= "fuck you";
   }

   if(xhr.status===404)
   {

   	document.getElementById('bang').innerHTML="file not found on the server";
   }

    if(xhr.status===500)
   {

   	document.getElementById('bang').innerHTML="network is down";
   }


};

xhr.open('GET','/moscow.txt',true);

xhr.send();
}
