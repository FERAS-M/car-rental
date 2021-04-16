<br>
    <div id="map1"> </div>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
          var map = new google.maps.Map(document.getElementById('map1'), {
            zoom: 11,
            center: {lat: 31.52333, lng: 34.43347},
            });
  
          var image = 'http://localhost/mah-cars/images/location_point.png';
            var beachMarker = new google.maps.Marker({
               position: {lat: 31.52333, lng: 34.43347},
               map: map,
               icon: image
            });
          }
          </script>
          <!-- google map js -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
          <!-- end google map js -->
  

    <!-- end clients -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text-right" >
                        <h2 >تواصـل معنـا</h2>
                    </div>
                    <form class="main_form" dir="rtl">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="الاسم كاملا" type="text" name="Your Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="البريد الالكتروني" type="text" name="Email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="الهاتف المحمول" type="text" name="Phone">
                            </div>
                           


                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" rows="7" cols="21" placeholder="نص الرسالة"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send">ارسـال</button>
                            </div>


                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>العنوان</h3>
                                <span>قطاع غزة , غزة , بجوار مدخل ميناء غزة</span>
                                <p>(+972) 595200380
                                    <br>mahhndy@hotmail.com</p>
                            </div>
                            <ul class="location_icon">
                            <li> <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                <li class="active"> <a href="#contact">تواصـل معنـا</a> </li>
                                        <li> <a href="#about">مـن نحـن</a> </li>
                                        <li><a href="#brand">الموديـلات</a></li>
                                         <li><a href="#home">الرئيسيـة</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2021 All Rights Reserved. Design By<a href="https://html.design/"> Abu-Feras</a></p>
                </div>
            </div>
        </div>
        
    </footer>

   
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="http://localhost/mah-cars/js/jquery.min.js"></script>
    <script src="http://localhost/mah-cars/js/popper.min.js"></script>
    <script src="http://localhost/mah-cars/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/mah-cars/js/jquery-3.0.0.min.js"></script>
    <script src="http://localhost/mah-cars/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="http://localhost/mah-cars/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://localhost/mah-cars/js/custom.js"></script>
    <!-- javascript -->

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>

    <script src="http://localhost/mah-cars/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>

</body>

</html>