<p> Задача 5 В-1:
<p>
<?php
$a=rand(-10,10);
$b=rand(-10,10);
function f($u, $t) {
    if ( $u > 0 && $t > 0 ){
        return $u*$u+$t;
    }elseif ( $u <= 0 && $t <= 0 ){
        return $u+$t*$t;
    }else {
        return $u+$t;
}
}
$Z=f($a-$b,$b*$b-$a)+f($a*$a*$b,$b*$b);
echo "a=".$a." b=".$b."<br/>";
echo "Z=".$Z;
?>
<title><?php echo "2.5 Аликин Владимир"; ?></title>