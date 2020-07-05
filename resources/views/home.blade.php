@extends('layouts.master')

@section('title','Home')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-4 text-gray-800">Home</h1>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">ERD</h6>            
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area text-center">
                    <img src="{{asset('images')}}/quiz-erd.png" alt="erd">
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

