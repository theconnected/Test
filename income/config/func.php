<?php
	function DateThai_short($strDate)
	{
		$year = date("Y",strtotime($strDate))+543;// ปี
		$month= date("n",strtotime($strDate)); //
		$day= date("j",strtotime($strDate)); //
		$hour= date("H",strtotime($strDate)); //
		$minute= date("i",strtotime($strDate)); //
		$seconds= date("s",strtotime($strDate)); //
		$month_short =  Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	
		$month_s = $month_short[$month];
		return "$day $month_s $year";
	}
	
	function DateThai_full($strDate)
	{
		$year = date("Y",strtotime($strDate))+543;// ปี
		$month= date("n",strtotime($strDate)); //
		$day= date("j",strtotime($strDate)); //
		$hour= date("H",strtotime($strDate)); //
		$minute= date("i",strtotime($strDate)); //
		$seconds= date("s",strtotime($strDate)); //
		$month_full =  Array("","มกราคม.","กุมภาพันธ์.","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	
		$month_f = $month_full[$month];
		return "$day $month_f $year";
	}
	function DateThai_Report($strDate)
	{
		$year = date("Y",strtotime($strDate))+543;// ปี
		$month= date("n",strtotime($strDate)); //
		$day= date("j",strtotime($strDate)); //
		$hour= date("H",strtotime($strDate)); //
		$minute= date("i",strtotime($strDate)); //
		$seconds= date("s",strtotime($strDate)); //
		$month_full =  Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	
		$month_r = $month_full[$month];
		return "$month_r";
	}
	
?>