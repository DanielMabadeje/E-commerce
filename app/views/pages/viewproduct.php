<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar.css">
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30">
            <div class="col-lg-6">
                <div class="slick-vertical slick-product">
                    <!-- Slick Carousel-->
                    <div class="carousel-parent slick-initialized slick-slider" id="carousel-parent" data-items="1" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel">



                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 1596px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                                <div class="item slick-slide slick-current slick-active" style="width: 532px;" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                    <div class="slick-product-figure"><img src="<?php echo URLROOT; ?><?= $data['product']->file[0]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                                <div class="item slick-slide" style="width: 532px;" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                    <div class="slick-product-figure"><img src="<?php echo URLROOT; ?><?= $data['product']->file[0]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                                <div class="item slick-slide" style="width: 532px;" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                    <div class="slick-product-figure"><img src="<?php echo URLROOT; ?><?= $data['product']->file[0]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="child-carousel slick-nav-1 slick-initialized slick-slider" id="child-carousel" data-arrows="true" data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">



                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 546px; transform: translate3d(0px, 0px, 0px);" role="listbox">
                                <div class="item slick-slide slick-current slick-active" style="width: 170px;" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10">
                                    <div class="slick-product-figure"><img src="<?php echo URLROOT; ?><?= $data['product']->file[1]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                                <div class="item slick-slide slick-active" style="width: 170px;" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide11">
                                    <div class="slick-product-figure"><img src="<?php echo URLROOT; ?><?= $data['product']->file[2]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                                <div class="item slick-slide slick-active" style="width: 170px;" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide12">
                                    <div class="slick-product-figure"><img src="<<?php echo URLROOT; ?><?= $data['product']->file[3]; ?>" alt="" width="530" height="480">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product">
                    <h3 class="text-transform-none font-weight-medium"><?= $data['product']->name; ?></h3>
                    <div class="group-md group-middle">
                        <div class="single-product-price"><?= $data['product']->price; ?></div>
                        <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                    </div>
                    <p><?= $data['product']->details; ?></p>
                    <hr class="hr-gray-100">
                    <ul class="list list-description">
                        <li><span>Category:</span><span><?= $data['product']->category_name; ?></span></li>
                        <!-- <li><span>Weight:</span><span>5 OZ</span></li>
                        <li><span>Dimensions:</span><span>0.6 x 0.9 in</span></li> -->
                    </ul>
                    <div class="group-xs group-middle">
                        <div class="product-stepper">
                            <div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
                        </div>
                        <div><a class="button button-lg button-primary button-zakaria" href="javascript:void(0)" onclick="addtocart(<?= $data['product']->id; ?>)">Add to cart</a></div>
                    </div>
                    <hr class="hr-gray-100">
                    <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                        <div>
                            <ul class="list-inline list-social list-inline-sm">
                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
                <ul class="nav nav-tabs nav-tabs-1">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html#tabs-1-1" data-toggle="tab">Reviews</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html#tabs-1-2" data-toggle="tab">Additional information</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html#tabs-1-3" data-toggle="tab">Delivery and payment</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-1-1">
                    <div class="box-comment">
                        <div class="unit flex-column flex-sm-row unit-spacing-md">
                            <div class="unit-left"><a class="box-comment-figure" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html#"><img src="<?php echo URLROOT; ?>/img/user-1-119x119.jpg" alt="" width="119" height="119"></a></div>
                            <div class="unit-body">
                                <div class="group-sm group-justify">
                                    <div>
                                        <div class="group-xs group-middle">
                                            <h5 class="box-comment-author"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html#">Jane Doe</a></h5>
                                            <div class="box-rating"><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                                        </div>
                                    </div>
                                    <div class="box-comment-time">
                                        <time datetime="2019-11-30">Nov 30, 2019</time>
                                    </div>
                                </div>
                                <p class="box-comment-text">Lorem ipsum dolor sit amet, has mutat labores nostrum ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te.</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-transform-none font-weight-medium">Leave a Review</h4>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_prod-21756/bat/rd-mailform.php" novalidate="novalidate">
                        <div class="row row-20 row-md-30">
                            <div class="col-lg-8">
                                <div class="row row-20 row-md-30">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-first-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-first-name-2">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-last-name-2" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span><span class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-last-name-2">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span><span class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-email-2">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric"><span class="form-validation"></span><span class="form-validation"></span>
                                            <label class="form-label rd-input-label" for="contact-phone-2">Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-wrap">
                                    <label class="form-label rd-input-label" for="contact-message-2">Message</label>
                                    <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2" name="phone" data-constraints="@Required"></textarea><span class="form-validation"></span><span class="form-validation"></span>
                                </div>
                            </div>
                        </div>
                        <button class="button button-lg button-secondary button-zakaria" type="submit">Submit</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <div class="single-product-info">
                        <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                            <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span></div>
                            <div class="unit-body">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-3">
                    <div class="single-product-info">
                        <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                            <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                            <div class="unit-body">
                                <p>c auctor augue mauris augue neque gravida. Vitae sapien pellentesque habitant morbi tristique senectus et. Vitae auctor eu augue ut lectus. Congue eu consequat ac felis. Aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod. Ut venenatis tellus in metus. Felis eget nunc lobortis mattis aliquam faucibus purus in massa. Gravida dictum fusce ut placerat orci nulla pellentesque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-sm section-last bg-default">
    <div class="container">
        <h4 class="font-weight-sbold">Featured Products</h4>
        <div class="row row-lg row-30 row-lg-50 justify-content-center">
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-1-220x160.png" alt="" width="220" height="160">
                        </div>
                        <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Bananas</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div><span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="https://livedemo00.template-help.com/wt_prod-21756/images/product-2-191x132.png" alt="" width="191" height="132">
                        </div>
                        <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Potatoes</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$13.00</div>
                        </div>
                    </div><span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-3-238x158.png" alt="" width="238" height="158">
                        </div>
                        <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Carrots</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$17.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Product-->
                <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="https://livedemo00.template-help.com/wt_prod-21756/images/product-9-185x155.png" alt="" width="185" height="155">
                        </div>
                        <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Galia melons</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$18.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                        <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section> <?php require APPROOT . '/views/inc/footer.php'; ?>