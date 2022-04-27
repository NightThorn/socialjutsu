 <div class="ai">
     <div class="fm-action text-center">

         OR
     </div>
     <div style="padding-bottom: 20px;"></div>
     <div></div>
     <div style="padding: 10px;" class="title fs-16 text-info"><i class="far fa-hand-spock"></i> Let our A.I. Get You Some Post Ideas</div>
     <h3></h3>
     <form id="ideaform" method="post">

         <div class="form-group">
             <input class="form-control" type="text" id="topic" name="topic" placeholder="<?php _e("Enter a topic") ?>">
             <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

         </div>
         <div class="fm-action text-center">
             <button id="generate" class="btn btn-info btn-post-now" type="submit"><?php _e("Generate") ?></button>
         </div>
     </form>
     <div class="caption m-t-15">
         <textarea id="ideagenerator" disabled="true" style="height: 400px; width: 100%;"></textarea>
         <div class="caption-toolbar" style="display: flex;">
             <div class="item" >
                 <div class="count-word"><i class="fas fa-text-width"></i> <span>0</span></div>
             </div>
         </div>
     </div>
 </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script type="text/javascript">
     $("#generate").click(function(e) {
         e.preventDefault();
         var topic = $("#topic").val();
         $.ajax({
             url: "<?php echo site_url('post/topic'); ?>",
             method: "POST",
             data: {
                 topic: topic
             },
             success: function(data) {
                 $("#ideagenerator").val(data);
                 $("#ideagenerator").css("display", "block");


             },
             error: function() {
                 alert("Something went wrong. Please try again later.");
             }
         });
     });
 </script>