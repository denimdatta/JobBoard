<x-layout>
    <x-slot name="pageTitle">
        Jobs Page
    </x-slot>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong>
                </a>
                : pays <i>{{ $job['salary'] }}</i> in <u>{{ $job['location'] }}</u>
            </li>
        @endforeach
    </ul>
</x-layout>
