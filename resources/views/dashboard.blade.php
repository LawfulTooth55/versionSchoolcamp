<title>School Camp</title>
@extends('layouts.Myapp')
@section('title', __('Dashboard'))
@section('content2')
<!-- -->
<!--Imagen random principal-->
<div class=" m-0 p-0 bg-cover bg-bottom" style="background-image:url('https://fondosmil.com/fondo/24186.jpg'); height: 600vh; max-height:500px;">
	<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
		<!--Title-->
		<p class="text-white font-extrabold text-3xl md:text-5xl">
			Bienvenido
		</p>
		<p class="text-xl md:text-2xl text-white-500">Un famoso explorador una vez dijo que lo extraordinario está en lo que hacemos, no en quiénes somos. (Lara Croft, Tomb Raider)</p>
	</div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

	<div class="mx-0 sm:mx-6">

		<!--Nav-->
		<nav class="mt-0 w-full">
			<div class="container mx-auto flex items-center">


				<div class="flex w-1/2 justify-end content-center">

					<a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 avatar" data-tippy-content="School Camp" href="https://www.facebook.com/SchoolCamp2020">
						<svg class="fill-current h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
							<path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
						</svg>
					</a>
				</div>

			</div>
		</nav>

		<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">

			<!--Lead Card-->
			<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
				<a href="{{ url('/registroalumno/create') }}" class="flex flex-wrap no-underline hover:no-underline">
					<div class="w-full md:w-2/3 rounded-t">
						<img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t1.6435-9/117293238_152605676511785_3290624467051688828_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFu76cduQm_-wlhcOyxQngRSMr1_xhkmMdIyvX_GGSYx5UrrGbswi0ItB-yOJoR_65V6a1jksDwGm2Q55FZ9zNi&_nc_ohc=52IZZ4DuPvAAX99BMHj&_nc_ht=scontent.fmid2-1.fna&oh=00_AT-rmRCNK3wI2hjz7joaAzIHkIN3biOxDWfW4tLhl4q3hg&oe=62C6A2D7" class="h-full w-full shadow">
					</div>

					<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Comencemos</p>
							<div class="w-full font-bold text-xl text-gray-900 px-6">👋 Hola, esperemos que estar aquí sea de tu agrado, recuerda que el conocimiento es poder</div>
							<br>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								Recuerda Leer bien los talleres y escoger bien el que más te guste, también revisa las sedes para que el taller te quede más cerca
							</p>
						</div>
					</div>

				</a>
			</div>
			<!--/Lead Card-->


			<!--Posts Container-->
			<div class="flex flex-wrap justify-between pt-12 -mx-6">

				<!--1/3 col -->
				<div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<a href="/robotica" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://ibb.co/jJ61X5H"><img src="https://i.ibb.co/FHxjTWn/272868578-473646474407702-6791307964658943845-n.png" class="h-64 w-full rounded-t pb-6">

							<div class="w-full font-bold text-xl text-gray-900 px-6">ROBOTICA</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								Aprende las normas de la robótica, desde las leyes teóricas, hasta la contrucción de proyectos como un brazo robótico y un seguidor de líena. Presione para más información
							</p>
						</a>
					</div>
				</div>


				<!--1/3 col -->
				<div data-aos="fade-right" data-aos-duration="500" class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<a href="/cocina" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://acogida.upct.es/wp-content/uploads/2019/09/taller_cocina.png" class="h-64 w-full rounded-t pb-6">

							<div class="w-full font-bold text-xl text-gray-900 px-6">COCINA</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								¿Quieres competir en Master Junior? Esta es tu oportunidad para ser un gran cocinero, y poder impresionar a tu paladar. Presiones aquí para más información
							</p>
						</a>
					</div>

				</div>

				<!--1/3 col -->
				<div data-aos="fade-down-right" class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<a href="/pintura" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://www.hogarmania.com/archivos/201908/decorar-un-estudio-de-taller-y-pintura-en-casa-colores-calidos-buhardilla-XxXx80.jpg" class="h-64 w-full rounded-t pb-6">

							<div class="w-full  font-bold text-xl text-gray-900 px-6">PINTURA</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								Entra y conviertete en el próximo Vincent van Gogh pero con ambas orejas o podrías ser la próxima Angelina Beloff. Presiones aquí para más información
							</p>
						</a>
					</div>
				</div>


				<!--1/2 col -->
				<div data-aos="flip-up" class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<a href="/ajedrez" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://i.blogs.es/1e25b6/ajedrez/840_560.jpeg" class="h-full w-full rounded-t pb-6">

							<div class="w-full font-bold text-xl text-gray-900 px-6">AJEDREZ</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								Aprende las técnicas básicas del ajedrez y conviértete en el próximo campeón mundial. Presiones aquí para más información
							</p>
						</a>
					</div>
				</div>

				<!--1/2 col -->
				<div data-aos="flip-up" class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
					<div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
						<a href="/videojuegos" class="flex flex-wrap no-underline hover:no-underline">
							<img src="https://scontent.fgdl1-4.fna.fbcdn.net/v/t39.30808-6/211682788_336072471498437_95619392933984944_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEglm_H3PK1yn3IhGcoa9Gw5Gsz83UlJ3LkazPzdSUncnNHu_RS0xRuipWUYbsd5c3dwVGspQp78xZK8_Oj-H-_&_nc_ohc=9_nWnSs2ZJ0AX9BvxsE&_nc_ht=scontent.fgdl1-4.fna&oh=00_AT9w3IVBTwLcpNQZ5Ec_4BSUJ7sZzAoUCLHcvdbIzN0y-Q&oe=62A86B0F" class="h-full w-full rounded-t pb-6">

							<div class="w-full font-bold text-xl text-gray-900 px-6">Videojuegos</div>
							<p class="text-gray-800 font-serif text-base px-6 mb-5">
								Conviértete en una leyenda en el mundo del gaming. Presiones aquí para más información
							</p>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>


</div>


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

<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@4"></script>
<script>
	//Init tooltips
	tippy('.avatar')
</script>
<script>
	AOS.init();
</script>
<script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else { userMenuDiv.classList.add("invisible"); }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else { navMenuDiv.classList.add("hidden"); }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) { return true; }
                t = t.parentNode;
            }
            return false;
        }
    </script>

@endsection