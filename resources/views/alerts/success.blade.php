@if(Session::has('success'))

    <div style="background: #5cb85c; color: white; padding: 8px" role="alert">

        <span class="fa fa-check" aria-hidden="true"></span>

        <span class="sr-only">Success:</span>

        {{Session::get('success')}}

    </div>

@endif

