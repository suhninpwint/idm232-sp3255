<!DOCTYPE html>
<html>

<head>
    <title> Page Title </title>
</head>

<body> 
   <pre>
    <?php
    print_r($_GET);
    ?>
       <?php
        $id = $_GET['id'];
$fname = $_GET['fname'];
         echo $id . "....." . $fname;
    ?>
        

</pre> 

</body>
</html>