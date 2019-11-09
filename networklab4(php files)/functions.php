 <?php
// function will give the name the country based on the input parameter (wonder name)
function wonderLocatedPlace($name)
{
 if(!empty($name))
 {
 $wonders=array('China'=>'Great Wall of China','Jordan'=>'Petra','Brazil'=>'Christ the Redeemer','Peru'=>'Machu Picchu','Mexico'=>'Chichen Itza','Italy'=>'Colosseum','India'=>'Taj Mahal','Egypt'=>'Great Pyramid of Giza');
 
 foreach($wonders as $Palce=>$wonderName)
 {
 if($name==$wonderName)
 {
 $wonderPlace = $Palce;
 break;
 }
 else {
 $wonderPlace = "Wonder not exist with the given name" ;
 }
 } 
 }
 else {
 $wonderPlace = "Please enter a wonder name";
 }
 return $wonderPlace;
}
?>