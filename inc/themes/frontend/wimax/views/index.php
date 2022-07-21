<?php include "top.php" ?>
<?php include "header.php" ?>
<style>
  .heading {

    align-self: flex-end;
    margin-top: 20px;
    padding: 70px 5px;
    width: 100%;
    text-align: center;


  }

  .media img {

    width: 100%;
    height: 15vw;
    object-fit: contain;
  }



  .card-header {
    border-radius: 20px !important;
    background-color: #37c30d40;
  }

  .carditem {
    border-radius: 20px;
    padding: 16px;
    text-align: center;
    border: none;
    box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
  }

  .carditem:hover {

    cursor: pointer;
    box-shadow: none;
  }

  .media {

    padding: 20px;
  }

  .colcard {
    width: 25%;
    max-width: 25%;
    padding: 0 10px;
    margin-bottom: 50px;
  }

  /* Remove extra left and right margins, due to padding */
  .rowcards {
    margin: 0 -5px;
    display: flex;
    flex-wrap: wrap;
  }

  /* Clear floats after the columns */
  .rowcards:after {
    content: "";
    display: table;
    clear: both;
  }

  .card-body {

    overflow-wrap: break-word;
    font-size: smaller;
  }

  /* Responsive columns */
  @media screen and (max-width: 900px) {
    .colcard {
      width: 100%;
      min-width: 340px;
      display: block;
      margin-bottom: 20px;
    }

    .media img {

      width: 100%;
      height: auto;
      object-fit: contain;
    }
  }

  /* Style the counter cards */
</style>
<section class="hero-barishal welcome_area" id="recent">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/latest.png" width="100%" alt="latest amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($latest as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="home">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/home.png" width="100%" alt="home amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($items as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>

<section class="hero-barishal welcome_area" id="beauty">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/beauty.png" width="100%" alt="beauty amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($beauty as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="tech">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/tech.png" width="100%" alt="tech amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($tech as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="tools">
  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/tools.png" width="100%" alt="tools amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($tools as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>

<section class="hero-barishal welcome_area" id="pets">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/pets.png" width="100%" alt="pets amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($pets as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="kids">
  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/kids.png" width="100%" alt="kids amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($kids as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="outdoors">
  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/outdoors.png" width="100%" alt="outdoors amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($outdoors as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>



</section>
<section class="hero-barishal welcome_area" id="kitchen">

  <div class="container h-50">
    <div class="heading">

      <img src="inc/themes/backend/default/assets/img/kitchen.png" width="100%" alt="kitchen amazon must buy">
    </div>
    <div class="rowcards">

      <?php foreach ($kitchen as $key => $item) : ?>
        <div class="colcard">
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="carditem">

              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>


</section>

<?php include "bottom.php" ?>