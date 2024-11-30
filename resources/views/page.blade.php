@if (Route::is('product.*'))
    @if (Route::is('product.create'))
        @include('components.product-create')
    @elseif (Route::is('product.edit'))
        @include('components.product-edit')
    @else
        @include('components.product')
    @endif
    
@elseif (Route::is('spesification.*'))
@if (Route::is('spesification.create'))
        @include('components.spesification-create')
    @elseif (Route::is('spesification.edit'))
        @include('components.spesification-edit')
    @else
        @include('components.spesification')
    @endif

@elseif (Route::is('banner.*'))
    @if (Route::is('banner.create'))
        @include('components.banner-create')
    @elseif (Route::is('banner.edit'))
        @include('components.banner-edit')
    @else
        @include('components.banner')
    @endif
    
@elseif (Route::is('about.*'))
    @if (Route::is('about.create'))
        @include('components.about-create')
    @elseif (Route::is('about.edit'))
        @include('components.about-edit')
    @else
        @include('components.about')
    @endif
    
@elseif (Route::is('contact.*'))
    @if (Route::is('contact.create'))
        @include('components.contact-create')
    @elseif (Route::is('contact.edit'))
        @include('components.contact-edit')
    @else
        @include('components.contact')
    @endif

@else
    Error
@endif
