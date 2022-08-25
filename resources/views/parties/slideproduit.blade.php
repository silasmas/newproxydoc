@forelse ($produits as $p)
    <div class="shop-box-layout1">
        <div class="item-img">
            <img src="{{ asset('assets/img/shop1.png') }}" alt="shop" class="img-fluid">
            <ul class="shop-action-items">
                <li>
                    <a href="#">
                        <form action="" method="post" onsubmit="addToCart(this)">
                            @csrf
                            <input type="text" name='idProd' class="form-control" value="{{ $p->id }}"
                                placeholder="" hidden>
                            <input type="text" name='quantity' class="form-control quantity-input" value="1"
                                placeholder="1" hidden>
                            <button type="submit" style="background: transparent; border: none">
                                <i class="flaticon-shopping-cart"></i>
                            </button>

                        </form>
                    </a>
                </li>
                <li>
                    <a href="{{ route('detailProdui', ['id' => $p->id]) }}">
                        <i class="flaticon-exchange-arrows"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="item-content">
            <h4 class="item-title">
                <a href="{{ route('detailProdui', ['id' => $p->id]) }}">{{ $p->nom }}</a>
            </h4>
            <div class="rate-items">
                @forelse ($p->categorie as $c)
                    <div class="rate-item">
                        {{ $c->nom }}
                    </div>
                @empty
                @endforelse

            </div>
            <div class="item-price">{{ $p->monaie . ' ' . $p->prix }}</div>
        </div>
    </div>
@empty 

@endforelse
