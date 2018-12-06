<?php
$limit=$_GET['limit'];


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
 if($prime>0)return 1;
 else return 0;
}  

 

$sum=2;

$prime[0]=2;
$cum_sum[0]=2;
$j=1;
print "<table border=1><tr><td>#<td>Prime Num</td><td>Cumulative  Sum</td></tr><tr><td>1.</td><td>2</td><td>2</td></tr>";
for($i=3;$i<$limit-1;$i++)
{
	if(checkPrime($i)) 
     	{
		$prime[$j]=$i;
		$z=$j-1;
		$cum_sum[$j]=$cum_sum[$z]+$i;
		print "<tr><td>".($j+1)."</td><td>".$prime[$j]."</td><td>".$cum_sum[$j]."</td></tr>";
		if($cum_sum[$j]>=$limit) break;
		$j++;
		}
		
}

print "</table><br><br>";

rsort($cum_sum); /*print_r($cum_sum);*/
for($i=0;$i<sizeof($cum_sum);$i++)
{

	if (checkPrime($cum_sum[$i]))
	{
		echo $cum_sum[$i]. "is the largest prime number below ".$limit." summing the maximum number of consecutive prime numbers between 1 and ".$limit;
		break;
	}
}

?>