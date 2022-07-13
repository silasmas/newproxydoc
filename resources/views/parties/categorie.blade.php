<div class="widget widget-categories">
    <h3 class="section-title title-bar-primary">Categories</h3>
    <ul>
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