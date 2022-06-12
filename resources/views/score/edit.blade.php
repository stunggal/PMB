@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Insert Period</h1>
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
                            <h5 class="card-title">Insert Period</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            <!-- Horizontal Form -->
                            <form method="post" action="/score/{{ $score->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Min</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('min')) is-invalid @endif"
                                            name="min" value="{{ $score->min }}">
                                        @if ($errors->has('min'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('min') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Matrik</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('matrik')) is-invalid @endif"
                                            name="matrik" value="{{ $score->matrik }}">
                                        @if ($errors->has('matrik'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('matrik') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fail</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('fail')) is-invalid @endif"
                                            name="fail" value="{{ $score->fail }}">
                                        @if ($errors->has('fail'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fail') }}</strong>
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
