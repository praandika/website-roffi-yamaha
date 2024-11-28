@if (Route::is('product.*'))
    @if (Route::is('product.create'))
        @include('components.product-create')
    @elseif (Route::is('product.edit'))
        @include('components.product-edit')
    @else
        @include('components.product')
    @endif
    
@elseif (Route::is('spesification.*'))
    @include('components.spesification')
    
@elseif (Route::is('banner.*'))
    @if (Route::is('banner.create'))
        @include('components.banner-create')
    @elseif (Route::is('banner.edit'))
        @include('components.banner-edit')
    @else
        @include('components.banner')
    @endif
    
@elseif (Route::is('about.*'))
    @include('components.about')
@else
    Error
@endif
