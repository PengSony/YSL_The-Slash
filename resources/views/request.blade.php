@extends('welcome')
@section('content')

    <div class="img_news">
        <img src="image/container-sea-port.jpg"style="width:100%;height: 600px">
        <div class="Text " style="font-family: 'Roboto Condensed', sans-serif";>
            <div class="Text1 text-center hidden-md hidden-sm hidden-xs" style="font-family: 'Roboto Condensed', sans-serif;">
                <p style="color: #f9c803;font-size: 25px;text-align: center;display: table-cell;vertical-align: middle" >
                    Quote Request
                </p>
            </div>
        </div>
        {{--<button  class="ButtonHead" >QUOTE REQUEST</button>--}}
    </div>
    <div class="Quote Request">
        <h2 style="color: #f9c803;padding-right:50px;text-align: center;padding-top: 40px">Quote Request Form</p>
            <hr width="10%" style=" border: 1px solid #f9c803; margin-top:-5px;"></h2>
    </div>
    <br><br>
    <div class="container-fluid" style="max-width: 1400px">
        <div class="jumbotron">
            <div class="container background-gray" style="margin-bottom: 50px">
                <div class="container">
                    <form action="" >
                        <div class="row quote-form-margin-top">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Place of Receipt<span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Place of Delivery <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-2  col-sm-2 col-xs-12">
                                <label class="font-weigth-label">Cargo Volume Details</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12">
                                <label class="font-weigth-label">FCL :</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <label class="font-weigth-label">&#9747;20'</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <label class="font-weigth-label">&#9747;40'</label>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <label class="font-weigth-label">&#9747;45'</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-2  col-sm-2 col-xs-12">
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <label class="font-weigth-label">LCL :</label>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <label class="font-weigth-label"> Length(mm) </label>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <label class="font-weigth-label">Width(mm) </label>
                            </div>
                            <div class="col-lg-3 col-md-4  col-sm-4 col-xs-12 hidden-lg">
                                {{--row take space--}}
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <label class="font-weigth-label">   Height(mm) </label>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <label class="font-weigth-label" style="margin-right: 10px;">Weight(kgs)</label>
                            </div>
                        </div>
                        <div class="row quote-form-margin-top">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Commodity<span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-4 col-xs-12">
                                <label class="font-weigth-label">Cargo Weight<span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-5 col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4  col-sm-4 col-xs-12">
                                <label class="font-weigth-label">KGs per container </label>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-4 col-xs-12">
                                <label class="font-weigth-label">Cargo Weight<span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <input name="textcmt" class="form-control" placeholder="text here" value="" style="height: 200px"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Your Company <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Country <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Contact Person <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Email Address <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-lg-3 col-md-4  col-sm-5 col-xs-12">
                                <label class="font-weigth-label">Phone Number <span style="color: #fc0;">*</span></label>
                            </div>
                            <div class="col-lg-9 col-lg-8 col-sm-10 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        {{--Row for button send--}}
                        <div class="row makemargin">
                            <div class="col-sm-12  make-center" style="text-align: center">
                                <button class="btn btn-primary btn-bigger makeshadow-btn-send text-center" style="margin-top: 20px;">
                                    <b >Submit your Quote</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection