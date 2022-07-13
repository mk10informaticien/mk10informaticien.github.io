<?php
  function creationEntete($titre, $sous_titre) {
    echo '
    <header>
      <div class="header-title-wrapper">
        <label for="menu-toggle">
          <span class="las la-bars"></span>
        </label>
        <div class="header-title">
          <h1>'.$titre.'</h1>
          <p>'.$sous_titre.'<span class="las la-chart-line"></span></p>
        </div>
      </div>
      <div class="header-action">
        <button class="btn btn-main">
          <span class="las la-video"></span>
          Parametre
        </button>
      </div>
    </header>
    ';
  }
?>
