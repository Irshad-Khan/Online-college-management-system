@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white rounded">
    @include('alerts.success')
<div class="w-full max-w-2xl px-6 py-12">
    <h4>Your Application Status</h4>
    <hr>
    <div class="md:flex md:items-center mb-6" style="width: 168%">
            @if($student->is_admitted == 0)
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">You have not applied on any course. <a class="text-white" style="text-decoration: none" href="{{ route('application.apply') }}">Click Here to apply</a></h3>
                </div>
              </div>
            @elseif ($student->is_admitted == 1)
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">You have apply on {{ $student->program->title }}. Your application is in progress.</h3>
                </div>
            </div>
            @elseif ($student->is_admitted == 2)
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">Admitted</h3>
                </div>
            </div>
            @else
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">Rejected</h3>
                </div>
            </div>
            @endif
        {{-- <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                Name :
            </label>
        </div>
        <div class="md:w-2/3">
            <span class="block text-gray-600 font-bold"></span>
        </div> --}}
    </div>

</div>
@endsection
