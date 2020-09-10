<?php 
	
	if ($_POST){
		
	$email_to = 'career@zuv.foundation';
		#$email_to = 'pramod1398@gmail.com';

	$email_from = $_POST['email'];
	
	$name = $_POST['name'];
	
	$subject = "Personality Test results for " . $name ; // required
	
	$selfEsteem=$_POST['32'] + (7 - $_POST['34'] + 1 ) + ( 7 -  $_POST['36'] + 1 ) + $_POST['38'] + $_POST['40'];
	$mindfulness=(7 - $_POST['31']  + 1) + ( 7- $_POST['33'] + 1 ) + (7 - $_POST['35'] + 1) + ( 7 - $_POST['37'] + 1) + (7 - $_POST['39'] + 1);
	
	$openness=$_POST['4'] + $_POST['11'] + $_POST['14'] + $_POST['17'] + (7 - $_POST['25'] + 1) + $_POST['29'];
	$conscientiousness=(7 - $_POST['7'] + 1) + $_POST['10'] + $_POST['15'] + $_POST['20'] + $_POST['23'] + $_POST['27'];
	$extraversion=$_POST['1'] + ( 7 - $_POST['5'] + 1) +  $_POST['9'] + $_POST['12'] + $_POST['19'] + $_POST['26'] ;
	$agreeableness=(7 - $_POST['2'] + 1) + $_POST['6'] + $_POST['13'] + $_POST['18'] + $_POST['22'] + $_POST['30']; 
	$neuroticism=$_POST['3'] + (7 - $_POST['8'] + 1) + $_POST['16'] + $_POST['21'] + (7 - $_POST['24'] +1 ) + $_POST['28'];
	
	$honestyHumility=$_POST['41'] + (7 - $_POST['43'] + 1 ) + $_POST['45'] + $_POST['47'] + (7 - $_POST['49'] + 1);
	$proactivePersonality=$_POST['51'] + $_POST['53'] + $_POST['55'] + $_POST['57'] + $_POST['59']; 
	$internalLoc=$_POST['42'] + (7 - $_POST['44'] + 1) + $_POST['46'] + $_POST['48']  + (7 - $_POST['50'] + 1);
	$narcissism= $_POST['61'] + $_POST['62'] + $_POST['63'] + $_POST['64'] + $_POST['65'];
	$machiavellianism= $_POST['52'] + $_POST['54'] + $_POST['56'] + $_POST['58'] + $_POST['60'];
	
	$message = "Self-esteem: " . $selfEsteem . "/35 \n Mindfullness: " . $mindfulness . "/ 35 \n Openness: " . $openness .  "/42 \n Conscientiousness: " . $conscientiousness . "/42 \n Extraversion: " . $extraversion .  "/42 \n Agreeableness: " . $agreeableness. "/42 \n Neuroticism: " . $neuroticism . "/42 \n Honesty Humility: " . $honestyHumility . "/35 \n Proactive Personality: " . $proactivePersonality . "/35 \n Internal LOC: " .  $internalLoc . "/35 \n Narcissism: " . $narcissism . "/35 \n Machiavellianism: " . $machiavellianism . "/35";
	
	$email_message = "Personality Test Results:\n\n";
	
	function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
	
	$email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Score: ".clean_string($message)."\n\n";
	$email_message .= "Thank You \nFrom Developers Team, CodeBinary Initiatives";
 
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	//echo ($email_message);


$user='root';
$password='';
$db='p_test_db';
$conn =mysqli_connect('localhost', $user, $password, $db); 
if (mysqli_connect_error()){ die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error()); } 
else{ $sql = "INSERT into results(selfEsteem,mindfulness,openness,conscientiousness,extraversion,agreeableness,neuroticism,honestyHumility,proactivePersonality,internalLoc,narcissism,machiavellianism) values($selfEsteem/35*100,$mindfulness/35*100,$openness/35*100,$conscientiousness/35*100,$extraversion/35*100,$agreeableness/35*100,$neuroticism/35*100,$honestyHumility/35*100,$proactivePersonality/35*100,$internalLoc/35*100,$narcissism/35*100,$machiavellianism/35*100)";}
if ($conn->query($sql)){ echo "<script> alert('New record is inserted sucessfully') </script>"; } 
else{ echo "Error: ". $sql ." ". $conn->error; } 
$conn->close(); 
#}  }
$connection = new mysqli("localhost", $user, $password, $db);
$query = $connection->query("SELECT `selfEsteem` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['selfEsteem'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$se=$s/$c;
#echo $sr;

$query = $connection->query("SELECT `mindfulness` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['mindfulness'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$mf=$s/$c;
#echo $mf;

$query = $connection->query("SELECT `openness` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['openness'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$on=$s/$c;
#echo $on;

$query = $connection->query("SELECT `conscientiousness` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['conscientiousness'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$cs=$s/$c;
#echo $cs;

$query = $connection->query("SELECT `extraversion` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['extraversion'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$ex=$s/$c;
#echo $cs;

$query = $connection->query("SELECT `agreeableness` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['agreeableness'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$ag=$s/$c;

$query = $connection->query("SELECT `neuroticism` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['neuroticism'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$ne=$s/$c;

$query = $connection->query("SELECT `honestyHumility` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['honestyHumility'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$hh=$s/$c;
#echo $hh;

$query = $connection->query("SELECT `proactivePersonality` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['proactivePersonality'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$pp=$s/$c;
#echo $pp;

$query = $connection->query("SELECT `internalLoc` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['internalLoc'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$it=$s/$c;
#echo $it;

$query = $connection->query("SELECT `narcissism` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['narcissism'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$na=$s/$c;

$query = $connection->query("SELECT `machiavellianism` FROM `results`;");
$array = Array();
while($result = $query->fetch_assoc()){
    $array[] = $result['machiavellianism'];
}
$s=0;
$c=0;
foreach($array as $k=>$v){
	$s+=$array[$k];
	$c=$c+1;
}
$ma=$s/$c;
#echo $ma;

$conn =mysqli_connect('localhost', $user, $password, $db); 
if (mysqli_connect_error()){ die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error()); } 
else{ $sql = "UPDATE averages set selfEsteem='$se',mindfulness='$mf',openness='$on',conscientiousness='$cs',extraversion='$ex',agreeableness='$ag',neuroticism='$ne',honestyHumility='$hh',proactivePersonality='$pp',internalLoc='$it',narcissism='$na',machiavellianism='$ma'";}
if ($conn->query($sql)){ echo "<script> alert('New average is updated sucessfully') </script>"; } 
else{ echo "Error: ". $sql ." ". $conn->error; } 
$conn->close();

	echo '<script> alert ("Your personality test scores have been forwarded to HR, Zuv Foundation for futher assessment. Thank You"); </script>';
	mail($email_to, $subject, $email_message, $headers);  
	#echo $headers."\n".$email_message;
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zuv Foundation - Personality Test</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Committed to working for the development of women and children in the fields of education, employment, medical facilities and other related business." />
	<meta name="author" content="Zuv Foundation" />
	
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="canonical" href="https://zuv.foundation/personality_test/" />
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="POST" >
				<span class="contact100-form-title">
					Directions
					<p>The following statements concern <u>your perception about yourself</u> in a variety of situations. Your task is to indicate the strength of your agreement with each statement, utilizing a seven point scale:</p></br>
					<span class="label-input100"><h6>where 1-Strongly Disagree and 7-Strongly Agree</h6></span>
				</span>
				
			
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Your Email*</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email" required>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Your Name*</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name" required>
				</div>
				<span class="contact100-form-title">
                    I see myself as someone who...
				</span>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7" >
					<span class="label-input100">1. Is talkative?*</span>
					<input class="input100" type="number" min="1" max="7"  min="1" max="7" name="1" placeholder="Enter Your Answer" required>
				</div>
				 
			<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">2. Tends to find fault with others*</span>
					<input class="input100" type="number" min="1" max="7"  name="2" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">3. Is depressed, blue*</span>
					<input class="input100" type="number" min="1" max="7"  name="3" placeholder="Enter Your Answer" required>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">4. Is original, comes up with new ideas*</span>
					<input class="input100" type="number" min="1" max="7"  name="4" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">5. Is reserved*</span>
					<input class="input100" type="number" min="1" max="7"  name="5" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">6. Is helpfull and unselfish with others*</span>
					<input class="input100" type="number" min="1" max="7"  name="6" placeholder="Enter Your Answer"required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">7. Can be somewhat careless*</span>
					<input class="input100" type="number" min="1" max="7"  name="7" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">8. Is relaxed, handles stress well*</span>
					<input class="input100" type="number" min="1" max="7"  name="8" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">9. Is full of energy*</span>
					<input class="input100" type="number" min="1" max="7"  name="9" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">10. Is a reliable worker*</span>
					<input class="input100" type="number" min="1" max="7"  name="10" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">11. Is ingenious, a deep thinker*</span>
					<input class="input100" type="number" min="1" max="7"  name="11" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">12. Generates a lot of enthusiasm*</span>
					<input class="input100" type="number" min="1" max="7"  name="12" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">13. Has a forgiving nature*</span>
					<input class="input100" type="number" min="1" max="7"  name="13" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">14. Is curious about many new things*</span>
					<input class="input100" type="number" min="1" max="7"  name="14" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">15. Tend to be organized*</span>
					<input class="input100" type="number" min="1" max="7"  name="15" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">16. Worries a lot*</span>
					<input class="input100" type="number" min="1" max="7"  name="16" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">17. Has an active imagination*</span>
					<input class="input100" type="number" min="1" max="7"  name="17" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">18. Is generally trusting*</span>
					<input class="input100" type="number" min="1" max="7"  name="18" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">19. Has an assertive personality*</span>
					<input class="input100" type="number" min="1" max="7"  name="19" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">20. Perseveres until the task is finished*</span>
					<input class="input100" type="number" min="1" max="7"  name="20" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">21. Can be moody*</span>
					<input class="input100" type="number" min="1" max="7"  name="21" placeholder="Enter Your Answer"required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">22. Is considerate and kind to almost everyone*</span>
					<input class="input100" type="number" min="1" max="7"  name="22" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">23. Does things efficiently*</span>
					<input class="input100" type="number" min="1" max="7"  name="23" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">24. Remains calm in tense situations*</span>
					<input class="input100" type="number" min="1" max="7"  name="24" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">25. Prefers work that is routine*</span>
					<input class="input100" type="number" min="1" max="7"  name="25" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">26. Is outgoing, sociable*</span>
					<input class="input100" type="number" min="1" max="7"  name="26" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">27. Makes plans ans follows through with them*</span>
					<input class="input100" type="number" min="1" max="7"  name="27" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">28. Gets nervous easily*</span>
					<input class="input100" type="number" min="1" max="7"  name="28" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">29. Likes to reflect, play with ideas*</span>
					<input class="input100" type="number" min="1" max="7"  name="29" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">30. Likes to cooperate with others*</span>
					<input class="input100" type="number" min="1" max="7"  name="30" placeholder="Enter Your Answer" required>
				</div> 
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">31. I break or spill things, because of carelessness, not paying attention, or thinking of something else*</span>
					<input class="input100" type="number" min="1" max="7"  name="31" placeholder="Enter Your Answer" required>
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">32.  On the whole, I am satisfied with myself*</span>
					<input class="input100" type="number" min="1" max="7"  name="32" placeholder="Enter Your Answer" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">33. I find it difficult to stay focused on what's happening in the present*</span>
					<input class="input100" type="number" min="1" max="7"  name="33" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">34.  I feel do not have much to be proud of *</span>
					<input class="input100" type="number" min="1" max="7"  name="34" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">35.  It seems that "I am running on automatic", without much awareness of what I am doing*</span>
					<input class="input100" type="number" min="1" max="7"  name="35" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">36.  At times, I think I am no good at all*</span>
					<input class="input100" type="number" min="1" max="7"  name="36" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">37.  I find myself doing things without paying attention*</span>
					<input class="input100" type="number" min="1" max="7"  name="37" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">38.  I feel that I have a number of good qualities.*</span>
					<input class="input100" type="number" min="1" max="7"  name="38" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">39.  I tend to walk quickly to get to where I am going, without paying attention to what I experience along the way*</span>
					<input class="input100" type="number" min="1" max="7"  name="39" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">40.  I feel that I'm a person Of worth*</span>
					<input class="input100" type="number" min="1" max="7"  name="40" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">41. I wouldn't use flattery to get a raise or promotion at work, even if I thought it would succeed*</span>
					<input class="input100" type="number" min="1" max="7"  name="41" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">42. I can pretty much accomplish whatever I set out to accomplish*</span>
					<input class="input100" type="number" min="1" max="7"  name="42" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">43. I think that I am entitled to more respect than the average person is*</span>
					<input class="input100" type="number" min="1" max="7"  name="43" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">44. I believe getting the job one wants is mostly a matter of luck*</span>
					<input class="input100" type="number" min="1" max="7"  name="44" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">45. If I want something from someone, I will laugh at that person's worst jokes*</span>
					<input class="input100" type="number" min="1" max="7"  name="45" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">46. If I am unhappy about a decision made by my boss, I will do something about it*</span>
					<input class="input100" type="number" min="1" max="7"  name="46" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">47. I would never accept a bribe, even if it were very large*</span>
					<input class="input100" type="number" min="1" max="7"  name="47" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">48. I am capable of doing my job well, if I make the effort*</span>
					<input class="input100" type="number" min="1" max="7"  name="48" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">49. I want people to know that I am an important person of high status*</span>
					<input class="input100" type="number" min="1" max="7"  name="49" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">50. I believe, to make a lot of money, you have to know the right people*</span>
					<input class="input100" type="number" min="1" max="7"  name="50" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">51. I enjoy facing and overcoming obstacles to my ideas*</span>
					<input class="input100" type="number" min="1" max="7"  name="51" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">52. I am willing to sabotage the efforts of other people if they threaten my own goals*</span>
					<input class="input100" type="number" min="1" max="7"  name="52" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">53. I love to challenge the status quo*</span>
					<input class="input100" type="number" min="1" max="7"  name="53" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">54. I would cheat if there was a low chance of getting caught*</span>
					<input class="input100" type="number" min="1" max="7"  name="54" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">55. No matter what the odds, if I believe in something I will make it happen*</span>
					<input class="input100" type="number" min="1" max="7"  name="55" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number Name">
					<span class="label-input100">56. I want to be rich and powerful someday*</span>
					<input class="input100" type="number" min="1" max="7"  name="56" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">57. Nothing is more exciting than turning my ideas into reality*</span>
					<input class="input100" type="number" min="1" max="7"  name="57" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">58. I enjoy being able to control the situation *</span>
					<input class="input100" type="number" min="1" max="7"  name="58" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">59. If I see something I don't like, I fix it*</span>
					<input class="input100" type="number" min="1" max="7"  name="59" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">60. If I show any weakness at work, other people will take advantage of it*</span>
					<input class="input100" type="number" min="1" max="7"  name="60" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">61. I see myself as a good leader*</span>
					<input class="input100" type="number" min="1" max="7"  name="61" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">62. I have a natural talent for influencing people*</span>
					<input class="input100" type="number" min="1" max="7"  name="62" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">63. I am an extraordinary person*</span>
					<input class="input100" type="number" min="1" max="7"  name="63" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">64. I like to look at myself in the mirror*</span>
					<input class="input100" type="number" min="1" max="7"  name="64" placeholder="Enter Your Answer" required>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Number between 1-7">
					<span class="label-input100">65. I like to be the centre of attention*</span>
					<input class="input100" type="number" min="1" max="7"  name="65" placeholder="Enter Your Answer" required>
				</div>     
				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" >
						<span>
							Submit
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="vendor/noui/nouislider.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
