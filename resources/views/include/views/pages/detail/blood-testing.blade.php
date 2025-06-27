@extends('../../../include/layout/master')
@section('title','- Medical Devices')
@section('content')


<div class="container-box">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/blood-test-machine.jpg" width=500 height= 500>
        </div>
        <div class="col-md-6">

            <table>
                <tr>
                    <td><b>Name</b></td>
                    <td>Blood Testing Machine</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td style="color: green; font-weight: bold;">Available</td>
                </tr>
                <tr>
                    <td><b>Price</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Models</b></td>
                    <td>2014-2025</td>
                </tr>
                <tr>
                    <td><b>Parts</b></td>
                    <td>CBC with 3-Part differentiation, 19 parameters + 3 histograms, 8.4 inches touch screen, Up to 60 tests per hour, 9.7 µL venous blood/20 µL peripheral blood sampling volume for testing, Storage report (with picture) >1000 cases, could expansion with U disk, Available U disk software upgrade, Real-time display and detection of sample temperature, Wide range power supply design AC100V-264V</td>
                </tr>
                <tr>
                    <td><b>Types</b></td>
                    <td>hematology analyzers, which measure various blood cell components; blood chemistry analyzers, which assess chemical components in the blood; coagulation analyzers, which evaluate blood clotting; and glucose meters, used for monitoring blood sugar levels</td>
                </tr>
            </table>

            <div class="btn-machine row">
                <div class="col-md-2">
                    <a href="{{ route('contact') }}" class="btn btn-primary form-control">Buy</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('contact') }}" class="btn btn-warning form-control">Repair</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('contact') }}" class="btn btn-danger form-control">Sell</a>
                </div>
            </div>
        </div>
    </div>
</div>


@stop