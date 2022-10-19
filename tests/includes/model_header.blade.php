<div class="relative bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="/start">
                    <span class="sr-only">Readers_Guild</span>
                    <img class="h-8 w-auto rounded-lg sm:h-14" src="{{ asset('storage/image/icon_readers_guild.png') }}"
                        alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button
                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    type="button" aria-expanded="false">
                    <span class="sr-only">Abrir menu</span>
                    <!-- Heroicon name: outline/bars-3 | Nome do Heroicon: contorno/barras-3 -->
                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <a class="text-base font-medium text-gray-500 hover:text-gray-900" href="#">Início</a>
                <div class="relative">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" | Item ativo: "text-gray-900", Item inativo: "text-gray-500 -->
                    <button
                        class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        type="button" aria-expanded="false">
                        <span>Categorias</span>
                        <!--
              Heroicon name: mini/chevron-down Item active: "text-gray-600", Item inactive: "text-gray-400"
              Nome do Heroicon: mini/chevron-down Item ativo: "text-gray-600", Item inativo: "text-gray-400"
            -->
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!--
            'Solutions' flyout menu, show/hide based on flyout menu state.
            Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
            Menu suspenso 'Soluções', mostrar/ocultar com base no estado do menu suspenso.
            Inserindo: "transição facilitação duração-200"
            De: "opacity-0 translate-y-1"
            Para: "opacidade-100 traduzir-y-0"
            Saindo: "facilidade de transição duração-150"
            De: "opacity-100 translate-y-0"
            Para: "opacity-0 traduzir-y-1"
          -->
                    <div
                        class="absolute z-10 -ml-4 mt-3 w-screen transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
                        <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                <div class="row-start-1 grid grid-flow-col gap-y-10 gap-x-8 text-sm">
                                    <div>
                                        <p class="font-medium text-gray-900" id="style-heading">Estilo</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Clothing-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Kodomo</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Shounem</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Shoujo</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Hentai (Seijin)</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Ecchi</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Yaoi</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Yuri</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Gekigá</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900" id="style-heading">-</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Clothing-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Seinen</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Josei</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Doujinshi</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">One Shot</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Isekai</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Slice of Life</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Sci-fi</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Harém</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900" id="genre-heading">Genero</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Accessories-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Ação</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Artes Marciais</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Aventura</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Culinária</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Drama</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Fantasia</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Esporte</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Suspense</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900" id="style-heading">-</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Clothing-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Horror</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Sobrenatural</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Sobrevivência</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Tragédia</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Romance</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Mistério</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Psicológico</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Medieval</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900" id="type-heading">-</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Brands-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Comédia</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900" id="type-heading">Tipo</p>
                                        <ul class="mt-6 space-y-6 sm:mt-4 sm:space-y-4" role="list"
                                            aria-labelledby="Brands-heading">
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Novel</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Mangá</a>
                                            </li>
                                            <li class="flex">
                                                <a class="hover:text-gray-800" href="#">Manhua</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-6 bg-gray-50 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                <div class="flow-root">
                                    <a class="-m-3 flex items-center rounded-md p-3 text-base font-medium text-gray-900 hover:bg-gray-100"
                                        href="#">
                                        <!-- Heroicon name: outline/play | Nome do Heroicon: contorno/jogar -->
                                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                                        </svg>
                                        <span class="ml-3">Ver Todos</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="text-base font-medium text-gray-500 hover:text-gray-900" href="#">Sobre</a>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                <a class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"
                    href="#">Sign in</a>
                <a class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                    href="#">Sign
                    up</a>
            </div>
        </div>
    </div>
    <!--
    Mobile menu, show/hide based on mobile menu state.
      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
        <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="px-5 pt-5 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                    </div>
                    <div class="-mr-2">
                        <button
                            class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            type="button">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50" href="#">
                            <!-- Heroicon name: outline/chart-bar -->
                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
                        </a>

                        <a class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50" href="#">
                            <!-- Heroicon name: outline/cursor-arrow-rays -->
                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
                        </a>

                        <a class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50" href="#">
                            <!-- Heroicon name: outline/shield-check -->
                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Security</span>
                        </a>

                        <a class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50" href="#">
                            <!-- Heroicon name: outline/squares-2x2 -->
                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
                        </a>

                        <a class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50" href="#">
                            <!-- Heroicon name: outline/arrow-path -->
                            <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12c0-1.232.046-2.453.138-3.662a4.006 4.006 0 013.7-3.7 48.678 48.678 0 017.324 0 4.006 4.006 0 013.7 3.7c.017.22.032.441.046.662M4.5 12l-3-3m3 3l3-3m12 3c0 1.232-.046 2.453-.138 3.662a4.006 4.006 0 01-3.7 3.7 48.657 48.657 0 01-7.324 0 4.006 4.006 0 01-3.7-3.7c-.017-.22-.032-.441-.046-.662M19.5 12l-3 3m3-3l3 3" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="space-y-6 py-6 px-5">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Pricing</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Docs</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Help Center</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Guides</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Events</a>

                    <a class="text-base font-medium text-gray-900 hover:text-gray-700" href="#">Security</a>
                </div>
                <div>
                    <a class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700"
                        href="#">Sign
                        up</a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a class="text-indigo-600 hover:text-indigo-500" href="#">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
