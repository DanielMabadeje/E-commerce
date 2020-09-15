<footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="#" target="_blank">Reagan Mart</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
    </footer>
</div>
</div>
<script> 
var modal = document.getElementById('myModal');
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
<script src="<?php echo URLROOT; ?>/js/vendor.bundle.base.js"></script>
<script src="<?php echo URLROOT; ?>/js/jquery.barrating.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/Chart.min.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery.flot.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery.flot.resize.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery.flot.categories.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo URLROOT; ?>/js/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <script src="<?php echo URLROOT; ?>/js/off-canvas.js"></script>
    <script src="<?php echo URLROOT; ?>/js/hoverable-collapse.js"></script>
    <script src="<?php echo URLROOT; ?>/js/misc.js"></script>
    <script src="<?php echo URLROOT; ?>/js/settings.js"></script>
    <script src="<?php echo URLROOT; ?>/js/todolist.js"></script>
    <!-- Custom js for this page -->
    <script src="<?php echo URLROOT; ?>/js/tooltips.js"></script>
    <script src="<?php echo URLROOT; ?>/js/popover.js"></script>
    <script src="<?php echo URLROOT; ?>/js/dashboard.js"></script>
    <script src="<?php echo URLROOT; ?>/js/products.js"></script>
</body>
</html>