<x-site-layout>

    <h1 class="text-4xl font-bold">Reservation overview</h1>
    <h1 class="py-2 text-2xl font-semibold text-green-400">Available</h1>

    @foreach($reservations->where('status', 'available') as $reservation)
        <div class="text-ml font-semibold">
            <a href="/reservations/{{$reservation->id}}">{{ $reservation->rental->title }}</a>
        </div>
    @endforeach
    <h1 class="py-2 text-2xl font-semibold text-orange-400">Borrowed</h1>
    @foreach($reservations->where('status', 'borrowed') as $reservation)
        <div class="text-ml font-semibold">
            <a href="/reservations/{{$reservation->id}}">{{ $reservation->rental->title }}</a>
        </div>
    @endforeach

</x-site-layout>
