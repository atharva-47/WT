<html>
    <head>
        <title>Number Operations</title>
    </head>
    <body>
        <h2>Number Operations</h2>

        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="text" id="number" name="number" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
            function fibonacci($n) 
            {
                $fib = [];
                $fib[0] = 0;
                $fib[1] = 1;
                for ($i = 2; $i < $n; $i++) 
                {
                    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                }
                return implode(', ', $fib);
            }
            function sumOfDigits($number) 
            {
                $sum = 0;
                $number = abs($number);
                while ($number > 0) 
                {
                    $sum += $number % 10;
                    $number = (int)($number / 10);
                }
                return $sum;
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
            {
                $number = isset($_POST['number']) ? $_POST['number'] : null;
                $number = intval($number);
                echo "<p>Fibonacci Series for $number: " . fibonacci($number) . "</p>";
                echo "<p>Sum of digits for $number: " . sumOfDigits($number) . "</p>";
            }
        ?>
    </body>
</html>