<?php
include_once("server.php");
//setting app data
$noData=$_POST['nodata'];
$proj="";
$msg="saved";
$year=date("Y");

if($noData!="yes")
{
  $collage=$_POST['school'];
  $mail=$_POST['mail'];
  $yr=$_POST['year'];
  $course=$_POST['cz'];
  queryDb($conn,$collage,$mail,$yr,$course,$proj);
  
}else{
  outoLoadDb($conn);
}
function SaveData($col,$mail,$yr,$coz,$proj){
if($proj!=""){//save data in database if project is not null
   $sql = "insert into details (collage,mail,yr,course,project) values('$col','$mail','$yr','$coz','$proj');";
   $result = mysqli_query($GLOBALS['conn'],$sql);
    
} else{
    //save data in cookie if project is null 
    setcookie('collage',$col,time()+3600*24*7);
    setcookie('email',$mail,time()+3600*24*7);   
    setcookie('yos',$yr,time()+3600*24*7);
    setcookie('course',$coz,time()+3600*24*7);
    setcookie('year',$GLOBALS['year'],time()+3600*24*7);
 }
 return "success";
}
function outoLoadDb(){
    //called when web loads and user is not engaged
    //first checks if there is a cookie containing relevant data
     if(isset($_COOKIE['collage']) && isset($_COOKIE['email']))  
    queryDb($GLOBALS['conn'],$_COOKIE['collage'],$_COOKIE['email'],$_COOKIE['yos'],$_COOKIE['course'],""); 
}
function queryDb($conn,$collage,$mail,$yr,$course,$proj){
  
  $foundData=array(); 
  //if data exists dont save return true
  //and fetch the projects in that school in that year
  
  $sql = "SELECT DISTINCT project as project FROM details WHERE collage='$collage' AND yr='$yr' ;";
  $result = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        $foundData[] =$row['project'];     
      }
      $jsn=json_encode($foundData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );  
      echo $jsn;//data used in js to recommend users the projects that they should download  
  } else {
    //called when web loads and user is not engaged
    $foundData[0] ='project';
    $jsn=json_encode($foundData,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );  
    echo $jsn;
  }
}

  mysqli_close($conn);
?>

