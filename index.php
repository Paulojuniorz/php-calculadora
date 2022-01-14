<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$v1=$_POST['valor1'];
$v2=$_POST['valor2'];
$vtipo=$_POST['tipo'];

// if $tipo = 'soma'{
//     $res = $v1 + $v2
// }
// if $tipo = 'multi'{
//     $res = $v1 * $v2
// }
// if $tipo = 'div'{
//     $res = $v1 / $v2
// }
// if $tipo = 'sub'{
//     $res = $v1 - $v2
// }

switch ($vtipo) {
case 'soma':
    $res = $v1 + $v2;
        break;
case 'multi':
    $res = $v1 * $v2;
        break;
case 'div':
    if ($v2 > 0 ){
    $res = $v1 / $v2;
    }else{
        $res  = 0;
    }

        break;
case 'sub':
    $res = $v1 - $v2;
        break;
}
echo "A resultado é: ".$res;

?>
</body>
</html>