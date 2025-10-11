<x-site-layout>
    @php
        $statusColors = [
          'pending'   => 'bg-amber-100 text-amber-800 ring-amber-200',
          'approved'  => 'bg-blue-100 text-blue-800 ring-blue-200',
          'lended'    => 'bg-indigo-100 text-indigo-800 ring-indigo-200',
          'returned'  => 'bg-emerald-100 text-emerald-800 ring-emerald-200',
          'cancelled' => 'bg-rose-100 text-rose-800 ring-rose-200',
        ];
    @endphp
    <div class="mx-auto max-w-6xl py-6">
        <h1 class="text-4xl font-bold mb-6">Reservation Overview</h1>
        <div class=" md:grid md:gap-6">
        @foreach($reservations as $reservation)
                @php
                    $badge = $statusColors[$reservation->status] ?? 'bg-gray-100 text-gray-800 ring-gray-200';
                @endphp
                <div class="rounded-2xl bg-white shadow-lg ring-2 ring-white p-6 flex items-center justify-between gap-4">
                    <div class="text-ml font-semibold">
                        <a href="/reservations/{{$reservation->id}}">{{ $reservation->rental->title }}</a>
                     </div>
                    <span class="inline-flex items-center rounded-md px-3 py-1 text-sm font-medium ring-1 {{ $badge }}">
                        {{ ucfirst($reservation->status) }}
                    </span>
                </div>
        @endforeach
        </div>
    </div>

</x-site-layout>
