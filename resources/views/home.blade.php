@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-3">
        <a href="#" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">#</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3">
        <a href="#" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">#</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3">
        <a href="#" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">#</h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3">
        <a href="#" style="text-decoration: none;">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body bg-light text-dark">
                    <h3 class="card-title text-center">#</h3>
                </div>
            </div>
        </a>
    </div>
</div>
{{-- <div class="container">
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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
