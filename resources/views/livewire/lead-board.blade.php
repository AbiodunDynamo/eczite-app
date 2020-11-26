<div class="bg-white shadow-lg p-5 rounded-lg m-2" style="min-height: 30rem">
    <div class="row-auto">
        <h1 class="flex justify-center text-capitalize font-bold">
            Leader Board
        </h1>
    </div>
    <div class="row">
        <div class="bg-white ">
            <div class="divide-y divide-light-blue-400 ...">
                @foreach($users as $key => $user)
                    <div class="pt-4  grid flex justify-items-auto">
                       <div>
                          {{$key + 1 }} . {{$user->name}}
                       </div>
                        <div class="  text-right text-muted font-bold " style="font-size: small;">referrals - {{$user->referral_count}} </div>
                    </div>
                @endforeach
                <div></div>
            </div>
        </div>
    </div>

</div>
