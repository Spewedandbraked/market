<x-app-layout>
    <div style="display: flex; width: fit-content; flex-direction: column; margin:4px; background-color:gainsboro;">
        <h2>Наименование товара: <br/> {{ $product->title }}</h2>
        <h2>Описание товара: <br/> {{ $product->description }}</h2>
        <div style="width: -webkit-fill-available; display: flex; flex-direction: column;">
            <x-responsive-nav-link :href="route('products.destroy', $product->id)" :active="request()->routeIs('products.destroy', $product->id)"> 
                {{ __('Удалить') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.edit', $product->id)" :active="request()->routeIs('products.edit', $product->id)"> 
                {{ __('Редактировать') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.create')" :active="request()->routeIs('products.create')"> 
                {{ __('Купить') }}
            </x-responsive-nav-link>
        </div>
    </div>
</x-app-layout>