<?php
$students = array(
    array(01, "Abdul Rehman", "Pass", "A+"),
    array(01, "Adeel Hassan", "Fail", "F-"),
    array(01, "Hammad Ali", "Pass", "A-"),
    array(01, "Huzaifah Habib", "Pass", "B+"),
    array(01, "Hesham Baloch", "Pass", "B-"),
    array(01, "Imran", "Pass", "C+")
);
echo "Reg: " . $students[0][0] . " Name: " . $students[0][1] . " Status: " . $students[0][2] . " Grade " . $students[0][3];
echo "<br>";
for($row = 0; $row < 4; $row++)
{
    echo "<p><b>Row Number" . $row . "</b></p>";
    for($col = 0; $col < 4; $col++)
    {
        echo "Reg Number\t" . $col . "<br>";
    }
    
}
?>
<?php
$department = [
    "Doctors" => ["Javed Ferzand", "Majid Ali", "Amar", "Usama"],
    "Lecturer"=> ["Usman Ali", "Yawar Abas", "Shezad Ali", "Fakhar Mustafa"],         
    "Students"=> ["Zain Ul Abdeen", "Ishfaq", "Ahmad", "Ammar"],
    "Staff"   => ["Sweapers", "Guards", "Dicipline", "Gardener"],
];

$department+=array("zain"   => array("Sweapers", "Guards", "Dicipline", "Gardener"));
print_r($department);
die();
//array_push($department, '"Staffa"   => ["Sweapers", "Guards", "Dicipline", "Gardener"]');
//print_r($department);
echo "<h3>Department:</h3><br>";
foreach($department as $key => $val)
{
    echo "<p><b>". $key. "</b></p>";
    foreach($val as $key2=>$val2)
    {
        echo $val2. "<br>";
    }
}
?>