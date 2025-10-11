
<x-site-layout>
    <section class="mx-auto max-w-2xl py-6 rounded-2xl bg-white ring-2 ring-white bg-white shadow-lg p-6 my-6">
    <h1 class="text-4xl font-bold">{{$users->name}}</h1>

    <div class="text-lg font-semibold mt-2 mb-2">List of shared Items:</div>
        <div class="hidden md:grid md:grid-cols-2 md:gap-6">
    @foreach($users->items as $item)
            <div class=" rounded-2xl bg-white shadow-lg ring-2 ring-white p-6">
                <div class="w-full h-40 rounded-xl bg-slate-200 mb-2" ></div>
                <div><a href="/items/{{$item->id}}" class="text-lg font-semibold mt-6">{{ $item->title }}</a></div>
                <div class="mt-2 inline-flex items-center rounded-md px-3 py-1 text-sm font-medium ring-1 bg-gray-50 text-gray-600 ring-gray-200">{{$item->category}}</div>
            </div>
    @endforeach
        </div>
    </section>
</x-site-layout>
