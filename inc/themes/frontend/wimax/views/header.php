<!-- Header Area-->
<header class="header_area">
  <div class="main_header_area">
    <div class="container">
      <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="wimaxNav">
          <!-- Logo--><a href="<?php _e(get_url()) ?>"><img src="inc/themes/backend/default/assets/img/mustbuytrans.png" alt="amazon must buys"></a>
          <!-- Navbar Toggler-->
          <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span></span></div>
          <!-- Menu-->
          <div class="classy-menu">
            <!-- Close Button-->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
            <!-- Nav-->
            <div class="classynav">
              <ul id="corenav">
                <li><a href="<?php _e(get_url()) ?>#home"><?php _e("Home") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#beauty"><?php _e("Beauty") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#tech"><?php _e("Tech") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#tools"><?php _e("Tools") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#pets"><?php _e("Pets") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#kids"><?php _e("Kids") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#outdoors"><?php _e("Sports/Outdoors") ?></a></li>
                <li><a href="<?php _e(get_url()) ?>#kitchen"><?php _e("Kitchen") ?></a></li>

                <?php if (_s("language")) { ?>
                  <li class="language-box cn-dropdown-item"><a href="#"><i class="<?php _e(get_data(json_decode(_s("language")), 'icon')) ?>"></i></a>
                    <ul class="dropdown">
                      <?php if (!empty(get_language_categories())) { ?>
                        <?php foreach (get_language_categories() as $key => $row) : ?>
                          <li>
                            <a class="dropdown-item actionItem" href="<?php _e(get_url(THEME_FRONTEND . "/set/" . get_data($row, "ids"))) ?>" data-redirect=""><i class="<?php _e(get_data($row, "icon")) ?>"></i> <?php _e(get_data($row, 'name')) ?></a>
                          </li>
                        <?php endforeach ?>
                      <?php } ?>
                    </ul>
                    <span class="dd-trigger"></span>
                  </li>
                <?php } ?>
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>