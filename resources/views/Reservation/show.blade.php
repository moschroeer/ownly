<x-site-layout>
    <div class="mx-auto w-3/5 py-6 rounded-2xl bg-white ring-2 ring-white bg-white shadow-lg p-6 my-6">
    <h1 class="text-4xl font-bold">{{$reservations->rental->title}}</h1>
    <div class="{{$reservations->status === 'available'
        ? 'text-green-800 dark:text-green-300'
        : 'text-amber-800 dark:text-amber-300' }}">
    {{ ucfirst($reservations->status) }}
    </div>

    <div class="mb-2 text-blue-800"> shared by: {{$reservations->rental->owner->name}}</div>
    <div>Start: {{ $reservations->start_use?->diffForHumans() ?? '—' }}</div>
    <div>End: {{ $reservations->end_use?->diffForHumans() ?? '—' }}</div>
    </div>
</x-site-layout>
