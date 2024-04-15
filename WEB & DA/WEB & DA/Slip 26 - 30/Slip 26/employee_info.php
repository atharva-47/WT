<?php
session_start();

$employee_details = $_SESSION['employee_details'];

$_SESSION['earning_details'] = 
[
    'basic' => $_POST['basic'],
    'da' => $_POST['da'],
    'hra' => $_POST['hra']
];

$total = $_SESSION['earning_details']['basic'] + $_SESSION['earning_details']['da'] + $_SESSION['earning_details']['hra'];
?>

<html>
<head>
    <title>Employee Information</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p>Employee Number: <?php echo $employee_details['eno']; ?></p>
    <p>Employee Name: <?php echo $employee_details['ename']; ?></p>
    <p>Address: <?php echo $employee_details['address']; ?></p>
    <p>Basic: <?php echo $_SESSION['earning_details']['basic']; ?></p>
    <p>DA: <?php echo $_SESSION['earning_details']['da']; ?></p>
    <p>HRA: <?php echo $_SESSION['earning_details']['hra']; ?></p>
    <p>Total: <?php echo $total; ?></p>
</body>
</html>

