<div id="content">
    <div class="title"><h3>Login in to E-Learning</h3></div>
    <div class="box">
        <div class="login_box">
            <div class="login_toggle">
                <span class="arr_icon"><img src="images/icon/icon_arrow_login.png" /></span>
                <span class="toggle_text">Already have a E-Learning account?</span>
                <?php echo $this->Form->create('User'); ?>
                    <label>
                        <div class="label_text">Username</div>
                        <input class="input" name="login_or_email" size="20" type="text">
                    </label>
                    <label>
                        <div class="label_text">Password</div>
                        <input class="input" name="login_password" size="20" type="password">
                    </label> 
                     <input class="flat_btn" style="margin-top:45px; height:40px; font-size:18px;margin-bottom:0px" type="submit" value="Log in">   
                    <?php if (isset($error)&&!empty($error)): ?> 
                        <div class="login_error" style="display: block;">
                            <span><?php echo $error;?></span>
                        </div>
                    <?php endif; ?>    
                    <label style="margin-top:0px;margin-bottom:20px">
                        <input checked="checked" class="checkbox" id="remember" name="remember" type="checkbox" value="1"> Keep me logged in
                    </label>                    
                 <?php echo $this->Form->end(); ?>
                <span class="arr_icon"><img src="images/icon/icon_arrow_login.png" /></span>
                <span class="toggle_text">New to Student or Teacher? <a href="">Sign up</a> for a free account.</span>
            </div>
        </div>
    </div>
</div>

