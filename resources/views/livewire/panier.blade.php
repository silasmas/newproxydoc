<li class="cart-area-dark" wire:poll>
    <a class="cart-trigger-icon ml-5"
        href="{{ Cart::count() > 0 ? route('monpanier') : route('pharmacie') }}">
        <i class="flaticon-shopping-cart"></i>
        <span>{{ Cart::count() }}</span>
    </a>
    <div class="cart-items">
        @forelse (Cart::content() as $panier)
            <div class="cart-item">
                <div class="cart-img">
                    <a href="#">
                        <img src="{{ asset('assets/img/shop1.png') }}" alt="product"
                            class="img-fluid" height="80" width="90">
                    </a>
                </div>
                <div class="cart-title">
                    <a href="#">{{ Str::limit($panier->model->nom,10,"...")}}</a>
                    {{-- <span>Code: STPT601</span> --}}
                </div>
                <div class="cart-quantity">X {{ $panier->qty }}</div>
                <div class="cart-price">
                    {{ $panier->model->monaie . '' . $panier->price }}</div>
                <div class="cart-trash" >
                     <button type="submit" style="background: transparent; border: none;cursor: pointer;"
                     wire:click="deletConfirm('{{ $panier->rowId }}')">
                         <i class="far fa-trash-alt"></i>
                     </button>
                </div>
            </div>
        @empty
            <span class="text-danger">Panier vide</span>
        @endforelse
        @if (Cart::count() > 0)
            <div class="cart-item">
                <div class="cart-btn">
                    <a href="{{ route('monpanier') }}" class="item-btn">Voir le
                        panier</a>
                    {{-- <a href="#" class="item-btn">La caisse</a> --}}
                </div>
            </div>
        @endif

    </div>
</li>
