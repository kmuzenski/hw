<?php
//object
class Associate {


//constructor applies to all new associate
public function __construct($firstName, $memberID)
	{
	$this->firstName = $firstName;
	$this->memberID = $memberID;

	}


public function average($values) {
		$elementSum = 0;




		for ($i = 0; $i <count($values); $i++)
		{
		$elementSum = $elementSum + $values[$i];
		}

		if(count($values) == 0)

		{
		return 0;
		}
		else
		{
		return $elementSum / count($values);
		}
		
	}



public function getRank() {
	 $scores = array("Darach" => array(60,62,66),
                "Debbie" => array(49,39,29),
                "Bird" => array(97,90,92)
                );

	foreach($scores as $key => $score)
		{
		if($key != $this->firstName)
		{
		continue;
		}	

		$avgScore = $this->average($score);
		$retVal = "Rank is Top Tier. \n";
			
		if($avgScore < 50) 
		{
			$retVal = "Rank is Third  Tier. \n";
		}

		else if ($avgScore < 70)
		{
			$retVal= "Rank is Second Tier. \n";
		}
		}

		return $retVal;
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



//calls to functions or creates new object 
$Debbie = new assistantM("Debbie","018");
$Debbie->listName();
$Debbie->listID();

print_r($Debbie->getRank());

print_r ("\n");
$Darach = new Associate("Darach","000");
$Darach->listName();
$Darach->listID();
print_r($Darach->getRank());

print_r("\n");
$Bird = new Associate("Bird","001");
$Bird->listName();
$Bird->listID();
print_r($Bird->getRank());

print_r("\n");
print_r($Debbie->salesReport());

 
?>
