
<x-site-layout>

    <h1 class="text-4xl font-bold">{{$users->name}}</h1>

    <div class="mb-2 text-blue-800">List of shared Items:</div>

    @foreach($users->items as $item)
        {{ $item->title }}<br/>
    @endforeach

</x-site-layout>
