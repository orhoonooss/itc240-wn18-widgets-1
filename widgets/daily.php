<?php include 'includes/config.php'?>
<?php //daily logic goes here:
    
if(isset($_GET['day']))
{//data in querystring, use it!
    $day = $_GET['day'];
}else{//use current date
    $day = date('l');
}

?>
<?php include 'includes/header.php'?>
<h2>Daily page</h2>
<p>Today is <?=$day?></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>

<?php include 'includes/footer.php'?>