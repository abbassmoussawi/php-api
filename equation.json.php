<form method="post" action=<?php echo ($_SERVER['PHP_SELF']); ?>>
    <input type="text" name="a" placeholder="a =">
    <input type="text" name="b" placeholder="b =">
    <input type="text" name="c" placeholder="c =">
    <input type="submit">
</form>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$equation = (($a**3)+($b*$c)-($a/$b));
if ($_POST) {
    $result = [

        'a' => $a,
        'b' => $b,
        'c' => $c,
        'value' => $equation
    ];


    //   $result = ;

    echo json_encode($result);
    // echo"<br>";
    echo var_dump(json_encode($result));
}
?>