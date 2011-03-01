<!-- site/view/layouts/default.html.php -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Arvo:regular,bold' 
            rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/layout.css" type="text/css" />
        <link rel="stylesheet" href="css/typography.css" type="text/css" />

        <title><?=$title?></title>   
        <meta name="description" content="<?=$meta_description?>" />
        <meta name="keywords" content="<?=$meta_keywords?>" />


    </head>

    <body id="index">

    <div id="wrapper">

      <div id="header">
      
        <div id="logo">
          <h1>Fav Photos</h1>
          </div> <!-- logo -->
          
        <ul id="nav">
            <li class="home">
                <a href="index.html" title="Fav Photos Home Page">Home</a>
            </li>
            <li class="gallery">
                <a href="gallery.html" title="Gallery Page">Gallery</a>
             </li>        
            <li class="about">
                <a href="about.html" title="About Us Page">About Us</a>
             </li>
            <li class="contact">
                <a href="contact.html" title="Contact Page">Contact</a>
             </li>
          </ul> <!-- nav -->
          
      </div> <!-- header -->

      <div id="content">
        <?php $this->renderTemplate($__data) ?>
      </div> <!-- content -->

      <div id="footer">
        <p class="project_name">My first CMS</p>
      </div> <!-- footer -->
      
    </div> <!-- wrapper -->
    </body>
</html>
