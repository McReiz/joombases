<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php
    $dir_templ = $this->baseurl ."/templates/". $this->template;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?= $dir_templ ?>/deb/normalize-css/normalize.css" type="text/css">
        <link rel="stylesheet" href="<?= $dir_templ ?>/Estilos/css/style.css" type="text/css" >
    </head>
    <body>
        <header id="main-header">
            <jdoc:include type="modules" name="Header" style="xhtml" />
            <jdoc:include type="module" name="mainmenu" title="Main Menu" />
        </header>
        <main id="main-content">
            <article id="posts">
                <jdoc:include type="modules" name="Articles" style="xhtml" />
            </article>
            <aside id="sidebar">
                <jdoc:include type="modules" name="Sidebar" style="xhtml" />
            </aside>
        </main>
        <footer id="main-footer">
            
        </footer>
    </body>
</html>