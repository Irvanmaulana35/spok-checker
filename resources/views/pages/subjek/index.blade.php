<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Subjek') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Subjek</a></div>
            <div class="breadcrumb-item"><a href="{{ route('subject.index') }}">Data Subjek</a></div>
        </div>
    </x-slot>

    <div>

    </div>
</x-app-layout>
