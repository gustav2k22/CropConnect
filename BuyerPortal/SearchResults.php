<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>CropConnect Homepage</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <script>
          function state() {
               var a = document.getElementById('states').value;

               if (a === '31') {
    var array = ['Accra Metropolitan', 'Ga Central', 'Ga East', 'Ga West', 'Tema Metropolitan', 'Ashaiman Municipal', 'Adenta Municipal', 'Ningo-Prampram', 'Shai Osudoku', 'Kpone-Katamanso'];
} else if (a === '01') {
    var array = ['Kumasi Metropolitan', 'Obuasi Municipal', 'Asokwa Municipal', 'Atwima Kwanwoma', 'Atwima Nwabiagya', 'Bekwai Municipal', 'Ejisu Municipal', 'Kwabre East', 'Offinso North', 'Mampong Municipal', 'Afigya Kwabre North'];
} else if (a === '02') {
    var array = ['Cape Coast Metropolitan', 'Mfantseman Municipal', 'Komenda-Edina-Eguafo-Abirem', 'Assin North', 'Assin South', 'Abura-Asebu-Kwamankese', 'Twifo Hemang Lower Denkyira', 'Agona East', 'Agona West', 'Gomoa West', 'Awutu Senya East', 'Effutu'];
} else if (a === '03') {
    var array = ['New Juaben North', 'New Juaben South', 'Suhum', 'Nsawam Adoagyiri', 'Kwahu South', 'Kwahu West', 'Yilo Krobo', 'Upper West Akim', 'Lower West Akim', 'Fanteakwa North', 'Akim Oda', 'Akwapim South', 'Akwapim North'];
} else if (a === '04') {
    var array = ['Sekondi-Takoradi Metropolitan', 'Ahanta West', 'Nzema East', 'Ellembelle', 'Jomoro', 'Shama', 'Tarkwa Nsuaem', 'Wassa Amenfi East', 'Wassa Amenfi Central', 'Wassa Amenfi West'];
} else if (a === '05') {
    var array = ['Sefwi Wiawso', 'Bia East', 'Bia West', 'Juaboso', 'Sefwi Akontombra', 'Aowin', 'Suaman'];
} else if (a === '06') {
    var array = ['Tamale Metropolitan', 'Yendi Municipal', 'Savelugu Municipal', 'Gushegu Municipal', 'Saboba', 'Kumbungu', 'Nanumba North', 'Nanumba South', 'Zabzugu'];
} else if (a === '07') {
    var array = ['Damongo', 'Bole', 'Sawla-Tuna-Kalba', 'North Gonja', 'Central Gonja', 'West Gonja', 'East Gonja'];
} else if (a === '08') {
    var array = ['Bolgatanga Municipal', 'Bawku Municipal', 'Garu', 'Binduri', 'Pusiga', 'Kassena Nankana West', 'Kassena Nankana East', 'Talensi', 'Bongo'];
} else if (a === '09') {
    var array = ['Wa Municipal', 'Wa East', 'Wa West', 'Jirapa', 'Lambussie', 'Nandom', 'Sissala East', 'Sissala West', 'Lawra'];
} else if (a === '10') {
    var array = ['Ho Municipal', 'Ketu South', 'Ketu North', 'Hohoe Municipal', 'South Tongu', 'North Tongu', 'Akatsi South', 'Akatsi North', 'Keta', 'Anloga', 'Afadzato South'];
} 
else if (a === '11') {
    var array = ['Techiman Municipal', 'Kintampo North', 'Kintampo South', 'Nkoranza North', 'Nkoranza South', 'Pru East', 'Pru West', 'Sene East', 'Sene West'];
} else if (a === '12') {
    var array = ['Sunyani Municipal', 'Berekum Municipal', 'Dormaa Central', 'Dormaa East', 'Tano South', 'Tano North', 'Jaman North', 'Jaman South', 'Wenchi'];
} else if (a === '13') {
    var array = ['Goaso', 'Asunafo North', 'Asunafo South', 'Tano North', 'Tano South', 'Asutifi North', 'Asutifi South'];
} else if (a === '14') {
    var array = ['Dambai', 'Nkwanta North', 'Nkwanta South', 'Jasikan', 'Krachi East', 'Krachi West', 'Krachi Nchumuru', 'Biakoye'];
} else if (a === '15') {
    var array = ['Nalerigu', 'Bunkpurugu', 'Chereponi', 'West Mamprusi', 'East Mamprusi', 'Yunyoo-Nasuan'];
} 


               var string = "";
               for (let i = 0; i < array.length; i++) {
                    string = string + "<option>" + array[i] + "</option>";

               }
               string = "<select nmae = 'lol'>" + string + "</select>"
               document.getElementById('district').innerHTML = string;
          }
     </script>
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";

                    return a = 0;
               }

          }
     </script>

     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               clear: none;
               float: left;
               margin-left: 20px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          #icon {
               background-color: red;
               color: white;
          }

          .dropdown {
               float: right;
               margin-right: 20px;
               margin-top: 20px;


          }

          .options {
               color: yellow;
               margin-left: 5px;
               margin-right: 26px;
          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;


          }

          .filter {
               float: right;
               margin-right: 800px;
               margin-top: 15px;
               background-color: transparent;
               color: black;


          }

          .filterbutton {
               background-color: transparent;
               border: none;
               margin-top: 5px;
               color: white;
          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               background-color: transparent;
               height: 50px;
               width: 100%;
          }

          #majic {
               height: 70px;
               width: 100%;
               visibility: hidden;


          }

          #states {
               float: left;
               width: 150px;
               margin-left: -400px;
               margin-top: 20px;
               padding: 10px;

               border-radius: 25%;
               border-color: #00b300;
          }

          #district {
               /* height: 200px; */
               border-radius: 25%;
               border-color: #00b300;
               margin-bottom: 20px;
               margin-top: 20px;
               padding: 10px;
               margin-left: 150px;
               margin-right: -400px;
          }

          .makeitgreen {
               color: #00b300;
               width: 156px;

          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }

          .slideshow {
               margin-top: 20px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
               clear: both;
               /*background-color: black;*/
          }


          #input1 {
               width: 220px;
               border: none;

          }


          #input1:active {
               background-color: tomato;

          }

          #opt {
               height: 50px;
               width: 100%;
               background-color: red;
               padding-top: 0px;
               margin-top: 0px;
          }

          #bas {
               float: left;
               /*margin-top: 15px;*/
               background-color: #FFD700;
               height: 50px;
          }



          #abc {
               float: right;
               /*margin-top: 15px;*/
               background-color: #FFD700;
               height: 50px;
          }

          #cde {
               float: left;
               margin-left: 680px;
               /*margin-top: 15px;*/
               background-color: #FFD700;
               height: 50px;
          }


          .carousel-indicators {
               list-style: none;
               background-color: transparent;
          }


          .carousel-control-prev {
               margin-left: 60px;
               /*color: red;*/
               margin-top: 10px;
          }

          .carousel-control-next {
               margin-right: 60px;
          }

          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;


               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;

          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
               /*background-color: red;*/
          }

          .carousel-control-next {
               margin-right: 60px;
          }



          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;

          }

          .tabless {
               border-collapse: separate;
               border-spacing: 20px;
               padding: 20px;
               border-style: solid;
               margin: 10px;
               /*background-color: red;*/
               border-width: 5px;
               border-radius: 16px;
               border-color: black;
               text-align: center;
               align-items: center;
               min-width: 500px;
               margin-left: 100px;
          }


          .picha {
               height: 300px;
               width: 500px;
               background-color: red;
          }

          .images {
               transition: 0.5s;
          }

          .images:hover {
               width: 625px;
               height: 425px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.5s;
          }

          .small_images:hover {
               height: 215px;
               width: 315px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.5s;
          }

          #heading {
               font-size: 20px;
               color: white;
               text-align: center;
               background-color: black;
               justify-content: center;
          }



          .addtocart {
               background-color: #FFD700;
          }

          .bestselers {
               background-color: red;
               border-style: solid;
               float: left;
               margin-top: 10px;
               /*margin: 20px;*/
               margin-bottom: 10px;
               margin-right: 40px;
               margin-left: 45px;
          }

          .bestselers:last-child {
               margin-right: 50px;
          }


          #fruits {
               text-align: center;
          }

          .veg {

               float: left;

               margin-left: 30px;
               border-style: solid;
               margin-top: 10px;
          }

          .veg img:hover {
               height: 270px;
               width: 350px;

          }

          #vegs {
               height: 270px;
               width: 1498px;
               /*margin: 20px;*/
               margin-right: 10px;
               margin-left: 10px;
               /*background-color: blue;*/
               margin-top: 20px;

          }

          .veg:first-child {
               margin-left: 80px;
          }

          .veg:last-child {
               margin-right: 20px;
          }

          #crops {
               height: 270px;
               width: 1498px;
               /*margin: 20px;*/
               margin-right: 10px;
               margin-left: 10px;
               /*background-color: blue;*/
               margin-top: 20px;

          }

          .crop:first-child {
               margin-left: 80px;
          }

          .crop:last-child {
               margin-right: 20px;
          }

          .crop {
               /*    height: 210px;
			width: 300px;
		*/
               float: left;
               /*  height: 200px;
			width: 300px;*/
               margin-left: 30px;
               border-style: solid;
               margin-top: 10px;
          }

          .crop img:hover {
               height: 270px;
               width: 350px;

          }

          .content_item {
               text-align: center;
               justify-content: center;

          }

          .etc {
               margin-left: -90px;
               min-width: 90px;
               font-size: 20px;

          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               /* background-color:red; */
               clear: both;

          }

          .payment {
               float: left;
               /* size:20% 50%;
		 */
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
               /* margin-left:500px; */
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
               /* background-color:grey; */
          }

          .dric {
               margin-left: -50px;
          }
     </style>

</head>

<body>

     <div class="header">


          <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="search_input">
               <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                    <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                    <input type="text" id="input1" name="search" placeholder="Search...">
               </form>
          </div>
          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Customer Care</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmer</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
          </div>
          <div class="proicon">
               <?php
               if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               } else {
                    echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
               }
               ?>
          </div>

          <div class="icon2">
               <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
               <span id="icon"> <?php echo totalItems(); ?> </span>
          </div>

          <div class="loginz">
               <?php getUsername(); ?>
          </div>

          <div class="filter">
               <button class="filterbutton " onclick="display()">Filter
                    <i class="fas fa-filter"></i></button>
          </div>
     </div>
     <div class="headerdown">
          <div id="show">
               <div class="sel1 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu  ">
                         <?php getCrops(); ?>
                    </ul>
               </div>
               <div class="sel2 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getVegetables(); ?>
                    </ul>
               </div>
               <div class="sel3 sel">
                    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
                         <span class="caret"></span></button>
                    <ul class="dropdown-menu ">
                         <?php getFruits(); ?>
                    </ul>
               </div>
          </div>
          <div id="majic" class="headerdown ">
               <table>
                    <select id="states" onchange="state()" tabindex="1">
                         <option value="0">Select Region</option>
                         <option value="0">--Select Region--</option>
                                            <option value="GREATER ACCRA">Greater Accra</option>
                                            <option value="ASHANTI">Ashanti</option>
                                            <option value="CENTRAL">Central</option>
                                            <option value="EASTERN">Eastern</option>
                                            <option value="WESTERN">Western</option>
                                            <option value="WESTERN NORTH">Western North</option>
                                            <option value="NORTHERN">Northern</option>
                                            <option value="NORTH EAST">North East</option>
                                            <option value="SAVANNAH">Savannah</option>
                                            <option value="UPPER EAST">Upper East</option>
                                            <option value="UPPER WEST">Upper West</option>
                                            <option value="OTI">Oti</option>
                                            <option value="VOLTA">Volta</option>
                                            <option value="BONO">Bono</option>
                                            <option value="BONO EAST">Bono East</option>
                                            <option value="AHAFO">Ahafo</option>

                    </select>


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>
          </div>
     </div>


     <div>
          <?php
          cart();
          ?>
          <?php
          if (isset($_GET['search'])) {

               $search_query = $_GET['search'];
               $get_pro = "select * from products where product_keywords like '%$search_query%'";
               $run_pro = mysqli_query($con, $get_pro);
               $count = mysqli_num_rows($run_pro);
               if ($count > 0) {
                    echo "<br>";
                    while ($rows = mysqli_fetch_array($run_pro)) {
                         $product_id = $rows['product_id'];
                         $product_title = $rows['product_title'];
                         $product_image = $rows['product_image'];
                         $product_price = $rows['product_price'];
                         $product_delivery = $rows['product_delivery'];
                         echo " <div class='inputwrapper'>
                                                  <br>
                                                  <a href='../BuyerPortal/BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg' style='height: 100px; width: 100px;'><br><br></a>
                                                  <label>$product_title</label><br>
                                                  <label>PRICE:- $product_price GHS/kg</label><br>	
                                                  <label id='shop2'>Delivery by Farmer</label><br>Qty:-
                                                  <form action = '' method = 'post'>
                                                  <input class='numberinput' type='number' name='quantity'  value = '1'  >
                                                  <button type = 'submit' name = 'cart' class='addtocart'>ADD TO CART <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button></a><br><br>    
                                                  </form>
                                                  </div> ";
                         if (isset($_POST['cart'])) {

                              if (isset($_POST['quantity'])) {
                                   $qty = mysqli_real_escape_string($con, $_POST['quantity']);
                              } else {
                                   $qty = 1;
                              }
                              global $con;
                              if (isset($_SESSION['phonenumber'])) {
                                   $sess_phone_number = $_SESSION['phonenumber'];

                                   $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                   $run_check = mysqli_query($con, $check_pro);

                                   if (mysqli_num_rows($run_check) > 0) {
                                        echo "";
                                   } else {
                                        $subtotal = $product_price * $qty;
                                        $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                        $run_insert_pro = mysqli_query($con, $insert_pro);
                                        echo "<script>window.location.reload(true)</script>";
                                   }
                              } else {
                                   echo "<script>window.alert('Please Login First!');</script>";
                              }
                         }
                    }
               } else {
                    echo "<br><br><hr><h1 align = center>Product Not Available !</h1><br><br><hr>";
               }
          }
          ?>
     </div>


     <div class="footer">
          <hr>
          <label class="payment">Payment Options:-</label>
          <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
          <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
     </div><br><br>
     <h3><span> GET SOCIAL WITH US </span></h3>
     </div>
     <div class="morefooter">

          <div class="call">
               <i class="fas fa-phone-alt call_color"></i>
               <a href="#" style="color:black;">(+233) 0242345678</a>
          </div>

          <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
          </div>

          <div class="gmail">
               <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
          </div>

     </div>
     <div class="instaid">
          <div class="text"><a href="#" style="color:black;">@CropConnect</a></div>

          <div class="gmailid">
               <a href="#" class="hypher" style="color:black;">info@cropconnect.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2024 by CropConnect</h5>
     </div>

</body>

</html>


