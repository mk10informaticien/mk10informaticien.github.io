<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Ajout Nouveau Client</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/client.css"/>
  </head>
  <body>
    <input type="checkbox" name="" id="menu-toggle">
    <div class="overlay">
      <label for="menu-toggle"></label>
    </div>
  
    <?php include "section/navbar.html"; ?>

    <div class="main-content">
      <?php
        require "php/entete.php";
        creationEntete('Ajout Client','ajouter un nouveau client');
      ?>
      <main>
        <section>
          <div class="block-grid">
            <div class="revenue-card">
              <div class="rev-content">
                <?php
                  // form content
                  include "section/ajout_client.html";
                ?>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>  
  </body>
</html>
