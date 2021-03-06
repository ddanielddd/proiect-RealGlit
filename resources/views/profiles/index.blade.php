@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="fw-bolder display-6">{{ $user->username }}</div>
                    <div> &nbsp </div>
                    @can('update', $user->profile)
                    @else
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endcan
                </div>

                @can('update', $user->profile)
                
                    <a href="/p/create"><button type="button" class="btn btn-outline-dark">Adaugă postare nouă</button></a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit"><button type="button" class="btn btn-outline-info">Editează profilul</button></a>
            @endcan

            <div class="d-flex pt-2">
                <div class="pr-5"><strong>{{ $postCount }}</strong> postări</div>
                <div> &nbsp </div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> urmăritori </div>
                <div> &nbsp </div>
                <div class="ppr-5"><strong>{{ $followingCount }}</strong> urmăriri </div>
            </div>
            <div class="pt-4 fw-bolder">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" class="link-secondary" >{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @forelse($user->posts as $post)
            <div class="col-3 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>

        @empty
          <p class="text-center">
           
           @can('update', $user->profile)
                <strong>
                    <a href="/p/create"><button type="button" class="btn btn-outline-dark">Publica prima postare</button></a>
                </strong>
                @endcan
        </p>
        @endforelse
    </div>
</div>
@endsection