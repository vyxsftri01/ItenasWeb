@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: rgba(0, 61, 180, 0.25); color: #000000;">
                        Data dosen
                    </div>
                    <div class="card-body" style="background-color: rgba(0, 61, 180, 0.08); color: #000000;">
                        <form action="{{ route('dosen.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NIP</label>
                                <select name="nip" class="form-control @error('nip') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->nomorinduk }}</option>
                                    @endforeach
                                </select>
                                @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prodi</label>
                                <select name="id_prodis" class="form-control @error('id_prodis') is-invalid @enderror"
                                    id="">
                                    @foreach ($prodi as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_prodis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Dosen</label>
                                <select name="id_users" class="form-control @error('id_users') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                @error('id_users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-sm btn-light" type="submit" style=" float: right ">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
