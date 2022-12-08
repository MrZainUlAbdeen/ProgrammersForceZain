<!DOCTYPE html>
<html>
<body>

<?php
echo "<h3>1st Task</h3>";


  
// PHP Program to illustrate 
// Splfileinfo::getPath() function
   
// Create new SPlFileInfo Object
// $file = new SplFileInfo("D:\Content file.txt");

$url="https://www.pf.com/categories/products.php";
$myurl=parse_url($url);
echo "<pre>";
print_r($myurl);

echo "</pre>";
echo "protocol :".$myurl['scheme']."<br>";
echo "Domain is :".$myurl['host']."<br>";
echo "path :".$myurl['path']."<br>";
echo "<h3>2nd Task</h3>";
echo "Id: " . $_SERVER['SERVER_ADDR'];
echo "<br>";
echo "Browser: " . $_SERVER['HTTP_USER_AGENT'];
// // Print result
// echo $file->getPath();

?>

</body>
</html>