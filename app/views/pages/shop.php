<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar.css">

<section class="section section-xxl bg-default text-md-left">
  <div class="container">
    <div class="row row-50">
      <div class="col-lg-4 col-xl-3">
        <div class="aside row row-30 row-md-50 justify-content-md-between">
          <div class="aside-item col-12">
            <h6 class="aside-title">Filter by Price</h6>
            <!-- RD Range-->
            <div class="rd-range hasTooltip" data-min="0" data-max="999" data-min-diff="100" data-start="[10, 250]" data-step="1" data-tooltip="false" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2">
              <div class="rd-range__wrap">
                <div class="rd-range__pointer rd-range__pointer-1" style="left: 1%;">
                  <div class="rd-range__pointer-tooltip">10</div>
                </div>
                <div class="rd-range__pointer rd-range__pointer-2" style="left: 25%;">
                  <div class="rd-range__pointer-tooltip">250</div>
                </div>
                <div class="rd-range__line" style="left: 1%; width: 24%;"></div>
              </div>
            </div>
            <div class="group-xs group-justify">
              <div>
                <button class="button button-sm button-primary button-zakaria" type="button">Filter</button>
              </div>
              <div>
                <div class="rd-range-wrap">
                  <div class="rd-range-title">Price:</div>
                  <div class="rd-range-form-wrap"><span>$</span>
                    <input class="rd-range-input rd-range-input-value-1" id="test" type="text" name="value-1" style="width: 3.45ch;">
                  </div>
                  <div class="rd-range-divider"></div>
                  <div class="rd-range-form-wrap"><span>$</span>
                    <input class="rd-range-input rd-range-input-value-2" type="text" name="value-2" style="width: 4.6ch;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="aside-item col-sm-6 col-md-5 col-lg-12">
            <h6 class="aside-title">Categories</h6>
            <ul class="list-shop-filter">
              <li>
                <label class="checkbox-inline">
                  <input name="input-group-radio" value="checkbox-1" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>All
                </label><span class="list-shop-filter-number">(18)</span>
              </li>
              <li>
                <label class="checkbox-inline">
                  <input name="input-group-radio" value="checkbox-2" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>Vegetables
                </label><span class="list-shop-filter-number">(9)</span>
              </li>
              <li>
                <label class="checkbox-inline">
                  <input name="input-group-radio" value="checkbox-3" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>Fruits
                </label><span class="list-shop-filter-number">(5)</span>
              </li>
              <li>
                <label class="checkbox-inline">
                  <input name="input-group-radio" value="checkbox-4" type="checkbox" class="checkbox-custom"><span class="checkbox-custom-dummy"></span>Baked Goods
                </label><span class="list-shop-filter-number">(8)</span>
              </li>
            </ul>
            <!-- RD Search Form-->
            <form class="rd-search form-search" action="https://livedemo00.template-help.com/wt_prod-21756/search-results.html" method="GET">
              <div class="form-wrap">
                <label class="form-label rd-input-label" for="search-form">Search ...</label>
                <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                <button class="button-search fl-bigmug-line-search74" type="submit"></button>
              </div>
            </form>
          </div>
          <div class="aside-item col-sm-6 col-lg-12">
            <h6 class="aside-title">Popular products</h6>
            <div class="row row-10 row-lg-20 gutters-10">
              <div class="col-4 col-sm-6 col-md-12">
                <!-- Product Minimal-->
                <article class="product-minimal">
                  <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                    <div class="unit-left"><a class="product-minimal-figure" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"><img src="<?php echo URLROOT; ?>/img/product-mini-1-106x104.png" alt="" width="106" height="104"></a></div>
                    <div class="unit-body">
                      <p class="product-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Galia Melons</a></p>
                      <p class="product-minimal-price">$18.00</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-4 col-sm-6 col-md-12">
                <!-- Product Minimal-->
                <article class="product-minimal">
                  <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                    <div class="unit-left"><a class="product-minimal-figure" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"><img src="<?php echo URLROOT; ?>/img/product-mini-2-106x104.png" alt="" width="106" height="104"></a></div>
                    <div class="unit-body">
                      <p class="product-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Pineapples</a></p>
                      <p class="product-minimal-price">$30.00</p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-4 col-sm-6 col-md-12">
                <!-- Product Minimal-->
                <article class="product-minimal">
                  <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                    <div class="unit-left"><a class="product-minimal-figure" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"><img src="<?php echo URLROOT; ?>/img/product-mini-3-106x104.png" alt="" width="106" height="104"></a></div>
                    <div class="unit-body">
                      <p class="product-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Oranges</a></p>
                      <p class="product-minimal-price">$20.00</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-xl-9">
        <div class="product-top-panel group-md">
          <p class="product-top-panel-title">Showing 1–9 of 28 results</p>
          <div>
            <div class="group-sm group-middle">
              <div class="product-top-panel-sorting">
                <div class="select2-container" id="s2id_autogen1"><a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-2">Sort by newness</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                  <div class="select2-drop select2-display-none">
                    <div class="select2-search select2-search-hidden select2-offscreen"> <label for="s2id_autogen2_search" class="select2-offscreen"></label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder=""> </div>
                    <ul class="select2-results" role="listbox" id="select2-results-2"> </ul>
                  </div>
                </div><select data-minimum-results-for-search="Infinity" tabindex="-1" title="" style="display: none;">
                  <option value="1">Sort by newness</option>
                  <option value="2">Sort by popularity</option>
                  <option value="3">Sort by alphabet</option>
                </select>
              </div>
              <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid active" href="https://livedemo00.template-help.com/wt_prod-21756/grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list" href="https://livedemo00.template-help.com/wt_prod-21756/shop-list.html"></a></div>
            </div>
          </div>
        </div>
        <div class="row row-30 row-lg-50" id="product_grid">
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
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
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-2-191x132.webp" alt="" width="191" height="132">
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
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
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
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-4-204x125.png" alt="" width="204" height="125">
                </div>
                <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Bread</a></h5>
                <div class="product-price-wrap">
                  <div class="product-price">$11.00</div>
                </div>
              </div><span class="product-badge product-badge-new">New</span>
              <div class="product-button-wrap">
                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-5-204x156.png" alt="" width="204" height="156">
                </div>
                <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Strawberries</a></h5>
                <div class="product-price-wrap">
                  <div class="product-price">$15.00</div>
                </div>
              </div>
              <div class="product-button-wrap">
                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-6-237x156.webp" alt="" width="237" height="156">
                </div>
                <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Cucumbers</a></h5>
                <div class="product-price-wrap">
                  <div class="product-price product-price-old">$32.00</div>
                  <div class="product-price">$22.00</div>
                </div>
              </div><span class="product-badge product-badge-sale">Sale</span>
              <div class="product-button-wrap">
                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-7-210x168.png" alt="" width="210" height="168">
                </div>
                <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Sweet peppers</a></h5>
                <div class="product-price-wrap">
                  <div class="product-price">$14.00</div>
                </div>
              </div><span class="product-badge product-badge-new">New</span>
              <div class="product-button-wrap">
                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-8-210x133.png" alt="" width="210" height="133">
                </div>
                <h5 class="product-title"><a href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html">Bagels</a></h5>
                <div class="product-price-wrap">
                  <div class="product-price">$10.00</div>
                </div>
              </div>
              <div class="product-button-wrap">
                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="https://livedemo00.template-help.com/wt_prod-21756/single-product.html"></a></div>
                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="https://livedemo00.template-help.com/wt_prod-21756/cart-page.html"></a></div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
            <!-- Product-->
            <article class="product">
              <div class="product-body">
                <div class="product-figure"><img src="<?php echo URLROOT; ?>/img/product-9-185x155.webp" alt="" width="185" height="155">
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
        <div class="pagination-wrap">
          <!-- Bootstrap Pagination-->
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item page-item-control disabled"><a class="page-link" href="https://livedemo00.template-help.com/wt_prod-21756/grid-shop.html#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
              <li class="page-item active"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" href="https://livedemo00.template-help.com/wt_prod-21756/grid-shop.html#">2</a></li>
              <li class="page-item"><a class="page-link" href="https://livedemo00.template-help.com/wt_prod-21756/grid-shop.html#">3</a></li>
              <li class="page-item page-item-control"><a class="page-link" href="https://livedemo00.template-help.com/wt_prod-21756/grid-shop.html#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <script src="<?= URLROOT; ?>/js/shop.js"></script> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
<script src="<?= URLROOT; ?>/js/shop.js"></script>