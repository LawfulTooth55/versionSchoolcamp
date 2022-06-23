@extends('layouts.app')
@section('content')
<section class="py-32">
	<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

		<!--Main Col-->
		<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white mx-6 lg:mx-0">


			<div class="p-4 md:p-12 text-center lg:text-left">
				<!-- Image for mobile view-->
				<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.6435-9/200967591_329484848823866_837392408468135234_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHv_rm5BzNVhYIYXypkRDdF88SMhJa5lKLzxIyElrmUom67nvIYCv5ND51K9hantvIkeeRQeO28-615K2xH7AD5&_nc_ohc=8o7o863_U1UAX_3h-zg&_nc_ht=scontent.fpbc1-2.fna&oh=00_AT_pMCT8MieEuNEk8ZiRVsfMMvn8a6SO7q-OMQloZxdyDg&oe=62C50B8B')"></div>

				<h1 class="text-3xl font-bold pt-8 lg:pt-0">Elegir tu taller, tú debes</h1>
				<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
				<br>

				<form class="" action="/registroalumno" method="post">
					<label for="">Selecciona tu taller</label>
					@csrf
					<select name="taller" id="" required>
						@foreach($tallers as $taller)
						<option value="{{$taller->id}}"> {{$taller->nomtaller}}</option>
						<br>
						@endforeach
					</select>
					<br>
					<br>
					<label for="">Selecciona tu sede</label>
					<select name="sede" id="" required>
						@foreach($sedes as $sede)
						<option value="{{$sede->id}}"> {{$sede->sede}}</option>
						<br>
						@endforeach
					</select>
					<br>

					<div class="pt-12 pb-8">
						<button type="submit" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
							Enviar
						</button>
					</div>
				</form>

				<!--   <button type="submit">Enviar</button> -->


				<!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

			</div>

		</div>

		<!--Img Col-->
		<div class="w-full lg:w-2/5">
			<!-- Big profile image for side bar (desktop) -->
			<img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.6435-9/200967591_329484848823866_837392408468135234_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHv_rm5BzNVhYIYXypkRDdF88SMhJa5lKLzxIyElrmUom67nvIYCv5ND51K9hantvIkeeRQeO28-615K2xH7AD5&_nc_ohc=8o7o863_U1UAX_3h-zg&_nc_ht=scontent.fpbc1-2.fna&oh=00_AT_pMCT8MieEuNEk8ZiRVsfMMvn8a6SO7q-OMQloZxdyDg&oe=62C50B8B" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
			<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

		</div>


		<!-- Pin to top right corner -->


	</div>
</section>
@endsection('content')