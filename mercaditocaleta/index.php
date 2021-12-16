<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercadito Caleta</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <!--<script src="js/jquery.easydropdown.js"></script>-->
    <!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/fwslider.js"></script>
    <!--end slider -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function () {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function () {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function (e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function () {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>

<body>

    <?php
    include 'php/navbar.php';
?>

    <div class="banner">
        <!-- start slider -->
        <div id="fwslider">
            <div class="slider_container">
                <div class="slide">
                    <!-- Slide image -->
                    <img src="imagenes/slider1.jpg" class="img-responsive" alt="" />
                    <!-- /Slide image -->
                    <!-- Texts container -->
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <!-- Text title -->
                            <h1 class="title">Run Over<br>Everything</h1>
                            <!-- /Text title -->
                            <div class="button"><a href="#">See Details</a></div>
                        </div>
                    </div>
                    <!-- /Texts container -->
                </div>
                <!-- /Duplicate to create more slides -->
                <div class="slide">
                    <img src="imagenes/slider2.jpg" class="img-responsive" alt="" />
                    <div class="slide_content">
                        <div class="slide_content_wrap">
                            <h1 class="title">Run Over<br>Everything</h1>
                            <div class="button"><a href="#">See Details</a></div>
                        </div>
                    </div>
                </div>
                <!--/slide -->
            </div>
            <div class="timers"></div>
            <div class="slidePrev"><span></span></div>
            <div class="slideNext"><span></span></div>
        </div>
        <!--/slider -->



        <div class="features">
		<div class="container">
			<h3 class="m_3">Nuevos Productos</h3>
			<div class="close_but"><i class="close1"> </i></div>
			  <div class="row">
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="single.html">
                    <img src="imagenes/audifonos.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Audifonos</h2>
                        <p>Obtén una libertad total al escuchar tu música favorita y olvídate de enredos con cables gracias a los Audífonos Bluetooth Spectra T6C.</p>
                      </div>
                   </a> </div
                  </div>
                  <h4 class="m_4"><a href="#">Audifonos</a></h4>
                  <p class="m_5">La mejor calidad</p>
                </div>

                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="imagenes/bolso.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Bolso femenino</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Bolso femenino</a></h4>
                   <p class="m_5">claritatem insitam</p>
				</div>

				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="imagenes/tenis.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Tenis Nike</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Tenis Nike</a></h4>
                   <p class="m_5">claritatem insitam</p>
				</div>

				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="single.html">
                    <img src="imagenes/bolsohombre.webp" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Bolso Masculino</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing.</p>
                      </div>
                     </a> </div>
                   <h4 class="m_4"><a href="#">Bolso Masculino</a></h4>
                   <p class="m_5">claritatem insitam</p>
				</div>
			</div>
		 </div>
	    </div>


<?php
    include 'php/footer.php';
?>
</body>

</html>