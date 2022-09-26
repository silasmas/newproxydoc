<div>
    <form action="" class="form-search-nav">
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Trouver un medecin par son nom..." wire:model="nom"
                autocomplete="off">
        </div>
        @if (Str::length($nom)>2 && count($tab)>0 )
        @forelse ($tab as $panier)
        <div class="cart-item">
            <div class="cart-img">
                <a href="#">
                    <img src="{{ asset('assets/img/shop1.png') }}" alt="product" class="img-fluid" height="80"
                        width="90">
                </a>
            </div>
            <div class="cart-title">
                <a href="#">{{ $panier->nom}}</a>
            </div>
        </div>
        @empty
        <span class="text-danger">Panier vide</span>
        @endforelse
        @else
        <span>vide</span>
        @endif
    </form>

</div>