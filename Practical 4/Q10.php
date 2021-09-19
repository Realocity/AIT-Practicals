<!-- Using HTML and PHP develop a calculator application. 
The html page should have 2 text boxes for taking two numbers, 
1 text box to display result and 1 button each for +,-,*,/. 
On click of each button, invoke corresponding user defined function to achieve that functionality. -->

<?php
error_reporting(0);
?>
<!DOCTYPE html>

<head>
    <title> Calculator Application </title>
</head>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}

?>
<style>
.page_wrap {
    max-width: 500px;
    margin: auto;
}
</style>

<body>
    <div id="page-wrap">
        <h1>Calculator Application</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" /> <b>First
                    Number</b>
            </p>
            <p>
                <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" /> <b>Second
                    Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>

</body>

</html>