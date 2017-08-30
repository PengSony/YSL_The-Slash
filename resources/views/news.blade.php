@extends('welcome')
@section('content')
    <div class="img_news">
        <img src="image/y-quotation.JPG"style="width:100%;height: 600px;">

        <div class="Text " style="font-family: 'Roboto Condensed', sans-serif";>
            <div class="Text1 text-center hidden-md hidden-sm hidden-xs" style="font-family: 'Roboto Condensed', sans-serif;">
                <p style="color: #f9c803;font-size: 25px;text-align: center;display: table-cell;vertical-align: middle" >
                    News And Event
                </p>
            </div>
        </div>
    </div>

    <div class="news_event">
        <h2 style="color: #f9c803;padding-right:50px;text-align: center">NEWS & EVENTS</p>
            <hr width="10%" style=" border: 1px solid #f9c803;background-color: #f9c803; margin-top:-5px;"></h2>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container" id="newscontent">
                <div class="row  makemargin">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/air-logistic.jpg')}}" class="box-shadow-on-img news-img">
                                <div class="overlay-img-box"></div>
                            </a>

                        </div>
                        <p class="para">YellowSea</p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        1 month ago
                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/sea-port.jpg')}}" class="box-shadow-on-img news-img">
                                <div class="overlay-img-box"></div>
                            </a>
                        </div>
                        <p class="para">YellowSea</p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        5 month ago
                    </span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/y-quotation.JPG')}}" class="box-shadow-on-img news-img" >
                                <div class="overlay-img-box"></div>
                            </a>

                        </div>
                        <p class="para">YellowSea</p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        4 month ago
                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/port-logistic-2.jpg')}}" class="box-shadow-on-img news-img">
                                <div class="overlay-img-box"></div>
                            </a>

                        </div>
                        <p class="para">YellowSea</p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        7 month ago
                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/y-about-4.JPG')}}" class="box-shadow-on-img news-img">
                                <div class="overlay-img-box"></div>
                            </a>
                        </div>
                        <p class="para"> YellowSea</p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        2 month ago
                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="img-item">
                            <a href="#" >
                                <img src="{{asset('image/y-about-4.JPG')}}" class="box-shadow-on-img news-img">
                                <div class="overlay-img-box"></div>
                            </a>
                        </div>
                        <p class="para">YellowSea </p>
                        <div class="row">
                            <div class="col-xs-6">
                    <span class="post-time">
                        <span class="glyphicon glyphicon-time"></span>
                        5 month ago
                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end News section-->
        </div>

    </div>
@endsection
