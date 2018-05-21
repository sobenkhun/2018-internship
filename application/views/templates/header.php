<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title = (isset($title)) ? $title :  "Skeleton";
$langCode= (isset($langCode)) ? $langCode :  "en";
?><!DOCTYPE html>
<html lang="#">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $activeLink; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icon logo -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo.png" type="image/x-icon">
  <!-- bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-4.0.0/css/bootstrap.min.css">
  <!-- css bootstrap datatable -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Custom style skeleton -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/customCss.css">
  <!-- materil icon -->
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skeleton-1.0.0.css">
  <link href='<?php echo base_url();?>assets/assets/css/fullcalendar.css' rel='stylesheet' />
  <link href="<?php echo base_url();?>assets/assets/css/bootstrapValidator.min.css" rel="stylesheet" />   
  <link href="<?php echo base_url();?>assets/assets/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
  <!-- materil icon -->
  <link href="<?php echo base_url();?>assets/MDI-2.1.19/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css">
  <!-- jquery link script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
</head>
<body> 

