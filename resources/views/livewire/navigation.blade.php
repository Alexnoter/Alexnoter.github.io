{{-- al colocar el x-data indicamos a alpain que las funcionalidades seran alnivel de la etiqueta
    header , es decir que todas las variables colocadas solo seran en header --}}

<header class="bg-trueGray-700 sticky top-0" x-data="{ open: false }">

    <div class="container flex items-center h-16" >
        <a  :class="{'bg-white text-orange-500 md:bg-opacity-25 md:text-white ' : open}"
            x-on:click="open = !open" {{-- esto me dice que escuchara un evento click y que cambiara al valor inverso de open en cada click --}}
            class="flex flex-col items-center justify-center px-4 order-last md:order-first text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm hidden md:block">Categorias</span>
        </a>

        {{-- <a href="/" class="mx-6">
            
            <x-jet-application-mark class="block h-9 w-auto"/>
        </a> --}}

        {{-- hacemo llamado al componente buscador --}}
        <div class="flex-1 hidden md:block">
            @livewire('buscador')
        </div>

        
        <div class="mx-6 relative hidden md:block">
            {{-- con auth nos mostrara solo cuando iniciemos sesion --}}
            @auth

                <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                        
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>


                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>

                </x-jet-dropdown>

            @else
                
                <x-jet-dropdown>
                    
                    <x-slot name="trigger">
                        <i class="fas fa-user-circle text-white text-3xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">

                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('login') }}
                        </x-jet-dropdown-link>

                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>

                    </x-slot>

                </x-jet-dropdown>

            @endauth

        
        </div>

    </div>

    <nav class="absolute w-full"
        x-show="open">{{-- con esto hacemos que  se oculte las categorias su valor es false  para visualizar tiene que ser true --}}

        {{-- computer --}}
        <div class="w-full hidden md:block">
            <ul :class="{'flex' : open , 'hidden' : !open}"
                class="bg-trueGray-700 bg-opacity-75 hidden justify-around " x-on:click.away="open = false">{{-- x-on:click.away esto nos dice que si hacemos click en cualquier otro lugar que no sea este contenedor se cerrara --}}
                @foreach ($categorias as $categoria)
                    <li class="text-white hover:text-opacity-60 py-2">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            {{ $categoria->nombre }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- mobile --}}
        <div class="bg-white h-screen overflow-y-auto md:hidden">

            <div class="container py-3 bg-gray-200 mb-2">
                @livewire('buscador')
            </div>

            <ul>
                @foreach ($categorias as $categoria)
                    <li class="text-trueGray-500 hover:text-white hover:bg-orange-500 py-2">
                        <a href="" class="py-2 px-4 text-sm flex items-center">
                            {{ $categoria->nombre }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="text-trueGray-500 px-4 my-2">USUARIOS</p>

            @auth
                <a href="{{ route('profile.show') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:text-white hover:bg-orange-500">
                    <span class="flex justify-center  w-9">
                        <i class="fas fa-address-card"></i>
                    </span>
                    Perfil
                </a>
                <a href="" 
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()"
                    class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:text-white hover:bg-orange-500">
                    <span class="flex justify-center  w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    Cerrar sesion
                </a>

                <form id="logout-form" action=" {{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>

            @else

                <a href="{{ route('login') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:text-white hover:bg-orange-500">
                    <span class="flex justify-center  w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    Iniciar Sesion
                </a>
                <a href="{{ route('register') }}" class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:text-white hover:bg-orange-500">
                    <span class="flex justify-center  w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>
                    Registrarse
                </a>   

            @endauth

        </div>
    </nav>
</header>
