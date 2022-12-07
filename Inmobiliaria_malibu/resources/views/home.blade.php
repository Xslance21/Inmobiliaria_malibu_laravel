@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<style>
	header{
		background-color: #ff971d;
		color: white;
	}
	li{
		font-family: 'Times New Roman', Times, serif;
		font-size: 200%;
	}
</style>
<header>
	<div class="container" id="Malibu">
		<div class="row">
			<div class="col">
				<img src="{{ asset('assets/logo.svg')}}" alt="X">
				<h1>Inmobiliaria_malibu</h1>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row my-5 p-3 bg-light">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{ asset('assets/Casa1.jpeg') }}" alt="X" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 my-auto">
			<ul>
				<li>
					Design: Moderno
				</li>
				<li>
					Price: $200,000
				</li>
				<li>
					Adress: Malibu Avn South 142
				</li>
				<li>
					Measures: 300 m2
				</li>
			</ul>
		</div>
	</div>
	<div class="row my-5 p-3 bg-light">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{ asset('assets/Casa2.jpeg') }}" alt="X" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 my-auto">
			<ul>
				<li>
					Design: Moderno
				</li>
				<li>
					Price: $500,000
				</li>
				<li>
					Adress: Malibu Avn South 245
				</li>
				<li>
					Measures: 600 m2
				</li>
			</ul>
		</div>
	</div>
	<div class="row my-5 p-3 bg-light">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{ asset('assets/Casa3.jpeg') }}" alt="X" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 my-auto">
			<ul>
				<li>
					Design: Clasico
				</li>
				<li>
					Price: $120,000
				</li>
				<li>
					Adress: Washington Avn North 48
				</li>
				<li>
					Measures: 150 m2
				</li>
			</ul>
		</div>
	</div>
	<div class="row my-5 p-3 bg-light">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<img src="{{ asset('assets/Casa4.jpeg') }}" alt="X" width="100%">
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 my-auto">
			<ul>
				<li>
					Design: Moderno
				</li>
				<li>
					Price: $250,000
				</li>
				<li>
					Adress: Los Angeles High Hills 208
				</li>
				<li>
					Measures: 200 m2
				</li>
			</ul>
		</div>
	</div>
</div>

@endsection
<!-- <div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hi <strong>{{ Auth::user()->name }},</strong> {{ __('You are logged in to ') }}{{ config('app.name', 'Laravel') }}</h5>
				</br> 
				<hr>
								
			<div class="row w-100">
					<div class="col-md-3">
						<div class="card border-info mx-sm-1 p-3">
							<div class="card border-info text-info p-3" ><span class="text-center fa fa-plane-departure" aria-hidden="true"></span></div>
							<div class="text-info text-center mt-3"><h4>Flights</h4></div>
							<div class="text-info text-center mt-2"><h1>234</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-success mx-sm-1 p-3">
							<div class="card border-success text-success p-3 my-card"><span class="text-center fa fa-luggage-cart" aria-hidden="true"></span></div>
							<div class="text-success text-center mt-3"><h4>Baggage</h4></div>
							<div class="text-success text-center mt-2"><h1>9,332</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-danger mx-sm-1 p-3">
							<div class="card border-danger text-danger p-3 my-card" ><span class="text-center fa fa-person-booth" aria-hidden="true"></span></div>
							<div class="text-danger text-center mt-3"><h4>Passengers</h4></div>
							<div class="text-danger text-center mt-2"><h1>12,762</h1></div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card border-warning mx-sm-1 p-3">
							<div class="card border-warning text-warning p-3 my-card" ><span class="text-center fa fa-users" aria-hidden="true"></span></div>
							<div class="text-warning text-center mt-3"><h4>Users</h4></div>
							<div class="text-warning text-center mt-2"><h1>{{ Auth::user()->count() }}</h1></div>
						</div>
					</div>
				 </div>				
			</div>
		</div>
	</div>
</div>
</div> -->