@if (Route::is('product.*'))
    @include('components.product')
@elseif (Route::is('spesification.*'))
    @include('components.spesification')
@elseif (Route::is('banner.*'))
    @include('components.banner')
@elseif (Route::is('about.*'))
    @include('components.about')
@else
    Error
@endif
