<x-layout>
    <x-slot name="pageTitle">
        {{ $tag['name'] }} | Jobs Page
    </x-slot>

    <x-shared-job-list linkClass="border-gray-500" :jobs="$jobs"/>
</x-layout>
