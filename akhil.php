<DOCTYPE html>
<head>
    
<!-- bootstrap link code -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- bootstrap code ends here -->




    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    <style>
        
        body{
        
            
            font-family: 'Lobster', cursive;
            text-align: center;
            background: black;
            color:white;
    /*         background: url("http://dash.ga.co/assets/anna-bg.png");*/
            
           /* background:url('http://www.hdwallpapersinn.com/wp-content/uploads/2014/09/Golden-Gate-Bridge-HD-Photo-Wallpaper.jpg');*/
      
            background:url('http://www.hdwallpapersinn.com/wp-content/uploads/2014/09/Golden-Gate-Bridge-HD-Photo-Wallpaper.jpg');

       /* background:url('girl.png');*/
      background-repeat:no-repeat;

      background-size:cover;
      background-position:center;
        }


@media screen and (max-width: 300px) {
    body {
        background-color: lightblue;
        background:url('newyork.png');
    }

     input[type="submit"]
     {

   color:tomato;

     }
}
      

        
        #my-pic{
        
            width: 200px;
            height: 200px;
            border-radius: 75px;
             border:4px solid white;
            margin-top: 59px;
        }
        
       /* input[type="email"]
        
        {
            border:0;
        text-align: center;
            padding:10px;
            margin-right: 5px;
            font-family: 'Lobster', cursive;
            font-weight: 400;
            color:hotpink;
            font-size: 22px;
            border-radius: 5px;
            
        }*/
        
        input[type="submit"]
        
        {
        color: white;
            background: #5fcf80;
            padding: 10px;
            font-family: 'Lobster', cursive;
            font-size: 22px;
            width: 180px;
            border-radius: 10px;
        border:2px solid white;
            
        
        }
        
        /* input[type="submit"]:hover{
         color:  #5fcf80;
             background: white;
         
         
         }
        */
        
        </style>
    
    
    </head>

<body>
 
    <img src="http://cdn.koimoi.com/wp-content/new-galleries/2012/10/Huma-Qureshi-At-Chicken-Khurana-Recipe-Hunt-Launch-560x747.jpg" id="my-pic">
    <h1>my name is akhil , india based rails developer</h1>
   <!--  <input type="email" placeholder="type your email"> -->
    
   <!--  <input type="submit" name="submit" value="GET IN TOUCH"> -->



   <!-- code triggers modal  starts-->

   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

 <!-- code triggers modal  ends-->



<!-- BOOTSTRAP CODE BEGINS -->

<div class="container">

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">

        <p>One fine body&hellip;</p>
        <form method ="post" action="index.php">
       <label for="email"></label>
       <input type="text" name="full-name">
       <input type="text" name="email">
       

     </form>
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-primary">submit details</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


</div>

















    
</body>



</html>

