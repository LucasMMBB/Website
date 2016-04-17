<?php

// Test php file

// query GPS data and put them into array in JSON and AJAX
$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
/*
* Check function
if (!$con) {
    echo "<br/>Oh no, Can't connect server right now!";
}else{
    echo "Yes, connectted to server successfully! <br/>";
}
*/

$hv_lat="SELECT `HV_LAT` FROM `testCase9`;";
$hv_lon="SELECT `HV_LON` FROM `testCase9`;";
$rv_lat="SELECT `RV_LAT` FROM `testCase9`;";
$rv_lon="SELECT `RV_LON` FROM `testCase9`;";
$result_hv_lat = mysqli_query($con,$hv_lat);
$result_hv_lon = mysqli_query($con,$hv_lon);
$result_rv_lat = mysqli_query($con,$rv_lat);
$result_rv_lon = mysqli_query($con,$rv_lon);
/*
* Check function
if($result_hv_lat===FALSE){
    echo "<br/>Query HV_LAT is failed<br/>";
}else{
    echo "<br/>Query HV_LAT is successful";
}

if($result_hv_lon===FALSE){
    echo "<br/>Query HV_LON is failed!!<br/>";
}else{
    echo "<br/>Query HV_LON is successful!!<br/>";
}

if($result_rv_lat===FALSE){
    echo "<br/>Query RV_LAT is failed!!<br/>";
}else{
    echo "<br/>Query RV_LAT is successful!!<br/>";
}

if($result_rv_lon===FALSE){
    echo "<br/>Query RV_LON is failed!!<br/>";
}else{
    echo "<br/>Query RV_LON is successful!!<br/>";
}
*/
//$row1 = mysqli_fetch_array($result1);
//echo $result1."<hr/>";

$LatLon = [];
//echo $length;
$i=0;
while($row_hv_lat=mysqli_fetch_array($result_hv_lat)){
        array_push($LatLon,$row_hv_lat[0]);
        //echo $LatLon[$i]."<br/>";
        //echo "fuck<br/>";
        $i+=1;
}

//echo "<hr/><hr/>";
while ($row_hv_lon=mysqli_fetch_array($result_hv_lon)) {
        array_push($LatLon,$row_hv_lon[0]);
        //echo $LatLon[$i]."<br/>";
        $i+=1;    
}
//echo "<hr/><hr/>";
while ($row_rv_lat=mysqli_fetch_array($result_rv_lat)) {
        array_push($LatLon,$row_rv_lat[0]);
        //echo $LatLon[$i]."<br/>";
        $i+=1;    
}
//echo "<hr/><hr/>";
while ($row_rv_lon=mysqli_fetch_array($result_rv_lon)) {
        array_push($LatLon,$row_rv_lon[0]);
        //echo $LatLon[$i]."<br/>";
        $i+=1;    
}
//echo "<hr/><hr/>encoded json";
$c=json_encode($LatLon);
echo $c;
mysqli_close($con);



/*
// practice for inserting values in multiple array
$index=0;
$arrayName = array(array());
for($i=0;$i<2;$i++){
    for($j=0;$j<10;$j++){
        $arrayName[$j][$i] = $index;
        //array_push($arrayName[j][i],$index);
        $index += 1;
        echo $arrayName[$j][$i]."<br/>";
    }
    echo "<hr/>";
}
echo count($arrayName,0);
*/
?>