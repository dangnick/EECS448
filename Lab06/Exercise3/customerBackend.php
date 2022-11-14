<?php
$violin = $_POST["violin"];
$viola = $_POST["viola"];
$cello = $_POST["cello"];
$shipping = $_POST["ship"];
$username = $_POST["username"];
$password = $_POST["password"];

$violinSub = 359000*$violin;
$violaSub = 3000*$viola;
$celloSub = 200*$cello;
$shippingSub = 0;

echo '<link rel="stylesheet" type="text/css" href="style.css">';

echo "<script type='text/javascript'>alert('Hello, $username. Your password is: $password');</script>

if($shipping == "overnight")
{
        $shippingSub = 99;

}
else if($shipping == "free")
{
        $shippingSub = 0;
}
else if($shipping == "three day")
{
        $shippingSub = 27.31;
}


$totalCost = $violinSub + $violaSub + $celloSub + $shippingSub;

echo '<table class = outputForm>';
echo '<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>';

echo '<tr><td>1923 Widenhouse Violin</td><td class = specialCells>'.$violin.'</td><td class = specia>

echo '<tr><td>2022 Eastman Viola</td><td class = specialCells>'.$viola.'</td><td class = specialCell>

echo '<tr><td>Amazon Cello</td><td class = specialCells>'.$cello.'</td><td class = specialCells>$200>

echo '<tr><td>Shipping</td><td colspan = 2 class = specialCells>'.$shipping.'</td><td class = specia>

echo '<tr><td colspan = 3>Total Cost</td><td>$'.$totalCost.'.00</td></tr>';

echo '</table>';


?>
