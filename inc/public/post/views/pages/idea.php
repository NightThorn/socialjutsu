<div>
    <form class="actionLogin" action="<?php _e(get_module_url('topic', $this)) ?>" method="post">

        <div class="form-group">
            <input class="form-control" type="text" id="topic" name="topic" placeholder="<?php _e("Enter a topic") ?>">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

        </div>
        <button class="btn wimax-btn w-100" type="submit"><?php _e("Get Post Idea") ?></button>

    </form>
    <div class="caption m-t-15">
        <textarea id="ideagenerator" disabled="true" class="form-control post-message"></textarea>
        <div class="caption-toolbar">
            <div class="item">
                <div class="count-word"><i class="fas fa-text-width"></i> <span>0</span></div>
            </div>
        </div>
    </div>
</div>