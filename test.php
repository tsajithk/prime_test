<?php


function checkPrime($num)
{
 $prime=1;
 for($b=2;$b<$num;$b++)
 {
  if($num%$b==0)
  { 
    $prime=0;
    break;
  }
 }  //for
 if($prime>0) return 1;
 else return 0;
}  //function


 
$limit=$_GET[limit];
$sum=2;

$i=3;
while($sum<$limit)
{
	if(checkPrime($i))
	{
		
		$sum=$sum+$i;
	

    if(checkPrime($sum))
	{
		
		if($sum>$max_sum) { $max_sum=$sum;}
	}
    }
	$i++;
}

    print "<br>Prime, below ".$limit.", which can be written as the sum of the most consecutive primes : ".$max_sum;
 


?>
