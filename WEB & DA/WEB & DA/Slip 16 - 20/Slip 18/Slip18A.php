<html>
    <head>
        <title>Fibonacci Numbers</title>
        <script>
            function printFibonacci() 
            {
                var num1 = 0, num2 = 1;
                var fibonacciSeries = [num1, num2];
                
                for (var i = 2; i < 10; i++) 
                {
                    var nextNum = num1 + num2;
                    fibonacciSeries.push(nextNum);
                    num1 = num2;
                    num2 = nextNum;
                }
                var fibonacciString = "Fibonacci Numbers: ";
                fibonacciSeries.forEach(function(number) 
                {
                    fibonacciString += number + ", ";
                });
                alert(fibonacciString);
            }
        </script>
    </head>
    <body>
        <button onclick="printFibonacci()">Print Fibonacci Numbers</button>
    </body>
</html>
