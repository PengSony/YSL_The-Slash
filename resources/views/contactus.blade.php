@extends('welcome')
@section('content')

    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: phnom,
                map: map
            });
        }
    </script>
            {{--src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTG6_CDHDuvJfmFg90wK1fTR2KxwnS5QE&callback=initMap">--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTG6_CDHDuvJfmFg90wK1fTR2KxwnS5QE&callback=initMap"></script>

    <div class="contactUS">
        <h2>Contact Us</h2>
            <hr>
        {{-------end class text contact us------------}}

        {{--Class Paragraph yellow sea logicstic --}}
        <div class="Paragraph_contactUs">
            <p><span>YELLOW SEA LOGISTICS</span> offers the supports for the <br>goods transportation both locally and globally such as<br>
            Rails Freight, Intermodal, Air Freight, Ocean Freight,<br> Custom Broker, and Warehousing/Distribution.
            </p>
        </div>
        {{--Class icon of contactus--}}
       <div class="icon-contactus" style="text-align: center;margin: 40px;">
           <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
           <p><span class="glyphicon glyphicon-map-marker" style="font-size: 40px;color: #f9c803"></span><br></p>
               <p ><span style="font-size: 20px;"><strong>Find Us On Map</strong></span><br>
               <span style="font-size: 14px;color: gray">#G26, Street Gold,<br>
                   Sangkat Tumnub Terk,<br>
                   Khan Chamkarmon, Phnom Penh<br></span>
           </p>
               </div>

               <div class=" col-md-4 col-sm-12 col-xs-12">
                   <p><span class="glyphicon glyphicon-phone-alt" style="font-size: 40px;color: #f9c803"></span><br></p>
                   <p ><span style="font-size: 20px;"><strong>Any Question?</strong></span><br>
                       <span style="font-size: 14px;color: gray">+855 61 333 117<br>
                   +855 61 333 500</span>
                   </p>
               </div>

               <div class="col-md-4 col-sm-12 col-xs-12">
                   <p><span class="glyphicon glyphicon-envelope" style="font-size: 40px;color: #f9c803"></span><br></p>
                   <p><span style="font-size: 20px;"><strong>Write Us A Message</strong></span><br>
                       <span style="font-size: 14px;color: gray">csmng@yellowsea.asia</span>
                   </p>
               </div>
       </div>
       </div>


        <div class="jumbotron">
            <div class="feedback-frm-container">
                <h2 class="_title text-xs-center text-uppercase custom-header-style style-yellow">how can we help you?</h2>
                <hr class="custom-style"/>
                <h5 class="sub_title text-xs-center text-center" style="font-size: 20px; padding-top: 20px; padding-left: 40px;margin: 10px">We love to hear from you!
                    So leave us your inquiry and we will get back to <br> you as soon as we got your message.</h5>
                <div class="form text-center" style="width:70%;margin:auto; margin-top:40px;text-align: center;">
                <form class="feedback-fmr flat-control-form-border marg-top-20">
                    <input type="hidden" name="_token">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group marg-lg" >
                                <input type="text" name="name" class="form-control" placeholder="Name *" required="" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group marg-lg">
                        <input type="email" name="email" class="form-control" placeholder="Email *" required="" value="">
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group marg-lg">
                        <input type="text" name="phone" class="form-control" placeholder="Phone *" required="" value="">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12 marg-top-20" style="margin:40px;margin-left:5px;">
                            <div class="form-group marg-lg" style=" border-bottom: 2px solid #ccc;">
                                <textarea  name="message" class="form-control" placeholder="Desciption *" required="" style="border: none" ></textarea>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 recaptcha">
                            <div class="g-recaptcha" data-sitekey="6LcQAycUAAAAAK-fpAeYIr3S67L4OWaL6RcpDVrQ"></div>
                        </div>
                    </div>

                    {{--<div class="text-xs-center marg-top-50">--}}
                        {{--<button class="btn btn-primary btn-bigger text-uppercase with-shadow" ><b>Send</b></button>--}}
                    {{--</div>--}}

                </form>
                </div>
        </div>





    </div>

    </div>


@endsection