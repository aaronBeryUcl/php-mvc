<!DOCTYPE html>
<html>
<head>
    
<meta charset=utf-8 />
<meta name="author" content="Mark Boulton Design" />
<meta name="description" content="Write a description here." />
<!-- CONTROL SCALE FOR MOBILE DEVICES IF NEEDED -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0" />

<title>UCL Style guide &middot; <?php echo $title; ?></title>

<!--[if lte IE 8]><script src="<?php echo SITE_ASSET_PATH; ?>/js/html5.js"></script><![endif]-->

<!--[if (!IE) | (gt IE 8)]><!-->
<link rel="stylesheet" href="<?php echo SITE_ASSET_PATH; ?>/css/gridset.css" />
<!--<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="/css/gridset-ie-lte8.css" />
<![endif]-->

<link href="<?php echo SITE_ASSET_PATH; ?>/css/style.min.css" rel="stylesheet" />
<link href="<?php echo SITE_ASSET_PATH; ?>/css/prism.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo SITE_ASSET_PATH; ?>/js/functions.js"></script>


<!-- TODO - this is for dev only
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
-->

<!--[if IE]><link href="<?php echo SITE_ASSET_PATH; ?>/css/ie.css" rel="stylesheet" /><![endif]-->
<!--[if lte IE 8]><link href="<?php echo SITE_ASSET_PATH; ?>/css/ie-old.css" rel="stylesheet" /><![endif]-->

<script>
  //jQuery("#type-specimen").fitText();
</script>

<link rel="apple-touch-icon-precomposed" href="../favicon-152.png">

<meta name="msapplication-TileColor" content="#000000" />
<meta name="msapplication-TileImage" content="../favicon-144.png" />

</head>
<body class="<?php if (isset($pattern)) echo 'pattern-page'; if (isset($bodyClass)) echo $bodyClass; else echo ' inner-page'; ?>">
