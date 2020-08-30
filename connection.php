<?php

$conn = new mysqli("sql212.epizy.com","epiz_26261548","ltM63SCaag","epiz_26261548_hostel");
if($conn)
{
	echo "Connected";
}
else
{
	echo "Not connected";
}
?>