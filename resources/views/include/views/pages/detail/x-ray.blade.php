@extends('../../../include/layout/master')
@section('title','- Medical Devices')
@section('content')


<div class="container-box">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/x-ray.png" width=500 height= 500>
        </div>
        <div class="col-md-6">

            <table>
                <tr>
                    <td><b>Name</b></td>
                    <td>X-Ray Machine</td>
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
                    <td>X-Ray Tube, Collimator, Control Panel, Image Receptor, Grid, High Voltage Generator</td>
                </tr>
                <tr>
                    <td><b>Types</b></td>
                    <td>Computed Radiography (CR), Direct Radiography (DR), Dental X-Ray Machines, Intraoral X-rays, Extraoral X-rays, Veterinary X-ray Machines, Mammography, Fluoroscopy, Portable X-ray Systems</td>
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