@extends('template.master')

@section('judul')
<h1>Edit</h1>
@endsection

@section('content')
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">NEW Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/profile/{{$profiles->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="input nama" placeholder="Masukan Nama" 
                    value="{{ $profiles->nama}}" required>
                    @error('nama')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="AlamatNama">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="input alamat" placeholder="Masukan Alamat" 
                    value="{{ $profiles->alamat}}" required>
                    @error('alamat')
                        <div class="alert alert-danger">
                        {{$message}}
                        </div>
                    @enderror
                  </div>
                 
              </div>
                <!-- /.card-body -->

                  <a class="btn btn-primary mr-3" href="{{ route('profile.index') }}">
                 <i class="fa fa-arrow-left"></i>
                Kembali
                </a>

                <button type="submit" class="btn btn-primary">Simpan data</button>
                </div>
              </form>
            </div>
@endsection