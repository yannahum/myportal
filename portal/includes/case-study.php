<?php include 'portal-config.php';?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <title><?=$title?></title>
    <title>Nahum Yanez</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
 </head>
 <body>
     <header>
     <h1><i class="logo fa <?=$logo?>"></i> Nahum Yanez</h1>
        <nav class="topnav" id="myTopnav">
            <a href="https://nahyan.dreamhosters.com/portal/index.php" class="active">Home</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/header.php" target="_blank">Header</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/contact.php" target="_blank">Contact</a>
            <a href="https://nahyan.dreamhosters.com/portal/includes/case-study.php" target="_blank">Case study</a>
            <a href="#" target="_blank">Portal-config</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
     </header>
     
   <main class="wrapper">
        <h2 class="subheader"><?=$PageID?></h2>
        <p>Hey!</p>
        <!--I added this above statement in the header.php and so when open my
        index.php, I see thw word welcome as PageID, also in my template.php, 
        I see the word 'template and'  'Copy me to make more pages'-->
        <!--switch(THIS_PAGE){
                case 'index.php':
                $title = 'My Portal';
                $logo = 'fa-home';
                $PageID = 'Welcome';
        break; 
                case 'template.php':
                $title = 'Template';
                $logo = 'fa-pencil-square-o';
                $PageID = 'Copy me to make more pages';
        break;

        default:
            $title = THIS_PAGE;
            $logo = 'fa-home';
            $PageID = 'No PageID created';
        }

        ?> 
    -->



    <!--header ends here-->



    