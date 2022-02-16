@extends('layouts.app')

@section('content')

<!--Image content-->
<div align="center"><img src="{{ URL::to('/img/grass.jpg') }}" id="grass">  <!--https://pixabay.com/get/53e3d14b4d51b108feda8460da2932761c3edee0575879_1920.jpg?attachment=-->
    <div class="centered"><h1>Services</h1></div>
</div>
<br><br><br>

<!--Service Info-->
<div class="jumbotron" align="center">
    
    <h1>&nbsp; &nbsp; LANDSCAPING</h1>

    <ul style="list-style:none;">
        <li><p>Advice and Design</p></li>
        <li><p>Complete start to finish work</p></li>
        <li><p>Maintenance Packages</p></li>
        <li><p>Concrete paths and driveways</p></li>
    </ul>

</div>
<br><br><br>


<div class="jumbotron" align="center">
    
    <h1>&nbsp; &nbsp; &nbsp;FENCES</h1>

    <ul style="list-style:none;">
        <li><p>Custom design and advice</p></li>
        <li><p>Supply and install</p></li>
    </ul>

</div>
    
<br><br><br>

<div class="jumbotron" align="center">
    
    <h1>&nbsp; &nbsp; &nbsp;LAWNS and GARDEN</h1>
    
    <ul style="list-style:none;">
        <li><p>New and Renovate</p></li>
        <li><p>Residential and Commercial</p></li>
        <li><p>Maintenance Packages</p></li>
    </ul>

</div>
        
<!--Service Info End-->



@endsection