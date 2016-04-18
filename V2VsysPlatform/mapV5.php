<?php
/*
* Author: MAOXU LIU
* Create date: April 17, 2016
* Last improvement date: April 17, 2016 
* Desctription: Vehicle to vehicle collision warning system demo and experience platform. In this php, we retieve the whole table including all data from case1, case 3,case 6, case 8, case 9
*/

// query GPS data and put them into array in JSON and AJAX
$con = new mysqli("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
/*
//* Check function
if (!$con) {
    echo "<br/>Oh no, Can't connect server right now!";
}else{
    echo "Yes, connectted to server successfully! <br/>";
}
*/

$data="SELECT * FROM `TABLE 7`;";
$result_data = mysqli_query($con,$data);
/*
//* Check function
if($result_data===FALSE){
    echo "<br/>Query data is failed<br/>";
}else{
    echo "<br/>Query data is successful";
}
*/
/*
$row1 = mysqli_fetch_array($result_data);
echo "<hr/>".$row1[0]."<hr/>";
echo "<hr/>".$row1[1]."<hr/>";
echo "<hr/>".$row1[2]."<hr/>";
*/
$CaseData = [];
//echo $length;
//$i=0;
while($row_data=mysqli_fetch_array($result_data)){
        array_push($CaseData,$row_data);
        //echo "<hr/>".$row_data[0]."<hr/>";
        //echo "fuck<br/>";
        //$i+=1;
}
//echo "<hr/><hr/>";
//$length = sizeof($CaseData);
//echo "length of arr is ".$length;
//echo "<hr/><hr/>encoded json<br/>";
$c=json_encode($CaseData);
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