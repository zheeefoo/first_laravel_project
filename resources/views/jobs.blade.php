<x-layout>
    <x-slot name="heading">Jobs Page</x-slot>
    <ol>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-black-500 hover:underline hover:text-blue-500">
                    {{ $job['id'] }} -
                    {{ $job['title'] }}
                </a>
            </li>
        @endforeach
    </ol>
</x-layout>