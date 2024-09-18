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
                            <h2 class="page-title">
                                Vertical layout
                            </h2>
                        </div>
                        <!-- Page title actions -->
                    </div>
                </div>
                <div class="row row-deck row-cards">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader"> MQ 135</div>
                                    <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Last 30 days</a>
                                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="h1 mb-3">{{ round($persentase_mq135, 2) }} %</div>
                                <div class="d-flex mb-2">
                                    <div>Conversion rate</div>
                                    <div class="ml-auto">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            {{ round($persentase_mq135, 2) }} %<svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon ml-1" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                @if ($persentase_mq135 > 0)
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                @else
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="5" y1="12" x2="19" y2="12" />
                                                @endif
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-blue" style="width:{{ round($persentase_mq135, 2) }}%"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader"> MQ 09</div>
                                    <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Last 30 days</a>
                                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="h1 mb-3">{{ round($persentase_mq09, 2) }} %</div>
                                <div class="d-flex mb-2">
                                    <div>Conversion rate</div>
                                    <div class="ml-auto">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            {{ round($persentase_mq09, 2) }} %<svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon ml-1" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                @if ($persentase_mq09 > 0)
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                @else
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="5" y1="12" x2="19" y2="12" />
                                                @endif
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-blue" style="width:{{ round($persentase_mq09, 2) }}%"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader"> MQ 07</div>
                                    <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Last 30 days</a>
                                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="h1 mb-3">{{ round($persentase_mq07, 2) }} %</div>
                                <div class="d-flex mb-2">
                                    <div>Conversion rate</div>
                                    <div class="ml-auto">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            {{ round($persentase_mq07, 2) }} %<svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon ml-1" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                @if ($persentase_mq07 > 0)
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                @else
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="5" y1="12" x2="19" y2="12" />
                                                @endif
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-blue" style="width:{{ round($persentase_mq07, 2) }}%"
                                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <span class="visually-hidden">75% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Air Quality Index</div>
                                    <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Last 30 days</a>
                                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-baseline">
                                    <div class="h1 mb-3 mr-2" id="value-aqi">{{ $aqi }}</div>
                                    <div class="mr-auto">
                                        <span class="text-green d-inline-flex align-items-center lh-1">
                                            {{ $persentase_aqi }}% <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon ml-1" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                @if ($persentase_aqi > 0)
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                @else
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="5" y1="12" x2="19" y2="12" />
                                                @endif
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div id="chart-active-users" class="chart-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                Charts
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="card-title">Social referrals</h3>
                                    <div class="ml-auto">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">Last 30 days</a>
                                            {{-- <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item active" href="#">Last 7 days</a>
                                                <a class="dropdown-item" href="#">Last 30 days</a>
                                                <a class="dropdown-item" href="#">Last 3 months</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-social-referrals"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
            <div class="container">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ml-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item"><a href="./docs/index.html"
                                    class="link-secondary">Documentation</a></li>
                            <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                            </li>
                            <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                    class="link-secondary">Source code</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright © 2020
                                <a href="." class="link-secondary">Tabler</a>.
                                All rights reserved.
                            </li>
                            <li class="list-inline-item">
                                <a href="./changelog.html" class="link-secondary" rel="noopener">v1.0.0-alpha.14</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@push('script')
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-social-referrals'), {
                chart: {
                    type: "line",
                    fontFamily: 'inherit',
                    height: 192,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: false
                    },
                },
                fill: {
                    opacity: 1,
                },
                stroke: {
                    width: 2,
                    lineCap: "round",
                    curve: "smooth",
                },
                series: [{
                    name: "Sensor Mq 135",
                    data: <?php echo json_encode($chart_mq135); ?>
                }, {
                    name: "SEnsor Mq 09",
                    data: <?php echo json_encode($chart_mq09); ?>
                }, {
                    name: "Sensor Mq 07",
                    data: <?php echo json_encode($chart_mq07); ?>
                }],
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: -4,
                        bottom: -4
                    },
                    strokeDashArray: 4,
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                },
                xaxis: {
                    labels: {
                        padding: 0
                    },
                    tooltip: {
                        enabled: false
                    },
                    type: 'datetime',
                },
                yaxis: {
                    labels: {
                        padding: 4
                    },
                },
                labels: <?php echo json_encode($time); ?>,
                colors: ["#3b5998", "#1da1f2", "#ea4c89"],
                legend: {
                    show: true,
                    position: 'bottom',
                    height: 32,
                    offsetY: 8,
                    markers: {
                        width: 8,
                        height: 8,
                        radius: 100,
                    },
                    itemMargin: {
                        horizontal: 8,
                    },
                },
            })).render();


        });
        // @formatter:on
    </script>
@endpush
