<x-site-layout>
    <body>
    <section class="mx-auto max-w-6xl grid grid-cols-2 justify-items-center items-center h-[70vh]">
        <div class="">
            <h1 class="mb-4 text-6xl font-bold text-slate-900">Your Neighborhood’s Sharing Platform.</h1>
            <p class="text-lg mb-8 mr-8 w-3/4">Welcome to Ownly, where your neighbors are your greatest resource. Share your favorite things, discover what others have to offer, and build real connections.</p>
            <div class="mt-6 ">
                <a href="/items" class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">Get started</a>
            </div>
        </div>
        <div>
            <img src="{{asset('ownlyhero4.png')}}" alt="" class=""/>
        </div>
    </section>
            <div class="mx-auto max-w-6xl py-16">
                <div>
                    <h1 class="text-4xl font-bold">Our Items</h1>
                </div>
                <section class="flex items-center justify-between mt-2 mb-6">
                    <div class="w-3/5 text-lg"> Browse, reserve, and share everyday essentials, all within your community.</div>
                    <div>
                        <a href="/items" class="text-lg hover:underline underline-offset-2 text-blue-500">
                            Show all
                        </a>
                    </div>
                </section>

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
            <div class="mx-auto max-w-6xl py-16">
                <div>
                    <h1 class="text-4xl font-bold">Our Community</h1>
                </div>
                <section class="flex items-center justify-between mt-2 mb-6">
                    <div class="w-3/5 text-lg"> Discover your community and see what they are offering.</div>
                    <div>
                        <a href="/users" class=" text-lg hover:underline underline-offset-2 text-blue-500">
                            Show all
                        </a>
                    </div>
                </section>

                <div class="place-self-start hidden md:grid md:grid-cols-5 md:gap-6">
                    @foreach($users as $user)
                        <div class="rounded-2xl bg-white shadow-lg ring-2 ring-white p-6 w-52">
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
