<x-site-layout>

    @php
        $statusColors = [
          'pending'   => 'bg-amber-100 text-amber-800 ring-amber-200',
          'approved'  => 'bg-blue-100 text-blue-800 ring-blue-200',
          'lended'    => 'bg-indigo-100 text-indigo-800 ring-indigo-200',
          'returned'  => 'bg-emerald-100 text-emerald-800 ring-emerald-200',
          'cancelled' => 'bg-rose-100 text-rose-800 ring-rose-200',
        ];
        $badge = $statusColors[$reservations->status] ?? 'bg-gray-100 text-gray-800 ring-gray-200';
    @endphp
<section class="mx-auto max-w-2xl py-6 rounded-2xl bg-white ring-2 ring-white bg-white shadow-lg p-6 my-6">
    <h1 class="text-4xl font-bold">{{$reservations->rental->title}}</h1>
    <h1 class="text-lg font-semibold mt-2">Status: </h1>
        <span class="my-1 inline-flex items-center rounded-md px-3 py-1 text-sm font-medium ring-1 {{ $badge }}">
                        {{ ucfirst($reservations->status) }}
                    </span>
    <h1 class="text-lg font-semibold mt-2">Shared by: </h1>
    <div><a href="/users/{{$reservations->rental->owner->id}}" class=" mb-2 text-blue-800 hover:underline underline-offset-2">{{$reservations->rental->owner->name}}</a></div>
    <h1 class="text-lg font-semibold mt-2">Shared with: </h1>
    <div class="mb-2 text-blue-800"><a href="/users/{{$reservations->borrower->id}}" class="hover:underline underline-offset-2">{{$reservations->borrower->name}}</a></div>

    <div>
        <h1 class="text-lg font-semibold mt-2">Start Date: </h1>
            <div class="grid grid-cols-2 gap-2">
                <div class="inline-flex items-center rounded-md pl-2 py-2 text-sm font-medium ring-1 ring-gray-200 ">{{ $reservations->start_use->format('d.m.Y') }}</div>
                <div class="inline-flex items-center rounded-md pl-2 py-2 text-sm font-medium ring-1 ring-gray-200">{{ $reservations->start_use->format('h:i A') }}</div>
            </div>
        <h1 class="text-lg font-semibold mt-2">End Date: </h1>

            <div class="grid grid-cols-2 gap-2">
                <div class="inline-flex items-center rounded-md pl-2 py-2 text-sm font-medium ring-1 ring-gray-200">{{ $reservations->end_use->format('d.m.Y') }}</div>
                <div class="inline-flex items-center rounded-md pl-2 py-2 text-sm font-medium ring-1 ring-gray-200">{{ $reservations->end_use->format('h:i A') }}</div>
            </div>
    </div>
</section>

</x-site-layout>
