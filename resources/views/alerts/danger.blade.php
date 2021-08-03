<?php

/**
 * Created by PhpStorm.
 * User: EGON
 * Date: 9/6/2017
 * Time: 11:17 AM

 */

?>



@if(Session::has('danger'))

    <div class="alert alert-danger" role="alert">

        <span class="fa fa-delete" aria-hidden="true"></span>

        <span class="sr-only">Error:</span>

        {{Session::get('danger') }}

    </div>

@endif



