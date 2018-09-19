<?php 


echo getVoucher();

function getVoucher(){

	$tempArray=array();

	date_default_timezone_set("Asia/Jakarta");

	$date = date('Y-m-d',strtotime($_POST['start-date']));
	$end_date=date('Y-m-d',strtotime($_POST['end-date']));
	$count=0;
	while (strtotime($date)<=strtotime($end_date)){
		$temp=randVoucher();
		if(!in_array($temp, $tempArray)){
			$tempArray[$count]=$temp;
			echo $date." ".$temp."<br>";	
			$count++;
		}else{
			echo "ada yang sama";
		}

		$date= date("Y-m-d", strtotime("+1 day",strtotime($date)));
	}

}

function randVoucher(){
	$strings=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

	$tempResult=array();
	$randResult="";
	for($i=0;$i<=4;$i++){

		$temp=$strings[array_rand($strings)];
		$ltemp=strtolower($temp);
		if(!in_array($ltemp,$tempResult)){
			$tempResult[$i]=$ltemp;
			$randResult.=$temp;
		}else{
			$i--;
		}
	}

	$randNum=rand(0,9);
	$randResult.=$randNum;
	return $randResult;
}

?>