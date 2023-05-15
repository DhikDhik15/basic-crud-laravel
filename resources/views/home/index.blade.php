@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <div class="mb-3">

                @if ($user->access == 1)
                    <h1>Dashboard Superadmin</h1>
                @else
                    <h1>Dashboard Staff</h1>
                @endif

            </div>



            <form class="row g-3" id="form">
                @csrf
                <div class="col-auto">

                    @if ($user->access == 1)
                        <div class="mb-3">
                            <a href="{{ route('candidate.create') }}" class="btn btn-primary" title="Tambah Data">
                                <img src="{!! url('images/add.svg') !!}" alt="">
                            </a>

                        </div>
                    @endif
                </div>
                <div class="col-auto">
                    <label class="visually-hidden">Password</label>
                    <input type="text" class="form-control" name="q" value="{{ request()->get('q') ?? '' }}"
                        placeholder="Cari nama">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Cari</button>
                </div>
            </form>

            <form action="" class="row g-3">
                <div class="col-auto">
                    <select class="form-select" name="sort" aria-label="Default select example">
                        <option value="name">Name</option>
                        <option value="experience">Experience</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Sort</button>
                </div>
            </form>

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
                            @if ($user->access == 1)
                                <th scope="col">Actions</th>
                            @endif
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

                                @if ($user->access == 1)
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
                {{ $data->links() }}
            </div>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection

@push('styles')
    <style>
        #form {
            position: absolute;
        }
    </style>
@endpush
