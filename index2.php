<!DOCTYPE html>
<html lang="en">
<head>
<?php
      session_start();
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});

</script>
<style>
#panel {
  display: none;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MIU Coffee and Beans</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>MIU <em>Coffee and Beans</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
<li class="nav-item active">
               <a class="nav-link" href="Login.php">Login
                 <span class="sr-only">(current)</span>
               </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>Customize your own drink</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your favorite coffee</h2>
          </div>
        </div>
        
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          
        	<?php	
	      include ('products.php');

	$allProducts=Product::SelectAllProductsInDB();
	foreach ($allProducts as $product){?>

  <div class="col-md-4">
            <div id="flip" class="product-item">
            
                  <div class="down-content">
<div><?php echo $product->productName; ?></div>
<div>  <img src="<?php echo $product->img;?>"</div>
<div><?php echo $product->price; ?>EGP</div>
<div><?php echo $product->description; ?></div>

<br>
<form method="post" action="">
<tr>
				<td>
					Choose The Coffee Type:
				</td>
				<td>
					<select name="CoffeeType">
					    <option value=" houseBlend"> House Blend</option>
   						 <option  value=" darkRoast"> Dark Roast</option>
   						 <option value="decaf">Decaf</option>		
   						 <option value="espresso">Espresso</option>				
					</select>
				</td>
			</tr>
		<tr>
		<br>
				<td>
					Choose your preferred milk:
				</td>
				<td>
					<select name="Milk">
					    <option value="normalMilk"> Milk</option>
   						 <option  value="steamed">Steamed Milk,</option>
   						 <option value="Foam">Foam Milk</option>		
   						 <option value="soy">Soy Milk</option>				
   						  <option value="chocolate ">Chocolate</option>				
   						 
					</select>
				</td>
			</tr>
		

                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>            </div>
         <div><br>
                     <?php
            $id=$product->id;
          ?>  
          <input type="submit" name="submit" value="Add to cart"  />
       </form>
          </div>
       

          </div>

           </div>
             <?php } ?>

      </div>
    </div>
      
                  
             <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About MIU Coffee and Beans</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who are we?</h4>
              <p>MIU Coffee and Beans shop is a new shop that aim to enable its customers to easily customize and order their drinks using a mobile based system. </p>

              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/Coffee-Feature.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 MIU.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
<?php
  
          include ('databaseConn.php');
    include ('Products');
       $id=$_SESSION['ID'];
    
    $db=new Database();

if(isset($_POST['submit'])){
$selected_val = $_POST['Milk'];  
echo "You have selected :" .$selected_val; 
$selected_type = $_POST['CoffeeType'];
    echo "You have selected :" .$selected_type;
    $sql = "INSERT INTO `selectedItems` (Product, Milk, CoffeeType, User) VALUES ('$productName', '$selected_val', '$selected_type', $id)";

header("location:Cart.php");
}
   
?>
  </body>

</html>
