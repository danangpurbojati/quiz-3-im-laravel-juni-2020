@extends('layouts.master')

@section('title','Tambah')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-4 text-gray-800">Artikel</h1>   
    
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>            
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form class="user" method="post" action="/artikel">
                        @csrf
                        <div class="form-group">
                          <input name="judul" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                          <textarea name="isi" class="form-control" name="" id="" cols="30" rows="10" placeholder="Apa yang kamu pikirikan?"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="tag" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan tag">
                          </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Artikel</button>                        
                                                
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection