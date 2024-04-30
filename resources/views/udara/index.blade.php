@extends('layout.main')
@section('content')
    <div class="page">
        <div class="content">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                Overview
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Sensor </h3>
                                    </div>
                                    <div class="card-body border-bottom py-3">
                                        <div class="d-flex">
                                            {{-- <a href="udara/create" class="btn btn-primary">Tambah Data</a> --}}
                                            <div class="ml-auto text-muted">
                                                Search:
                                                <div class="ml-2 d-inline-block">
                                                    <input type="text" name="search"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-responsive card-table table-vcenter datatable">
                                            <thead>
                                                <tr>
                                                    <th class="w-5">No</th>
                                                    <th>MQ 135</th>
                                                    <th>MQ 09</th>
                                                    <th>MQ 07</th>
                                                    <th class="w-7">Created</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($udara as $key => $item)
                                                    <tr>
                                                        <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                                        <td>{{ $item->mq_135 }}</td>
                                                        <td>{{ $item->mq_09 }}</td>
                                                        <td>{{ $item->mq_07 }}</td>
                                                        <td width="10%">{{ now() }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center">

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
