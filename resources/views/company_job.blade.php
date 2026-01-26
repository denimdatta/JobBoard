<x-layout>
    <x-slot name="pageTitle">
        {{ $company['name'] }} | Jobs Page
    </x-slot>

    <x-shared-job-list link-class="border-green-500" company-color-class="text-green-500" :jobs="$jobs"/>
</x-layout>
