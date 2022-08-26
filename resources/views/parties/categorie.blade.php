<div class="widget widget-categories">
    <h3 class="section-title title-bar-primary">Categories</h3>
    <ul>
        <li>
            <a href="{{ route('pharmacie') }}">
                Toutes les catégories
                <span>({{ $allproduits->count() }})</span>
            </a>
        </li>
        @forelse ($cat as $c)
            <li>
            <a href="{{ route('pharmacie', ['cat'=>$c->nom]) }}">
                {{ $c->nom }}
                <span>({{ $c->produit->count() }})</span>
            </a>
        </li>
        @empty

        @endforelse

    </ul>
</div>
