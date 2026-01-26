<x-layout>
    <x-slot name="pageTitle">
        {{ $job['title'] }}
    </x-slot>

    <strong><u>{{ $job['title'] }}</u></strong>
    <ul>
        <li><b>Salary:</b> <i>{{ $job['currency_code'] }}</i> {{ $job['salary'] / 100 }}</li>
        <li><b>Location:</b> {{ $job['location'] }}, {{ $job['country_code'] }}</li>
        <li><b>Company:</b> {{ $job['company']['name'] }}</li>
        <li><b>Job ID:</b> {{ $job['id'] }}</li>
    </ul>
</x-layout>
