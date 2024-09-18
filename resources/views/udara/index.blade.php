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
                                        <h3 class="card-title">Data Sensor</h3>
                                        <div class="ml-auto lh-1" style="color: aqua">
                                            {{-- <form method="get" id="form-penempatan">
                                                <div class="dropdown">
                                                    <button
                                                        class="dropdown-toggle text-muted pt-2 pb-2 pr-2 pl-2 bg-white rounded-2px"
                                                        data-toggle="dropdown" aria-expanded="false" id="penempatan"><b>Data
                                                            Lokasi
                                                            Penempatan</b></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="dropdown-item">Penempatan</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="1">Taman Lokasana</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="2">Bunderan Bypass Mangkubumi Kota
                                                            Tasikmalaya</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="3">Daerah Jalan Rs Rancamaya</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="4">jalan Situ Gede</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="5">Rumah Sakit Jasa Kartini </button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="6">Masjid Agung Ciawi </button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="7">Bunderan Bypass</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="8">Universitas Mayasari Bakti</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="9">Alun Alun Singaparna</button>
                                                        <button name="penempatan" id="penempatan" class="dropdown-item"
                                                            value="10">Gedung Bupati Tasikmalaya</button>
                                                    </div>
                                                </div>
                                            </form> --}}
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
                                                    <th>MQ 02</th>
                                                    <th>MQ 05</th>
                                                    @if (request()->query('penempatan'))
                                                        <th>Wilayah</th>
                                                    @endif
                                                    <th class="w-10">Created</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($udara as $key => $item)
                                                    <tr>
                                                        <td><span class="text-muted">{{ $key + 1 }}</span></td>
                                                        <td>{{ $item->mq_135 }}</td>
                                                        <td>{{ $item->mq_09 }}</td>
                                                        <td>{{ $item->mq_07 }}</td>
                                                        <td>{{ $item->mq_02 }}</td>
                                                        <td>{{ $item->mq_05 }}</td>
                                                        @if ($item->lokasi != null)
                                                            <td>{{ $item->lokasi->name }}</td>
                                                        @endif
                                                        <td width="10%">{{ $item->created_at }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex align-items-center">
                                        {{ $udara->links('pagination::bootstrap-4') }}
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
@push('script')
    <script script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // addUdaraDataSatu();
        });
        setInterval(() => {
            addUdaraDataSatu();
        }, 1800000);

        function addUdaraDataSatu() {
            $.ajax({
                url: '/send-data-udara',
                type: 'POST',
                cache: false,
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`
                },
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.message == 'success') {
                        location.reload();
                    }
                },
                error: function(errors) {
                    console.log(errors);
                }
            });
        }
    </script>
@endpush
