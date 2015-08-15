<?php

class Student{
 
 	function result($mark = 0){
		
		switch ($mark) {
			case ($mark <= 59):
				$result = 'You are fail!. Your Mark is '. $mark;
				break;
			case ($mark <= 69):
				$result = 'You Just Passed. Your Mark is '. $mark;
				break;
			case ($mark <= 79):
				$result = 'You got "D" grade. Your Mark is '. $mark;
				break;
			
			case ($mark <= 89):
				$result = 'You got "C" grade. Your Mark is '. $mark;
				break;
				
			case ($mark <= 99):
				$result = 'You got "B" grade. Your Mark is '. $mark;
				break;
				
			case ($mark == 100):
				$result = 'You got "A" grade. Your Mark is '. $mark;
				break;								
			default :
				$result = "No Case Match";
				break;
		}
		$color = ($mark >= 60 ) ? "green" : "red";
		
		return "<b style='color:$color; font-family:arial; font-size:30pt;'>" . $result . "</b>";
	}	
}

$kanny = new Student( );

echo $kanny->result( 40 );



class Division{

	var $dividedBy 	= 7;
	var $startPoint = 1;
	var $endPoint 	= 2000;
	
	function result($dividedBy,$startPoint,$endPoint){
		$total = 0;
		$outPut = NULL;
		
		for( $i = $startPoint;$i<=$endPoint;$i++){
			$outPut .= is_int($i / $dividedBy) ? $i ."<br/>" : false;
			$total   = is_int($i / $dividedBy) ? $total + 1 : $total;
		}
		return $outPut . ' Match Times: '. $total;
	}	
}


$Query = new Division();

echo $Query->result(5,1,2000);
