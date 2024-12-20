
<div class="u-columns col2-set" id="customer_login">  


<div class="about-area default-padding">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4><b>My Account</b></h4>
                <div class="content_col li_box" data-aos="fade-up">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="row" id="customer_login">
                            <!-- Login Section -->
                            <div class="col-md-6 u-column1 col-1">
                                <h2>Login</h2>
                                <form class="woocommerce-form woocommerce-form-login login" method="post" data-gtm-form-interact-id="0">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="username" autocomplete="username" value="" data-gtm-form-interact-field-id="0">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <span class="password-input">
                                            <input class="woocommerce-Input woocommerce-Input--text input-text" name="password" type="password" id="password" autocomplete="current-password" data-gtm-form-interact-field-id="1">
                                            <span class="show-password-input"></span>
                                        </span>
                                    </p>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="remember" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                        </label>
                                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                                    </p>
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="https://humnafs.com/my-account/lost-password/">Lost your password?</a>
                                    </p>
                                </form>
                            </div>

                            <!-- Register Section -->
                            <div class="col-md-6 u-column2 col-2">
                                <h2>Register</h2>
                                <form method="post" action="<?= base_url('/register'); ?>" class="woocommerce-form woocommerce-form-register register">
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                                        <span class="password-input">
                                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password">
                                            <span class="show-password-input"></span>
                                        </span>
                                    </p>
                                    <p class="woocommerce-form-row form-row">
                                        <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
