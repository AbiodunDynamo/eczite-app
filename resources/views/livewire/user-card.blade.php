<div class="bg-white rounded rounded-lg p-3  mx-2 shadow   " style="min-height: 20rem">
    <div class="flex content-center justify-center py-10">
        <img src="{{Auth::user()->profile_photo_url ?? asset('eczite/logo.svg' )}}" class="block  w-auto rounded rounded-full" alt="logo" style="height: 250px;"/>
    </div>
    <div class="border border-dark rounded py-5 px-10 ">
        <div>
            <p class="text-black-50"> <strong> Name: </strong> {{$user->name}}</p>
        </div>
        <div>
            <p class="text-capitalize"> <strong> Name: </strong> {{$user->name}}</p>
        </div>
    </div>
    <div class="flex justify-evenly py-2">
        <div> <span class=""><a href="{{ Share::page(route('register')."?ref=".$user->slug, 'Join Us at eczite  ')->facebook()->getRawlinks()}}" class="social-button"><span class="fa fa-facebook"></span></a></span></div>
        <div><span class=""><a href="{{ Share::page(route('register')."?ref=".$user->slug, 'Join Us at eczite  ')->whatsapp()->getRawlinks()}}" class="social-button"><span class="fa fa-whatsapp"></span></a></span></div>
        <div><span class=""><a href="{{ Share::page(route('register')."?ref=".$user->slug, 'Join Us at eczite  ')->twitter()->getRawlinks()}}" class="social-button"><span class="fa fa-twitter"></span></a></span></div>
        <div><span class=""><a href="{{ Share::page(route('register')."?ref=".$user->slug, 'Join Us at eczite  ')->telegram()->getRawlinks()}}" class="social-button"><span class="fa fa-telegram"></span></a></span></div>
    </div>
    <div class=" flex justify-center ">
        <h1 class="text-muted">Click to refer icons to refer</h1>
    </div>
</div>
