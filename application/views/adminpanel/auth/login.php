<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url('/adminpanel/login'); ?>">
                <fieldset>
                    <h2><?php echo lang('login_heading');?></h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <?php echo lang('login_subheading');?>
                        <?php echo $message;?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="identity" id="email" class="form-control input-lg" placeholder="<?php echo lang('login_identity_label');?>">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="<?php echo lang('login_password_label');?>">
                    </div>
                    <span class="button-checkbox">
                        <button type="button" class="btn" data-color="info"><?php echo  lang('login_remember_label'); ?></button>
                        <input type="checkbox" name="remember" id="remember" checked="checked"  class="hidden">
                        <a href="<?php echo site_url('/adminpanel/forgot_password'); ?>" class="btn btn-link pull-right"><?php echo lang('login_forgot_password');?></a>
                    </span>
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="<?php echo lang('login_submit_btn'); ?>">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>