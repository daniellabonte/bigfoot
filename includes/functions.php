<?php 

/**
 * FilterResults
 *
 * Builds sql select statment according to the checked checkboxes
 * to filter the products pulled from the database
 *
 * Returns - sql string
 */
function FilterResults() {
	if (isset($_POST)) {
		//Start the sql select statement
		$sql = "SELECT * FROM tblProducts";

		//No checkboxes, get all the products from the database
		if(!isset($_POST['gender']) && !isset($_POST['colour']) && !isset($_POST['stock'])){
			echo "NO CHECKBOXES SELECTED";
			$sql .= ";";
		}
		//Otherwise, build sql for selected items
		else{
			$sql .= " WHERE ";                //Add where statement
			$and = false;                     //Flag that tells whether to add "AND" to the sql

			//Add gender selection
			if (isset($_POST['gender']))
			{
				if ($and) { $sql .= " AND "; }  //If this is first in the WHERE, dont add "AND" in the sql
				else      { $and = true; }      //But add "AND" to all the following
				$sql .= "(";                    //Open bracket for all the OR's per category of filter
				$or = false;                    //Set flag for adding "OR's" into the statement
				//Loop through all the checkboxes options 
				foreach ($_POST['gender'] as $key => $value) {
					if ($or) { $sql .= " OR "; }  //If this is first in the brackets, dont add "OR" in the sql
					else     { $or = true; }      //But add "OR" to all the following
					$sql .= "categoryID = '" . substr($value, 0, 3) . "'";	//Add the actual test statement	
				}
				$sql .= ")";                    //Close the bracket
			}
			if (isset($_POST['colour']))
			{				
				if ($and) { $sql .= " AND "; }
				else      { $and = true; }
				$sql .= "(";
				$or = false;
				foreach ($_POST['colour'] as $key => $value) {
					if ($or) { $sql .= " OR "; }
					else     { $or = true; }
					$sql .= "colourID = '" . substr($value, 0, 3) . "'";		
				}
				$sql .= ")";
			}
			if (isset($_POST['stock']))
			{				
				if ($and) { $sql .= " AND "; }
				else      { $and = true; }
				$sql .= "(";
				$or = false;
				foreach ($_POST['stock'] as $key => $value) {
					if ($or) { $sql .= " OR "; }
					else     { $or = true; }
					$sql .= "stockAmount > 0";		
				}
				$sql .= ")";
			}
		}
	}

	return $sql;

}











?>