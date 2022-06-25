<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <livewire:datatable
                        model="App\Models\User"
                        name="all-users"
                        include="name, email, type, bio, phone_no, state, district"
                        hide=""
                        sort="email|asc"
                        searchable="name, email"
                        hideable="inline"
                        exportable
                    /> --}}
                    {{-- <livewire:datatable
                        model="App\Models\JobListing"
                        name="jobs-view"
                        include="title, description, level, type, status, qualification, district, state"
                        hide="description"
                        sort="title|asc"
                        searchable="title, description, qualification"
                        hideable="inline"
                        exportable
                    /> --}}
                    <livewire:jobs-table
                        hideable="select"
                        exportable
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
