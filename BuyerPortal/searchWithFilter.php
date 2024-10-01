<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
 
<label>State</label>
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

</body>
</html>