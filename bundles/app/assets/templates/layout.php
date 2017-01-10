<?php

$pageTitle = isset($pageTitle) ? $pageTitle : 'Snippets';








?><!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all"
          rel="stylesheet">
    <title><?=$pageTitle?></title>

    <link rel="stylesheet" href="bundles/app/css/fontello.css">
    <link rel="stylesheet" href="bundles/app/css/grid.css">
    <link rel="stylesheet" href="bundles/app/css/main.css">

    <script src="bundles/app/js/lib/timer.js"></script>
    <script src="bundles/app/js/lib/namespaceapplication.js" data-init="bundles/app/js/app/init.js"></script>

</head>
<body>

<?php include('common/box.php') ?>

<div id="page">

    <?=$this->childContent();?>

</div>

</body>
</html>
