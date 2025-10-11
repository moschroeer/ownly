<x-site-layout>
    <section class="flex items-center justify-between max-w-6xl mx-auto pt-6">
    <div>
        <h1 class="text-4xl font-bold">Items Overview</h1>
    </div>
    <div>
        <a href="items/create" class="inline-block rounded-md px-8 py-2 border-blue-500 hover:border-blue-700 bg-blue-500 hover:bg-blue-700 text-white">
            Add item
        </a>
    </div>
    </section>
    <div class="mx-auto max-w-6xl py-6">
        <div class="hidden md:grid md:grid-cols-4 md:gap-6">
    @foreach($items as $item)
        <div class="rounded-2xl bg-white shadow-lg ring-2 ring-white p-6">
            <div class="w-full h-40 rounded-xl bg-slate-200 mb-2" ></div>
            <div><a href="/items/{{$item->id}}" class="text-lg font-semibold mt-6">{{ $item->title }}</a></div>
            <div class="mt-2 inline-flex items-center rounded-md px-3 py-1 text-sm font-medium ring-1 bg-gray-50 text-gray-600 ring-gray-200">{{$item->category}}</div>
        </div>
    @endforeach
        </div>
    </div>
</x-site-layout>
