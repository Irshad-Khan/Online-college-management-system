@extends('layouts.app')

@section('content')
<div class="mt-8 bg-white rounded">
    @include('alerts.success')
    <div class="w-full max-w-2xl px-6 py-12">
        <h4>Merit List for Course {{ optional(optional(auth()->user()->student)->program)->title }}</h4>
        <hr>
        @if(count($meritLists) <=0)
        <div class="md:flex md:items-center mb-6" style="width: 168%">
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="width: 168%">
                <div class="col-md-12 px-0">
                  <h3 class="display-5 font-italic">Merit List not Issued Yet</h3>
                </div>
            </div>
        </div>
        @else
        <table class="table table-hover" style="width: 166%">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Gender</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Marks</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($meritLists as $list)
                {{-- @dump($list->student) --}}
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ optional(optional($list->student)->user)->name }}</td>
                        <td>{{ Carbon\Carbon::parse(optional($list->student)->dateofbirth)->format('D M y') }}</td>
                        <td>{{ optional($list->student)->gender }}</td>
                        <td>{{ optional($list->student)->phone }}</td>
                        <td>{{ optional($list->student)->permanent_address }}</td>
                        <td>{{ optional(optional($list->student)->qualification)->marks }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        @endif
    </div>
</div>
@endsection
