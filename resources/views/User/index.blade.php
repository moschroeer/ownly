<x-site-layout>

    <h1 class="text-4xl font-bold">Users</h1>

    @foreach($users as $user)
        <div>
            <a href="/users/{{$user->id}}">{{ $user->name }}</a>
        </div>
    @endforeach

</x-site-layout>
