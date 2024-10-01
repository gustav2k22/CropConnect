<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Cart Page</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

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




          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
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

          .icon {
               background-color: #FFD700;
               border-style: groove;
               border-width: 1px;
               font-size: 15px;
               border-color: #000;
               /* border-start-end-radius: 25%; */
          }


          button:focus {
               outline: 0;
          }

          .left {
               margin-left: -7px;

          }

          .right {
               margin-left: -7px;
          }

          .add {
               background-color: transparent;
               border: none;
               width: 5px;
               margin-left: 8px;
               height: 20px;
          }

          /* 
          .ladd {
               margin-right: 10px;
          } */

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
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
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
               clear: both;
          }

          .payment {
               float: left;
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
          }

          * {
               box-sizing: border-box;
          }

          .tabley {
               width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;
               /* margin:5px; */
          }

          .tabley th {
               text-align: center;
               border-style: solid;
               border-width: 2px;
               padding: 5px;
               margin: 5px;
          }

          .tdy {
               text-align: center;
               border-style: solid;
               border-width: 2px;
               padding: 10px;

          }

          .thy {
               background-color: #555;
               color: white;
          }

          .des {
               border-style: solid;
               border-width: 2px;
               /* border:ridge; */
          }

          .rs {
               margin-left: 10px;
               float: right;
          }

          .boxy {
               height: 150px;
               width: 20%;
               float: right;
               /* background-color:yellow;

 */
               border-style: ridge;
               border-color: #00b300;
               margin-top: 20px;
               margin-right: 20px;
               border-radius: 25%;
          }

          .totaly {
               float: left;
               text-align: left;
               font-size: 25px;
               padding: 20px;
               /*margin-top:120px;
     margin-left:20px; */
          }

          .checkout {
               border-radius: 25%;
               /* text-align:center; */
               background-color: #FFD700;

               margin-right: 75px;
               border-color: black;
               float: right;
               margin-top: -20px;
               /* margin-top:20px; */
               /* padding-top:10px; */
               width: 150px;
               height: 50px;
               transition: 1s;
          }

          .checkout:hover {
               transition: 1s;
               width: 170px;
               height: 70px;
               font-size: 25px;
          }

          .empty {
               border-radius: 25%;
               border-style: solid;
               background-color: #FFD700;
               padding: 10px;
               margin-top: 20px;
               transition: 1s;
               margin-left: 20px;
          }

          .empty:hover {
               transition: 1s;
               width: 170px;
               padding-top: 7px;
               font-size: 20px;


          }

          .cont {
               border-radius: 25%;
               border-style: solid;
               background-color: #FFD700;
               padding: 10px;
               margin-top: 40px;
               /* margin-left:46%; */
               transition: 1s;

          }

          #icon {
               background-color: red;
               color: white;
          }

          .cont:hover {
               padding-top: 15px;
               padding-bottom: 20px;
               transition: 1s;
               width: 270px;
               height: 70px;
               font-size: 22px;
          }

          #Deletionlink {
               color: #000;
          }

          #Deletionlink:hover {
               color: red;
               font-size: 22px;

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


     <?php
     if (isset($_SESSION['phonenumber'])) {
          $temp = totalItems();
          echo "<h2 class='item_heading'>YOUR ITEMS : $temp </h2>";
     }
     ?>

     <hr>
     <table class="tabley">
          <thead>
               <th class="thy">Sr no</th>
               <th class="thy"> Item Name</th>
               <th class="thy"> Unit Price</th>
               <th class="thy qua"> Quantity</th>
               <th class="thy">Subtotal</th>
               <th class="thy">Delete</i></th>
          </thead>

          <?php
          $total = 0;
          global $con;
          if (isset($_SESSION['phonenumber'])) {
               $sess_phone_number = $_SESSION['phonenumber'];
               $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
               $run_price = mysqli_query($con, $sel_price);

               $qtycart = array();
               $i = 0;
               while ($p_price = mysqli_fetch_array($run_price)) {
                    $product_id = $p_price['product_id'];
                    $_SESSION['qtycart'][$i] = $p_price['qty'];

                    $pro_price = "select * from products where product_id='$product_id'";
                    $run_pro_price = mysqli_query($con, $pro_price);
                    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                         $product_title = $pp_price['product_title'];
                         $product_price = $pp_price['product_price'];
                         $subtotal = $_SESSION['qtycart'][$i] * $product_price; ?>


                         <tr>
                              <td class="tdy" data-label="Sr no"><?php echo $i + 1; ?></td>
                              <td class="des tdy" data-label="Item Name"><?php echo $product_title; ?></td>
                              <td class="tdy" data-label="Unit Price"><?php echo $product_price; ?></td>
                              <td class="tdy" data-label="quantity"><a style="color:black;margin-right:12px;" href="MinusQty.php?id=<?php echo $product_id; ?>"><label class="add ladd"><i style="padding: 4px;" class=" icon left  fas fa-minus">
                                        </label></a></i>
                                   <input type="number" oninput="this.value = Math.abs(this.value)" min="1" value='<?php echo $_SESSION['qtycart'][$i]; ?>' name="qty" style="width:40px; "><a style="color:black;margin-left:4px;" href="AddQty.php?id=<?php echo $product_id; ?>"><label class="add radd">
                                             <i style="padding: 4px;" class="icon right  fas fa-plus"></label></a></i></td>
                              </td>
                              <?php $subtotal = $_SESSION['qtycart'][$i] * $product_price; ?>
                              <?php
                              $subquery = "update cart set subtotal = $subtotal where product_id = $product_id";
                              $run = mysqli_query($con, $subquery);
                              ?>
                              <td class="tdy" data-label="Subtotal"><?php echo $subtotal; ?></td>
                              <?php $total = $total + $subtotal ?>
                              <td class="tdy" data-label="Deletion"><a href="DeleteProductCart.php?id=<?php echo $product_id; ?>" id="Deletionlink"><i class="far fa-times-circle"></i></a></td>

                         </tr>

          <?php
                    }
                    $i++;
               }
          } else {
               echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
          } ?>
     </Table>
     <div class="up">

          <div class="boxy">
               <label class="totaly"> GRAND TOTAL : <label class="rs"><?php echo $total; ?></label></label>
               <?php $_SESSION['grandtotal'] = $total; ?>
               <!-- <button class='checkout'> <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button> -->
               <?php
               if (isset($_SESSION['phonenumber'])) {
                    $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
                    $run_price = mysqli_query($con, $sel_price);
                    $count = mysqli_num_rows($run_price);
                    if ($count > 0) {
                         echo "<a href='Checkout.php' style = 'color:black;'><button class='checkout' ><span>CHECKOUT</span> <label class='arrow'><i class='fas fa-arrow-right'></i></label></a>";
                    } else {
                         echo "<a href='Includes/alert.php' style = 'color:black;'><button class='checkout' ><span>CHECKOUT</span> <label class='arrow'><i class='fas fa-arrow-right'></i></label></a>";
                    }
               } else {
                    echo "<a href='../auth/BuyerLogin.php' style = 'color:black;'><button class='checkout'><span>CHECKOUT</span> <label class='arrow'><i class='fas fa-arrow-right'></i></label></a>";
               }

               ?>
          </div>

          <a href="emptyCart.php" style="color:black;"><label class="empty">EMPTY CART <i class="fas fa-shopping-cart"></i></label></a>
          <br>
          <a href="BuyerHomepage.php" style="color:black;"><label class="cont">CONTINUE SHOPPING <i class="fas fa-shopping-bag ml-1"></i></label></a>


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