<x-layout>
    <x-slot name="heading">Post Page</x-slot>
    <ol>
        @foreach ($posts as $p)
            <li>
                <a href="/post/{{ $p['id'] }}" class="text-black-500 hover:underline hover:text-blue-500">
                    {{ $p['id'] }} -
                    {{ $p['title'] }}
                </a>
            </li>
        @endforeach
    </ol>
</x-layout>