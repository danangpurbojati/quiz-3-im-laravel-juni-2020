@extends('layouts.master')

@section('title','Artikel')

@section('content')
    <!-- Page Heading -->
    <h1 class="mb-4 text-gray-800">Artikel</h1>

    <a href="{{url('artikel/create')}}" class="btn btn-primary btn-icon-split my-3">        
        <span class="text">Tambah Article</span>
    </a>
    
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>            
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Artikel</th>
                          <th style="text-align: center">Aksi</th>                                                  
                        </tr>
                      </thead>                      
                      <tbody>
                          {{-- {{dd($articles)}} --}}
                        
                        @foreach ($articles as $article)
                        
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><a href="/artikel/{{$article->id}}">{{$article->judul}}</a></td>
                            <td>
                              <div class="d-flex justify-content-center">
                                  <a class="btn btn-success"  href="/artikel/{{$article->id}}/edit">edit</a>
                                  <form action="/artikel/{{$article->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">delete</button>
                                  </form>
                              </div>
                            </td>                                                   
                        </tr>                        
                        @endforeach     
                        
                      </tbody>
                    </table>
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush