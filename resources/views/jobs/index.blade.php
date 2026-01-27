<x-layout>
    <x-slot name="pageTitle">
        Jobs Page
    </x-slot>

    <x-shared-job-list link-class="border-blue-500" company-color-class="text-blue-500" :jobs="$jobs"/>
</x-layout>
