@extends('layouts.app')

@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

{{--     <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
        <example-component></example-component><!--Añadimos nuestro componente vuejs-->
    </div>
 --}}
    <script src="{{asset('js/app.js')}}"></script> <!

</div>
@endsection
