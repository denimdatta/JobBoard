<x-layout>
    <x-slot name="pageTitle">
        Jobs Page
    </x-slot>

    <ul>
        @foreach($jobs as $job)
            <li><strong>{{ $job['title'] }}</strong>: pays <i>{{ $job['salary'] }}</i> in <u>{{ $job['location'] }}</u></li>
        @endforeach
    </ul>
</x-layout>
