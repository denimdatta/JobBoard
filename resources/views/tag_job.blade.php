<x-layout>
    <x-slot name="pageTitle">
        {{ $tag['name'] }} | Jobs Page
    </x-slot>

    <x-shared-job-list link-class="border-gray-500" company-color-class="text-gray-500" :jobs="$jobs"/>
</x-layout>
