@props(['linkClass' => '', 'companyColorClass' => '', 'jobs' => ''])

<div class="space-y-4">
    @foreach($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border rounded-lg {{ $linkClass }}">
            <div class="font-bold text-sm {{ $companyColorClass }}">
                {{ $job->company->name }}
            </div>
            <strong>{{ $job['title'] }}</strong>
            <div>
                Pays
                {{ $job['currency_code'] }} {{ $job['salary'] / 100 }}
                in
                {{ $job['location'] }}, {{ $job['country_code'] }}
            </div>
        </a>
    @endforeach
</div>

<div class="mt-4 mb-20">
    {{ $jobs->links() }}
</div>