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
                            <form method="post" action="/period">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Period</label>
                                    <div class="col-sm-10">
                                        <input type="number"
                                            class="form-control @if ($errors->has('period')) is-invalid @endif"
                                            name="period" value="{{ old('period') }}" placeholder="Period">
                                        @if ($errors->has('period'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('period') }}</strong>
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
                <div class="col-lg-6">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Periods</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Period</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($periodes as $period)
                                            <tr>
                                                <td>{{ $period->period }}</td>
                                                @if ($period->is_active == 1)
                                                    <td><span class="badge bg-primary">Active</span></td>
                                                @else
                                                    <td><span class="badge bg-danger">Passed</span></td>
                                                @endif
                                                <td>
                                                    <form action="{{ route('period.destroy', $period->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('period.edit', $period->id) }}"
                                                            class="btn btn-primary bi bi-pencil"></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger bi bi-trash"></button>
                                                    </form>
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
        </section>
    </main>
    <!-- End #main -->
@endsection
