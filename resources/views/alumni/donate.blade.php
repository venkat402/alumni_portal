@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                <div id="side-nav-overlay">
                    @include('inc.alumni-sidenav')
                </div>
            </div>
            <div class="col-lg-10">
                <a href="/alumni-dashboard">Go back &nbsp; <i class="fa fa-chevron-circle-left"></i></a>

                {{--<p>You have contributed <b>550</b> Ksh</p>--}}
                <div class="row">
                    <div class="col-lg-4">
                        <br><br>
                        <h5>Generate report of contributions</h5>
                        <hr>
                        <p>Click here to generate report of the amount contributed and how they were used.</p>

                        <br>
                        <a style="height: 40px;width: 50%;font-size: 15px;" class="btn btn-warning" href="/alumni-Donate/downloadPDF">Generate</a>
                        {{--<center>--}}
                            {{--<img style="max-height: 100px" src="{{asset('images/lipa.png')}}" alt="">--}}
                        {{--</center>--}}
                        {{--<ul>--}}
                            {{----}}
                                {{--Head to mpesa--}}
                            {{----}}
                            {{--<li>1. Choose Pay Bill</li>--}}
                            {{--<li>2. Enter business number 	601394</li>--}}
                            {{--<li>3. Enter account number testpai601394</li>--}}
                            {{--<li>4. Enter amount you want to donate</li>--}}
                            {{--<li>5. Wait for response from MPESA.</li>--}}
                        {{--</ul>--}}

                    </div>
                    <div class="col-lg-8">
                        <center>
                            <img style="max-height: 100px" src="{{asset('paypal.jpg')}}" alt="">
                        </center>
                        <form method="post" action="/alumni-Donate/donate-paypal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input required name="amount" class="form-control" type="number">
                            </div>
                            
                            <div class="form-group">
                                Purpose <br>
                                <select required name="purpose" class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose purpose</option>
                                    <option value="fees">Fees</option>

                                </select>
                            </div>
                            <br><br>
                            <button type="submit" style="height: 60px;width:100%;font-size: 15px;" class="btn btn-primary btn-block" href="">Donate with paypal</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection