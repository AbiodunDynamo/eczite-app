@extends('eczite_layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('eczite/dashboard.css')}}"/>
@endpush

@section('content')
    <main class="flex-center-item">
        <div class="preliminary flex-center-item">
            <div class="image-line">
                <img src="{{Auth::user()->profile_photo_url }}" alt="Profile picture">
                <h1>{{$user->name}}</h1>
            </div>
            <div class="content">
                <h1>Activity</h1>
                <ul>
                    <li class="flex-spread-item">Rides: <span>24</span></li> <hr>
                    <li class="flex-spread-item">Ranking: <span>53</span></li> <hr>
                    <li class="flex-spread-item">Level: <span>Amateur</span></li>
                </ul>
            </div>
        </div>
        <div class="details">
            <div class="parts">
                <x-part-one-dashboard name="{{$user->name}}" email="{{$user->email}}" slug="{{$user->slug}}" phone="{{$user->phone_no}}"/>
                <x-part-three-dashboard/>
                <div class="bg-white">
                    refer you friends
                    <x-share-card>
                        {{$user->slug}}
                    </x-share-card>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script>
        var buttons = document.querySelectorAll('.tab-buttons')
        var eachPart = document.getElementsByClassName('part')

        buttons.forEach(function (item, index) {
            item.addEventListener('click', (event) => {
                var number = index
                for (i = 0; i < eachPart.length; i++) {
                    var textNotShow = eachPart[i]
                    var textToShow = eachPart[number]
                    textNotShow.classList.remove("active")
                }
                console.log(textToShow)
                textToShow.classList.add("active")
            })
        })
    </script>
@endpush
