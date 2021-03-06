@extends('layouts.app')

@section('content')

<!--Login home page-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Check your appointments.<br><br> <a type="button"class="btn btn-info btn-sm" href="{{ ('appointments') }}" >Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
