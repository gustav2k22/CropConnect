<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $pan = $row['farmer_pan'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $account = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>
    <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'GREATER ACCRA') {
    var array = ['Accra Metropolitan', 'Tema Metropolitan', 'Adenta Municipal', 'Ga East Municipal', 'Ga West Municipal', 'Ga South Municipal', 'Ga Central Municipal', 'Ledzokuku Municipal', 'La Dade Kotopon Municipal', 'Shai Osudoku', 'Ningo Prampram', 'Ablekuma North Municipal', 'Ablekuma West Municipal', 'Ayawaso East Municipal', 'Ayawaso North Municipal', 'Ayawaso Central Municipal', 'Ayawaso West Municipal'];
} else if (a === 'ASHANTI') {
    var array = ['Kumasi Metropolitan', 'Asante Akim Central Municipal', 'Asokore Mampong Municipal', 'Bekwai Municipal', 'Ejisu Municipal', 'Obuasi Municipal', 'Kwabre East Municipal', 'Atwima Nwabiagya', 'Atwima Kwanwoma', 'Afigya Kwabre', 'Amansie Central', 'Amansie West', 'Bosomtwe', 'Sekyere East', 'Sekyere West'];
} else if (a === 'CENTRAL') {
    var array = ['Cape Coast Metropolitan', 'Abura Asebu Kwamankese', 'Agona East', 'Agona West Municipal', 'Ajumako/Enyan/Essiam', 'Asikuma-Odoben-Brakwa', 'Assin North', 'Assin South', 'Awutu Senya East Municipal', 'Awutu Senya West', 'Effutu Municipal', 'Gomoa East', 'Gomoa West', 'Komenda Edina Eguafo Abirem Municipal', 'Mfantseman Municipal'];
} else if (a === 'EASTERN') {
    var array = ['New Juaben South Municipal', 'New Juaben North Municipal', 'Akwapim South Municipal', 'Akwapim North Municipal', 'Kwahu East', 'Kwahu South', 'Kwahu West Municipal', 'Birim North', 'Birim South', 'Fanteakwa North', 'Fanteakwa South', 'Akuapem North', 'Akuapem South', 'Lower Manya Krobo', 'Upper Manya Krobo'];
} else if (a === 'WESTERN') {
    var array = ['Sekondi-Takoradi Metropolitan', 'Ahanta West Municipal', 'Effia-Kwesimintsim Municipal', 'Jomoro', 'Nzema East', 'Wassa Amenfi Central', 'Wassa Amenfi East', 'Wassa Amenfi West', 'Mpohor', 'Shama', 'Tarkwa-Nsuaem Municipal', 'Prestea-Huni Valley'];
} else if (a === 'WESTERN NORTH') {
    var array = ['Bibiani Anhwiaso Bekwai Municipal', 'Bia West', 'Bia East', 'Sefwi Wiawso Municipal', 'Juaboso', 'Suaman'];
} else if (a === 'NORTHERN') {
    var array = ['Tamale Metropolitan', 'Sagnarigu Municipal', 'Yendi Municipal', 'Saboba', 'Karaga', 'Kpandai', 'Tatale Sanguli', 'Zabzugu', 'Bimbilla', 'Chereponi', 'Gushegu Municipal'];
} else if (a === 'NORTH EAST') {
    var array = ['Nalerigu/Gambaga Municipal', 'West Mamprusi', 'East Mamprusi', 'Bunkpurugu', 'Yunyoo Nasuan', 'Chereponi'];
} else if (a === 'SAVANNAH') {
    var array = ['Damongo Municipal', 'Bole', 'Sawla-Tuna-Kalba', 'West Gonja', 'Central Gonja', 'North Gonja'];
} else if (a === 'UPPER EAST') {
    var array = ['Bolgatanga Municipal', 'Bawku Municipal', 'Bongo', 'Kassena Nankana East', 'Kassena Nankana West', 'Builsa South', 'Builsa North', 'Garu', 'Pusiga', 'Tempane'];
} else if (a === 'UPPER WEST') {
    var array = ['Wa Municipal', 'Wa East', 'Wa West', 'Lawra Municipal', 'Jirapa Municipal', 'Sissala East', 'Sissala West', 'Nandom'];
} else if (a === 'OTI') {
    var array = ['Kadjebi', 'Krachi East Municipal', 'Krachi West', 'Jasikan', 'Nkwanta North', 'Nkwanta South'];
} else if (a === 'VOLTA') {
    var array = ['Ho Municipal', 'Ketu South Municipal', 'Hohoe Municipal', 'Keta Municipal', 'Kpando Municipal', 'South Dayi', 'North Dayi', 'Adaklu', 'Afadzato South', 'Agotime Ziope'];
} else if (a === 'BONO') {
    var array = ['Sunyani Municipal', 'Berekum Municipal', 'Dormaa Central Municipal', 'Tain', 'Wenchi', 'Jaman North', 'Jaman South', 'Sunyani West'];
} else if (a === 'BONO EAST') {
    var array = ['Techiman Municipal', 'Kintampo North Municipal', 'Kintampo South', 'Atebubu-Amantin', 'Pru West', 'Pru East', 'Nkoranza North', 'Nkoranza South'];
} else if (a === 'AHAFO') {
    var array = ['Goaso Municipal', 'Asunafo North Municipal', 'Asunafo South', 'Tano North Municipal', 'Tano South'];
}

            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: rgb(78, 180, 121);


        }




        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {


            float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;

        }

        .again {
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left: 100px;


        }

        .say {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;



        }

        .say:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <div class="just">
        <a href="Homepage.php"> <i class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1> EDIT PROFILE</h1>
                </tr>
                <tr align="center">
                    <div class="in-icons">
                        <td>
                            <label><b>Name :</b></label>
                        </td>
                        <td>
                            <textarea rows="2" column="18" value="" disabled><?php echo $name; ?></textarea>
                        </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Ghana Card :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="20" disabled><?php echo $pan; ?></textarea>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Phone :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone; ?>" />
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Address :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address; ?> " />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>State :</b></label>
                    </td>
                    <td>
                        <select name = "statevalue" id="states" onchange="state()" tabindex="1" style="width:170px;">
                            <option value="0">--Select State--</option>
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
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>District :</b></label>
                    </td>
                    <td>
                         <select name="district" id="district"><option>Select District</option></select>
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>Bank :</b></label>
                    </td>
                    <td>
                        <input type="number" name="bank" value="<?php echo $account; ?>" />
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>
                <tr colspan=2>
                    <td colspan=2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>

        <div class="again">
            <a href="ChangePassword.php"><button class="say">Change Password</button></a>
        </div>

    </div>



</body>

</html>

<?php


if (isset($_POST['confirm'])) {
    $phone = mysqli_real_escape_string( $con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string( $con, $_POST['address']);
    $district = mysqli_real_escape_string( $con, $_POST['district']);
    $state = mysqli_real_escape_string( $con, $_POST['statevalue']);
    $account = mysqli_real_escape_string( $con, $_POST['bank']);

    $query = "update farmerregistration 
              set farmer_phone = '$phone', farmer_address = '$address',
              farmer_bank = '$account', farmer_state = '$state',
              farmer_district = '$district'
              where farmer_id 
              in (select farmer_id from farmerregistration 
              where farmer_phone='$sessphonenumber')";
    $run = mysqli_query($con, $query);
    
    $_SESSION['phonenumber'] = $phone;
    echo "<script>window.open('FarmerProfile.php','_self')</script>";
}
?>