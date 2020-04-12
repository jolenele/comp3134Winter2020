<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP 3134 Lab week 12</title>
</head>

<body>

<?php
session_start();
$_SESSION['confirmation'] = 'undefined';
?>

    <script>
        function myFunction() {
            $.ajax({
                type: "POST",
                url: "csfr_action.php",
                data: {
                    username: "host",
                    password: "pass"
                },
                success: function (res) {

                }
            });
        }
    </script>

</body>

</html>