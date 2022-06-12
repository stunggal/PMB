@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                            <h2>Kevin Anderson</h2>
                            <h3>Web Designer</h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Result Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Inggris Lisan</div>
                                        <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Arab lisan</div>
                                        <div class="col-lg-9 col-md-8">
                                            Lueilwitz, Wisoky and Leuschke
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Al-Qur'an</div>
                                        <div class="col-lg-9 col-md-8">Web Designer</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">ibadah</div>
                                        <div class="col-lg-9 col-md-8">USA</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Arab Tulis</div>
                                        <div class="col-lg-9 col-md-8">
                                            A108 Adam Street, New York, NY 535022
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Inggris Tulis</div>
                                        <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Dirasah Islamiyah
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Pengetahuan Umum
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">MTK</div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Fisika</div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kimia</div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Biologi</div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">TBI</div>
                                        <div class="col-lg-9 col-md-8">
                                            k.anderson@example.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
