@extends('../../../include/layout/master')
@section('title','- Medical Devices')
@section('content')


<div class="container-box">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/images/laserscope.jpg" width=500 height= 500>
        </div>
        <div class="col-md-6">

            <table>
                <tr>
                    <td><b>Name</b></td>
                    <td>Laserscope</td>
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
                    <td>the laser source (lasing medium and pump), an optical resonator (mirrors), and a delivery system with specific components like aspherical lenses, Brewster plates, and dichroic mirrors are also used for beam manipulation and diagnostic monitoring</td>
                </tr>
                <tr>
                    <td><b>Types</b></td>
                    <td>CO2 lasers, Nd:YAG lasers, and diode lasers</td>
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