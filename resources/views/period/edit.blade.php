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
                            <form method="post" action="/period/{{ $period->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Period</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('period')) is-invalid @endif"
                                            name="period" value="{{ $period->period }}">
                                        @if ($errors->has('period'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('period') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Is Active</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('is_active')) is-invalid @endif"
                                            name="is_active" value="{{ $period->is_active }}">
                                        @if ($errors->has('is_active'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('is_active') }}</strong>
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
