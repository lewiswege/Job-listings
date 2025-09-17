<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li><strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year</li>
    @endforeach

</x-layout>