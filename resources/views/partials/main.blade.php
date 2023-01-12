@extends('layouts.app')

@section('main')
    <main>
        <div class="cards">
            @foreach ($comics_info as $item)
                <div class="card">
                    <img src="{{ $item['thumb'] }}" alt="magazine">
                    <h6>{{ $item['title'] }} </h6>
                </div>
            @endforeach
        </div>
        <button class="loadmore">LOAD MORE</button>
    </main>
@endsection
