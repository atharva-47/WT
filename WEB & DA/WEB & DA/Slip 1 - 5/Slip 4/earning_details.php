<?php
session_start();
$_SESSION['employee_details']=
[
    'eno' => $_POST['eno'],
    'ename' => $_POST['ename'],
    'address' => $_POST['address']
];
?>

<html>
<head>
    <title>Earning Details</title>
</head>
<body>
    <h2>Earning Details</h2>
    <form action="employee_info.php" method="post">
        BASIC: 
        <input type="text" id="basic" name="basic" required><br><br>
        DA: 
        <input type="text" id="da" name="da" required><br><br>
        HRA: 
        <input type="text" id="hra" name="hra" required><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

