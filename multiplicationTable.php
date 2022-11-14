<?php

echo "<table>";
for($i=1;$i<=10;$i++)
{
    echo "<tr>";
    for($counter=1;$counter<=10;$counter++)
    {
        $num = (($i*$counter));
        echo "<td>$num</td>";
    }
    echo "</tr>";
}
echo"</table>";
?>