@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">General</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Recent Participant <span>| This Period</span>
                                </h5>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Reg. num</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">School</th>
                                            <th scope="col">avg</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($participants as $participant)
                                            <tr>
                                                <th scope="row">{{ $participant->registration_number }}</th>
                                                <td>{{ $participant->name }}</td>
                                                <td>{{ $participant->school }}</td>
                                                <td>{{ $participant->average }}</td>
                                                <td>
                                                    @if ($participant->status == 'graduated')
                                                        <span class="badge bg-primary">{{ $participant->status }}</span>
                                                    @else
                                                        @if ($participant->status == 'matrik')
                                                            <span
                                                                class="badge bg-warning">{{ $participant->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge bg-danger">{{ $participant->status }}</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ route('participants.destroy', $participant->id) }}"
                                                        method="POST">
                                                        <a href="{{ route('participants.edit', $participant->id) }}"
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
