@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Input Participants</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Input</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Participants</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <!-- No Labels Form -->
                            <form class="row g-3" method="post" action="/participants">
                                @csrf
                                <div class="col-md-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Participant's name" name="name" id="name"
                                        value="{{ old('name') }}" />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('school') is-invalid @enderror "
                                        placeholder="School Origin" name="school" id="school"
                                        value="{{ old('school') }}" />
                                    @error('school')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="number"
                                        class="form-control @error('registration_number') is-invalid @enderror"
                                        placeholder="No Reg" name="registration_number" id="registration_number"
                                        value="{{ old('registration_number') }}" />
                                    @error('registration_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('inggris_lisan') is-invalid @enderror"
                                        placeholder="Inggris Lisan" name="inggris_lisan" id="inggris_lisan"
                                        value="{{ old('inggris_lisan') }}" />
                                    @error('inggris_lisan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('arab_lisan') is-invalid @enderror"
                                        placeholder="Arab Lisan" name="arab_lisan" id="arab_lisan"
                                        value="{{ old('arab_lisan') }}" />
                                    @error('arab_lisan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('alquran') is-invalid @enderror"
                                        placeholder="Al-Qur'an" name="alquran" id="alquran"
                                        value="{{ old('alquran') }}" />
                                    @error('alquran')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('ibadah') is-invalid @enderror"
                                        placeholder="ibadah" name="ibadah" id="ibadah" value="{{ old('ibadah') }}" />
                                    @error('ibadah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('arab_tulis') is-invalid @enderror"
                                        placeholder="Arab Tulis" name="arab_tulis" id="arab_tulis"
                                        value="{{ old('arab_tulis') }}" />
                                    @error('arab_tulis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('inggris_tulis') is-invalid @enderror"
                                        placeholder="Inggris Tulis" name="inggris_tulis" id="inggris_tulis"
                                        value="{{ old('inggris_tulis') }}" />
                                    @error('inggris_tulis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number"
                                        class="form-control @error('dirasah_islamiyah') is-invalid @enderror"
                                        placeholder="Dirasah Islamiyah" name="dirasah_islamiyah" id="dirasah_islamiyah"
                                        value="{{ old('dirasah_islamiyah') }}" />
                                    @error('dirasah_islamiyah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number"
                                        class="form-control @error('pengetahuan_umum') is-invalid @enderror"
                                        placeholder="Pengetahuan Umum" name="pengetahuan_umum" id="pengetahuan_umum"
                                        value="{{ old('pengetahuan_umum') }}" />
                                    @error('pengetahuan_umum')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('mtk') is-invalid @enderror"
                                        placeholder="MTK" name="mtk" id="mtk" value="{{ old('mtk') }}" />
                                    @error('mtk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('fisika') is-invalid @enderror"
                                        placeholder="Fisika" name="fisika" id="fisika" value="{{ old('fisika') }}" />
                                    @error('fisika')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('kimia') is-invalid @enderror"
                                        placeholder="Kimia" name="kimia" id="kimia" value="{{ old('kimia') }}" />
                                    @error('kimia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('biologi') is-invalid @enderror"
                                        placeholder="Biologi" name="biologi" id="biologi" value="{{ old('biologi') }}" />
                                    @error('biologi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control @error('tbi') is-invalid @enderror"
                                        placeholder="TBI" name="tbi" id="tbi" value="{{ old('tbi') }}" />
                                    @error('tbi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select @error('first_choice') is-invalid @enderror"
                                        aria-label="State" name="first_choice" id="first_choice">
                                        <option selected>Prodi Pilihan 1</option>
                                        <option value="pai">pai</option>
                                        <option value="pba">pba</option>
                                        <option value="tbi">tbi</option>
                                        <option value="saa">saa</option>
                                        <option value="afi">afi</option>
                                        <option value="iqt">iqt</option>
                                        <option value="pm">pm</option>
                                        <option value="hes">hes</option>
                                        <option value="mnj">mnj</option>
                                        <option value="ei">ei</option>
                                        <option value="agro">agro</option>
                                        <option value="ti">ti</option>
                                        <option value="tip">tip</option>
                                        <option value="hi">hi</option>
                                        <option value="ilkom">ilkom</option>
                                        <option value="kkk">kkk</option>
                                        <option value="farmasi">farmasi</option>
                                        <option value="gizi">gizi</option>
                                    </select>
                                    @error('first_choice')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select @error('second_choice') is-invalid @enderror"
                                        name="second_choice" id="second_choice" aria-label="State">
                                        <option selected>Prodi Pilihan 2</option>
                                        <option value="pai">pai</option>
                                        <option value="pba">pba</option>
                                        <option value="tbi">tbi</option>
                                        <option value="saa">saa</option>
                                        <option value="afi">afi</option>
                                        <option value="iqt">iqt</option>
                                        <option value="pm">pm</option>
                                        <option value="hes">hes</option>
                                        <option value="mnj">mnj</option>
                                        <option value="ei">ei</option>
                                        <option value="agro">agro</option>
                                        <option value="ti">ti</option>
                                        <option value="tip">tip</option>
                                        <option value="hi">hi</option>
                                        <option value="ilkom">ilkom</option>
                                        <option value="kkk">kkk</option>
                                        <option value="farmasi">farmasi</option>
                                        <option value="gizi">gizi</option>
                                    </select>
                                    @error('second_choice')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <select class="form-select @error('third_choice') is-invalid @enderror"
                                        name="third_choice" id="third_choice" aria-label="State">
                                        <option selected>Prodi Pilihan 3</option>
                                        <option value="pai">pai</option>
                                        <option value="pba">pba</option>
                                        <option value="tbi">tbi</option>
                                        <option value="saa">saa</option>
                                        <option value="afi">afi</option>
                                        <option value="iqt">iqt</option>
                                        <option value="pm">pm</option>
                                        <option value="hes">hes</option>
                                        <option value="mnj">mnj</option>
                                        <option value="ei">ei</option>
                                        <option value="agro">agro</option>
                                        <option value="ti">ti</option>
                                        <option value="tip">tip</option>
                                        <option value="hi">hi</option>
                                        <option value="ilkom">ilkom</option>
                                        <option value="kkk">kkk</option>
                                        <option value="farmasi">farmasi</option>
                                        <option value="gizi">gizi</option>
                                    </select>
                                    @error('third_choice')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                            <!-- End No Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
