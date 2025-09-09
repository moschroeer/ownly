<x-site-layout>

    <h1 class="text-4xl font-bold">{{$reservations->rental->title}}</h1>
    <div class="{{$reservations->status === 'available'
        ? 'text-green-800 dark:text-green-300'
        : 'text-amber-800 dark:text-amber-300' }}">
    {{ ucfirst($reservations->status) }}
    </div>

    <div class="mb-2 text-blue-800"> shared by: {{$reservations->rental->owner->name}}</div>
    <div>Start: {{ $reservations->start_use?->diffForHumans() ?? '—' }}</div>
    <div>End: {{ $reservations->end_use?->diffForHumans() ?? '—' }}</div>

</x-site-layout>
