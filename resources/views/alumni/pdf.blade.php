<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam card</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <center>
            <img src="logo.jpg" alt="">
        </center>
<center>
    <h4><b>Dedan Kimathi University Of Technology</b></h4>
</center>
        <div class="col-lg-12">
            <br>
            <center>Usage report</center>
            <hr>
            <br>
            <table class="table table-bordered table-responsive-sm">
                <thead>
                <tr>
                    <th><b>Names</b></th>
                    <th><b>Email</b></th>
                    <th><b>Profession</b></th>
                    <th><b>Amount&nbsp;(Ksh)</b></th>
                    <th><b>Purpose</b></th>
                    <th><b>Date</b></th>
                </tr>
                </thead>
                <tbody>
                @foreach($reports as $report)
                    <tr>
                        <td><b>{{$report->names}}</b></td>
                        <td>{{$report->email}}</td>
                        <td>{{$report->profession}}</td>
                        <td>{{$report->amount}}</td>
                        <td>{{$report->purpose}}</td>
                        <td>{{\Carbon\Carbon::parse($report->created_at)->format('d/m/Y')}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
        <br><br><br>
        <div class="row">
           Total amount contributed:
            <br>
            <br>
                       Ksh &nbsp;  <b><span style="color: green">{{$sum}}</span></b>

        </div>

    </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>