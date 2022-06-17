<div class="flex-1 px-4 relative">
    <x-jet-input type="text" class="w-full" placeholder="¿Estas buscando algun producto?" />
    <button class="absolute top-0 right-0 w-12 h-full bg-orange-500 flex  items-center justify-center rounded-r-md">
        {{-- la otra carpeta de view\componets son componentes de clases --}}

        {{-- llamamos al componente anonimo llamado buscador 
            en este caso le estamos mandando un valor--}}
        <x-buscador tamano="35" color="blanco" />
    </button>
</div>
