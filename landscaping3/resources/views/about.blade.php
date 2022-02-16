@extends('layouts.app')

@section('content')

<!--Image Content-->
<div align="center"><img src="{{ URL::to('/img/grass.jpg') }}" id="grass">  <!--https://pixabay.com/get/53e3d14b4d51b108feda8460da2932761c3edee0575879_1920.jpg?attachment=-->
    <div class="centered"><h1>About Us</h1></div>
</div>
<br><br><br>
<!--Text Content-->
<div class="jumbotron">
    <p><h4>TPLandscaping is a landscaping company which strive to provide quality service. We provide quality residential landscaping, commercial landscaping and makeovers and can do the whole job from advice and design to building your dream outside space.</h4></p>
</div>
<br><br>
<!--Contact Info-->
<div class="container" align="center">
    <h3>Contact Us</h3>
    <ul style="list-style:none;">
        <li>&nbsp; &nbsp; Phone: +64 123456789</li>
        <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; E-Mail: tplandscaping@abc.com</li>
    </ul>
</div>


<br><br>

@endsection

