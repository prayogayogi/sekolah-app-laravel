@extends('layouts.layoutAdmin.app')

@section('title')
  Kepala Sekolah
@endsection

@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-0 text-gray-800">Kepala Sekolah</h1>
  <p class="mb-4 mt-2">Menu Kepala Sekolah Ini Merupakan Menu Yang Menampilkan Data Kepala Sekolah Dan Data-Data Mengenai Kepala Sekolah.</p>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          @if (auth()->user()->role_id == 1)
          <a href="#" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas mr-2 fa-plus"></i>Tambah Data</a>
          @endif
          
          <div class="row">
            <div class="col table-responsive">
              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Guru</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($headmaster as $headmasters)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$headmasters->nama}}</td>
                    <td>{{$headmasters->no_hp}}</td>
                    <td>{{$headmasters->mapel}}</td>
                    <td>
                      <img src="{{asset('dataGambarKepsek/' . $headmasters->gambar)}}" alt="gambar" width="50px" class="img-thumbnail">  
                    </td>
                    <td>
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEdit{{$headmasters->id}}"><i class="far fa-edit"></i></a>

                      <form action="/admin/{{$headmasters->id}}/kepalaSekolah/" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger pr-3"><i class="far fa-trash-alt"></i></button>
                      </form>

                      <a href="/admin/{{$headmasters->id}}/kepalaSekolah/" class="btn btn-success pr-3"><i class="fas fa-eye"></i></a>
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
  </div>
</div>
@endsection

<!-- Modal tambah Kepala Sekolah -->
@if (auth()->user()->role_id == 1)
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pimpinan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="{{ route('tambahKepalaSekolah') }}" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input autofocus value="{{ old('nama')}}" type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama..">
                    @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nid">Nid</label>
                    <input autofocus value="{{ old('nid')}}" type="text" name="nid" class="form-control @error('nid') is-invalid @enderror" id="nid" placeholder="Masukkan Nid..">
                    @error('nid')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="mapel">Mapel</label>
                    <input autofocus value="{{ old('mapel')}}" type="text" name="mapel" class="form-control @error('mapel') is-invalid @enderror" id="mapel" placeholder="Masukkan Mapel..">
                    @error('mapel')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="no_hp">No hp</label>
                    <input autofocus value="{{ old('no_hp')}}" type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukkan No_hp..">
                    @error('no_hp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar">
                    @error('gambar')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif

<!-- Modal edit Kepala Sekolah -->
@if (auth()->user()->role_id == 1)
@foreach ($headmaster as $headmasters)
<div class="modal fade" id="exampleModalEdit{{$headmasters->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Kepala Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="/admin/{{ $headmasters->id }}/kepalaSekolah/" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input autofocus value="{{ $headmasters->nama }}" type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="nid">Nid</label>
                <input autofocus value="{{ $headmasters->nid }}" type="text" name="nid" class="form-control @error('nid') is-invalid @enderror" id="nid">
                @error('nid')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="mapel">Mapel</label>
                <input autofocus value="{{ $headmasters->mapel }}" type="text" name="mapel" class="form-control @error('mapel') is-invalid @enderror" id="mapel">
                @error('mapel')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="no_hp">No hp</label>
                <input autofocus value="{{ $headmasters->no_hp }}" type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp">
                @error('no_hp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
                <img src="{{asset('dataGambarKepsek/' . $headmasters->gambar)}}" alt="gambarEdit" width="50px" class="img-thumbnail mt-2">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach 
@endif

