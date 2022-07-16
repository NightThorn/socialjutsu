<?php include 'top.php'?>
<?php include 'header.php'?>
<!-- Breadcrumb Area-->
<div class="breadcrumb-area bg-img bg-black-overlay section_padding_130" style="background-image: url(<?php _e( get_theme_frontend_url('assets/img/bg-img/testimonials.jpg'))?>);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-xl-6">
        <div class="breadcrumb-content text-center">
          <h2><?php _e("Terms of Services")?></h2>
          <p><?php _e("Below are our terms of services")?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Area-->
<div class="fbmodal" id="feedback" role="dialog">
    <div class="fbmodal-text" role="document">
        <div class="modal-header">
            <h4 class="modal-title">Contact Us!</h4>
            <button type="button" onclick="hide()" class="close">&times;</button>

        </div>
        <div class="fbmodal-body">
            <form method="post" id="form" enctype="multipart/form-data">


                <div class="inputgroup">
                    <label>Email</label>
                    <textarea type="email" id="email" name="email"></textarea>
                </div>
                <div class="inputgroup">
                    <label>Business Name</label>
                    <textarea type="text" id="business" name="business"></textarea>
                </div>
                <div class="inputgroup">
                    <label>What can we help you with?</label>
                    <textarea type="text" id="query" name="query"></textarea>
                </div>
                <div class="inputgroup">
                    <input type="submit" style="margin-top: 10px;" class="btn btn-danger" name="send" value="Send">
                </div>

            </form>
            <div class="success" style="display: none; margin: 10px;" id="success">
                <?php _e("You have submitted your contact information. Thank you!") ?>
            </div>
        </div>

    </div>

</div>
<?php include 'footer.php'?>
<?php include 'bottom.php'?>

<style>
.fbmodal-body .inputgroup {
        margin: 30px;
    }

    .fbmodal-body .inputgroup label {
        width: 100px;
    }

    .fbmodal-body textarea {

        padding: 20px;
        vertical-align: middle;
        width: 70%;
        height: 100px;
        padding: 2px;
        border-radius: 5px;
        margin: 7px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        vertical-align: middle;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

   

    .fbmodal-text {

        height: 100%;
    }
</style>
<script>
    $(document).on('submit', '#form', function(e) {
        e.preventDefault();


        var form_data = new FormData($('#form')[0]);


        $.ajax({
            url: 'dashboard/feedback',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            data: form_data,
            error: function() {
                alert('Something is wrong');
            },
            success: function(data) {
                document.getElementById("success").style.display = "block";
                document.getElementById('form').reset();

            }
        });


    });


   
</script>