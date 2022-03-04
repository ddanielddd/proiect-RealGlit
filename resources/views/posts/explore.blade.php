@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row pt-5">
    <!-- @foreach($posts as $post)
            <div class="col-2 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach -->
        @forelse($posts as $post)
            <div class="col-2 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>

        @empty
        <p class="text-center">
            Nici un rezultat pentru <strong>{{ request()->query('search') }}</strong>
        </p>
        @endforelse
    </div>

    
    <div class="row">
    <nav aria-label="...">
            <div class="pagination col-12 d-flex justify-content-center ">
                {{ $posts->appends(['search' => request()->query('search')])->links() }}
                </div>
    </nav>
     </div>

</div>
@endsection