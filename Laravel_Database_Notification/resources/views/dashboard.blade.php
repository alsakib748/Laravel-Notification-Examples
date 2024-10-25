<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{--
                        auth()->user()->readnotifications as $notification
                        auth()->user()->notifications as $notification
                    --}}
                    @foreach(auth()->user()->unreadnotifications as $notification)
                        <p><strong>{{ $notification->data['name'] }}</strong> started following you !!</p>
                        <a href="{{ route('markasread',$notification->id) }}" style="background-color:cadetblue;color:white;font-weight:bold;border: 1px solid grey; padding: 5px;border-radius: 5px;margin-top:5px;margin-bottom:5px;">Mark as read</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
