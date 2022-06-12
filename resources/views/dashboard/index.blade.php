@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">See All</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Graduated <span>| This Period</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-mortarboard"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $count_participants_graduated }}</h6>
                                            <span class="text-success small pt-1 fw-bold">12</span>
                                            <span class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">See All</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Failed <span>| This Period</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-x-circle"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $count_participants_fail }}</h6>
                                            <span class="text-success small pt-1 fw-bold">8</span>
                                            <span class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">See All</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Matrik <span>| This Period</span>
                                    </h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-translate"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $count_participants_matrik }}</h6>
                                            <span class="text-danger small pt-1 fw-bold">12</span>
                                            <span class="text-muted small pt-2 ps-1">decrease</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">See All</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Reports <span>/This Period</span>
                                    </h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(
                                                document.querySelector("#reportsChart"), {
                                                    series: [{
                                                            name: "Graduated",
                                                            data: [
                                                                @foreach ($recap_graduated as $g)
                                                                    {{ $g }},
                                                                @endforeach
                                                            ],
                                                        },
                                                        {
                                                            name: "Failed",
                                                            data: [
                                                                @foreach ($recap_fail as $f)
                                                                    {{ $f }},
                                                                @endforeach
                                                            ],
                                                        },
                                                        {
                                                            name: "Matrik",
                                                            data: [
                                                                @foreach ($recap_matrik as $m)
                                                                    {{ $m }},
                                                                @endforeach
                                                            ],
                                                        },
                                                    ],
                                                    chart: {
                                                        height: 350,
                                                        type: "area",
                                                        toolbar: {
                                                            show: false,
                                                        },
                                                    },
                                                    markers: {
                                                        size: 4,
                                                    },
                                                    colors: ["#4154f1", "#b71c1c", "#ffeb3b"],
                                                    fill: {
                                                        type: "gradient",
                                                        gradient: {
                                                            shadeIntensity: 1,
                                                            opacityFrom: 0.3,
                                                            opacityTo: 0.4,
                                                            stops: [0, 90, 100],
                                                        },
                                                    },
                                                    dataLabels: {
                                                        enabled: false,
                                                    },
                                                    stroke: {
                                                        curve: "smooth",
                                                        width: 2,
                                                    },
                                                    xaxis: {
                                                        type: "number",
                                                        categories: [
                                                            @foreach ($periodes as $p)
                                                                "{{ $p->period }}",
                                                            @endforeach
                                                        ],
                                                    },
                                                    tooltip: {
                                                        x: {
                                                            format: "",
                                                        },
                                                    },
                                                }
                                            ).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->
                                </div>
                            </div>
                        </div>
                        <!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>More</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">See All</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Recent Participant <span>| This Period</span>
                                    </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Reg. num</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">School</th>
                                                <th scope="col">avg</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participants as $p)
                                                <tr>
                                                    <td scope="row">{{ $p->registration_number }}</td>
                                                    <td>{{ $p->name }}</td>
                                                    <td>{{ $p->school }}</td>
                                                    <td>{{ $p->average }}</td>
                                                    <td>
                                                        @if ($p->status == 'graduated')
                                                            <span class="badge bg-primary">{{ $p->status }}</span>
                                                        @elseif ($p->status == 'fail')
                                                            <span class="badge bg-danger">{{ $p->status }}</span>
                                                        @else
                                                            <span class="badge bg-warning">{{ $p->status }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Recent Sales -->
                    </div>
                </div>
                <!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- Budget Report -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">See All</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">
                                Presentase Prodi <span>| This Period</span>
                            </h5>

                            <div id="budgetChart" style="min-height: 400px" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts
                                        .init(document.querySelector("#budgetChart"))
                                        .setOption({
                                            legend: {
                                                data: ["Allocated Budget", "Actual Spending"],
                                            },
                                            radar: {
                                                // shape: 'circle',
                                                indicator: [{
                                                        name: "pai",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "pba",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "tbi",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "saa",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "afi",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "iqt",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "pm",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "hes",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "mnj",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "ei",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "agro",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "ti",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "tip",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "hi",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "ilkom",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "kkk",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "farmasi",
                                                        max: 10,
                                                    },
                                                    {
                                                        name: "gizi",
                                                        max: 10,
                                                    },
                                                ],
                                            },
                                            series: [{
                                                name: "Budget vs spending",
                                                type: "radar",
                                                data: [{
                                                        value: [
                                                            @foreach ($participant_final_choise as $fc)
                                                                {{ $fc }},
                                                            @endforeach
                                                        ],
                                                        name: "Presentase Prodi",
                                                    },
                                                    // {
                                                    //   value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    //   name: 'Actual Spending'
                                                    // }
                                                ],
                                            }, ],
                                        });
                                });
                            </script>
                        </div>
                    </div>
                    <!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Traffic <span>| This Period</span></h5>

                            <div id="trafficChart" style="min-height: 600px" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts
                                        .init(document.querySelector("#trafficChart"))
                                        .setOption({
                                            tooltip: {
                                                trigger: "item",
                                            },
                                            legend: {
                                                top: "5%",
                                                left: "center",
                                            },
                                            series: [{
                                                name: "Access From",
                                                type: "pie",
                                                radius: ["40%", "70%"],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: "center",
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: "18",
                                                        fontWeight: "bold",
                                                    },
                                                },
                                                labelLine: {
                                                    show: false,
                                                },
                                                data: [
                                                    @foreach ($prodis as $prodi)
                                                        {
                                                            value: {{ $prodi[1] }},
                                                            name: "{{ $prodi[0] }}",
                                                        },
                                                    @endforeach
                                                ],
                                            }, ],
                                        });
                                });
                            </script>
                        </div>
                    </div>
                    <!-- End Website Traffic -->
                </div>
                <!-- End Right side columns -->
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
