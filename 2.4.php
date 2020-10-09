<p> Задача 4 В-1:
<p>
<?php
function array_fill_rand($limit, $min=false, $max=false)
{
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}

$m = array_fill_rand(5, 0, 10);
$k=count($m);
print_r($m);
echo "<-Основной массив<br />";
for ($i=$k-1;$i;--$i){
$m[$i]=array_sum(array_slice($m,0,$i));
if($i!=1){
print_r($m);
echo '<br />';
}else{
print_r($m);
echo "<-Конечный результат";
}
}
?>
<title><?php echo "2.4 Аликин Владимир"; ?></title>
