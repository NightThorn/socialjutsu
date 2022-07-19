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

  .card-header {
    border-radius: 20px !important;
    background-color: #37c30d;
  }

  .card {
    border-radius: 20px;
    border: none;
    box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 1px 0px 47px -1px rgba(0, 0, 0, 0.75);
  }

  .card:hover {

    cursor: pointer;
    box-shadow: none;
  }

  .media {

    padding: 20px;
  }
</style>
<section class="hero-barishal welcome_area" id="recent">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Latest Finds</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($latest as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="home">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Home</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($items as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">

            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>

<section class="hero-barishal welcome_area" id="beauty">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Beauty</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($beauty as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">

            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="tech">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Tech</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($tech as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">

            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="tools">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Tools</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($tools as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">

            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>

<section class="hero-barishal welcome_area" id="pets">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Pets</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($pets as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="kids">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Kids</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($kids as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="outdoors">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Sports/Outdoors</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($outdoors as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>
<section class="hero-barishal welcome_area" id="kitchen">

  <div class="container h-50">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="heading">

        <h3>Kitchen</h3>
      </div>
      <div class="col-12" style="flex-wrap: wrap; display: flex; justify-content: space-between; height: 50%;">
        <?php foreach ($kitchen as $key => $item) : ?>
          <a href="<?php _e($item->link) ?>" target="_blank">
            <div class="card" style="margin-bottom: 20px; min-width: 45%; max-width: 500px;">
              <div class="card-header">
                <h6><?php _e($item->title) ?></h6>
              </div>
              <div class="media">
                <img src="<?php _e($item->thumb) ?>" width="100%" />
              </div>
              <div class="card-body">
                <?php _e(htmlspecialchars_decode($item->text, ENT_QUOTES), false) ?>
              </div>

            </div>
          </a>
        <?php endforeach ?>
      </div>
    </div>

  </div>



</section>

<?php include "bottom.php" ?>