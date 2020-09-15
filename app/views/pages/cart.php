<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navbar.css">
<section class="section section-xl bg-default">
  <div class="container">
    <!-- shopping-cart-->
    <div class="table-custom-responsive">
      <table class="table-custom table-cart">
        <thead>
          <tr>
            <th>Product name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['product'] as $product) : ?>
            <tr>
              <td><a class="table-cart-figure" href="<?= URLROOT . '/pages/viewproduct/' . $product->id ?>"><img src="<?= URLROOT . $product->file[0]; ?>" alt="" width="146" height="132"></a><a class="table-cart-link" href="http://localhost/reagan/pages/viewproduct/$product->id"><?= $product->name; ?></a></td>
              <td>$<?= $product->price; ?></td>
              <td>
                <div class="table-cart-stepper">
                  <div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
                </div>
              </td>
              <td>$<?= $product->price; ?></td>
            </tr>
            <!-- <tr> -->
          <?php endforeach; ?>
          <!-- <td><a class="table-cart-figure" href="http://localhost/reagan/pages/viewproduct/$product->id"><img src="./Cart Page_files/product-mini-5-146x132.png" alt="" width="146" height="132"></a><a class="table-cart-link" href="http://localhost/reagan/pages/viewproduct/$product->id">Bananas</a></td>
          <td>$23.00</td>
          <td>
            <div class="table-cart-stepper">
              <div class="stepper "><input class="form-input stepper-input" type="number" data-zeros="true" value="1" min="1" max="1000"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>
            </div>
          </td>
          <td>$23</td>
          </tr> -->
        </tbody>
      </table>
    </div>
    <div class="group-xl group-justify justify-content-center justify-content-md-between">
      <div>
        <form class="rd-form rd-mailform rd-form-inline rd-form-coupon" novalidate="novalidate">
          <div class="form-wrap">
            <input class="form-input form-input-inverse" id="coupon-code" type="text" name="text">
            <label class="form-label rd-input-label" for="coupon-code">Coupon code</label>
          </div>
          <div class="form-button">
            <button class="button button-lg button-secondary button-zakaria" type="submit">Apply</button>
          </div>
        </form>
      </div>
      <div>
        <div class="group-xl group-middle">
          <div>
            <div class="group-md group-middle">
              <div class="heading-5 font-weight-medium text-gray-500">Total</div>
              <div class="heading-3 font-weight-normal">$<?= $data['total']; ?></div>
            </div>
          </div><a class="button button-lg button-primary button-zakaria" href="<?= URLROOT . '/pages/checkout'; ?>">Proceed to checkout</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>