<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13-11-2018
 * Time: 09:00
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP ARRAY</title>
<style>
   body{
       text-align: center;
   }
  .rood {
      border: red solid 5px;
  }
 .groen{
     border: green solid 5px;
 }

</style>
</head>
<body>
<?php
for ($i = 1; $i <=9;$i++){
    if($i % 2 ==0){
        $class = "class = 'rood'";
    }else{
        $class = "class = 'groen'";
    }
    echo "<img ".$class. "src='Bird pictures/bird".$i.".jpg'>";
}
?>
</html>
