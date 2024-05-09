<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bucket') }}
        </h2>
    </x-slot>

   {{$orderedprods}}

</x-app-layout>