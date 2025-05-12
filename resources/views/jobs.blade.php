<x-layout>
    <x-slot name="heading">Jobs Page</x-slot>
    <ol>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }}
                </a>
            </li>
        @endforeach
    </ol>
</x-layout>