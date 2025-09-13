<x-site-layout>

    <h1 class="text-4xl font-bold">Items overview</h1>

    <div class="mx-auto max-w-7xl py-6">
        <div class="hidden md:grid md:grid-cols-4 md:gap-6">
    @foreach($items as $item)
        <div class="rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 p-6">
            <div class="w-full h-40 rounded-xl bg-slate-200 mb-2" ></div>
            <a href="/items/{{$item->id}}" class="text-lg font-semibold mt-6">{{ $item->title }}</a>
            <div>{{$item->category}}</div>
        </div>
    @endforeach
        </div>
    </div>
</x-site-layout>
