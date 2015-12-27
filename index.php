<?php 
    defined( '_JEXEC' ) or die( 'Restricted access' ); 

    include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?> 
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?= $dir_templ ?>/deb/normalize-css/normalize.css" type="text/css">
        <link rel="stylesheet" href="<?= $dir_templ ?>/Estilos/css/style.css" type="text/css" >
    </head>
    <body>
        <header id="main-header">
            <div id="wrap">
                <div class="head-info">
                    <jdoc:include type="modules" name="HeaderLogo" style="xhtml" />
                </div>
                <nav class="head-menu">
                    <jdoc:include type="modules" name="HeaderMenu" style="xhtml" />
                <nav>
            </div>
        </header>
        <section id="main-slider">
            <jdoc:include type="modules" name="Slider"
        </section>
        <main id="main-content">
            <section id="posts">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
            </section>
            <aside id="sidebar">
                <jdoc:include type="modules" name="Sidebar" style="xhtml" />
            </aside>
        </main>
        <footer id="main-footer">
            
        </footer>
    </body>
</html>