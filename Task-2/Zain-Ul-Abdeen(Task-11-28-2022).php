<!DOCTYPE html>
<html>
    <body>
    <?php
        echo "<h2>Task # 1</h2>";
        //Task Date 11-28-2022
        //Array
        $buiding=array(25,19,23,45,18,26,24,16);
        //Sorted Decending Order Array
        rsort($buiding);
        echo "<h5>Desending Order Array</h5>";
        //Count the number of elements in the array 
        echo "Total Number in Array <bold>" . count($buiding) . "</bold>";
        echo "<br>";
        $arrlength = count($buiding);
        //Print number of elements in the array
        echo "Sorted Decending Order Array<br>";
        for($x = 0; $x < $arrlength; $x++) 
        {
        echo $buiding[$x];
        echo "<br>";
        }
        //Print number of elements in Top in Heading
        $countTopEle=0;
        for($TopEle = 0; $TopEle < $arrlength-5; $TopEle++) 
        {
            $countTopEle=$countTopEle+1;
        }
        echo "<br>";
        echo "<h5>Selected Top <bold>$countTopEle</bold> Array</h5><br>";
        //Printing Top First Three Number
        for($topEle = 0; $topEle < $arrlength-5; $topEle++) 
        {
        echo $buiding[$topEle];
        echo "<br>";
        }
        //Task 1 Complete
    ?>
    <?php    
        echo "<h2>Task # 2</h2>";
        //Initialize User Column
        
        function userCount($n)
        {
            for($col=1; $col <= $n; $col++)
        //Condition to Print User Column
        {
            for($row=1; $row<=6; $row++)
            //Condition to Desired Row
            {
                echo $row*$col . " ";
            }
            //Go to Next Row
            echo "<br>";
        }
        }
        userCount(6);
         
    ?>
    </body>
</html>