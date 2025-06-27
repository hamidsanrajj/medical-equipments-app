@extends('../../../include/layout/master')
@section('title','- Contact')
@section('content')

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <h1 class="text-center mb-4">Contact</h1>
            <form action="{{ url('/') }}/contact-query" method="post">
                @csrf
                <div class="form-group mt-4">
                    <label>Name</label>
                    <input class="form-control" name="name" type="text" required>
                </div>
                <div class="form-group mt-4">
                    <label>Email</label>
                    <input class="form-control" name="email" type="email" required>
                </div>
                <div class="form-group mt-4">
                    <label>Phone</label>
                    <input class="form-control" name="phone" type="number" required>
                </div>
                <div class="form-group mt-4">
                    <label>Message</label>
                    <textarea col="4" row="5" name="message" class="form-control"></textarea>
                </div>
                <div class="form-group mt-4">
                    <input class="btn btn-primary" name="submit" type="submit">
                </div>
            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

@stop