<x-layout>
    <x-slot name="pageTitle">
        {{ $tag['name'] }} | Jobs Page
    </x-slot>

    <x-shared-job-list link-class="border-gray-500" company-color-class="text-gray-500" :jobs="$jobs"/>

    <div class="mt-4 mb-20">
        {{ $jobs->links() }}
    </div>
</x-layout>
