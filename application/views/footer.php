<div class="row th-row-p" id="subscribe">
    <div class="container" >
        <div class="col-xs-12 col-md-9">
            <h3 class="th-textw">Subscribe to stay informed </h3>
        </div>
        <div class="col-xs-12 col-md-3">
            <a class="th-btn th-btn-default col-xs-12" href="">Contact Us</a>
        </div>
    </div>
</div>
<div class="row" style="background-image: url('<?php echo base_url();?>media/image/footer.jpg');background-position: center;background-size: cover;background-repeat: no-repeat;">
    <div class="container th-row-p">
        <div class="col-md-10 col-md-offset-1 col-xs-12">
             <h2 class=" col-md-12 text-center th-textw">Countonadvisor</h2>
             <ul class="footer-nav text-center">
                <li><a href="">Home</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Mutal Funds</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Insurance</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Taxation</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Calculators</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Nri Services</a></li>
                <li><a href="">|</a></li>
                <li><a href="">Contact</a></li>
             </ul>
             <ul class="footer-nav-social text-center th-pt th-pb">
                <li><a href=""><img src="<?php echo base_url();?>media/image/social/facebook.png"></a></li>
                <li><a href=""><img src="<?php echo base_url();?>media/image/social/google-plus.png"></a></li>
                <li><a href=""><img src="<?php echo base_url();?>media/image/social/instagram.png"></a></li>
                <li><a href=""><img src="<?php echo base_url();?>media/image/social/twitter.png"></a></li>
                <li><a href=""><img src="<?php echo base_url();?>media/image/social/youtube.png"></a></li>
             </ul>
             <p class=" col-md-12 text-center th-textw"> 2017 Counton Advisor Pvt. Ltd. | All Rights Reserved  </p>
        </div>
    </div>
</div>
 
<!-- Core JS -->
<script type="text/javascript" src="<?php echo base_url();?>media/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
        {
        $('.home-banner').height($(window).height());
        });
</script>
<script type="text/javascript">
    function subemail()
    {
           var email = $("#subemail").val();
           alert(email);
            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('home/subscribe');?>",
                    data: {email: email},
                    beforeSend: function () {
                     $('.loading').show();
                    },
                    success: function (response) {
                     $('#submsg').html(html);
                     $('.loading').fadeOut("slow");
                    }
                });
    }
  </script>
  
</body>

</html>