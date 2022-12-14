<div>
    <div class="glider-contain">
        <ul class="glider">
            @foreach ($categoria->productos as $producto)

                <li class="bg-white rounded-lg shadow mr-4">
                    <article>
                        
                        <figure >
                            <img src="{{ Storage::url($producto->images->first()->url) }}" alt="">
                        </figure>

                        <div class="py-4  px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="">
                                    {{ Str::limit($producto->nombre, 20)}}
                                </a>
                            </h1>
                            <p class="font-bold text-trueGray-700">
                                $USD {{ $producto->precioVenta }}
                            </p>
                        </div>
                    </article>
                    
                </li>

            @endforeach
        </ul>
      
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
      </div>
</div>
