<?php

function redirect($location)
{
	return header("Location:$location");
}

function get_products()
{
	$query="select * from products";
	confirm($query);
	while($row=fetch_array($query))
	{
		echo $row[product_price];
		echo $row[product_sellar];
		echo $row[product_name];
	}
}

?>