<?php
class PrimeNumberTable {
	
	// properties
	public int $upperLimit = 100;
	public int $numberOfRows = 10;
	
	// methods
	function setUpperLimit($number){
		$this->upperLimit = $number;
		$this->numberOfRows = ceil($this->upperLimit / 10);
	}
	
	
	
	function display(){
		echo '<table class="table">';
		echo '<thead>';
		
		
		$count = 1;
		for ($row = 1; $row <= $this->numberOfRows; $row++){
			echo '<tr>';
			for ($i = 1; $i <= 10; $i++){
				echo '<td>';
				if ($count <= $this->upperLimit){
					if (isPrime($count)){
						echo '<b>' . $count . '</b>';
					} else {
						echo $count;
					}
					
				} 
				echo '</td>';
				
				$count++;
			}
			echo '</tr>';
		}
		
		echo '</thead>';
		echo '</table>';
	}
}
?>