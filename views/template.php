<!doctype html>
<html>
 <head>
  <meta charset="utf-8" />
  <link href="website.css" rel="stylesheet" />
  <title>Mon site web</title>
 </head>
 <body>
  <header>
   <h1>Mon site web</h1>
   <nav>
    <a href="<?= $app_root ?>/">Accueil</a> | 
    <a href="<?= $app_root ?>/products">Produits</a> | 
    <a href="<?= $app_root ?>/services">Services</a> | 
    <a href="">Conact</a>
   </nav>
  </header>
  <?= $content; ?>
  <footer class="footer">
   <a href="https://github.com/samimetoui/slx_website">Ce projet</a> est un mini modele 
   pour commencer à développer avec le framework Silex.
  </footer>
 </body>
</html>