<x-layout>
    <x-slot name="pageTitle">
        {{ $company['name'] }} | Jobs Page
    </x-slot>

    <x-shared-job-list linkClass="border-green-500" :jobs="$jobs"/>
</x-layout>
