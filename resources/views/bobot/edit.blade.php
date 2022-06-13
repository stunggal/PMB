@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Update Bobot</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Layouts</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update bobot</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <!-- Horizontal Form -->
                            <form method="post" action="/bobot/{{ $bobot->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Inggris Lisan</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('inggris_lisan')) is-invalid @endif"
                                            name="inggris_lisan" value="{{ $bobot->inggris_lisan }}">
                                        @if ($errors->has('inggris_lisan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('inggris_lisan') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Arab Lisan</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('arab_lisan')) is-invalid @endif"
                                            name="arab_lisan" value="{{ $bobot->arab_lisan }}">
                                        @if ($errors->has('arab_lisan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('arab_lisan') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">alquran</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('alquran')) is-invalid @endif"
                                            name="alquran" value="{{ $bobot->alquran }}">
                                        @if ($errors->has('alquran'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('alquran') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ibadah</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('ibadah')) is-invalid @endif"
                                            name="ibadah" value="{{ $bobot->ibadah }}">
                                        @if ($errors->has('ibadah'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ibadah') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">inggris tulis</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('inggris_tulis')) is-invalid @endif"
                                            name="inggris_tulis" value="{{ $bobot->inggris_tulis }}">
                                        @if ($errors->has('inggris_tulis'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('inggris_tulis') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">arab tulis</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('arab_tulis')) is-invalid @endif"
                                            name="arab_tulis" value="{{ $bobot->arab_tulis }}">
                                        @if ($errors->has('arab_tulis'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('arab_tulis') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">beban prodi</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('beban_prodi')) is-invalid @endif"
                                            name="beban_prodi" value="{{ $bobot->beban_prodi }}">
                                        @if ($errors->has('beban_prodi'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('beban_prodi') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
