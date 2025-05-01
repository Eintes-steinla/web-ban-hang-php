<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php _WEB_ROOT_ ?>/src/output.css">
    <title><?php echo !empty($page_title) ? $page_title : "website"; ?></title>
</head>

<body>
    <?php
    $this->render('blocks/header');
    $this->render($content, $sub_content);
    $this->render('blocks/footer');
    ?>

    <script src="<?php _WEB_ROOT_ ?>/public/assets/clients/js/test.js"></script>
</body>

</html>