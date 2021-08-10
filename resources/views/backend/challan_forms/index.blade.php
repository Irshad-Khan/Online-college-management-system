@extends('layouts.app')

@section('content')
<div class="roles-permissions">
<div class="card">
    <div class="card-header text-white" style="background-color: #2b6cb0 !important">
      Challan Form List
    </div>
    <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-6">
                    <a href="{{ route('view.challan.forms.generator') }}" class="btn btn-primary">Generate Challan Forms</a>
                </div>
            </div>
            @include('alerts.success')
        <table class="table table-hover mt-10">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Challan Number</th>
                <th scope="col">Student Name</th>
                <th scope="col">Description</th>
                <th scope="col">Fee Per Semester</th>
                <th scope="col">Processing Fee</th>
                <th scope="col">Bus Rent</th>
                <th scope="col">Library Fee</th>
                <th scope="col">Security Fee</th>
                <th scope="col">One Time Scholarship</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($challanForms as $form)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <th scope="row">{{ $form->challan_number }}</th>
                        <td>{{ optional($form->user)->name }}</td>
                        <td>{{ $form->description }}</td>
                        <td title="Amount in PKR">{{ number_format($form->fee,2) }}</td>
                        <td title="Amount in PKR">{{ number_format($form->processing_fee,2) }}</td>
                        <td title="Amount in PKR">{{ number_format($form->bus_rent,2) }}</td>
                        <td title="Amount in PKR">{{ number_format($form->library_fee,2) }}</td>
                        <td title="Amount in PKR">{{ number_format($form->security_fee,2) }}</td>
                        <td>{{ ($form->one_time_scholarship) ? number_format($form->one_time_scholarship,2) : 'N/A' }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="background: none; border: none; color: black;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-th-list"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item fee_paid" href="#" data-challan="{{ $form->id }}">Fee Paid</a>
                                  <a href="{{ route('delete.challan.forms.generator', ['id' => $form->id]) }}" data-url="{!! URL::route('delete.challan.forms.generator', $form->id) !!}" class="deletestudent dropdown-item">
                                    Delete
                                  </a>
                                </div>
                              </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
  </div>
</div>
@include('backend.modals.delete',['name' => 'Challan Form'])
@endsection
@push('scripts')
<script>
    $(function() {
        $( ".deletestudent" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
            var url = $(this).attr('data-url');
            $(".remove-record").attr("action", url);
        })

        $( "#deletemodelclose" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
        })

        $('.fee_paid').on('click', function(e){
            e.preventDefault()
            let challanId = $(this).data('challan')

            $.ajax({
                type: 'GET',
                url: '/add/fee',
                data: {
                    'challanid': challanId
                },
                success: function(response){

                }

            });
        });
    })
</script>
@endpush
