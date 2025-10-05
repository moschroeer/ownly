
<x-site-layout>
    <section class="mx-auto w-3/5 py-6 rounded-2xl bg-white ring-2 ring-white bg-white shadow-lg p-6 my-6">
    <h1 class="text-4xl font-bold">{{$users->name}}</h1>

    <div class="mb-2 text-blue-800">List of shared Items:</div>
        <div class="hidden md:grid md:grid-cols-2 md:gap-6">
    @foreach($users->items as $item)
            <div class=" rounded-2xl bg-white shadow-lg ring-2 ring-white p-6">
                <div class="w-full h-40 rounded-xl bg-slate-200 mb-2" ></div>
                <a href="/items/{{$item->id}}" class="text-lg font-semibold mt-6">{{ $item->title }}</a>
                <div>{{$item->category}}</div>
            </div>
    @endforeach
        </div>
    </section>
</x-site-layout>
