@extends('layouts.app')
@section('title', __('Welcome'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				{{ __('Welcome to') }} {{ config('app.name', 'Laravel') }} !!! </br>
				Please contact admin to get your Login Credentials or click "Login" to go to your Dashboard.
                
			@else
                <div class="container">
                    <div class="row my-5">
                        <div class="col">
                            Hi {{ Auth::user()->name }}, Bienvenido otra vez a la Inmobiliaria malibu, una empresa dedicada para aquellas personas 
                            que con su riqueza se pueden permitir comprar casas con carrito como si fuera un cereal más.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('assets/Casa5.jpeg') }}" alt="x" width="80%" height="70%">
                        </div>
                    </div>
                </div>
            @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection