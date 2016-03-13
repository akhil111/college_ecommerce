

<!DOCTYPE html>
<html>

<head>
<title>Welcome to store</title>	




<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="cs/main.css">
<script src="js/main.js"></script>
<style>

html
{
	height: 100%;
	background-image:url('code.jpg') ;
	background-size: cover; 
}

.form-control{ 
width:84%;}
.btn-block {
    display: block;
    width: 84%;
}


   
#nav li
{
	list-style-type: none;
	display: inline;
	float: right;
	margin-top: 20px;
	margin-left: 60px;
	color: pink;
	font-family: font-family: 'Open Sans', sans-serif;
	font-weight: 900;
	cursor: pointer;
}

#nav  a li:hover
{
text-decoration: underline;
}

#subscribe
{
	position: absolute;
	top: 380px;
	left: 410px;
}

#putin_ass
{
	width:320px;
	height: 39px; 
	border-radius: 3px;
	background-color: transparent;
	color: white;
	text-align: center;
	font-family: sans-serif;
	text-align: center;
	font-size: 19px;


}

input[type="submit"]
{
	width: auto;
     font-size: 22px;
    height: 45px;
   
    border-radius: 5px;
    padding: 0px 25px 0px 25px;
    font-family: font-family: 'Open Sans', sans-serif;
    font-weight:400;
    background-color: #d14836;
    background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
    background-image: linear-gradient(top,#dd4b39,#d14836);
    color: #fff;
    border: 1px solid transparent;
   
}

input[type="submit"]:hover
{
	 background-color: #fff;
	 color: #d14836;
	 border: 1px solid #d14836 ;
}


/*input[type="submit"]:hover
{

background-color: white;
border-radius: 200px;

}*/

#product_search
{
	position:absolute;
	top: 13px;
	left: 155px;

}

input[type="search"]
{
	width: 300px;
	height: 49px;
	border-radius: 70px;
	text-align: center;
	border: 2px solid transparent;
	background: url(https://www.riffsy.com/static/images/keyboard/menu/search.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-color: white;
	vertical-align: middle;
}




#main_heading h1,#main_para  h3
{
   position: absolute;
   top: 150px;
	left: 210px;
	color: white;
	font-size: 50px;
	
	font-family:sans-serif;
	margin-left: 30px;
	
	font-weight: 300;
}

#main_para  h3
{
     top: 190px;
	left: 240px;
	font-size: 28px;
	margin-top: 9px;
	margin-left: 9px;
}

</style>

</head>
<body>

<!-- <div class="container"> -->
<!-- <form id="product_search">
<input type="search" name="product_search" placeholder="product search">
</form>
-->

<header>
<nav>
   <ol id="nav">
    <li  data-toggle="modal" data-target="#myModal">SIGN IN</li>
    <li data-toggle="modal" data-target="#kremlin_building">SIGN UP</li>
    <li>BOOKS</li>
    <li>ELECTRONICS</li>
   </ol>

</nav>                                                                          
</header>

<div id="main_heading">
<h1>Marketplace for college students</h1>
</div>


<form method="post" action="putin.php">
<div id="subscribe">
<input type="email"  id="putin_ass" name="email" placeholder="enter valid email">
<input type="submit"  onclick="kremlin()" name="submit"  value="subscribe">
</div>
</form>

<!-- +++++++++++++++++++++++++++++++++sign in++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--   modal code begins here for sign in  -->


 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Secure login</h4>
        </div>
        <div  id="isis" class="modal-body">
        
        <!--  signin form begins here -->
    
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="button" class="btn btn-primary btn-lg btn-block">Sign in</button>
    </div>
  </div>
</form>
     
   
        <!-- signup form ends here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>
</div>
<!-- modal code ends here -->
<!-- ++++++++++++++++++++++++++++++sign in ends here +++++++++++++++++++++++++++++++++++++++ -->



<!-- ++++++++++++++++++++++++++++++++++++++signup++++++++++++++++++ +++++++++++++++++++++++-->
<!-- modal code begins here -->
<div class="modal fade" id="kremlin_building" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter your details to signup</h4>
        </div>
        <div  id="isis" class="modal-body">
        
        <!--  signup form begins here -->
    
<form   action="new_user.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="button" class="btn btn-primary btn-lg btn-block">Sign up</button>
    </div>
  </div>
</form>
     
   
        <!-- signup form ends here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>
</div>
<!-- modal code ends here -->
<!-- ++++++++++++++++++++++++++++++sign up ends here +++++++++++++++++++++++++++++++++++++++ -->




 




<!-- +++++++++++++++++++++++++++++++++++signup ends here+++++++++++++++++++++++++++++++ -->

<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- <script src="js/main.js"></script> -->
</body>
</html>




