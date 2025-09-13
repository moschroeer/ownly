
<x-site-layout>

    <h1 class="text-4xl font-bold">{{$users->name}}</h1>

    <div class="mb-2 text-blue-800">shared items: {{$users->name->owner->item->title}}</div>

    <div>
        {{$items->category}}
    </div>

</x-site-layout>
