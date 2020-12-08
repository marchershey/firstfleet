@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="" method="post">
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <label for="location">location</label>
                                    <input type="text" name="location" id="location" class="form-control" placeholder="paducauh" aria-describedby="locationhelp">
                                    <small id="locationhelp" class="text-muted">type in dispatch location</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="location">location</label>
                                    <input type="text" name="location" id="location" class="form-control" placeholder="paducauh" aria-describedby="locationhelp">
                                    <small id="locationhelp" class="text-muted">type in dispatch location</small>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection