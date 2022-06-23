@extends('layouts.Myapp')
@section('title', __('Robotica'))
@section('content2')

<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
            <h1 class="mt-1 text-lg font-semibold sm:text-slate-900 md:text-2xl">Robotica</h1>
            <p class="text-sm leading-4 text-black font-medium sm:text-slate-500 dark:sm:text-slate-400">La magia de la </p>
        </div>
        <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="https://i.ibb.co/qDBV0b5/244474772-398117458627271-6944324006616673309-n.jpg" alt="244474772-398117458627271-6944324006616673309-n" border="0" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
            <img src="https://i.ibb.co/fSs5MgN/244498186-398117515293932-7057210283865606294-n.jpg" alt="244498186-398117515293932-7057210283865606294-n" border="0" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
            <img src="https://i.ibb.co/rMktjLn/242391033-391149352657415-6174667900426032882-n.jpg" alt="242391033-391149352657415-6174667900426032882-n" border="0" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
        </div>
        <dl class="mt-4 text-xs font-medium flex items-center row-start-2 sm:mt-1 sm:row-start-3 md:mt-2.5 lg:row-start-2">
            <dt class="sr-only">Reviews</dt>

            <dt class="sr-only">Location</dt>
            <dd class="flex items-center">
                <svg width="2" height="2" aria-hidden="true" fill="currentColor" class="mx-3 text-slate-300">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1 text-slate-400 dark:text-slate-500" aria-hidden="true">
                    <path d="M18 11.034C18 14.897 12 19 12 19s-6-4.103-6-7.966C6 7.655 8.819 5 12 5s6 2.655 6 6.034Z" />
                    <path d="M14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                </svg>
                Baca, Yucatán
            </dd>
        </dl>
        <div class="mt-4 col-start-1 row-start-3 self-center sm:mt-0 sm:col-start-2 sm:row-start-2 sm:row-span-2 lg:mt-6 lg:col-start-1 lg:row-start-3 lg:row-end-4">
            <button type="button" class="bg-indigo-600 text-white text-sm leading-6 font-medium py-2 px-3 rounded-lg"><a href="{{ url('/registroalumno/create') }}">inscribirse</a></button>
        </div>
        <p class="mt-4 text-sm leading-6 col-start-1 sm:col-span-2 lg:mt-6 lg:row-start-4 lg:col-span-1">
        La robótica es la rama de la ingeniería mecánica, de la ingeniería electrónica y de las ciencias de la computación, que se ocupa del diseño, construcción, operación, estructura, manufactura y aplicación de los robots.
        </p>
        <p>Sedes disponibles: Baca, Telchac y Mérida</p>
    </div>
</main>
<div class="container">

    <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-8">
        <div>
            <img src="https://i.ibb.co/jbNM43n/264778056-439043291201354-8437094447637756759-n.png" alt="264778056-439043291201354-8437094447637756759-n" border="0" loading="lazy">
        </div>
        <div class="col-start-3">
            <img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t1.6435-9/192534554_316594606779557_4464148494990235896_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEZvfYAqIQZSI1wt7Feq0ug8NV1g91Gga7w1XWD3UaBrtkxcwro_iNt9k2DoABUyJuNT-xqmxcCTOX2WHHugQY8&_nc_ohc=2to-B3T4MHEAX9S8EF_&_nc_ht=scontent.fpbc1-2.fna&oh=00_AT-oL5aH7B4Cr8NqDvCyIX3cSklrIjlwtXPBbYMxGLBlow&oe=62C9A780" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/SsBfzQb/246738779-412773527161664-3819179346636146673-n.jpg" alt="246738779-412773527161664-3819179346636146673-n" border="0" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/jbNM43n/264778056-439043291201354-8437094447637756759-n.png" alt="264778056-439043291201354-8437094447637756759-n" border="0" loading="lazy">
        </div>
        <div>
            <img src="https://scontent.fpbc1-1.fna.fbcdn.net/v/t1.6435-9/123818333_182084950230524_7404716971632040360_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHCR2c1-oHPMud4PFt3W3S0THaLnc-csyhMdoudz5yzKK3HX70fe6Bl9GUeqIeGrcLjlggBFhjaHGPeA6C4AS4m&_nc_ohc=0IrsKUDU0asAX_iafaY&tn=aAjw2oWgW4ZFtvXJ&_nc_ht=scontent.fpbc1-1.fna&oh=00_AT-xNiaKcVfJlkkjkNsqb6DpaHlXuaXJWetvTCx8VZD_7g&oe=62C6CD3B" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://scontent.fpbc1-1.fna.fbcdn.net/v/t1.6435-9/123805999_182084936897192_8711024238062856224_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFeObKG_lJc0t3iJTsm6l7ysneBeYJUFKOyd4F5glQUo3TfHlkFdf1h4U6ki6gLfg1UACuNXTtTfEb7RelbDbgw&_nc_ohc=-jd9lYH3DpwAX-aSgHa&tn=aAjw2oWgW4ZFtvXJ&_nc_ht=scontent.fpbc1-1.fna&oh=00_AT8xl9bzTwt6t5ybW84Hk2Y7mbn2Wn0vTorj_pYmMR-odQ&oe=62C65ABB" alt="" loading="lazy">
        </div>

    </div>
</div>
<br>
<!--Footer-->
<footer class="bg-cyan-400">
	<div class="container mx-auto px-8">
		<div class="w-full flex flex-col md:flex-row py-6">
			<div class="flex-1 mb-6 text-black">
				<a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
					<!--Icon from: http://www.potlabicons.com/ -->
					<svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
						<rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
						<path class="plane-take-off" d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z " />
					</svg>
					School Camp
				</a>
			</div>


			<div class="flex-1">
				<p class="uppercase text-gray-500 md:mb-6">Social</p>
				<ul class="list-reset mb-6">
					<li class="mt-2 inline-block mr-2 md:block md:mr-0">
						<a href="https://www.facebook.com/SchoolCamp2020" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
					</li>
				</ul>
			</div>

		</div>
	</div>

</footer>

@endsection