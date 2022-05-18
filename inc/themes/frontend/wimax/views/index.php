<?php include "top.php" ?>
<?php include "header.php" ?>
<script>
  function thanks() {

    document.getElementById("thanks").style.display = "";
  }
</script>
<section class="hero-barishal welcome_area" id="home">
  <div class="background-shapes">
    <div class="box1"></div>
    <div class="box2"></div>
    <div class="box3"></div>
    <div class="dot1"></div>
    <div class="dot2"></div>
    <div class="dot3"></div>
    <div class="dot4"></div>
    <div class="heart1"><i class="lni-heart"></i></div>
    <div class="heart2"><i class="i lni-heart"></i></div>
    <div class="circle1"></div>
    <div class="circle2"></div>
  </div>
  <div class="container h-100">
    <div class="row h-100 justify-content-between align-items-center">
      <div class="col-12 col-md-6">
        <div class="welcome_text_area">
          <h2 class="wow fadeInUp" data-wow-delay="0.2s"><?php _e("SocialJutsu™") ?></h2>
          <h3 class="wow fadeInUp" style="color: grey;" data-wow-delay="0.2s">The Ninja-Level Social Media Management Software</h3>
          <h5 class="wow fadeInUp" style="color: grey;" data-wow-delay="0.2s">Save time and energy by posting to all of your socials from one spot! Schedule your posts, view analytics, and let our AI Post Generator provide you with post ideas to engage and market to your audience!</h5>

          <a class="btn wimax-btn mt-30 wow fadeInUp" href="<?php _e(get_url("signup")) ?>" data-wow-delay="0.4s"><?php _e("Join the Beta!") ?></a><a class="btn wimax-btn btn-2 mt-30 ml-2 wow fadeInUp" href="#features" data-wow-delay="0.5s"><?php _e("Learn More") ?></a>

          <!-- <div class="register-form">
            <form action="<?php _e(get_module_url("ajax_email", $this)) ?>" class="actionLogin" method="post" data-redirect="<?php _e(post('redirect') ? post('redirect') : get_url('dashboard')) ?>">
              <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="<?php _e("Email") ?>">
              </div>
              <span class="show-message"></span>
              <button class="btn wimax-btn w-100" onClick="thanks()" type="submit">Join the waitlist!</button>
              <span style="display: none;" id="thanks">Thank you. You will receive an email when the site is live!</span>

            </form>
          </div> -->
        </div>
      </div>
      <div class="col-10 col-sm-8 col-md-5">
        <div class="welcome_area_thumb text-center wow fadeInUp" data-wow-delay="0.2s"><img src="<?php _e(get_theme_frontend_url('assets/img/bg-img/drakememe.jpg')) ?>" alt=""></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="welcome-border"></div>
  </div>
</section>
<section class="about_area section_padding_130" id="features">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s">
          <h6><?php _e("Using Benefits") ?></h6>
          <h3><?php _e("A simple, smart & proven way to boost your work performance") ?></h3>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="about_product_discription">
          <div class="row">
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature_icon"><i class="lni lni-download"></i></div>
                <h6><?php _e("No downloads") ?></h6>
                <p><?php _e("You can use our service straight from the web on all browsers. You don't need to download or install anything to enjoy our service") ?></p>
              </div>
            </div>
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature_icon"><i class="lni lni-timer"></i></div>
                <h6><?php _e("Saving Time") ?></h6>
                <p><?php _e("Dedicating just 10-20 minutes a day on your social media strategy can dramatically improve your customer relations and interactions") ?></p>
              </div>
            </div>
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature_icon"><i class="lni-layers"></i></div>
                <h6><?php _e("Schedule posts") ?></h6>
                <p><?php _e("Select your date, time or whenever you want to publish on each of your social accounts with just a few clicks") ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8 col-lg-4">
        <div class="about_product_thumb text-center my-5 my-lg-0"><img src="<?php _e(get_theme_frontend_url('assets/img/bg-img/features-img.png')) ?>" alt=""></div>
      </div>
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="about_product_discription">
          <div class="row">
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature_icon"><i class="lni lni-pie-chart"></i></div>
                <h6><?php _e("Analytics performance") ?></h6>
                <p><?php _e("Our Twitter and Instagram Analytics feature helps you get a sense on what posts work and which posts don't") ?></p>
              </div>
            </div>
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.3s">
                <div class="feature_icon"><i class="lni lni-network"></i></div>
                <h6><?php _e("Maximize Connections") ?></h6>
                <p><?php _e("Respond to Direct Messages for Twitter and Instagram and stay connected to your audience") ?></p>
              </div>
            </div>
            <div class="col-12">
              <div class="single_about_part wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature_icon"><i class="lni lni-shield"></i></div>
                <h6><?php _e("Safe and Secure") ?></h6>
                <p><?php _e("Your data is safe with us. We're not one of those companies that gives your personal information away") ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="using_benefits_area section_padding_130" id="benefits">
  <div class="benefit-top-thumbnail"><img src="<?php _e(get_theme_frontend_url('assets/img/core-img/video-bottom.png')) ?>" alt=""></div>
  <div class="benefit-bottom-thumbnail"><img src="<?php _e(get_theme_frontend_url('assets/img/core-img/benefit-bottom.png')) ?>" alt=""></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="section_heading white text-center wow fadeInUp" data-wow-delay="0.2s">
          <h6><?php _e("The Bright Feature") ?></h6>
          <h3><?php _e("We're more than a scheduling tool. Explore our features, and beat the algorithm") ?></h3>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single_benifits d-flex wow fadeInUp" data-wow-delay="200ms">
          <div class="icon_box"><i class="lni-heart"></i></div>
          <div class="benifits_text">
            <h5><?php _e("Visually plan and schedule your social media campaigns") ?></h5>
            <p><?php _e("Coordinate creative campaigns to drive engagement on social") ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single_benifits d-flex wow fadeInUp" data-wow-delay="200ms">
          <div class="icon_box"><i class="lni-color-pallet"></i></div>
          <div class="benifits_text">
            <h5><?php _e("Measure and report on the performance of your content") ?></h5>
            <p><?php _e("Get in-depth insights to grow your reach, engagement, and sales") ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single_benifits d-flex wow fadeInUp" data-wow-delay="200ms">
          <div class="icon_box"><i class="lni-grid-alt"></i></div>
          <div class="benifits_text">
            <h5><?php _e("Monitor engagement across all your social channels") ?></h5>
            <p><?php _e("Engage with your audience & build a community that loves your brand.") ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about_app_area section_padding_130">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 col-lg-5">
        <div class="about_image mb-5 mb-md-0">
          <div class="big_thumb wow fadeInLeft" data-wow-delay="0.2s"><img src="<?php _e(get_theme_frontend_url('assets/img/bg-img/hero-3.png')) ?>" alt=""></div>
          <div class="small_thumb wow fadeInLeft" data-wow-delay="0.4s"><img src="<?php _e(get_theme_frontend_url('assets/img/bg-img/hero-3.png')) ?>" alt=""></div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-5">
        <div class="about_us_text_area wow fadeInUp" data-wow-delay="0.2s">
          <h3><?php _e("Streamline your social media processes & delivery for your clients") ?></h3>
          <p><?php _e("Whether focusing on a campaign for one brand or managing socials across hundreds, Our service helps social media influencers be more productive by managing all their activities from a centralized hub. Our service is guaranteed to save your hours each day") ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="border-top"></div>
</div>
<section class="get-started-area section_padding_130_0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="section_heading text-center">
          <h3><?php _e("A complete solution for your social marketing & save your time") ?></h3>
          <p><?php _e("With an intuitive interface and a lot of extra features to help you create articles that are interesting and easier") ?></p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="total_subscriber_text text-center">
          <h4 class="mb-0"><?php _e("What are you waiting for? Let us help you succeed") ?></h4><a class="btn wimax-btn mt-5" href="<?php _e(get_url("signup")) ?>"><?php _e("Try it now") ?></a>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="cta-thumbnail section_padding_130_0"><img class="w-100" src="<?php _e(get_theme_frontend_url('assets/img/bg-img/cta.jpg')) ?>" alt=""></div>
      </div>
    </div>
  </div>
</section>

<section class="work_process_area section_padding_130_80">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="section_heading text-center">
          <h3><?php _e("Extra Performance") ?></span></h3>
          <p><?php _e("Some extra core features available") ?></p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-12 col-sm-4 col-md-3">
        <div class="single_work_step">
          <div class="step-icon"><i class="lni lni-image"></i></div>
          <h5><?php _e("Watermark") ?></h5>
          <p><?php _e("Easily add watermark to your images with intuitive interface") ?></p>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-md-3">
        <div class="single_work_step">
          <div class="step-icon"><i class="lni lni-folder"></i></div>
          <h5><?php _e("File manager") ?></h5>
          <p><?php _e("Fully integrated with the best image uploading and editing currently available") ?></p>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-md-3">
        <div class="single_work_step">
          <div class="step-icon"><i class="lni lni-users"></i></div>
          <h5><?php _e("Group manager") ?></h5>
          <p><?php _e("Managing all of your accounts in groups saves you time") ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="border-top"></div>
</div>
<section class="testimonial_area section_padding_130" id="rating">
  <div class="testimonial-top-thumbnail"><img src="<?php _e(get_theme_frontend_url('assets/img/core-img/testimonial-top.png')) ?>" alt=""></div>
  <div class="testimonial-bottom-thumbnail"><img src="<?php _e(get_theme_frontend_url('assets/img/core-img/testimonial-bottom.png')) ?>" alt=""></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <div class="section_heading white text-center">
          <h3><?php _e("Our Happy Users!") ?></h3>
          <p><?php _e("Our users praise us for our easy to use website, support, and innovative features! Here are what just a few of them had to say") ?></p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 col-md-9 col-lg-7">
        <div class="card border-0 p-4 p-sm-5 testimonials owl-carousel">
          <div class="single_testimonial_area text-center">
            <div class="testimonial_author_thumb"><img src="<?php _e(get_theme_frontend_url('assets/img/advisor-img/warchief.jpg')) ?>" alt=""></div>
            <div class="testimonial_text">
              <p><?php _e("Just saying if you dont have an account on SJ, YOU NEED ONE! This will not only help you promote your content, but it will save you TONS of time! Post to all your social media in the time it takes to make one post! Type, Click, Done!") ?></p>
              <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <div class="testimonial_author_name">
                <a href="https://twitter.com/warchiefog">
                  <h5><?php _e("WarchiefOG") ?></h5>
                </a>
                <h6><?php _e("Twitch Streamer") ?></h6>
              </div>
            </div>
          </div>
          <div class="single_testimonial_area text-center">
            <div class="testimonial_author_thumb"><img src="<?php _e(get_theme_frontend_url('assets/img/advisor-img/mackman.jpg')) ?>" alt=""></div>
            <div class="testimonial_text">
              <p><?php _e("SocialJutsu is the simplest, most powerful, and easiest to use website when it comes to posting to all my favorite social media accounts!!") ?></p>
              <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <div class="testimonial_author_name">
                <a href="https://twitter.com/mackmangg">
                  <h5><?php _e("Mackman Gaming") ?></h5>
                </a>
                <h6><?php _e("Youtube Content Creator") ?></h6>
              </div>
            </div>
          </div>
          <div class="single_testimonial_area text-center">
            <div class="testimonial_author_thumb"><img src="<?php _e(get_theme_frontend_url('assets/img/advisor-img/john.jpg')) ?>" alt=""></div>
            <div class="testimonial_text">
              <p><?php _e("Being able to post to all of our socials, especially our own site, saves us time, money, and allows us to focus on what really matters: building our community!") ?></p>
              <div class="rating"><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i><i class="lni-star-filled"></i></div>
              <div class="testimonial_author_name">
                <a href="https://twitter.com/johnreaveslive">
                  <h5><?php _e("John Reaves") ?></h5></a>
                  <h6><?php _e("CEO & Co-Owner, GGs.tv") ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
<?php if (!empty($faqs)) { ?>
  <div class="faq_area section_padding_130" id="faq">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
          <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s">
            <h3><?php _e("Frequently Asked Questions") ?></h3>
            <p><?php _e("We've crafted this FAQ page to answer many of your frequently asked questions") ?></p>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-lg-8">
          <div class="accordion faq-accordian" id="faqAccordion">

            <?php foreach ($faqs as $key => $faq) : ?>
              <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card-header" id="heading<?php _e($key) ?>">
                  <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse<?php _e($key) ?>" aria-expanded="true" aria-controls="collapse<?php _e($key) ?>"><?php _e($faq->name) ?><span class="lni-chevron-up"></span></h6>
                </div>
                <div class="collapse" id="collapse<?php _e($key) ?>" aria-labelledby="headingOne" data-parent="#faqAccordion">
                  <div class="card-body">
                    <?php _e(htmlspecialchars_decode($faq->content, ENT_QUOTES), false) ?>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<div class="download_app_area section_padding_130_80" id="download">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section_heading white text-center">
          <h3><?php _e("Start your free trial. Are you ready to try SocialJutsu? ! No contract. No credit card") ?></h3>
          <div class="line bg-white"></div>
          <a class="btn wimax-btn mt-30 wow fadeInUp" href="<?php _e(get_url("signup")) ?>"><?php _e("Join the Beta!") ?></a>
        </div>

      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
<?php include "bottom.php" ?>