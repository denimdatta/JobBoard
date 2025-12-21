<x-layout>
    <x-slot name="pageTitle">
        Job Id : {{ $job['id'] }}
    </x-slot>

    <strong><u>{{ $job['title'] }}</u></strong>
    <ul>
        <li><b>Salary:</b> {{ $job['salary'] }}</li>
        <li><b>Location:</b> {{ $job['location'] }}</li>
    </ul>
</x-layout>
