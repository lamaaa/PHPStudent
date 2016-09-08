<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
</head>
<body>
<div class="navigation">
    <?php
    // nav bar
    echo anchor('student/index', 'Home');
    echo (' | ');
    echo anchor('student/add', 'Add a New Student');
    echo (' | ');
    echo anchor('student/listing', 'List All Students');
    ?>
</div>
<h1><?php echo $headline;?></h1>

<?php $this->load->view($include);?>
</body>
</html>