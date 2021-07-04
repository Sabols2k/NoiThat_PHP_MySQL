<?php
    $tencasi=$_GET['ten'];
    include "connect.php";
    $str="select * from casi where TenCaSi LIKE '$tencasi%'";
    $rs= $connect->query($str);  
    
    if($rs->num_rows>0)
    {
        echo "<table border='1'>";
        echo "<tr><th>Mã Ca sĩ</th>";
        echo "<th>Tên Ca sĩ</th></tr>";
        while($row= $rs->fetch_row())
        {
            echo "<tr>"."<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
        echo "Tìm không thấy";
    
?>
