
<?php
 function compareTriplets(array $a , array $b){
 	if(count($a) !=  count($b) ){
 		echo '<h3> Must Submit eqaul Values</h3>';
 	}else{

 			$sum = [0,0];

 		for($i = 0; $i < count($a) ;$i++)
 		{
 				if($a[$i] < $b[$i]){
 					$sum[1] += 1;
 				}

 				if($a[$i] > $b[$i]){
 					$sum[0] += 1;
 				}

 


 		}

   }

  		return $sum;
 }


 print_r(compareTriplets([7,8,9],[4,8,10]));


 