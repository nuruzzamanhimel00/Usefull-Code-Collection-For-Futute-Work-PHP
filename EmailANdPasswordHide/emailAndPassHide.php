public function getHiddenEmail($email)
         {
             // himel147@gmail.com

             $domainPos = strpos($email,'@');
             $domain = substr($email,$domainPos+1);

             $emlf = substr($email,0,2);
             $emlL = substr($email,$domainPos-2,2);

             $emlArray = array();

             if(filter_var($email,FILTER_VALIDATE_EMAIL))
             {
                 $emlArray[] = $emlf;

                 for ($i=1; $i <4 ; $i++) { 
                     $emlArray[] = "*";
                 }
                 $emlArray[] = $emlL;
                 $emlArray[] = $domain;
                 //print_r($emlArray);
             }

             $hiddenEml = implode("",$emlArray);

             return $hiddenEml;
         }

         public function getHiddenPhone($phone)
         {
             $lstDgt = substr($phone,8);
             $empArray = "";

             if(is_numeric($phone))
             {
                 for ($i=1; $i <12 ; $i++) 
                 { 
                     $empArray .= '*';
                 }
                 $empArray .=$lstDgt;
             }


             
             return $empArray;
         }
<?php 
	$email = "nuruzzaman.himel147@gmail.com";
	$domnPosition = strpos($email,'@'); // total length
	// echo $domnPosition;
	$domnName = substr($email,$domnPosition+1);
	// echo $domnName;

	$emlf = substr($email,0,2); // get first two ward
	// echo $emlf;
	$starLen = $domnPosition - 2;
	//echo $starLen;

	$enptyArray = array();

	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$enptyArray[] = $emlf;
		//echo $enptyArray;

		for ($i=1; $i <=$starLen ; $i++) { 
			$enptyArray[] = "*";
		}
		$enptyArray[] = $domnName;

	}
	print_r($enptyArray);

	$arrytostring = implode("",$enptyArray);
	echo $arrytostring."<br>";
?>

<?php 
	
	$number = "01622819929";
	$endTwoNum = substr($number,9,2);
	// echo $endTwoNum;

	$emptyArray = array();
	if(is_numeric($number))
	{
		for ($i=1; $i <=8 ; $i++) { 
			$emptyArray[] = "*";
		}
		//print_r($emptyArray);
		$emptyArray[] = $endTwoNum;
	}

	$arrytoNumber = implode("",$emptyArray);
	echo $arrytoNumber."<br>";

?>