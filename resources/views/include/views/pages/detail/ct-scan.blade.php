@extends('../../../include/layout/master')
@section('title','- Medical Devices')
@section('content')




<div class="container-box">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/ct-scan.webp" width=500 height= 500>
        </div>
        <div class="col-md-6">

            <table>
                <tr>
                    <td><b>Name</b></td>
                    <td>CT Scan Machine</td>
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
                    <td>Gantry, X-ray tube, Slip Rings, Generator, Cooling System, Detectors, Filters, CT Collimator, Control Panel, Couch, detector array, and a computer system for image reconstruction</td>
                </tr>
                <tr>
                    <td><b>Types</b></td>
                    <td>4-slice, 8-slice, 16-slice, 64-slice, 128-slice, and even higher slice counts like 256 or 320 slices</td>
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