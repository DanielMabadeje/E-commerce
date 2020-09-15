<?php require APPROOT . '/views/inc/dashheader.php'; ?>
<div class="main-panel">
    <div class="content-wrapper pb-0">
    <div id="myModal" class="formmodal pt-0 mt-0" style="display: none">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">×</span>
    <h2>Add Product</h2>
  </div>
  <div class="modal-body">
        <form action="" method="post" id="post_form" enctype="multipart/form-data">
                <div class="form-group text-dark border-light">
                    <!-- <textarea name="content"  class="form-control form-control-lg entry border-0" id=""  placeholder="Write a post the world is waiting to hear..."  style=" height: auto !important; " > </textarea> -->
                    <!-- <textarea name="" class="entry" id="" cols="30" rows="10" placeholder="Type here and hit Return. Use Shift + Return for a new line.."></textarea> -->
                    <!-- <div  class="f entry" name="contents" isContentEditable contenteditable="" id="post_input" style="height: auto !important;"></div> -->
                    <span class="invalid-feedback"></span>
                    <div class="row imagepreview" id="targetOuter">
                        <div id="targetLayer"></div>
                    </div>
                    <div class="">
                        <input name="userImage[]" id="userImage" type="file" class="inputfile" multiple onChange="showPreview(this);" />
                        <label for="file"><i class="fa fa-camera"></i></label>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Submit">
            </form>
            <!-- <script>
                entry = $('.entry');
                entry.bind('keydown', function(e){
                    //check if # was pressed
                    if (e.keyCode === 51){
                        alert('wow');
                        //chat.throwMessage($(this).val());
                    //e.preventDefault();
                    
                    }
                    //check if spacebar was pressed
                    else
                     if(e.keycode==32){
                        alert('space')
                    }
                    });
            </script> -->
  </div>
  <div class="modal-footer">
    <h5>&copy; ReaganMart</h5>
  </div>
</div>
    <!-- </div> -->
</div>
        <div class="page-header">
            <h3 class="m-0 pr-3">Welcome back, <?= $_SESSION['user_name']; ?></h3>
        </div>
        <div class="ecommerce-banner grid-margin">
            <div class="bg-dark p-4 text-white">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <div class="d-lg-flex align-items-center">
                        <img src="<?php echo URLROOT; ?>/img/bell.png" alt="" class="rounded mr-4">
                        <div>
                            <h4 class="mb-2 font-weight-bold  mt-3 mt-lg-0">Link your bank account to your fiedly account</h4>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                    <div class="d-flex mt-3 mt-lg-0">
                        <button class="btn btn-light text-dark mr-3">Link bank account</button>
                        <button class="btn btn-facebook">Later</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>3.6k<span class="text-success"> <i class="mdi mdi-chevron-up"></i> </span></h2>
                            <p class="mb-0">31.5%</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-cash mr-3 mdi-24px"></i>
                            <h5 class="font-weight-normal mb-0">Total Revenue</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>$3,886<span class="text-danger"> <i class="mdi mdi-chevron-down"></i> </span></h2>
                            <p class="mb-0">5.32</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-cash-usd mr-3 mdi-24px"></i>
                            <h5 class="font-weight-normal mb-0">Total Profit</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>$3,200<span class="text-success"> <i class="mdi mdi-chevron-up"></i> </span></h2>
                            <p class="mb-0">12.09%</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-credit-card mr-3 mdi-24px"></i>
                            <h5 class="font-weight-normal mb-0">Total Cost</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>1000<span class="text-success"> <i class="mdi mdi-chevron-up"></i> </span></h2>
                            <p class="mb-0">2.00%</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-cart-outline mr-3 mdi-24px"></i>
                            <h5 class="font-weight-normal mb-0">Total Quantity</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-sm-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title ">Income Report - 2019</div>
                        <div class="mt-3">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="totalSalary" height="260" style="display: block; width: 977px; height: 260px;" width="977" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-0">Your most recent earnings</div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Date </th>
                                        <th> Amount </th>
                                        <th> Earnings </th>
                                        <th> Tax withheld </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>29 Jan 2020 </td>
                                        <td>
                                            $380.50
                                        </td>
                                        <td> 25</td>
                                        <td> -$23.50</td>
                                    </tr>
                                    <tr>
                                        <td>18 Aug 2020</td>
                                        <td>
                                            $518.60
                                        </td>
                                        <td>
                                            34
                                        </td>
                                        <td> -$13.45</td>
                                    </tr>
                                    <tr>
                                        <td>07 Apr 2020</td>
                                        <td>
                                            $503.20
                                        </td>
                                        <td>
                                            30
                                        </td>
                                        <td> -$22.22</td>
                                    </tr>
                                    <tr>
                                        <td>24 Jan 2020</td>
                                        <td>
                                            $421.80
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>-$23.01</td>
                                    </tr>
                                    <tr>
                                        <td>24 Jan 2020</td>
                                        <td>
                                            $421.80
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>-$23.01</td>
                                    </tr>
                                    <tr>
                                        <td>24 Jan 2020</td>
                                        <td>
                                            $421.80
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>-$23.01</td>
                                    </tr>
                                    <tr>
                                        <td>24 Jan 2020</td>
                                        <td>
                                            $421.80
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>-$23.01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Top sales countries</div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-ae rouded-flag" title="ae" id="ae"></i>
                                                </div>
                                                United arab emirates
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-vn rouded-flag" title="vn" id="vn"></i>
                                                </div>
                                                Vietnam
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-us rouded-flag" title="us" id="us"></i>
                                                </div>
                                                United states
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-be rouded-flag" title="be" id="be"></i>
                                                </div>
                                                Belgium
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-nz rouded-flag" title="nz" id="nz"></i>
                                                </div>
                                                New Zealand
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flag-icon-wrap">
                                                    <i class="flag-icon flag-icon-ar rouded-flag" title="ar" id="ar"></i>
                                                </div>
                                                Argentina
                                            </div>
                                        </td>
                                        <td>
                                            $1,671.10
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-sm-12 stretch-card grid-margin">
                <div class="filter-banner text-white">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="d-flex">
                            <h4 class="mb-0 font-weight-normal mr-3">Filtered by : </h4>
                            <h4 class="mb-0">Enterprise</h4>
                        </div>
                        <div class="d-flex  mt-1 mt-lg-0">
                            <button class="btn btn-light text-dark mr-3">Previw Reports</button>
                            <button class="btn btn-dark">Generate Reports</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-sm-6 stretch-card">
                <div class="row">
                    <div class="col-sm-12 stretch-card grid-margin">
                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4>Member Profit</h4>
                                            <p class="mb-0 text-muted">Average Weekly Profit</p>
                                        </div>
                                        <h3 class="text-success">+168.900</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 stretch-card grid-margin">
                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4>Total Profit</h4>
                                            <p class="mb-0 text-muted">Weekly Customer Orders</p>
                                        </div>
                                        <h3 class="text-success">+6890.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 stretch-card grid-margin">
                        <div class="w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4>overall sales</h4>
                                            <p class="mb-0 text-muted">System bugs and issues</p>
                                        </div>
                                        <h3 class="text-danger">-8380.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-8 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-0">Latest order details</div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Name </th>
                                        <th> Order </th>
                                        <th> Payment </th>
                                        <th> Sum </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="<?php echo URLROOT; ?>/img/doc_1.jpg" class="mr-2" alt="image"> Henry Richardson</td>
                                        <td>N8H231</td>
                                        <td>Paypal</td>
                                        <td> $14,000</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo URLROOT; ?>/img/doc_2.jpg" class="mr-2" alt="image"> Hu Hyon-Suk</td>
                                        <td>N8H235</td>
                                        <td>Visa</td>
                                        <td>$41,160</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo URLROOT; ?>/img/doc_3.jpg" class="mr-2" alt="image"> Jurriaan van</td>
                                        <td>N8H239</td>
                                        <td>Paypal</td>
                                        <td>$12,603</td>
                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo URLROOT; ?>/img/doc_4.jpg" class="mr-2" alt="image"> Lizzie Rose</td>
                                        <td>N8H241</td>
                                        <td>Paypal</td>
                                        <td>$91,231</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
</div> -->
<?php require APPROOT . '/views/inc/dashfooter.php'; ?>