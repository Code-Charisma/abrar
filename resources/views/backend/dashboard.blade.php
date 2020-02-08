@extends('backend.master')

@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Welcome Notice</h3>
                    </div>
                    <div class="card-body">
                        <p>Hey <b>{{Auth::user()->name}}</b></p>
                        <p>!!! Welcome to the admin panel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

