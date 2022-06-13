@extends('layouts.main')

@section('content')
    <main id="main" class="main">
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-10">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    bobots</span>
                                </h5>
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Inggris Lisan</th>
                                            <th scope="col">Arab Lisan</th>
                                            <th scope="col">alqur'an</th>
                                            <th scope="col">ibadah</th>
                                            <th scope="col">inggris tulis</th>
                                            <th scope="col">arab tulis</th>
                                            <th scope="col">beban prodi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($bobot as $bobot)
                                                <td>{{ $bobot->inggris_lisan }}</td>
                                                <td>{{ $bobot->arab_lisan }}</td>
                                                <td>{{ $bobot->alquran }}</td>
                                                <td>{{ $bobot->ibadah }}</td>
                                                <td>{{ $bobot->inggris_tulis }}</td>
                                                <td>{{ $bobot->arab_tulis }}</td>
                                                <td>{{ $bobot->beban_prodi }}</td>
                                                <td>
                                                    <form method="POST">
                                                        <a href="{{ route('bobot.edit', $bobot->id) }}"
                                                            class="btn btn-primary bi bi-pencil"></a>
                                                        @csrf
                                                    </form>
                                                </td>
                                            @endforeach
                                        </tr>
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
