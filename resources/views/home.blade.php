@extends('welcome')
@section('content')
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active" style="z-index: 10;width: 6%;height: 1px"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="z-index: 15;width: 6%;height: 1px"></li>
                <li data-target="#myCarousel" data-slide-to="2" style="z-index: 15;width: 6%;height: 1px"></li>
                <li data-target="#myCarousel" data-slide-to="3" style="z-index: 15;width: 6%;height: 1px"></li>
                <li data-target="#myCarousel" data-slide-to="4" style="z-index: 15;width: 6%;height: 1px"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="background-position: center">
                <div class="item active" id="slide1">
                    <img id="slide1" src="image/new-slide-3.jpg" style="width:100%;height: 500px;">
                </div>
                <div id="slide2" class="item">
                    <img src="image/new-slide-1.jpg" style="width:100%;height: 500px">
                </div>

                <div id="slide3" class="item">
                    <img src="image/y-slide-3.JPG" style="width:100%;height: 500px">
                </div>
                <div id="slide4" class="item">
                    <img src="image/port-logistic-2.jpg" style="width:100%;height: 500px">
                </div>
                <div id="slide5" class="item">
                    <img src="image/new-slide-3.jpg" style="width:100%;height: 500px">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="TextControl">
            <div class="Text " style="font-family: 'Roboto Condensed', sans-serif";>
                <div class="Text1 text-center" style="font-family: 'Roboto Condensed', sans-serif";>
                    <p >YELLOW SEA LOGISTICS offers the supports for the foods transportation both locally
                        <br> and globally such as Rail Freight, Intermodal, Air Freight, Ocean Freight,Custom Broker and
                        <br>Warehousing /Distribution
                    </p>
                </div>
            </div>
        </div>
        <div class="ButtonHead">
            <button style=" font-family: Roboto Condensed,Serif;">QUOTE REQUEST</button>
        </div>
    </div>

<div class="feature">
    <div class="jumbotron" style=" font-family: Roboto Condensed,Serif;">
        <div class="container-fluid" style="max-width:1200px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p id="ab" style=" font-family: Roboto Condensed,Serif;margin-top: 80px;">About <span style="color: #f9c803;">Yellowsea Logistic</span></p>
                    <p >Yellow Sea Logistic offers the supports for the goods transportation both locally and globally such as Rail Freight,
                        Intermodal,Air Freight,Ocean Freight,Custom Broker,and Warehousing/ Distribution.<br>
                    </p>
                    <p>Based on our strong assets and facilities,we have been motivated to start our first service providing in 2016,
                        and then with many more services from the start to the end.We would like our customer to rest assured and let us take care of the rest for you.
                        We are new in term of company, but we have a talented and experienced team here to ensure a high quality service being delivered and satisfied
                        to our customers. <br/>
                    </p>
                    <p>We are doing our best as a responsible business partner and a customer focused service to bring value and solution to your business
                        development as well as ours.
                    </p>
                </div>
            </div>
            <div class="Image">
                <img src="../image/port-logistic.jpg" style="width:100%;">
            </div>
        </div>
    </div>
</div>

<div class="Body">
    <div class="txt_productService" id="pr">
        <h2 style=" font-family: Roboto Condensed,Serif;">Product &amp; Services</h2><hr>
    </div>
    <div class="container-fluid" style="max-width: 1200px;">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="intermodalService">
                    <h2>Intermodal Service</h2>
                    <p>Our core product is to provide you the stable but qualified delivery service.
                        We have a station where you can easily drop your cargo and leave everything to us.<br>On top of that,We have the intermodal
                        service to support you an all-in delivery to your warehouse directly.
                    </p>

                    <p>We have a strong product designed as we have a warehouse combined with local<br>
                        intermodal service. It will save you time, cost and security.Your cargos will delivered at the destination all at the same time.
                    </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="img_intermodal">
                    <img src="../image/intermodal_main.jpg" class="img-responsive" style="width:100%; height:300px;">
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #f9c803; width: 40px; text-align: center;margin-top: 40px;background-color: #f9c803;">

        <div class="row">
            <div class="FreighForward">
                <div class="col-md-8 col-md-push-4 col-sm-12 col-xs-12">
                    <div class="txt_freigh" style=" font-family: Roboto Condensed,Serif;font-size: 18px">
                        <h3 style="color: #2b669a">Freight Forwarding</h3>
                        <p>By Ocean or Air, FCL or LCL,we believe that we are the one for you.We focus to offer the fast
                            and premium service/Port to Port/ to Port/Port to Door.</p>
                        <p>We design our service as per your individual requirements from/to almost anywhere
                            you wish to ship your cargo in the globe.We handle them with Care and Responsibility.
                            Given your available time range, we will support you to present your cargos to anypalce
                            of your request with the cost effectiveness.</p>

                    </div>
                </div>
                <div class="col-md-4 col-md-pull-8 col-sm-12 col-xs-12">
                    <div class="img_freign">
                        <img src="../image/frieght_forward.jpg" class="img-responsive" style="width:100%; height:300px;">
                    </div>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #f9c803; width: 40px; text-align: center;margin-top: 40px;background-color: #f9c803">

        <div class="row">
            <div class="Custom">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="txt_custom" style=" font-family: Roboto Condensed,Serif;font-size: 18px">
                        <h2>Custom House Brokerags</h2>
                        <p>For ease of doing your trading business,we urge to provide you -Custom
                            House Brokerage service supporting your imports businesses.<br>
                        </p>
                        <p>We will cover all the praparations of required documents, taxes/duties caculation and
                            payment, ensuring customs fomality completion in the fast maner, so your cargo will be available as planned
                        </p>
                        <p>We have a strong product designed as we have a warehouse combined with local<br>
                            intermodal service. It will save you time, cost and security.Your cargos will delivered at the destination all at the same time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="img_custom">
                        <img src="../image/custom-brokerage.jpg" class="img-responsive" style="width:100%; height:300px;">
                    </div>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #f9c803;background-color: #f9c803; width: 40px; text-align: center;margin-top: 40px">
        <div class="row">
            <div class="Warehousing">
                <div class="col-md-8 col-md-push-4 col-sm-12 col-xs-12">

                    <div class="txt_warehousing" style=" font-family: Roboto Condensed,Serif;font-size: 18px">
                        <h2>WareHousing and Distribution</h2>
                        <p>Storage is crucially important for your cargos as it is the starting before
                            bringing your cargos to the world or to your retails shop.<br></p>
                        <p>We keep it a priority when it comes to this. That is why we have our own
                            warehouse which is standardize, highly maintianed and ideally safe. There is also our value
                            added service to distribute your wish-list cargo to you whether it is in a small or big volume.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-8 col-sm-12 col-xs-12">
                    <div class="img_warehousing">
                        <img src="../image/new-warehousing.jpg" class="img-responsive" style="width:100%; height:300px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <hr style="border: 1px solid #f9c803; width: 40px; text-align: center;margin-top: 40px;background-color: #f9c803">
    </div>

    <div class="Footer">
        <div class="row">
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="img_near_footer">
                    <div class="contain"></div>
                    <div class="txt_near_footer" style=" font-family: Roboto Condensed,Serif;font-size: 18px">
                        <p style="tab-index: 20px">YELLOW SEA LOGISTICS offers the supports for the foods transportation both<br>
                            locally and globally such as Rail Freight, Intermodal
                            ,Air Freight, Ocean Freight,<br>Custom Broker and Warehousing /Distribution
                        </p>
                    </div>
                    <div class="footer_btn">
                        <button style=" font-family: Roboto Condensed,Serif;font-size: 18px">Quote Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection