@extends('layouts.layoutAdmin.app')

@section('title')
  Guru Pns
@endsection

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-0 text-gray-800">Guru Pns</h1>
  <p class="mb-4 mt-2">
    Menu Guru Pns ini merupakan menu Guru Pns.
  </p>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <a href="#" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#exampleModalguruPns"><i class="fas mr-2 fa-plus"></i>Tambah Data</a>
          <div class="row">
            <div class="col">
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
                  @foreach ($teacher as $teachers)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$teachers->nama}}</td>
                    <td>{{$teachers->no_hp}}</td>
                    <td>{{$teachers->mapel}}</td>
                    <td>
                      <img src="{{asset('dataGambarGuru/' . $teachers->gambar)}}" alt="gambarPns" width="50px" class="img-thumbnail">
                    </td>
                    <td>
                      <a href="http://" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalguruPnsUbah{{$teachers->id}}"><i class="far fa-edit"></i></a>
                      <form action="/admin/{{$teachers->id}}/guruPns" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger pr-3"><i class="far fa-trash-alt"></i></button>
                      </form>
                      <a href="/admin/{{$teachers->id}}/guruPns" class="btn btn-warning pr-3"><i class="fas fa-eye"></i></a>
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

<!-- Modal Tambah data-->
<div class="modal fade" id="exampleModalguruPns" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru Pns</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="{{ route('tambahGuruPns') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input autofocus value="{{ old('nama')}}" type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama..">
              </div>
              <div class="form-group">
                <label for="nid">Nid</label>
                <input type="text" value="{{ old('nid') }}" name="nid" class="form-control" id="nid" placeholder="Masukkan nid..">
              </div>
              <div class="form-group">
                <label for="mapel">Mapel</label>
                <input type="text" value="{{ old('mapel') }}" name="mapel" class="form-control" id="mapel" placeholder="Masukkan Mapel..">
              </div>
              <div class="form-group">
                <label for="no_hp">No_hp</label>
                <input type="text" value="{{ old('no_hp') }}" name="no_hp" class="form-control" id="no_hp" placeholder="Masukkan no_hp..">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah data-->
@foreach ($teacher as $teachers)
<div class="modal fade" id="exampleModalguruPnsUbah{{$teachers->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Guru Pns</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="/admin/{{ $teachers->id }}/guruPns" enctype="multipart/form-data">
              @method('put')
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input autofocus value="{{$teachers->nama}}" type="text" name="nama" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="nid">Nid</label>
                <input type="text" value="{{$teachers->nid}}" name="nid" class="form-control" id="nid">
              </div>
              <div class="form-group">
                <label for="mapel">Mapel</label>
                <input type="text" value="{{$teachers->mapel}}" name="mapel" class="form-control" id="mapel">
              </div>
              <div class="form-group">
                <label for="no_hp">No_hp</label>
                <input type="text" value="{{$teachers->no_hp}}" name="no_hp" class="form-control" id="no_hp">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
                <img src="{{asset('dataGambarGuru/' . $teachers->gambar)}}" alt="gambarEdit" width="50px" class="img-thumbnail mt-2">
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