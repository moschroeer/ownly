<x-site-layout>

    <h1 class="text-4xl font-bold">{{$items->title}}</h1>

    <div class="mb-2 text-blue-800">shared by: {{$items->owner->name}}</div>

    <h1 class="text-2xl font-semibold">Description</h1>
    <div>
        {{$items->description}}
    </div>

    <div>
        <a href="{{$items->id}}/edit" class="inline-block rounded-md px-8 py-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white">
            Edit
        </a>
    </div>
    <form action="/items/{{$items->id}}" method="post">
        @method('DELETE')
        @csrf
        <button class="inline-block rounded-md px-8 py-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white">
            Delete
        </button>
    </form>

</x-site-layout>
