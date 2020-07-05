@extends('layouts.master')

@section('title','Edit')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-4 text-gray-800">Artikel</h1>   
    
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Artikel</h6>            
                </div>
                {{-- {{dd($article)}} --}}
                <!-- Card Body -->
                <div class="card-body">
                    <form class="user" method="post" action="/artikel/{{$article->id}}">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <input name="judul" type="text" class="form-control" value="{{$article->judul}}">
                        </div>
                        <div class="form-group">
                            <textarea name="isi" class="form-control" name="" id="" cols="30" rows="10">{{$article->isi}}</textarea>
                        </div>
                        <div class="form-group">
                            <input name="tag" type="text" class="form-control" value="{{$article->tag}}">
                          </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Perbarui Artikel</button>                        
                                                
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection