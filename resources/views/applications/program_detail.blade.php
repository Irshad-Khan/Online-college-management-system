@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white rounded">
    @include('alerts.success')
    <div class="w-full max-w-2xl px-6 py-12">
        <h4><span style="font-size: 16px !important"><a href="{{ route('application.apply') }}" style="text-decoration: none">Back - </a></span>{{ $program->title }} Program Detail</h4>
        <hr>
        <table class="table table-borderless">
            <tbody>
              <tr>
                <th scope="row">Program Type</th>
                <td>{{ $program->program_type }}</td>
              </tr>
              <tr>
                <th scope="row">Fee Per Semester</th>
                <td>{{ $program->fee_per_semester }} PKR</td>
              </tr>
              <tr>
                <th scope="row">Duration</th>
                <td>{{ $program->duration }}</td>
              </tr>
              <tr>
                <th scope="row">Requirements</th>
                <td>{{ $program->requirements }}</td>
              </tr>
              <tr>
                <th scope="row">Description</th>
                <td>{{ $program->description }}</td>
              </tr>
            </tbody>
          </table>
          <a href="{{ route('view.application.form', ['id' => $program->id]) }}" class="btn btn-primary">Apply</a>
    </div>
</div>
@endsection
