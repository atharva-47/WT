<?php
	$str=<<<XML
		<Items>
			<Item>
				<ItemName>Programming in PHP</ItemName>
				<ItemPrice>500.00</ItemPrice>
				<ItemQuantity>20</ItemQuantity>
			</Item>
			
			<Item>
				<ItemName>Programming in C</ItemName>
				<ItemPrice>233.00</ItemPrice>
				<ItemQuantity>20</ItemQuantity>
			</Item>
			
			<Item>
				<ItemName>JAVA Programming</ItemName>
				<ItemPrice>525.00</ItemPrice>
				<ItemQuantity>20</ItemQuantity>
			</Item>
			
			<Item>
				<ItemName>Database Management</ItemName>
				<ItemPrice>265.00</ItemPrice>
				<ItemQuantity>20</ItemQuantity>
			</Item>
			
			<Item>
				<ItemName>CPP</ItemName>
				<ItemPrice>510.00</ItemPrice>
				<ItemQuantity>20</ItemQuantity>
			</Item>
		</Items>
		
XML;
		
		$fname="Item.xml";
		$fp=fopen($fname,"w");
		fwrite($fp,$str);
		fclose($fp);
		echo "File created $fname";
?>
