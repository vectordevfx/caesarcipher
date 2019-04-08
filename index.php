<?php
// Caesar Cipher 
// Encrypt and/or Decrypt
//----------------------------------------------------------------------------------------------------------------
function encrypt($string){
	$result = null;
	$count = strlen($string);
	for ($x = 0; $x < $count; $x++) {
		$number = ord($string[$x]);				
		$number = $number - 5; //shift parameter 5
		if($number < 10){
			$add = '00' . $number;
		}elseif ($number < 100){
			$add = '0' . $number;
		}else{
			$add = $number;
		}	
		$result .= $add;
	} 
	echo 'Your encrypted message<br>';
	echo '-----------------------------------------------------------------------------------------<br><br>';
	echo "A" . $result . "Z";
	echo '<br><br><br><br>';	
}


function decrypt($string){
	if (isset($string) && !empty($string)){
		$count = strlen($string);	
		if ($string[0] === "A" && $string[$count-1] === "Z"){
			$string = substr($string,1,-1); // cut first and last char
		}else{
			die("Your string is not valid!");
		}
		$count = strlen($string);
		$output = str_split($string, 3);	
		echo 'Your decrypted message<br>';
		echo '-----------------------------------------------------------------------------------------<br><br>';	
		foreach ($output as $value) {
			echo chr($value+5); //shift parameter 5
		}	
		echo '<br><br><br><br>';	
	}else{
		echo 'input your encrypted message...';
	}
}

// samples
encrypt("Lorem Ipsum Caesar Cipher");
decrypt("A071106109096104027068107110112104027062092096110092109027062100107099096109Z");

encrypt("ABC");
decrypt("A060061062Z");

encrypt("AZ");
decrypt("A060085Z");

encrypt("1");
decrypt("A044Z");

encrypt("A");
decrypt("A060Z");
?>
