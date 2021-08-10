@extends('layouts.app')

@section('content')
<div class="roles-permissions">
<div class="card">
    <div class="card-header text-white" style="background-color: #2b6cb0 !important">
      Generate Merit List
    </div>
    <div class="card-body">
        <form action="{{ route('merit.list.generate') }}" method="get">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control" name="course_id">
                        <option value="">Select Course</option>
                        @foreach ($admissions as $admission)
                        @dump(optional($admission->program)->id)
                            <option value="{{ optional($admission->program)->id }}" {{ (optional($admission->program)->id == request()->get('course_id')) ? 'selected' : '' }}>{{ optional($admission->program)->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="submit" value="Generate Merit List" class="btn btn-primary">
                </div>
            </div>
        </form>

        <table class="table table-hover mt-10">
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
                @if (isset($meritLists))
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
                @endif
            </tbody>
          </table>
    </div>
  </div>
</div>
@endsection
