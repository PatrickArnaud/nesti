<?php
$loc = filter_input(INPUT_GET, 'loc');
$link = ''; 
switch($loc){
            case 'home':
            $link = ('content/index_php.php');
            break;
    
            case  'about':    
             $link = ('content/about_php.php');   
            break;

            case  'products':    
             $link = ('content/product_php.php');   
            break;

            case  'store':    
             $link = ('content/store_php.php');   
            break;
            
            default :            
             $link = ('content/index_php.php');
            break;
            }
            ?>  
<html>

<head>
<?php include('common/head.php');?>       
</head>
<body>
<?php include('common/header.php');    
include('common/nav_php.php');   
include($link);             
include('common/footer_php.php'); ?>          
</body>
</html>

