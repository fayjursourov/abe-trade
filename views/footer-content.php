<p id="back-top">
    <a href="#top"><i class="fa fa-angle-up"></i></a>
</p>

<footer>
    <div class="container text-center">
        <p>Copyright &copy; <?php echo Date('Y'); ?> <a href="http://abe-trade.com">abe-trade.com</a></p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/theme-scripts.js"></script>
<?php
  if(isset($_POST['contact-form'])){
    echo '<script>$(function(){$("html, body").animate({scrollTop: $("#contactForm").offset().top + 5}, 1200);});</script>';
  }
?>
</body>
</html>
