<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Choose A Custom Date:
		<select name="day">
			<option value='01'>1</option>
<option value='02'>2</option>
<option value='03'>3</option>
<option value='04'>4</option>
<option value='05'>5</option>
<option value='06'>6</option>
<option value='07'>7</option>
<option value='08'>8</option>
<option value='09'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
		
	</select>
	Choose A Custom Month: 
	<select name="month">
		<option value="01">Jan</option>
		<option value="02">Feb</option>
		<option value="03">Mar</option>
		<option value="04">Apr</option>
		<option value="05">May</option>
		<option value="06">Jun</option>
		<option value="07">Jul</option>
		<option value="08">Aug</option>
		<option value="09">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>

	</select>
	&nbsp;<input type="submit" name="submit" value="Check Event">
	<br><br>

	<?php


	
	

	 
	 $userdate=date('m/d');
	 if(isset($_POST['day'])){
	 	$day=$_POST['day'];
	 	$month=$_POST['month'];
	 	$userdate="$month/$day";


	 }
	 if($userdate==date('m/d')){
	 		echo "Today's Event<br>";

	 	}
	 	else{
	 		echo "Events on $userdate<br>";
	 	}




	 $url="http://api.hiztory.org/aviation/".$userdate."/1/15/api.xml";
	 
	 $xml = simplexml_load_file($url);
	 
	 
	 foreach ($xml->events as $events) {
	 	$i=1;
	 		 	foreach ($events->event as $event) {

	 		echo "$i"."."." ";
	 		echo $event['content'].' '.'<br>';
	 		$i++;
	 		
	 	}

	 	
	 	
	 }
	 ?>
	 


</body>
</html>

	
