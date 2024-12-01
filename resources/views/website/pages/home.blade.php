@section('title', 'Home')
@include('website.components.head')
@include('website.components.toolbar')
@include('website.components.navbar')

@include('website.components.banner')
@include('website.components.search')
@include('website.components.product')

@include('website.components.footer')
<livewire:sales-person />
@include('website.components.script')