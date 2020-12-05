<x-guest-layout>
    @push('css')
        <link rel="stylesheet" type="text/css" href="/eczite/registration.css"/>
    @endpush
        <div class="main-content">
        <div class="contents-site">
            <p class="site-heading">Eczite</p>
            <p class="site-detail">
                Hailing a ride made easy
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque corporis cupiditate, debitis, deleniti dicta ducimus est et eum, ex harum iste laboriosam laudantium libero officiis pariatur quam quasi vel.
            </p>
        </div>
        <div class="contents-form">
            <div class="cards-container">
                <div class="cards">
                    <div class="card_face card_face_front">
                        <div class="logo">
                            <x-logo/>
                        </div>
                        <h2 class="reg-header">Users Registration Form </h2>
                        <form class="registration-form" action="{{route('register.user')}}" method="post" >
                            @csrf
                            <div class="inputGroup">
                                <input type="text"  name="name" id="name" required>
                                <label for="name" class="label-name"><span class="label-content">Full Name</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="text" name="email" id="email" required>
                                <label for="email" class="label-name"><span class="label-content">Email Address</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="password" name="password" id="password" required>
                                <label for="password" class="label-name"><span class="label-content">Enter Password</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="password" name="password_confirmation" id="password_confirmation" required>
                                <label for="password_confirmation" class="label-name"><span class="label-content">Enter Password</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="text" required="required" id="number" name="phone_no">
                                <label for="number" class="label-name"><span class="label-content">Phone Number</span></label>
                            </div>
                            <div class="submit inputGroup-button">
                                <input class="btn-signup " type="submit" value="Submit"/>
                                <div class="flip"><a id="driver-toggle" class="flip-actionBtn"> Register as a Driver?</a></div>
                            </div>
                        </form>
                    </div>
                    <div class="card_face  card_face_back">
                        <h2 class="reg-header">Drivers Registration Form</h2>
                        <form class="registration-form" action="{{route('register.driver')}}" method="post" >
                            @csrf
                            <div class="inputGroup">
                                <input type="text"  name="name" id="name-2" required>
                                <label for="name-2" class="label-name"><span class="label-content">Full Name</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="text" name="email" id="email-2" required>
                                <label for="email-2" class="label-name"><span class="label-content">Email Address</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="password" name="password" id="password-2" required>
                                <label for="password-2" class="label-name"><span class="label-content">Enter Password</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="password" name="password_confirmation" id="password_confirmation-2" required>
                                <label for="password_confirmation-2" class="label-name"><span class="label-content">Enter Password</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="text" required="required" id="number-2" name="phone_no">
                                <label for="number-2" class="label-name"><span class="label-content">Phone Number</span></label>
                            </div>
                            <div class="inputGroup">
                                <input type="text" required="required" name="location">
                                <label class="label-name"> <span class="label-content">Location</span> </label>
                            </div>

                            <div class="inputGroup">
                                <select id="vehicle" name="vehicle">
                                    <option value="#">Select your vehicle type.....</option>
                                    <option value="bike">Bike</option>
                                    <option value="car">Car</option>
                                    <option value="bus">Bus</option>
                                </select>
                                <label class="label-name"> <span class="label-content">Vechicle</span> </label>
                            </div>
                            <div class="submit inputGroup-button">
                                <input class="btn-signup" type="submit" value="Submit"/>
                                <div class="flip"><a id="user-toggle" class="flip-actionBtn" > Register as a Passenger?</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script  type="text/javascript">
        var flipped = document.getElementById('user-toggle');
        flipped.addEventListener('click', function(){
            document.querySelector('.cards-container').classList.toggle('is_flipped');
        });

        var flipped = document.getElementById('driver-toggle');
        flipped.addEventListener('click', function(){
            document.querySelector('.cards-container').classList.toggle('is_flipped');
        });
    </script>
    @endpush('js')
</x-guest-layout>

