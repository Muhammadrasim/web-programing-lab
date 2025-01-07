<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculate Electricity Bill</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        #page-wrap {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }


        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        div {
            margin-top: 15px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <?php
    $result_str = $result = '';
    if (isset($_POST['unit-submit'])) {
        $units = $_POST['units'];
        $consumer_number = $_POST['consumer-number'];
        if (!empty($units) && !empty($consumer_number)) {
            $result = calculate_bill($units);
            $result_str = 'Consumer Number: ' . $consumer_number . '<br>Total amount for ' . $units . ' units is ₹' . $result;
        }
    }
    function calculate_bill($units) {
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;
        if ($units <= 50) {
            $bill = $units * $unit_cost_first;
        } 
	else if ($units > 50 && $units <= 100) {
            $temp = 50 * $unit_cost_first;
            $remaining_units = $units - 50;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        } 
	else if ($units > 100 && $units <= 200) {
            $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second);
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        } 
	else {
            $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
        return number_format((float)$bill, 2, '.', '');
    }
    ?>
    <div id="page-wrap">
        <h1>Calculate Electricity Bill</h1>
        <form action="" method="post" id="quiz-form">
            <input type="text" name="consumer-number" id="consumer-number" placeholder="Enter your consumer number" required />
            <input type="number" name="units" id="units" placeholder="Enter no. of units" required />
            <input type="submit" name="unit-submit" id="unit-submit" value="Calculate" />
        </form>
        <div>
            <?php echo $result_str; ?>
        </div>
    </div>
</body>

</html>
