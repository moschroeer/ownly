<x-site-layout>
    <body>
            <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">

        </header>
            <div class="mx-auto max-w-7xl py-6">
                <div class="hidden md:grid md:grid-cols-4 md:gap-6">
                    @foreach($items as $item)
                        <div class="rounded-2xl bg-white shadow-lg ring-2 ring-white p-6">
                            <div class="w-full h-40 rounded-xl bg-slate-200 mb-2" ></div>
                            <a href="/items/{{$item->id}}" class="text-lg font-semibold mt-6">{{ $item->title }}</a>
                            <div>{{$item->category}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
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

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>

</x-site-layout>
