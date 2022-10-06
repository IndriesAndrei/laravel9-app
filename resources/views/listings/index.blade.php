@extends('layout')

@section('content')
    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        
        @if(count($listings) == 0)
            <p>No listings found</p>
        @endif
        
        @foreach($listings as $listing)
            {{-- accessing the component listing-card and send/pass props to it 
                we need to add : to pass variables: ex: :listing="$listing" --}}
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>

    <div class="mt-6 p-4">
        {{-- show the page numbers with links() function --}}
        {{ $listings->links() }}
    </div>
@endsection
