<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
adasdadas <br>
<?php 
$deff = strtotime((new \DateTime())->format('Y-m-d H:i:s')) - strtotime('2019-9-29 23:31:06');
echo ((new \DateTime())->format('Y-m-d H:i:s'));
echo '<br>'.$deff; 
echo '<br>'.$_SERVER['PHP_SELF']; 

?>
</body>
</html>

<?php

session_start();


?>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- <script>
    $.ajax(`api.php?section=branch_services&do=get_count_br_services_branch`, {
        method: `POST`,
        data: {},
        success: function(data, textStatus, jqXHR) {
            console.log("Output: data", data)

        }
    })
</script> -->