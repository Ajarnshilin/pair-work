<?php
require_once ('config.php');
$userQuery = "SELECT*from peopleinfo";
$result=mysqli_query($connect, $userQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show table</title>
</head>
<body>

    <table align="center" boder="1px" style="width:600px; line-height:40px">
    <tr>
        <th colspan="4"><h2>Risk Record</h2></th>
    </tr>
    <t>
        <th> No. </th>
        <th> Name </th>
        <th> Level of Risk </th>
    </t>
    <?php

    function selection_sort($my_array)
    {
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
            {
                if( $my_array[$i]['Risk'] > $my_array[$i + 1]['Risk'] )
                {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                    array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
        
    return $my_array;
    }

    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    $rows = selection_sort($rows);
    
    for( $i = 0, $c = count( $rows ); $i < $c; $i++ ){
        echo "<tr><td>".$rows[$i]['No.']."</td><td>".$rows[$i]['Name']."</td><td>".$rows[$i]['Risk']."</td></tr>";
    }
    echo "</table>";

    echo "<a href='record_desc.php'>See the risk from high to low</a><br><br>";

    //mysqli_close($connect)
    ?>
</body>
</html>