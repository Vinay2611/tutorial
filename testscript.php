<?php

	$start_date = date("Y-01-01");
    $end_date = date("Y-12-31");
    $increment_date = date("Y-m-d");
    while (strtotime($start_date) <= strtotime($end_date)) {
		echo '<pre>';
        if(strtotime($start_date) <= strtotime(date("Y-m-d"))){
            
            echo "strdate".$start_date;
        }else{
            
            echo "enddate";
        }
        $start_date = date ("Y-m-d", strtotime("+1 day", strtotime($start_date)));

    }
	
	
	// date_default_timezone_set('UTC');

	// echo $today = date("Y-01-01");
	//Start date
	// $date = '2018-01-01';
	//End date
	// $end_date = '2018-12-31';

	 // while (strtotime($date) <= strtotime($end_date)) {
		
                // echo "$date\n";
                // $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
	// } 

?>