<?php
//object
class Associate {


//constructor applies to all new associate
public function __construct($firstName, $memberID)
{
$this->firstName = $firstName;
$this->memberID = $memberID;

}


function average($values) {
$elementSum = 0;

for ($i = 0; $i <count($values); $i++)
{

$elementSum = $elementSum + $values[$i];
}

print_r ($elementSum);
if(count($values) == 0)

{
return 0;
}
else {
return $elementSum / count($values);
}
}

function getRank() {
 $scores = array("Darach" => array(90,80,89),
                "Debbie" => array(49,39,29),
                "Bird" => array(97,90,92)
                );
print_r($scores);
foreach($scores as $key => $score)
{
echo $key;
print_r ($score);
$avgScore = $this->average($score);

if($avgScore < 50) 
{
$retVal = "Third  Tier. \n";
}
else if ($avgScore < 70)
{
echo "Second Tier. \n";
}
else {
$retVal = "Top Tier. \n";
}
return $retVal;
}

foreach(array_keys($scores) as $name)
{
$avgScore = average($Ranks[$ranked]);
$skill = getRank($avgScore);

echo "$name is currently ranked $skill with an average of $avgRank. \n";
}
}

public function listName() //calls to constructor function
{
echo $this->firstName."\n";
}

public function listID()
{
echo $this->memberID."\n";
}
}



class assistantM extends Associate { //inherites from parent class

function salesReport() 
{
$hourly=0;
while ($hourly <= 10)
{
$hourly +=1;

}
echo "Sales Report is $hourly \n";
}

}


$Debbie = new assistantM("Debbie","018");
$Debbie->listName();
print_r($Debbie->getRank());
$Darach = new Associate("Darach","000");
 //creates new object for the class
$Darach->listName();
$Darach->listID();
 //calls to function listName
print_r($Darach->getRank());
$Bird = new Associate("Bird","001");
$Bird->listName();
$Bird->listID();


print_r($Debbie->salesReport());


?>
