<x-site-layout>

    <h1 class="text-4xl font-bold">{{$items->title}}</h1>

    <div class="mb-2 text-blue-800">shared by: {{$items->owner->name}}</div>

    <h1 class="text-2xl font-semibold">Description</h1>
    <div>
        {{$items->description}}
    </div>

</x-site-layout>
