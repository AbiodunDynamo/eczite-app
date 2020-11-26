@extends('eczite_layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="/eczite/regPage.css"/>
    <link rel="stylesheet" href="css/app.css'">
@endpush

@section('content')
    <x-jet-validation-errors class="card bg-gray-50 modal" style="border-radius: 20px;"/>
    <div class="container-reg">
        <div class="card">
            <div class="card_face card_face_front">
                <h2>Users Registration Form</h2>
                <form action="{{route('register.user')}}" method="post" >
                    @csrf
                   @isset($ref)
                        <input type="hidden" name="ref" value="{{$ref ?? ""}}">
                    @endisset
                    <div class="inputBox">
                        <input type="text" required="required" name="name">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" required="required" name="email">
                        <span>Email Address</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" required="required" name="phone_no">
                        <span>Enter Whatsapp Phone Number</span>
                    </div>
                    <x-password-input/>
                    <div class="submit inputBox">
                        <input type="submit" value="Submit"/>
                        <div class="flip"><a id="driver" class="flip-actionBtn"> Register as a Driver?</a></div>
                    </div>
                </form>
            </div>

            <div class="card_face card_face_back ">
                <h2>Drivers Registration Form </h2>
                <form action="{{route('register.driver')}}" method="post">
                    @csrf
                    @isset($ref)
                        <input type="hidden" name="ref" value="{{$ref ?? ""}}   ">
                    @endisset
                    <div class="inputBox">
                        <input type="text" required="required" name="name">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" required="required" name="email">
                        <span>Email Address</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" required="required" name="location">
                        <span>Location</span>
                    </div>

                    <div class="inputBox">
                        <select id="vehicle" name="vehicle">
                            <option value="#">Select your vehicle type.....</option>
                            <option value="bike" selected>Bike</option>
                            <option value="car">Car</option>
                            <option value="bus">Bus</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <input type="text" required="required" name="phone_no">
                        <span>Enter Whatsapp Phone Number</span>
                    </div>
                    <x-password-input/>
                    <div class="inputBox">
                        <input type="submit" value="Submit"/>
                        <div class="flip"><a id="rider" class="flip-actionBtn"> Register as a Rider?</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script  type="text/javascript">
        var flipped = document.getElementById('driver');
        flipped.addEventListener('click', function(){
            document.querySelector('.container-reg').classList.toggle('is_flipped');
        });

        var flipped = document.getElementById('rider');
        flipped.addEventListener('click', function(){
            document.querySelector('.container-reg').classList.toggle('is_flipped');
        });
    </script>
@endpush
