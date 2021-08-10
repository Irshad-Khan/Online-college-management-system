@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white rounded">
    @include('alerts.success')
    <div class="w-full max-w-2xl px-6 py-12">
        <h4>Open Admissions</h4>
        <hr>
        <div class="md:flex md:items-center mb-6" style="width: 168%">
            @forelse ($programs as $program)
                <div class="card mr-1" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $program->title }}</h5>
                    <p class="card-text">Program Type: <strong style="">{{ $program->program_type }}</strong></p>
                    <p class="card-text">Semester Fee: <strong>{{ $program->fee_per_semester }} PKR</strong></p>
                    <a href="{{ route('view.application.form', ['id' => $program->id]) }}" class="btn btn-primary">Apply</a>
                    <a href="{{ route('view.application.detail', ['id' => $program->id]) }}" class="btn btn-primary">View Detail</a>
                    </div>
                </div>
            @empty
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">Admission Not Opened</h3>
                </div>
              </div>
            @endforelse

        </div>
    </div>
</div>
@endsection
