@extends('layout.main')
@section('content')
    <div class="page">
        <div class="content">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="page-pretitle">
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header" style="text-align: center">
                                        <h3 class="card-title">Tambah Data Udara</h3>
                                    </div>
                                    <div class="card-body border-bottom py-3" style="height: ">
                                        <form action="" method="post">
                                            <div class="row justify-content-center">
                                                <div class="col-5 ">
                                                    <div class="mb-2">
                                                        <label class="form-label">
                                                            Title
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="name"
                                                                value="{{ old('name') }}"autocomplete="off">
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">
                                                            Kualitas Udara
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" name="udara"
                                                                class="form-control @error('udara') is-invalid @enderror"
                                                                placeholder="udara"
                                                                value="{{ old('udara') }}"autocomplete="off">
                                                            @error('udara')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">
                                                            Deskripsi
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" name="deskripsi"
                                                                class="form-control @error('deskripsi') is-invalid @enderror"
                                                                placeholder="deskripsi"
                                                                value="{{ old('deskripsi') }}"autocomplete="off">
                                                            @error('deskripsi')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label class="form-label">
                                                            Tanggal 
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="date" deskripsi="tanggal" value="{{ date('Y/M/D') }}"
                                                                class="form-control @error('tanggal') is-invalid @enderror"
                                                                placeholder="tanggal"
                                                                value="{{ old('tanggal') }}"autocomplete="off">
                                                            @error('tanggal')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 text-right">
                                                        <button type="reset" class="btn btn-flat btn-danger">Reset</button>
                                                        <button type="submit" class="btn btn-flat btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
