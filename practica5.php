echo "<table border=1>";

$num =1;
for($i=1; $i<=10; $i++)
    {

    echo "<tr style=\"background-color:".(($a%2==0)?"blue":"white")."\">";
    for($j=1; $j<=10; $j++)
        {
        echo "<td>".$num++."</td>";
        }
    echo "</tr>";
    }
   
echo "</table>";

?> 


</html>