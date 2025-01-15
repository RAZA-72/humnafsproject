<div class="page-title-overlap bs-warning-bg-subtle">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="<?= base_url('/');?>"><i class="ci-home"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="border-top py-4">
    <div class="container">
        <h2 class="text-left h3 mb-lg-5 mb-3 mt-3">Your Cart</h2>
        <form action="/cart" method="post" novalidate="" class="cart pb-5 mb-4">
            <div class="row">
                <div class="col-lg-8 pr-lg-5">
                    <table class="responsive-table cart-table">
                        <thead class="cart__row">
                            <tr>
                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody id="CartProducts">

                            <tr class="cart__row responsive-table__row">
                                <td class="cart__cell--image">
                                    <div class="d-flex">
                                        <a href="/collections/all/products/moisture-maker-hydrating-hyaluronic-serum?variant=42425786236985"
                                            class="cart__image ">
                                            <img src="<?= base_url();?>assets/images/saree-6.jpg" loading="lazy" width="130px" height="">
                                        </a>
                                    </div>
                                </td>
                                <td class="d-none d-lg-table-cell">
                                    <a href="/products/moisture-maker-hydrating-hyaluronic-serum?variant=42425786236985"
                                        class="h6 text-body">
                                        Pink and Gold Butter Silk Banarasi Saree
                                    </a>
                                    <p>
                                        <a class="small" href="#">Remove</a>
                                    </p>
                                </td>
                                <td class="cart__cell--quantity d-none d-lg-table-cell">
                                    <div class="js-qty">
                                        <select class="form-select form-select-xxs w-auto">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="cart__cell--total d-none d-lg-table-cell">

                                    <span class="cart__item-total text-body">
                                        ₹ 18,000
                                    </span>

                                </td>
                            </tr>



                        </tbody>
                    </table>
                    <div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-right bg-gray-01">
                        <div class="row cart__row border-0">

                            <div class="col-12">
                                <label for="CartSpecialInstructions" class="mb-1">Special instructions for
                                    seller</label>
                                <textarea name="note" id="CartSpecialInstructions" class="cart__note"></textarea>
                            </div>

                            <div class="block-coupon col-12 block-coupon-cart">
                                <discount-code>
                                    <div id="list-coupon" class="pt-2 mb-3 text-left">
                                        <div class="card-coupon">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="mb-4 w-100 text-left">
                                                    <label class="mb-1" for="discount-code-input">Already have
                                                        coupon?</label>
                                                    <div class="d-flex w-100 gap-2">
                                                        <input class="form-control" type="text" id="discount-code-input"
                                                            autocomplete="on" value="">
                                                        <div>
                                                            <span id="apply-discount-btn"
                                                                class="btn btn-outline-danger">Apply</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </discount-code>
                            </div>
                            <div class="col text-left">
                                <div class="flex align-items-center mt-2">
                                    <span class="mr-auto">Total</span>
                                    <p class="h4 cart__subtotal text-body mt-0" id="CartSubtotal">₹ <span>18,000</span>
                                        + Free Shipping</p>
                                </div>

                                <button type="submit" name="checkout"
                                    class="btn btn-outline-dark gradient-theme btn-cart-checkout w-100">Check
                                    Out</button>
                                <p class="small txt-body-70 mt-4 mb-0 text-center">We accept</p>
                                <ul id="cart-payment-methods" class="list-inline payment-icons text-center">
                                    <li class="list-inline-item">
                                        <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                            role="img" width="38" height="24" aria-labelledby="pi-visa">
                                            <title id="pi-visa">Visa</title>
                                            <path opacity=".07"
                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                            </path>
                                            <path fill="#fff"
                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                            </path>
                                            <path
                                                d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                                fill="#142688"></path>
                                        </svg>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                            role="img" width="38" height="24" aria-labelledby="pi-master">
                                            <title id="pi-master">Mastercard</title>
                                            <path opacity=".07"
                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                            </path>
                                            <path fill="#fff"
                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                            </path>
                                            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                            <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                            <path fill="#FF5F00"
                                                d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="payment-icon" xmlns="http://www.w3.org/2000/svg" role="img"
                                            aria-labelledby="pi-american_express" viewBox="0 0 38 24" width="38"
                                            height="24">
                                            <title id="pi-american_express">American Express</title>
                                            <path fill="#000"
                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                                                opacity=".07"></path>
                                            <path fill="#006FCF"
                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                                            </path>
                                            <path fill="#FFF"
                                                d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                                            </path>
                                            <path fill="#006FCF"
                                                d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                                            </path>
                                            <path fill="#006FCF"
                                                d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                                            </path>
                                            <path fill="#FFF"
                                                d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                                            </path>
                                            <path fill="#006FCF"
                                                d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                                            </path>
                                            <path fill="#006FCF"
                                                d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                                            </path>
                                        </svg>

                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                            width="38" height="24" role="img" aria-labelledby="pi-paypal">
                                            <title id="pi-paypal">PayPal</title>
                                            <path opacity=".07"
                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                            </path>
                                            <path fill="#fff"
                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                            </path>
                                            <path fill="#003087"
                                                d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                                            </path>
                                            <path fill="#3086C8"
                                                d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                                            </path>
                                            <path fill="#012169"
                                                d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                                            </path>
                                        </svg>
                                    </li>
                                    <li class="list-inline-item">
                                        <svg class="payment-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
                                            role="img" width="38" height="24" aria-labelledby="pi-diners_club">
                                            <title id="pi-diners_club">Diners Club</title>
                                            <path opacity=".07"
                                                d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                            </path>
                                            <path fill="#fff"
                                                d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                            </path>
                                            <path
                                                d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z"
                                                fill="#3086C8"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>


    </div>
</div>