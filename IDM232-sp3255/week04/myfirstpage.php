<!DOCTYPE html>
<html>

<head>
    <title> My First</title>
</head>

<body>
   <h1> Passing Info</h1>
   <a href="pageDuce.php?id=2&fname=sp3255">Page 2 Link</a>
    <h2> Complete Class List</h2> 
<ol>
    <?php 
        $names = array("Ben","Axel","Louise","Brendan","Katilyn", "Kristen","Seamus","Khan","Su","Anisa","Deborah");
        
        for ($ndx = 0; $ndx < count($names); ndx++){
                    echo "<li>" .$names{$ndx} . "</li>";
            
        }
        ?>
</ol>
<h2> Even Number only list</h2>
<ul>
       <?php
        for ($ndx = 0; $ndx < count($names); ndx++){
        if($ndx %2 != 0){
                    echo "<li>" .$names{$ndx} . "</li>";
            }
        }

        ?>
</ul>

<h2> Alphabetical class List </h2>
<ul>
<?php
$sortedNames = $names;
for($ndx = 0; $ndx < count($names); $ndx++){
    echo "<li>" . $sortedNames{$ndx} . "<li>";
}

  ?>

    </ul>
    </body>
</html>