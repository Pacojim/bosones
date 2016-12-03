<?php defined('_JEXEC') or die('Restricted access'); ?>
<!DOCTYPE html>
<html 
    class="no-js"
    xmlns="http://www.w3.org/1999/xhtml" 
    xml:lang="<?php echo $this->language; ?>" 
    lang="<?php echo $this->language; ?>" 
    >
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.min.css" type="text/css" />
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css" />

            <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <header>
            <div class="logo">
                <!--<img src="img/bosones_logo.png" alt="Logotipo" />-->
                <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/bosones_logo1.png" alt="Logotipo" />
                <h1>Bosones R. C.</h1>
                <p>Pasión por el rugby</p>
            </div>
            <nav class="mainmenu">
                <jdoc:include type="modules" name="mainmenu" />
            </nav>
        </header>
        
        <section class="main">
            <article class="content">
                <doc:include type="component" />
            </article>
            <aside class="left">
                <jdoc:include type="modules" name="left" />
            </aside>
            <aside class="right">
                <jdoc:include type="modules" name="right" />
            </aside>
        </section>
        
        <footer>
            PIE DE PÁGINA
        </footer>

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
    </body>
</html>
