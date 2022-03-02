@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>&nbsp</div>
                    <div>
                        <div class="fw-bolder">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <br>
                <div>
                @can('delete', $post)
                <a href="/p/{{ $post->id }}/delete"><button type="button" class="btn btn-outline-danger">Sterge</button></a>
                </div>
                <br>
                @endcan
                    <span class="fw-light"> {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                
                <hr>

                <p>
                    <span class="fw-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                    
                </p>
            </div>
        </div>
    </div>
</div>

@endsection