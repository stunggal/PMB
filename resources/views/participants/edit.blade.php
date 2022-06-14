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
                            <img src="/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                            <h2>{{ $participants->name }}</h2>
                            <h3>{{ $participants->school }}</h3>
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
                                    <form class="row g-3" method="post"
                                        action="/participants/{{ $participants->id }}">
                                        @method('PUT')
                                        @csrf

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">nama</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('name')) is-invalid @endif"
                                                name="name" id="name" value="{{ $participants->name }}" />
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">school</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('school')) is-invalid @endif"
                                                name="school" id="school" value="{{ $participants->school }}" />
                                            @if ($errors->has('school'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('school') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">No. Reg</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('registration_number')) is-invalid @endif"
                                                name="registration_number" id="registration_number"
                                                value="{{ $participants->registration_number }}" />
                                            @if ($errors->has('registration_number'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('registration_number') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Inggris Lisan</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('inggris_lisan')) is-invalid @endif"
                                                name="inggris_lisan" id="inggris_lisan"
                                                value="{{ $participants->inggris_lisan }}" />
                                            @if ($errors->has('inggris_lisan'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('inggris_lisan') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Arab Lisan</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('arab_lisan')) is-invalid @endif"
                                                name="arab_lisan" id="arab_lisan"
                                                value="{{ $participants->arab_lisan }}" />
                                            @if ($errors->has('arab_lisan'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('arab_lisan') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Al-Qur'an</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('alquran')) is-invalid @endif"
                                                name="alquran" id="alquran" value="{{ $participants->alquran }}" />
                                            @if ($errors->has('alquran'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('alquran') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">ibadah</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('ibadah')) is-invalid @endif"
                                                name="ibadah" id="ibadah" value="{{ $participants->ibadah }}" />
                                            @if ($errors->has('ibadah'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('ibadah') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Arab Tulis</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('arab_tulis')) is-invalid @endif"
                                                name="arab_tulis" id="arab_tulis"
                                                value="{{ $participants->arab_tulis }}" />
                                            @if ($errors->has('arab_tulis'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('arab_tulis') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Inggris Tulis</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('inggris_tulis')) is-invalid @endif"
                                                name="inggris_tulis" id="inggris_tulis"
                                                value="{{ $participants->inggris_tulis }}" />
                                            @if ($errors->has('inggris_tulis'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('inggris_tulis') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">
                                                Dirasah Islamiyah
                                            </div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('dirasah_islamiyah')) is-invalid @endif"
                                                name="dirasah_islamiyah" id="dirasah_islamiyah"
                                                value="{{ $participants->dirasah_islamiyah }}" />
                                            @if ($errors->has('dirasah_islamiyah'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('dirasah_islamiyah') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">
                                                Pengetahuan Umum
                                            </div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('pengetahuan_umum')) is-invalid @endif"
                                                name="pengetahuan_umum" id="pengetahuan_umum"
                                                value="{{ $participants->pengetahuan_umum }}" />
                                            @if ($errors->has('pengetahuan_umum'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('pengetahuan_umum') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">MTK</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('mtk')) is-invalid @endif"
                                                name="mtk" id="mtk" value="{{ $participants->mtk }}" />
                                            @if ($errors->has('mtk'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mtk') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Fisika</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('fisika')) is-invalid @endif"
                                                name="fisika" id="fisika" value="{{ $participants->fisika }}" />
                                            @if ($errors->has('fisika'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fisika') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Kimia</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('kimia')) is-invalid @endif"
                                                name="kimia" id="kimia" value="{{ $participants->kimia }}" />
                                            @if ($errors->has('kimia'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('kimia') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Biologi</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('biologi')) is-invalid @endif"
                                                name="biologi" id="biologi" value="{{ $participants->biologi }}" />
                                            @if ($errors->has('biologi'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('biologi') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">TBI</div>
                                            <input type="number"
                                                class="col-lg-9 col-md-8 @if ($errors->has('tbi')) is-invalid @endif"
                                                name="tbi" id="tbi" value="{{ $participants->tbi }}" />
                                            @if ($errors->has('tbi'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('tbi') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">First Choice</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('first_choice')) is-invalid @endif"
                                                name="first_choice" id="first_choice"
                                                value="{{ $participants->first_choice }}" />
                                            @if ($errors->has('first_choice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('first_choice') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Second Choice</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('second_choice')) is-invalid @endif"
                                                name="second_choice" id="second_choice"
                                                value="{{ $participants->second_choice }}" />
                                            @if ($errors->has('second_choice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('second_choice') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Third Choice</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('third_choice')) is-invalid @endif"
                                                name="third_choice" id="third_choice"
                                                value="{{ $participants->third_choice }}" />
                                            @if ($errors->has('third_choice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('third_choice') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">final Choice</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('final_choice')) is-invalid @endif"
                                                name="final_choice" id="final_choice"
                                                value="{{ $participants->final_choice }}" />
                                            @if ($errors->has('final_choice'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('final_choice') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Status</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('status')) is-invalid @endif"
                                                name="status" id="status" value="{{ $participants->status }}" />
                                            @if ($errors->has('status'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">First Rank</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('first_rank')) is-invalid @endif"
                                                name="first_rank" id="first_rank"
                                                value="{{ $participants->first_rank }}" />
                                            @if ($errors->has('first_rank'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('first_rank') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Second Rank</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('second_rank')) is-invalid @endif"
                                                name="second_rank" id="second_rank"
                                                value="{{ $participants->second_rank }}" />
                                            @if ($errors->has('second_rank'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('second_rank') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Third Rank</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('third_rank')) is-invalid @endif"
                                                name="third_rank" id="third_rank"
                                                value="{{ $participants->third_rank }}" />
                                            @if ($errors->has('third_rank'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('third_rank') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Fourh Rank</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('fourth_rank')) is-invalid @endif"
                                                name="fourth_rank" id="fourth_rank"
                                                value="{{ $participants->fourth_rank }}" />
                                            @if ($errors->has('fourth_rank'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fourth_rank') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Fifth Rank</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('fifth_rank')) is-invalid @endif"
                                                name="fifth_rank" id="fifth_rank"
                                                value="{{ $participants->fifth_rank }}" />
                                            @if ($errors->has('fifth_rank'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fifth_rank') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">period</div>
                                            <input type="text"
                                                class="col-lg-9 col-md-8 @if ($errors->has('period')) is-invalid @endif"
                                                name="period" id="period" value="{{ $participants->period }}" />
                                            @if ($errors->has('period'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('period') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                            </button>
                                        </div>
                                    </form>

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
