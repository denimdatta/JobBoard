<x-layout>
    <x-slot name="pageTitle">
        Jobs Page
    </x-slot>

    <x-shared-job-list linkClass="border-blue-500" :jobs="$jobs"/>
</x-layout>
