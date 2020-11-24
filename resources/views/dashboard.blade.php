<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden  ">
{{--                <x-jet-welcome />--}}

                <div class="row-auto">
                    <div class="grid lg:grid-cols-6 md:grid-cols-6 gap-4">
                        <div class=" lg:col-start-1 lg:col-span-2 md:col-start-1 md:col-span-2">
                            @livewire('user-card')
                        </div>
                        <div class=" lg:col-end-7 lg:col-span-4 md:col-end-7 md:col-span-4 ">
                            <div class="flex justify-center">
                                <h1>copy referal link</h1>
                            </div>
                            <div class="flex justify-center">
                                <p> {{route('register',['ref' => $user->slug ?? "" ])}}</p>
                            </div>

                            Under construction
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
