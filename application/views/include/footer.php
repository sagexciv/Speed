<?php
$assets_link = base_url().'assets/';
$al = $assets_link;
?>

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h1>contact info</h1>
                    <address>
                        <p>Address: No.28-63877 street</p>
                        <p>lorem ipsum city, Country</p>

                        <p>Phone : (123) 456-7890</p>
                        <p>Fax : (123) 456-7890</p>
                        <p>Email : <a href="javascript:;">info@covenantuniversityalumni.net</a></p>
                    </address>
                </div>
                <div class="col-lg-5 col-sm-5">
                    <h1>latest tweet</h1>
                    <div class="tweet-box">
                        <i class="icon-twitter"></i>
                        <em>Please follow <a href="javascript:;">@CovenantUAlumni</a> for all future updates! <a href="javascript:;">twitter.com/covenantualumni</a></em>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                    <h1>stay connected</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-skype"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $al; ?>js/jquery.js"></script>
    <script src="<?php echo $al; ?>js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo $al; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $al; ?>js/hover-dropdown.js"></script>
    <script defer src="<?php echo $al; ?>js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo $al; ?>bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="<?php echo $al; ?>js/jquery.parallax-1.1.3.js"></script>

    <script src="<?php echo $al; ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo $al; ?>js/link-hover.js"></script>

    <script src="<?php echo $al; ?>fancybox/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="<?php echo $al; ?>revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo $al; ?>revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo $al; ?>js/common-scripts.js"></script>

    <script src="<?php echo $al; ?>js/revulation-slide.js"></script>


  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>

  </body>
</html>