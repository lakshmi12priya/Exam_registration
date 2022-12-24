<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <?php
            include 'fetch_data.php';
        ?>
    <div class='Header'>
    <h1>Puducherry Technological University<br>(PTU)</h1>
    </div>
    <div class='Details'>
        <h3>To<br>
        <b>Name</b>,<br>
        Register Nr:<?php echo "$_SESSION[regno]" ?> <br>
        Programme:<?php echo "$_SESSION[prgm]" ?><br>
        Department:<?php echo "$_SESSION[dept]" ?><br>
        Puducherry Technological University,<br>
        Puducherry-605014<br><br>
        Dear Student,<br>Kindly complete the Exam Application by paying the Exam Fees via online Mode by clicking the <br>
        Following Link. Your Exam Hall Ticket will be emailed after payment validation.
    </h3>
    </div>
    <h1></h1>
    <table class='table1'>
        <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Type</th>
            <th>Fees in INR</th>
        </tr>
    </table>
    </body>
</html>