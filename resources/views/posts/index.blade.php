@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
            <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 30px;">
                    </div>
                    <div>&nbsp</div>
                    <div>
                        <div class="fw-bolder">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="fw-bolder">{{ $post->user->username }}</span>
                            </a>
                             {{ $post->caption }}
                        </div>
                        <div></div>
                    </div>
                     
                </div>

            </div>
        </div>
    @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
</div>
@endsection