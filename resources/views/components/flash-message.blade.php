{{-- show the message from ListingsController --}}
@if(session()->has('message'))
{{-- we use AplineJs so the flash message to disappear after 3 seconds --}}
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-20 py-3">
        <p>{{ session('message') }}</p>
    </div>
@endif