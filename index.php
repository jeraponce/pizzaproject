<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gerardo Ponce">
    <meta name="generator" content="Notepad ++">
	<title>Yummy Pizza</title>
	<link rel="icon" href="lib/img/favicon.png">

    <!-- Bootstrap core CSS -->
	<link href="lib/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
	<link href="lib/css/yummy_pizza.css" rel="stylesheet">
	
  </head>
  
  <body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
	  <img src="lib/img/logo.png" height="60"/>  
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" aria-disabled="true">Branches</a>
        </li>
		<li class="nav-item">
          <a class="nav-link disabled" href="#" aria-disabled="true">Download Menu</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    
<main id="background" class="shadow">
  <h1 class="visually-hidden">Now you can prepare your pizza with the ingredients of your rather.</h1>

  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold mt-5 text-white">What topping would <br>you like to select?</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 text-white">Now you will be able to select your toppings from<br> your mobile or computer with internet. <br>Please start here fill in the topping that you prefer.</p>
	  
    </div>
	<div class="col-lg-4 mx-auto">
	  <div class="card bg-secondary shadow-lg">
		<div class="card-body">
		  <h3 class="card-title display-6 mb-3">Toppings</h3>
		  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-2">
			<div class="input-group">
			  <input type="text" name="topping" id="topping" class="form-control shadow" placeholder="Cheddar Cheese">
			  <button type="button" class="btn btn-dark btn-lg px-4 me-sm-3 shadow" title="Add it!" onclick="addTopping()" >
				<img src="lib/img/input-topping.png" width="30">
				
			  </button>
			  
			</div>
		   
		  </div>
		  <div id="messages"></div>
		  <table class="table card-text table-dark table-hover shadow" id="toppings">
		    <thead class="text-white ">
			  <tr>
			    <th title="Function">
			      #
			    </th>
			    <th>
			      Description
			    </th>
			  </tr>
			  
			</thead>
			<tbody id="listToppings"></tbody>
			
		  </table>
		</div>
		
	  </div>
	  
	</div>

  </div>

  <div class="bg-dark text-secondary px-4 py-5 text-center" id="about">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">We are the best</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">We are proud of our staff and our work philosophy because they made us who we are. We improve our procedures and get organic ingredients for only one reason cook great products ever fresh, ever yummy that's it.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-warning btn-lg px-4 me-sm-3 fw-bold">Know our team</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">Local business support</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="p-3	">
	  <div class="container">
		<p class="text-white">
		  Powered by @<a href="#" class="text-white">Gerardo Ponce<a>
		</p>
	  </div>
  </footer>
  
</main>


	<script src="lib/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
	<!-- specific functions for this page -->
	<script src="lib/js/jquery.min.js"></script>
	<script src="lib/js/toppings.js"></script>
      
  </body>
  
</html>
