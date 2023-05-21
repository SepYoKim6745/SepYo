<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['cnt'])) {
            // If not, initialize it to 0
            $_SESSION['cnt'] = 0;
        }
        
        // Increment the count value if the increment button is clicked
        if (isset($_POST['btn1'])) {
            $_SESSION['cnt']++;
        }
        
        // Reset the count value to 0 if the reset button is clicked
        if (isset($_POST['reset1'])) {
            $_SESSION['cnt'] = 0;
        }
    ?>
    <form name="form1" method="post" action="counter_2_1.php">
        <input type="submit" name="btn1" value="+1 button">
        <input type="submit" name="reset1" value="Reset"><br>
        <?php echo $_SESSION['cnt']; ?>
    </form>
</body>
</html>