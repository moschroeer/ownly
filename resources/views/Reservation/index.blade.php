<x-site-layout>

    <h1 class="text-4xl font-bold">Reservation overview</h1>

    @foreach($reservations as $reservation)
        <div class="text-ml font-semibold">
            <a href="/reservations/{{$reservation->id}}">{{ $reservation->rental->title }}</a>
        </div>
        <div>
            {{$reservation->status}}
        </div>
    @endforeach

</x-site-layout>
