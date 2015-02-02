<html>
    
    <head>
<link href='http://fonts.googleapis.com/css?family=Lobster|Slabo+27px' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <style>
    
    body{


   color: tomato;
  /* background: url('http://www.hdwallpapersinn.com/wp-content/uploads/2014/09/Golden-Gate-Bridge-HD-Photo-Wallpaper.jpg');*/
background:url('goldengate.jpg'); 
  background-size: cover;
  background-position: center;
 
    }
      
  .form-div{

    border: 5px solid #1c5380;
    width: 500px;
    height: 300px;
    position: absolute;
    top: 140px;
    left: 750px;
    border-radius: 9px;

  }

  .firstname{
margin: 10px;



  }

    input[type="text"]
        {
          margin: 85px 0 0  65px;
            margin-right:30px;
            margin-top: 50px;
            word-spacing: 7px;
            width: 230px;
            height: 35px;
            border-radius: 9px;
            border: 2px sollid black;
          font-family: 'Slabo 27px', serif;
          color:hotpink;
          font-family: 'Lobster', cursive;
          font-weight: 800;
          font-size: 20px;

        }

        input[type="submit"]

        {

     background: #29BB4C;
     display: block;
     margin-left:65px;
     width: 190px;
      padding-bottom: 10px;
            border-radius: 10px;
            border: 2px solid white;
          
            font-family:  'Slabo 27px', serif;
            font-weight:800px;
            margin-top: 10px;
            font-size: 22px;
            color: white;
            padding:10px;

        }  

        input[type="submit"]:hover{

      color: #29BB4C;
      background: white;


        }

        }

    </style>

    </head>

    
    
    <body>

    <!-- form code begins -->

     

    <div class="form-div">
   <form action="index.php" method="POST">

     <!-- <label for="firstname">firstname</label> -->
     <input type="text" name="fullname" >

     <!--  <label for="email">email</label> -->
     <input type="text" name="email">
       <input type="submit" name="submit" value="submit">
     </form>

    </div>

     



    <!-- form code ends -->
   
        
     
        
        
    </body>
</html>