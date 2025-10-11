<x-site-layout>
    <div class="mx-auto max-w-2xl my-6 rounded-2xl bg-white shadow-lg ring-2 ring-white p-6">
    <section class="flex items-center justify-between gap-4">
        <div>
            <h1 class="text-4xl font-bold">{{$items->title}}</h1>
        </div>

        @auth
            @if($items->canEditOrDelete(auth()->user()))

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
            @endif
        @endauth
    </section>
<div class="flex flex-nowrap items-center gap-3 mt-2">
        <div class="h-8 inline-flex items-center rounded-md px-3 text-sm font-medium ring-1 bg-gray-50 text-gray-600 ring-gray-200"> {{$items->category}} </div>
        <div class="h-8 inline-flex items-center rounded-md px-3 text-sm font-medium ring-1 bg-blue-50 text-blue-500 ring-blue-200"><x-hugeicons-location-01 class="w-6 h-6 mr-2"/> {{$items->address}} </div>
</div>
    <section class="grid grid-cols-3 gap-4 grid-rows-2 h-80 my-4">
            <div class="col-span-2 row-span-2 rounded-xl bg-slate-200" ></div>
                <div class="rounded-xl bg-slate-200" ></div>
                <div class="rounded-xl bg-slate-200" ></div>
    </section>
    <div class="mb-2 text-blue-800">Shared by: <a href="/users/{{$items->owner->id}}" class="hover:underline underline-offset-2">{{$items->owner->name}}</a>
        </div>

    <h1 class="text-2xl font-semibold">Description</h1>
    <div>
        {{$items->description}}
    </div>
    </div>


</x-site-layout>
