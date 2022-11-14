<style><?php include 'styles.css'; ?></style>
<?php
#Welcome Message
$username=$_POST["username"];
$password=$_POST["pwd"];
echo "<h1> Welcome $username! <h1>";
echo "<h2> Your Password is $password</h2><br>";

#Purchased Items and Price
$life=$_POST["life"];
$lifeCost=$life*25;
$sorry=$_POST["sorry"];
$sorryCost=$sorry*10;
$scrabble=$_POST["scrabble"];
$scrabbleCost=$scrabble*250;
$shipping=$_POST["ship"];
$total=$lifeCost+$scrabbleCost+$sorryCost+$shipping;
echo "<table><tr><td></td>";
echo "<td>Quantity</td>";
echo "<td>Cost</td>";
echo "<td>Sub Total</td> </tr>";
echo "<tr> <td>The Game of Life</td>";
echo "<td>$life</td>";
echo "<td>$25.00</td>";
echo "<td>$$lifeCost</td></tr>";
echo "<tr><td>Sorry!</td>";
echo "<td>$sorry</td>";
echo "<td>$10.00</td>";
echo "<td>$$sorryCost</td></tr>";
echo "<tr><td>Scrabble</td>";
echo "<td>$scrabble</td>";
echo "<td>$250.00</td>";
echo "<td>$$scrabbleCost</td></tr>";
echo "<tr><td>Shipping</td>";
echo "<td></td><td></td><td>$$shipping</td></tr></table>";
echo "<p class='total'> Total Cost: $$total</p>";

?>
