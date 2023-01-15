@extends('layouts.app')

@section('main')
    <div class="infoAndPicture">

        <div class="westSide">
            <h2>{{ $single_comic_info['title'] }}</h2>

            <div class="green-box p-2 m-auto bg-success text-white d-flex justify-content-around">
                <div class="d-flex justify-content-around">
                    <div>U.S. Price: {{ $single_comic_info['price'] }}</div>
                    <div>AVAILABLE</div>
                </div>
                <div class="check-availability w-25">
                    Check Availability
                </div>
            </div>

            <div>
                <p>{{ $single_comic_info['description'] }}</p>
            </div>
        </div>


        <div>
            <img src="{{ asset('images/adv.jpg') }}" alt="adv">
        </div>



    </div>
    <div class="infoBackground">
        <div>
            <h3 class="w-50">Talent</h3>

            <hr class="w-50">
            <div class="d-flex">
                <div class="d-flex w-50 justify-content-between">
                    <div class="w-30">
                        <h5>Art by:</h5>
                    </div>
                    <div class="w-50">
                        @foreach ($single_comic_info['artists'] as $artist)
                            {{ $artist }}
                        @endforeach
                    </div>
                </div>

            
            </div>

            <hr class="w-50">
            <div class="d-flex w-50">
                <div class="w-50">
                    <h5>Written by:</h5>
                </div>
                <div class="w-50">
                    @foreach ($single_comic_info['writers'] as $writer)
                        {{ $writer }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
