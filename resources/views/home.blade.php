@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">Status</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="alert alert-success m-0" role="alert">
                        Server is online. That's good.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <example-component class="mb-3"></example-component>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">

            <passport-clients class="mb-3"></passport-clients>

            <passport-authorized-clients class="mb-3"></passport-authorized-clients>

            <passport-personal-access-tokens class="mb-3"></passport-personal-access-tokens>

        </div>
    </div>
</div>
@endsection
