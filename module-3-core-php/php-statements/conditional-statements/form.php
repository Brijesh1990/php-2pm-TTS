<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>odd even</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
   require_once('odd-even-number.php');
    ?>
    <div style="width: 50%; height: auto; margin: auto; margin-top: 5%;">
        <form method="post">
            Enter Numbers : <input type="text" name="number" placeholder="Enter Number" required />
            <br><br>
            <input type="submit" name="sub" value="Check" />
        </form>
    </div>
    
</body>
</html>