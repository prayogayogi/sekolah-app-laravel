@extends('layouts.layoutAdmin.app')

@section('title')
  Guru Honor
@endsection

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
      <h1 class="h3 mb-0 text-gray-800">Guru Honor</h1>
      <p class="mb-4 mt-2">
        Menu Guru Honor ini merupakan menu Guru Honor.
      </p>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <a href="#" class="btn mb-3 btn-primary" data-toggle="modal" data-target="#exampleModalguruHonor"><i class="fas mr-2 fa-plus"></i>Tambah Data</a>
          <div class="row">
            <div class="col">
              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tahun Angkat Jabatan</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($honorTeacher as $honorTeachers)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$honorTeachers->nama}}</td>
                    <td>{{$honorTeachers->alamat}}</td>
                    <td>{{$honorTeachers->tahunAngkatan}}</td>
                    <td>
                      <img src="{{asset('dataGambarGuru/' .$honorTeachers->gambar)}}" alt="gambarHonor" width="50px" class="img-thumbnail">
                    </td>
                    <td>
                      <a href="http://" class="btn btn-primary"><i class="far fa-edit"></i></a>
                      <a href="http://" class="btn btn-danger pr-3"><i class="far fa-trash-alt"></i></a>
                      <a href="http://" class="btn btn-warning pr-3"><i class="fas fa-eye"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModalguruHonor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru Honor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <form method="POST" action="{{ route('tambahGuruHonor') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama">Nama</label>
                <input autofocus value="{{ old('nama')}}" type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama..">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" value="{{ old('alamat') }}" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat..">
              </div>
              <div class="form-group">
                <label for="tahunAngkatan">Tahun Angkatan</label>
                <input type="text" value="{{ old('tahunAngkatan') }}" name="tahunAngkatan" class="form-control" id="tahunAngkatan" placeholder="Masukkan Tahun Angkatan..">
              </div>
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar">
              </div>
              {{-- <div class="form-group">
                <label for="golongan">Gologan</label>
                <input type="text" name="golongan" class="form-control" id="golongan" placeholder="Masukan Golongan">
              </div> --}}
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>