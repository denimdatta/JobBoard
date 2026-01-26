<x-layout>
    <x-slot name="pageTitle">
        {{ $company['name'] }} | Jobs Page
    </x-slot>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-green-500 rounded-lg">
                <strong>{{ $job['title'] }}</strong>
                : pays
                <i>{{ $job['currency_code'] }} {{ $job['salary'] / 100 }}</i>
                in
                <u>{{ $job['location'] }}, {{ $job['country_code'] }}</u>
            </a>
        @endforeach
    </div>
</x-layout>
