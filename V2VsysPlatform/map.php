<?php

// Test php file
/*
//mysqli_select_db($con,"TestDatabase");// Connnect table
//$sql="SELECT * FROM testTable WHERE id = '".$q."'";
//$result = mysqli_query($con,$sql);

$con = mysqli_connect("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
//Check connection
if($con){
    echo "Yes,successful to connect mysql.<br/>HOSTNAME OR IP ADDRESS: 50.62.209.42<br/>username: maoxul<br/>password: Lmx248679 <br/> database name:<br/>Port: 3306<br/>";
    $sql="SELECT * FROM testTable";
    $result = $con->query($sql);
}else{
    echo "Shit, failed to connect <br/>";
}
if($result->num_rows>0){
    // output data of each row
    while($row = $result -> fetch_assoc()){
        echo " id: ".$row["id"]." - Name: ".$row["Firstname"]." ".$row["Lastname"]."<br/>";
    }
}else{
    echo "Fuck! Nothing there";
}
$con->close();

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
echo "</table>";
*/

/*
// JSON PHP
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
if (!$con) {
    echo "<br/>Oh no, Can't connect server right now!";
}else{
    //echo "Yes, connectted to server successfully! <br/>";
}
//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM OworldContact";
$result = mysqli_query($con,$sql);
//$row = mysqli_fetch_array($result);
$rowCount=mysqli_num_rows($result);
//echo "The number of row is ".$rowCount."<br/>";

// encode to JSON format.
//echo "The JSON part is below: <br/>";
$outp = "[";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    if($outp!="["){
        $outp.=",";
    }
    $outp .= '{"id":"'  . $row["id"]   . '",';
    $outp .= '"Name":"'   . $row["Name"] . '",';
    $outp .= '"Email":"'. $row["Email"]. '"}';
}
$outp.="]";
mysqli_close($con);
//echo "Fuck You PHP <br/>";
echo($outp);
*/


// query GPS data and put them into array in JSON and AJAX
$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
if (!$con) {
    //echo "<br/>Oh no, Can't connect server right now!";
}else{
    //echo "Yes, connectted to server successfully! <br/>";
}

$sql1="SELECT `COL 1` FROM `TABLE 4`;";
$sql2="SELECT `COL 2` FROM `TABLE 4`;";
$result1 = mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
if($result1===FALSE){
    //echo "<br/>Query One is failed<br/>";
}else{
    //echo "<br/>Query One is successful";
}

if($result2===FALSE){
    //echo "<br/>Query two is failed!!<br/>";
}else{
    //echo "<br/>Query two is successful!!<br/>";
}
//$row1 = mysqli_fetch_array($result1);
//echo $result1."<hr/>";

$LatLon = [];
//echo $length;
$i=0;
$j=0;
while($row1=mysqli_fetch_array($result1)){
    if($i===0){

    }else{
        array_push($LatLon,$row1[0]);
    }
    $i+=1;
    //echo $LatLon[i][1]."<br/>";
}
while ($row2=mysqli_fetch_array($result2)) {
    if($j===0){

    }else{
        array_push($LatLon,$row2[0]);
    }
    $j+=1;    
}

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