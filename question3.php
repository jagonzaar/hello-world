<?php
if(brackPar("(([()[][))")){ // call the function
echo "TRUE";
}else{
	echo "FALSE";
}
function brackPar($str) {
	$arr1 = str_split($str); //string->array of characters
	$Nbp = count($arr1);
	//verify the balance of P-B
	if($Nbp%2!=0){
	return false;
	}
	else{
			//loop on the elements.
		$Bopen = 0;
		$Popen = 0;
		for ( $i = 0; $i != $Nbp; $i++ ) {
			if($arr1[$i]=='('){
				//increase par. open
			$Popen++;
			}
			elseif($arr1[$i]=='['){
				//increase brac. open
				$Bopen++;
			}
			elseif($arr1[$i]==')'){
				//
				if($arr1[$i-1] =='['){
					return false;//error [)
				}
				//decrease par. open
				$Popen--;
			}
			elseif($arr1[$i]==']'){
				if($arr1[$i-1] =='('){
					return false;//error (]
				}
				//decrease brac. open
				$Bopen--;
			}
			//Verify that the character is P or B
			elseif(!empty($arr1[$i])){
				echo "ERROR not () []";
				return false;
			}
			//Verify the balance Open-Closed for P B 
			if(($Bopen < 0) || ($Popen < 0)){
			return false;
			}
			//Verify that are not too much open P B
			elseif(($Bopen + $Popen) > ($Nbp/2)){
				return false;
			}
		}

	return true;
	}
}
?>