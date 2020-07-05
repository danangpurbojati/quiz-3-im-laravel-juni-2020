@extends('layouts.master')

@section('title','Detail')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-4 text-gray-800">Detail rtikel</h1>
    
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$article->judul}}</h6>            
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <p><strong>Slug : {{$article->slug}}</strong></p>                
                <p>{{$article->isi}}</p>
                <button class="btn btn-primary btn-icon-split my-3">{{$article->tag}}</button>                
            </div>
            </div>
        </div>
    </div>
@endsection