<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Object') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Object</a></div>
            <div class="breadcrumb-item"><a href="{{ route('subject.index') }}">Data Object</a></div>
        </div>
    </x-slot>

    <div>

    </div>
</x-app-layout>
