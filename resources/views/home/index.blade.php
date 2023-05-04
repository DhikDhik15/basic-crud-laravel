@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <div class="mb-3">

                <h1>Dashboard</h1>
            </div>

            @if ($user->position_id == 1)
                <div class="mb-3">
                    <a href="{{ route('candidate.create') }}" class="btn btn-primary" title="Tambah Data">
                        <img src="{!! url('images/add.svg') !!}" alt="">
                    </a>

                </div>
            @endif

            <div class="mb-3">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Education</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Experience</th>
                            <th scope="col">Last Position</th>
                            <th scope="col">Applied Position</th>
                            <th scope="col">Top Skills</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $k => $item)
                            <tr>
                                <th scope="row">{{ $k + 1 }}</th>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['phone'] }}</td>
                                <td>{{ $item['education'] }}</td>
                                <td>{{ $item['birthday'] }}</td>
                                <td>{{ $item['experience'] }}</td>
                                <td>{{ $item['last_position'] }}</td>
                                <td>{{ $item['applied_position'] }}</td>
                                <td>{{ $item['top_skills'] }}</td>

                                @if ($user->position_id == 1)
                                    <td>
                                        <a href="{{ route('candidate.edit', $item['id']) }}" class="btn btn-warning"
                                            title="Edit Data">
                                            <img src="{!! url('images/edit.svg') !!}" alt="">
                                        </a>
                                        <a href="{{ route('candidate.destroy', $item['id']) }}" class="btn btn-danger"
                                            title="Delete Data">
                                            <img src="{!! url('images/delete.svg') !!}" alt="">
                                        </a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
