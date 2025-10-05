<x-site-layout>

    <h1 class="text-4xl font-bold">Users</h1>
    <div class="mx-auto max-w-7xl py-6">
        <div class="place-self-start hidden md:grid md:grid-cols-4 md:gap-6">
            @foreach($users as $user)
                <div class="rounded-2xl bg-white shadow-lg ring-2 ring-white p-6 w-56">
                    <div class="w-40 h-40 rounded-full bg-slate-200 mb-2 place-self-center" ></div>
                    <div class="place-self-center"><a href="/users/{{$user->id}}" class="text-lg font-semibold mt-6">{{ $user->name}}</a></div>
                 </div>
            @endforeach

        </div>
    </div>
</x-site-layout>
