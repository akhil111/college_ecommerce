

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <style>
#france{

  color:tomato;
  display: inline-block;
font-size: 24px;
list-style-type:none;
/*border: 2px solid black;*/
padding:30px;}

.italy{
  margin: 50px 120px 120px  120px;

}

  </style>

  <script>

function add_to_cart()
{
  document.getElementById('add_to_cart').value+=1;
}

  </script>

    </head>


  <body>
        
    <!------ ----------------------body begind------------------------------ -->




 <nav class="navbar navbar-default">
  <div class="container-fluid">
     

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>









    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
         <li  data-toggle="modal" data-target="#myModal"><a href="#">Sell</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Branches<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Computer science</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Electronics and communication</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Mechanicalengineering </a></li>

            <li role="separator" class="divider"></li>
            <li><a href="#">Civil engineering</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">EEE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo "kremlin";?></a></li>



          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Product Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="#">Link</a></li> -->
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo "akhil.maddu021@gmail.com";?> <span class="caret"></span></a>


       


          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  <span class="caret"></span></a> -->
          <ul class="dropdown-menu">
           
            <li><a href="#">CART</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="logout.php">LOGOUT</a></li>

            <li role="separator" class="divider"></li>
            
          </ul>


      <li><a href="#">Cart<span style="margin-left:3px;" id="add_to_cart" class="badge">2</span></a></li> 

        

        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--=====================cellar window code============================================ -->

 

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">enter book details</h4>
        </div>


        <div   class="modal-body">
        
<!--  signin form begins here -->
        

<form action="book_upload.php"  method="post">
          
          <input type="text" name="book_name" placeholder="book details"><br>
          <input type="number" name="book_pricce" placeholder="book price"><br>
          <input type="file"><br>
          <button type="button">nuke it</button>

</form>
    

</div>
</div>
</div>
</div>



<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Login successful</strong> .
</div>




<!-- ========================  cellar window code ends here  ==================== -->


<?php
include_once 'putin.php';


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * from user_details";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row

    
  while ($row=mysqli_fetch_row($result))
    {
      //echo "<tr>";
      echo "
  
     <div class='col-md-4'>
     </div>

     
    <div class='col-md-8'>
    <div class='italy'> 
    <h3 id='france'>$row[1]<h3>
    <button type='button' onclick='add_to_cart()' class='btn btn-primary'> Add to Cart</button>
    </div>
    </div>

";
  
   
    }
 
  mysqli_free_result($result);
}

mysqli_close($con);


?>






 
     <!-- ------------------------body ends------------------------------------------- -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>