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
                                <div class="col-md-6 u-column1 col-1">
                                    <h2>Login</h2>
                                    <form action="<?= base_url('files/loginuser'); ?>" method="get">
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="username">Username or email address&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="text"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="username" autocomplete="username" required>
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                                            <span class="password-input">
                                                <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="password" type="password" autocomplete="current-password"
                                                    required>
                                            </span>
                                        </p>
                                        <p class="form-row">
                                            <label
                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                    name="remember" type="checkbox" value="forever"> <span>Remember
                                                    me</span>
                                            </label>
                                            <button type="submit"
                                                class="woocommerce-button button woocommerce-form-login__submit"
                                                name="login">Log in</button>
                                        </p>
                                        <p class="woocommerce-LostPassword lost_password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>


                                <div class="col-md-6 u-column2 col-2">
                                    <h2>Register</h2>
                                    <form method="post" action="<?= base_url('/register'); ?>"
                                        class="woocommerce-form woocommerce-form-register register">
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_email">Email address&nbsp;<span
                                                    class="required">*</span></label>
                                            <input type="email"
                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                name="email" id="reg_email" autocomplete="email" value="">
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="reg_password">Password&nbsp;<span
                                                    class="required">*</span></label>
                                            <span class="password-input">
                                                <input type="password"
                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                    name="password" id="reg_password" autocomplete="new-password">
                                                <span class="show-password-input"></span>
                                            </span>
                                        </p>
                                        <p class="woocommerce-form-row form-row">
                                            <button type="submit"
                                                class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                                                name="register" value="Register">Register</button>
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