@extends('layouts.Myapp')
@section('title', __('Videojuegos'))
@section('content2')

<main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
    <div class="max-w-4xl mx-auto grid grid-cols-1 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
        <div class="relative p-3 col-start-1 row-start-1 flex flex-col-reverse rounded-lg bg-gradient-to-t from-black/75 via-black/0 sm:bg-none sm:row-start-2 sm:p-0 lg:row-start-1">
            <h1 class="mt-1 text-lg font-semibold sm:text-slate-900 md:text-2xl">Videojuegos</h1>
            <p class="text-sm leading-4 text-black font-medium sm:text-slate-500 dark:sm:text-slate-400">La magia de los </p>
        </div>
        <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
            <img src="https://scontent.fgdl1-4.fna.fbcdn.net/v/t1.6435-9/192636093_316636100108741_3919303150795966020_n.png?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEgIL5kG1QsHNirEgSY595OKgXeUajF07QqBd5RqMXTtCpuNMM1tNFDoQwjuYnASZAq9AiyJCa1KdgnRLCiSscf&_nc_ohc=0NKptOpmSpAAX8VVasu&_nc_ht=scontent.fgdl1-4.fna&oh=00_AT-VeCthOFWoAt7skO9WwbT2agEhTWb0zsa5-dAHkjV-0Q&oe=62CA0869" alt="" class="w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full" loading="lazy">
            <img src="https://scontent.fgdl1-4.fna.fbcdn.net/v/t39.30808-6/242705068_391149315990752_8172873549715578807_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeG7fHSbHXYHNG6xesi_ikdXupWVPzdaeh66lZU_N1p6HhPWSBDgrA-GEqG2eyhBvnPeM9qyJgkY5ndh3lSMoDnW&_nc_ohc=77AYtF2JCI0AX_DzcK5&_nc_ht=scontent.fgdl1-4.fna&oh=00_AT9ub2pK0Hcf80ueCdA6urSIT3EupW86Dv8ac0E8MIdGSw&oe=62A6F36D" alt="" class="hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
            <img src="https://scontent.fpbc1-1.fna.fbcdn.net/v/t39.30808-6/271936338_466618695110480_8000276432437107289_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHnFd9c9DMKpINj35xTJtNe7P_v2bxJwQfs_-_ZvEnBBwH5hUHIbVMyJWXwwiDZ8SS0MZAs9lag5qROtEFIMYYS&_nc_ohc=C1Dn11FYlrwAX81wtJI&_nc_ht=scontent.fpbc1-1.fna&oh=00_AT_6WsjJnsJgcxo03-QRTrOpmTTWgijUm2ofdH7qyTzELQ&oe=62A6D213" alt="" class="hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32" loading="lazy">
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
        Un videojuego es un actividad interactiva que se juega por medio de un dispositivo audiovisual. Al ser juegos, los videojuegos están compuestos por diversos elementos y reglas específicos, por una narrativa, e implican la participación activa de uno o más jugadores. <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwi4p5Pz8qH4AhVHKkQIHUyuD6YQFnoECAoQAw&url=https%3A%2F%2Fwww.pandacinematico.com%2Fvideojuego-definicion-caracteristicas%2F&usg=AOvVaw3SEnW6b5igAQFus6RmX2vK">Más información </a>
        </p>
        <p>Sedes disponibles: Baca Y telchac</p>
    </div>
</main>
<div class="container">

    <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-8">
        <div>
            <img src="https://i.ibb.co/7tPcGPX/271854287-465360425236307-5363022279620190454-n.png" alt="271854287-465360425236307-5363022279620190454-n" border="0" alt="" loading="lazy">
        </div>
        <div class="col-start-3">
            <img src="https://i.ibb.co/d2JY5m6/271738931-465360515236298-4239733302102706221-n.png" alt="271738931-465360515236298-4239733302102706221-n" border="0" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/D7Rd55p/271801074-465360505236299-2844939554862408202-n.png" alt="271801074-465360505236299-2844939554862408202-n" border="0" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/3rQQjVN/271885534-465360538569629-5936257419436929152-n.png" alt="271885534-465360538569629-5936257419436929152-n" border="0" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/mqZHVkv/271828939-465360575236292-6262203584827845362-n.png" alt="271828939-465360575236292-6262203584827845362-n" border="0" alt="" loading="lazy">
        </div>
        <div>
            <img src="https://i.ibb.co/8B0FrL0/271606353-465360585236291-4715506955551776921-n.png" alt="271606353-465360585236291-4715506955551776921-n" border="0" alt="" loading="lazy">
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