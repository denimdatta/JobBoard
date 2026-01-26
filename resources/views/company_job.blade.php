<x-layout>
    <x-slot name="pageTitle">
        {{ $company['name'] }} | Jobs Page
    </x-slot>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong>
                </a>
                : pays <i>{{ $job['currency_code'] }} {{ $job['salary'] / 100 }}</i> in <u>{{ $job['location'] }}, {{ $job['country_code'] }}</u>
            </li>
        @endforeach
    </ul>
</x-layout>
