<?php
 
header("Access-Control-Allow-Origin: *");
 

  
$servername = "localhost";
$username = "u481158665_ffa";
$password = "v3p9r3e@59A";
$dbname = $username;

$get_code_result ="";
$get_rp_array_2 ="";
$lettre ="" ; 
$get_vent_array_2 ="";
$get_result_users_perf_array_2 ="";
$get_result_users_nom_1_array_2 ="";
$get_result_users_nom_2_array_2 ="";
$get_result_users_nom_3_array_2 ="";
$get_result_users_nom_4_array_2 ="";
$get_users_nationality_array_2 ="";
$get_club_nom_complet_array_2 ="";
$get_club_departement_array_2 =",";
$get_club_region_array_2 ="";
$get_cat_array_2 ="";
$get_users_naissance_array_2 ="";
$get_result_date_perf_array_2 ="";
$get_result_villes_nom_array_2 ="";
$epreuve_sex_array_2 ="";
$get_users_nom_complet_array ="";
$window_location_href =$_POST["window_location_href"] ; 
$get_epreuve_nom_complet =""; 

 





 

//$myfile = fopen("src_info_all_array.php", "a") or die("Unable to open file!");
$myfile1 = fopen("src_1.php", "a") or die("Unable to open file!");

/* 
$txt_1 = "[";
$txt_2 = "\n";
$txt_3 = "{";
$txt_4 = "\n";
*/
$txt = "\n \n \n \n {";
$txt = $txt.'"get_rp_array_2":"'.$get_rp_array_2.'",';
$txt= $txt."\n";
$txt =$txt.'"get_vent_array_2":"'.$get_vent_array_2.'",';
$txt= $txt."\n";
$txt =$txt.'"get_result_users_perf_array_2":"'.$get_result_users_perf_array_2.'",';
$txt= $txt."\n";
$txt =$txt.'"get_result_users_nom_1_array_2":"'.$get_result_users_nom_1_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_result_users_nom_2_array_2":"'.$get_result_users_nom_2_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_result_users_nom_3_array_2":"'.$get_result_users_nom_3_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_result_users_nom_4_array_2":"'.$get_result_users_nom_4_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_users_nationality_array_2":"'.$get_users_nationality_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_club_nom_complet_array_2":"'.$get_club_nom_complet_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_club_departement_array_2":"'.$get_club_departement_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_club_region_array_2":"'.$get_club_region_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_cat_array_2":"'.$get_cat_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_users_naissance_array_2":"'.$get_users_naissance_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_result_date_perf_array_2":"'.$get_result_date_perf_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_result_villes_nom_array_2":"'.$get_result_villes_nom_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"epreuve_sex_array_2":"'.$epreuve_sex_array_2.'",';
$txt= $txt."\n";
$txt = $txt.'"get_users_nom_complet_array":"'.$get_users_nom_complet_array.'",';
$txt= $txt."\n";
$txt = $txt.'"window_location_href":"'.$window_location_href.'",';
$txt= $txt."\n";
$txt = $txt.'"get_code_result":"'.$get_code_result.'"';
 
$txt = $txt."\n \n}";
$txt = $txt.",";
 



//$myfile = fopen("src_info_all_array2.php", "a") or die("Unable to open file!");
$myfile1 = fopen("data/src_1_.php", "a") or die("Unable to open file!");


fwrite($myfile1, $txt);
 
 
fclose($myfile1);


 
 


 
$txt2='"'.$get_code_result.'"'.",\n";






//$myfile = fopen("src_info_all_array2.php", "a") or die("Unable to open file!");
$myfile2 = fopen("data/src_2_.php", "a") or die("Unable to open file!");


fwrite($myfile2, $txt2);
 
 
fclose($myfile2);





/*
?>


[
    {
            "get_users_nom_complet_1":"" ,
            "get_users_nom_complet":"" , 
            "get_users_nationality":"", 
            "get_users_naissance":"",
            "get_users_naissance2":"",
            "get_result_villes_nom":"",
            "get_result_users_perf":"",
            "get_result_users_nom_2":"",
            "get_result_users_nom_1":"",
            "get_result_date_perf":"",
            "get_epreuve_nom_complet":"",
            "get_result_users_nom_0":"",
            "get_epreuve_emplacement":"",
            "get_club_region":"",
            "get_club_nom_complet":"",
            "get_club_departement":"",
            "get_cat":"",
            "epreuve_sex":""      
    }  , 
    {
        "get_users_nom_complet_1":"" ,
        "get_users_nom_complet":"" , 
        "get_users_nationality":"", 
        "get_users_naissance":"",
        "get_users_naissance2":"",
        "get_result_villes_nom":"",
        "get_result_users_perf":"",
        "get_result_users_nom_2":"",
        "get_result_users_nom_1":"",
        "get_result_date_perf":"",
        "get_epreuve_nom_complet":"",
        "get_result_users_nom_0":"",
        "get_epreuve_emplacement":"",
        "get_club_region":"",
        "get_club_nom_complet":"",
        "get_club_departement":"",
        "get_cat":"",
        "epreuve_sex":""      
    }

 ]
    
<?php

*/


  // Create connection




 


 

 
 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info_all_array (
get_code_result,
get_rp_array_2,
get_vent_array_2,
get_result_users_perf_array_2,
get_result_users_nom_1_array_2,
get_result_users_nom_2_array_2,
get_result_users_nom_3_array_2,
get_result_users_nom_4_array_2,
get_users_nationality_array_2,
get_club_nom_complet_array_2,
get_club_departement_array_2,
get_club_region_array_2,
get_cat_array_2,
get_users_naissance_array_2,
get_result_date_perf_array_2,
get_result_villes_nom_array_2,
epreuve_sex_array_2,
get_users_nom_complet_array,
window_location_href,
get_epreuve_nom_complet
)
VALUES (
'$get_code_result',
'$get_rp_array_2',
'$get_vent_array_2',
'$get_result_users_perf_array_2',
'$get_result_users_nom_1_array_2',
'$get_result_users_nom_2_array_2',
'$get_result_users_nom_3_array_2',
'$get_result_users_nom_4_array_2',
'$get_users_nationality_array_2',
'$get_club_nom_complet_array_2',
'$get_club_departement_array_2',
'$get_club_region_array_2',
'$get_cat_array_2',
'$get_users_naissance_array_2',
'$get_result_date_perf_array_2',
'$get_result_villes_nom_array_2',
'$epreuve_sex_array_2',
'$get_users_nom_complet_array',
'$window_location_href',
'$get_epreuve_nom_complet'

)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





?>