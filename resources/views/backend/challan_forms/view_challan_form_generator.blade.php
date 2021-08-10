@extends('layouts.app')

@section('content')
<div class="roles-permissions">
<div class="card">
    <div class="card-header text-white" style="background-color: #2b6cb0 !important">
      Generate Challan
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('store.challan.form') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Students</label>
              <select class="form-control" name="student_id">
                <option value="">Select Student</option>
                @foreach ($meritStudents as $meritStudent)
                    <option value="{{ optional(optional($meritStudent->student)->user)->id }}">{{ optional(optional($meritStudent->student)->user)->name }}</option>
                @endforeach
              </select>
              @error('student_id')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Per Semester Fee</label>
              <input type="text" class="form-control" name="fee" id="exampleInputPassword1" value="{{ old('fee') }}">
              @error('fee')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Processing Fee</label>
                <input type="text" class="form-control" name="processing_fee" id="exampleInputPassword1" value="{{ old('processing_fee') }}">
                @error('processing_fee')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Bus Rent</label>
                <input type="text" class="form-control" name="bus_rent" id="exampleInputPassword1" value="{{ old('bus_rent') }}">
                @error('bus_rent')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Library Fee</label>
                <input type="text" class="form-control" name="library_fee" id="exampleInputPassword1" value="{{ old('library_fee') }}">
                @error('library_fee')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Security Fee</label>
                <input type="text" class="form-control" name="security_fee" id="exampleInputPassword1" value="{{ old('security_fee') }}">
                @error('security_fee')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">One Time Scholarship</label>
                <input type="text" class="form-control" name="one_time_scholarship" id="exampleInputPassword1" value="{{ old('one_time_scholarship') ?: 0.00 }}">
                @error('one_time_scholarship')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5" placeholder="Enter description"></textarea>
                @error('description')
                <span class="border-l-4 border-red-500 px-2" style="color: red !important">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection

