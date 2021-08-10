@extends('layouts.app')

@section('content')
<div class="roles-permissions">
<div class="card">
    <div class="card-header text-white" style="background-color: #2b6cb0 !important">
      Your Challan
    </div>
    <div class="card-body">
        {{-- <form method="POST" action="{{ route('store.challan.form') }}">
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
        </form> --}}

        <div class="row">
            <h2>The Government Sadiq College Women University Bahawalpur Pakistan</h2>
                <div class="table-responsive">
                    <div class="table-responsive custom_datatable">
                        <table class="table table-bordered" style="width:100%;margin:auto;text-align:left;" >
                            <tbody>
                                <tr>
                                    <td rowspan="2" colspan="2"><h3 style="margin:8px 0 0 63px;">Habib Bank Limited</h3></td>
                                    <td>Challan NO</td>
                                    <td colspan="2">{{ $challanForm->challan_number }}</td>
                                </tr>
                                <tr>
                                    <td>Date</td>
                                    <td colspan="2">------------</td>
                                </tr>
                                <tr>
                                    <td colspan="2">Bank Name / Branch : </td>
                                    <td colspan="3">Bank Name:</td>
                                </tr>

                                <tr>
                                    <td>Student Name</td>
                                    <td colspan="1">{{ optional($challanForm->user)->name }}</td>
                                    <td width="150">Fee Detail</td>
                                    <td width="50" colspan="2"></td>
                                </tr>
                                <tr>
                                    <td rowspan="6"></td>
                                    <td rowspan="6" width="50%"></td>
                                    <td>Semester Fee</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->fee }}</td>
                                </tr>
                                <tr>
                                    <td>Processing Fee</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->processing_fee }}</td>
                                </tr>
                                <tr>
                                    <td>Bus Rent</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->bus_rent }}</td>
                                </tr>
                                <tr>
                                    <td>Library Fee</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->library_fee }}</td>
                                </tr>
                                <tr>
                                    <td>Security Fee</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->security_fee }}</td>
                                </tr>
                                <tr>
                                    <td>Scholarship</td>
                                    <td colspan="2" class="text-center">{{ $challanForm->one_time_scholarship }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Total</td>
                                    <td colspan="2" class="text-center">PKR {{ $fee }}</td>
                                </tr>
                                <tr>
                                    <td colspan="5">Amount in words : {{ $feeInWords }}</td>
                                </tr>
                                <tr>
                                    <td>Student Signature: </td>
                                    <td></td>
                                    <td>Cashier signature</td>
                                    <td colspan="2"> <br><br></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center"><a href="#" onclick="window.print();" class="btn btn-primary">Print Challan</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
@endsection

