<?php
echo "<table style='border: 1px solid black;'>";
for ($i=0; $i <=10 ; $i++) { 
    echo"<tr>";
        echo"<td>$i*7</td>"; 
        echo"<td>".($i*7)."</td>";   
    echo"</tr>";
}
echo"</table>";
?>