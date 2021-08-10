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
                            {{-- <a href="{{ route('edit.challan.forms.generator',$form->id) }}" class="ml-1">
                                <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                            </a> --}}
                            <a href="{{ route('delete.challan.forms.generator', ['id' => $form->id]) }}" data-url="{!! URL::route('delete.challan.forms.generator', $form->id) !!}" class="deletestudent bg-gray-600 block p-1 border border-gray-600 rounded-sm">
                                <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                            </a>
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
    })
</script>
@endpush
