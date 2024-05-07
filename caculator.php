<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">PHP Calculator</h2>
        <form method="post" action="" class="text-center">
            <div class="form-group">
                <input type="text" class="form-control" name="num1" placeholder="Enter first number" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operator" required>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="num2" placeholder="Enter second number" required>
            </div>
            <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
        </form>
        <?php
        if(isset($_POST['calculate'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if($num2 == 0){
                        echo "<div class='alert alert-danger mt-3'>Division by zero error!</div>";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    echo "<div class='alert alert-danger mt-3'>Invalid operator!</div>";
            }
            echo "<h3 class='mt-4'>Result: $result</h3>";
        }
        ?>
    </div>
    <!-- Bootstrap JS CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
