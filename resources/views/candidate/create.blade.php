@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        <div class="mb-3">
            <h1>Create Candidate</h1>
        </div>
        <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center">

                <div>
                    <div class="col-auto">
                        <label for="name" class="col-form-label">Name</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="education" class="col-form-label">Education</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="education" name="education" class="form-control">
                    </div>
                    @if ($errors->has('education'))
                        <span class="text-danger text-left">{{ $errors->first('education') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="birthday" class="col-form-label">Birthday</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="birthday" name="birthday" class="form-control">
                    </div>
                    @if ($errors->has('birthday'))
                        <span class="text-danger text-left">{{ $errors->first('birthday') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="experience" class="col-form-label">Experience</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" id="experience" name="experience" class="form-control" placeholder="in Year">
                    </div>
                    @if ($errors->has('experience'))
                        <span class="text-danger text-left">{{ $errors->first('experience') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="position" class="col-form-label">Last Position</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="position" name="last_position" class="form-control">
                    </div>
                    @if ($errors->has('last_position'))
                        <span class="text-danger text-left">{{ $errors->first('last_position') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="target_position" class="col-form-label">Applied Position</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="target_position" name="applied_position" class="form-control">
                    </div>
                    @if ($errors->has('applied_position'))
                        <span class="text-danger text-left">{{ $errors->first('applied_position') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="top_skills" class="col-form-label">Top 5 Skills</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="top_skills" name="top_5" class="form-control">
                    </div>
                    @if ($errors->has('top_5'))
                        <span class="text-danger text-left">{{ $errors->first('top_5') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-auto">
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="phone" class="col-form-label">Phone</label>
                    </div>
                    <div class="col-auto">
                        <input type="string" id="phone" name="phone" class="form-control">
                    </div>
                    @if ($errors->has('phone'))
                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                    @endif
                </div>

                <div>
                    <div class="col-auto">
                        <label for="resume" class="col-form-label">Resume</label>
                    </div>
                    <div class="col-auto">
                        <input type="file" id="resume" name="resume" class="form-control" accept=".pdf">
                    </div>
                    @if ($errors->has('resume'))
                        <span class="text-danger text-left">{{ $errors->first('resume') }}</span>
                    @endif
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3"><img src="{!! url('images/save.svg') !!}" alt="">
                        &nbsp;Save Data</button>
                    <button type="submit" class="btn btn-warning mb-3"><img src="{!! url('images/back.svg') !!}"
                            alt="">&nbsp;Back</button>
                </div>
            </div>
        </form>
    </div>
@endsection
