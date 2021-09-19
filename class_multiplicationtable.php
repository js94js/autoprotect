<?php
class MultiplicationTable {
	
	// properties 
	public int $columns;	// the number of columns in the table
	public int $rows;  // the number of rows in the table
	
	
	// methods
	
	// set the number of columns
	function setColumns($number){
		$this->columns = $number;
	}
	
	// set the number of rows
	function setRows($number){
		$this->rows = $number;
	}
	
	
	// display the table
	function display(){
		echo '<table class="table">';
		echo '<thead>';
		echo '<tr>';
		for ($col = 0; $col <= $this->columns; $col++){
			if ($col == 0){
				echo '<th class="text-center " style="border-bottom:none"></th>';
			} else {
				echo '<th class="text-center">' . $col . '</th>';
			}
		}
		echo '</tr>';
		echo '</thead>';
		
		for ($row = 1; $row <= $this->rows; $row++){
			echo '<tr>';
			echo '<th class="text-center" style="border-right:solid 1px rgb(33, 37, 41); border-bottom:none;">'.$row.'</th>';
			for ($col = 1; $col <= $this->columns; $col++){
				if ($row == $col){
					echo '<td class="text-center"><b> ' . $col*$row . '</b></td>';
				} else {
					echo '<td class="text-center"> ' . $col*$row . '</td>';
				}
				
			}
			echo '</tr>';
		}
	
		echo '</table>';
	}
}
?>