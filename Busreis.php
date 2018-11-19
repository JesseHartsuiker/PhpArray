<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 13-11-2018
 * Time: 09:41
 */
?>

<! DOCTYPE html>
<html>
<head>
   <title>Busreis</title>

</head>
<body>
<?php
$leeftijd = 65;
$bedrag = 10;
if($leeftijd > 65 ){
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag;
?>
</body>


</html>
