<?php
	include 'prtg_db.php';
	
	function get_data(){
		$s_val_query = "SELECT * FROM pldt_min ORDER BY bw_id DESC";
		$s_val_result = $GLOBALS['conn']->query($s_val_query);
		$s_val_data = array();
		if ($s_val_result->num_rows > 0) {
			while($row = $s_val_result->fetch_assoc()) {
			array_push($s_val_data, $row);
			}
		} else {
		echo "0 results";
		}

		return $s_val_data;

	}

    $sample = get_data();     
    echo json_encode($sample); 
    ?>
