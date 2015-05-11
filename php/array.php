<? php $myArray = array ('a', 'b', 'c', 'd', 'e', 'f');
echo count ($myArray);

print_r($myArray);

$myPizza = array (
	'size:' => 'large',
	'base:' => 'thin',
	'type:' => 'Marguarita',
	'price:' => '15.50'
	);

print_r($myPizza);

foreach ($myPizza as $key => $value){
	echo "key ".$key." has value".$value."\n";
}


?>