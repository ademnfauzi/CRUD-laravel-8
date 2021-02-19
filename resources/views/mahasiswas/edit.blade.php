@extends('template')
  
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('mahasiswas.index') }}"> Back</a>
            </div>
        </div>
    </div>
  
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('mahasiswas.update',$mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
  
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NPM:</strong>
                    <input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="form-control" placeholder="NPM">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jurusan:</strong>
                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control" placeholder="Jurusan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fakultas:</strong>
                    <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}" class="form-control" placeholder="Fakultas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
  
    </form>
@endsection