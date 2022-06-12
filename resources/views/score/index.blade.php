@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Scores</span>
                                </h5>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Min</th>
                                            <th scope="col">Matrik</th>
                                            <th scope="col">Fail</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($scores as $s)
                                            <tr>
                                                <td>{{ $s->min }}</td>
                                                <td>{{ $s->matrik }}</td>
                                                <td>{{ $s->fail }}</td>
                                                <td>
                                                    <form action="{{ route('score.destroy', $s->id) }}" method="POST">
                                                        <a href="{{ route('score.edit', $s->id) }}"
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
