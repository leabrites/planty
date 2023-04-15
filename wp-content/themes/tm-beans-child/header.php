<?php
/**
 * This file's content is located in /lib/templates/structure/header.php and should
 * only be overwritten via your child theme.
 *
 * We strongly recommend to read the Beans documentation to find out more about
 * how to customize Beans theme.
 *
 * @author Beans
 * @link   https://www.getbeans.io
 * @package Beans\Framework
 */

?>
<style>
    .LOGO{
    height: 19px;
    margin-left:12%;
    margin-top:12%;
    
}

   .header{
    width:100%;
    height: 67px;
    background-color:#fff;
    position:fixed;
    top:0%;
    left:0%;
}

    .rencontrer{
    position: relative;
    background-color:#fff;
    margin-right:50px;
    font-family:'Syne';
    color:black;
    text-decoration: none;
}

    .sizelien{
        margin-right:7%;
        margin-top:24px;
    }

    .sizelien a:hover {
    font-family: 'Syne bold', sans-serif, normal;
}

    .commander{
        font-family:'Syne';
        color:#fff;
        background: #DC9F96;
        text-decoration: none;
    }

    .commander:hover {
    background: #C02E44;
 
}

    .flexbetween{
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    </style>

<!DOCTYPE html>
<html>
<html lang="fr">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap');
</style>
    <body class="arriereplan">
        <header class="header">
            <a href="<?php echo home_url('/'); ?>">
          <nav>
            <div class="flexbetween">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo-2.png" alt="LOGO"
                    class="LOGO"/>
                 <div class="sizelien">
                    <a class="rencontrer" href="<?php echo home_url('/Nous rencontrer'); ?>">Nous rencontrer</a>
                    <a class="commander " href="<?php echo home_url('/Commander'); ?>">Commander</a>
            </div>
            </div> 
          </nav>
        </header>
    </body>
        