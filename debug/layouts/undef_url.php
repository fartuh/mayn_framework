<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body>
        <div class="error">
                <h1 class="error__message">"<?= $this->uri; ?>" not found<h1>
        </div>
        <div class="window">
                <h2 class="window__message">check routes in file "<?= ROOT . "/routes/routes.php" ?>"</h2>
        </div>       
</body>
<style>
        .error {
                text-align: center;
                border: 2px solid black;
                background-color: #fafafa;
                margin-bottom: 1%;
        }

        .error__message {
                color: red;
        }
        
        .window {
                text-align: center;
                border: 2px solid black;
                background-color: #fafafa;
        }
</style>
</html>
