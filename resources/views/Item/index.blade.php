<x-site-layout>

    <h1 class="text-4xl font-bold">Items overview</h1>

    @foreach($items as $item)
        <div>
            <a href="/items/{{$item->id}}">{{ $item->title }}</a>
        </div>
    @endforeach

</x-site-layout>
