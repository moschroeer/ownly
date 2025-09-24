<x-site-layout>
    <div class="mx-auto w-3/5 py-6 rounded-2xl bg-white shadow-lg ring-2 ring-white p-6 my-6">
    <section class="flex items-center justify-between gap-4">
        <div>
            <h1 class="text-4xl font-bold">{{$items->title}}</h1>
        </div>

        <div class="flex flex-nowrap items-center gap-3">
            <a href="{{$items->id}}/edit" class="inline-flex rounded-md px-4 py-2 border-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white">
                Edit
            </a>

        <form action="/items/{{$items->id}}" method="post" class="inline-block m-0">
            @method('DELETE')
            @csrf
            <button class="inline-flex rounded-md px-4 py-2 border-2 border-blue-500 hover:border-blue-500 bg-white hover:bg-blue-500 text-blue-500 hover:text-white">
                Delete
            </button>
        </form>
        </div>
    </section>


    <div class="mb-2 text-blue-800">shared by: {{$items->owner->name}}</div>

    <h1 class="text-2xl font-semibold">Description</h1>
    <div>
        {{$items->description}}
    </div>
    </div>


</x-site-layout>
