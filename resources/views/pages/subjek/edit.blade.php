<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Data Subjek') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Subjek</a></div>
            <div class="breadcrumb-item"><a href="{{ route('subject.index') }}">Data Subjek</a></div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('subject.update', $subjek->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Kata Subjek</label>
                            <input type="text" class="form-control @error('kata_subjek') is-invalid @enderror"
                                name="kata_subjek" value="{{ old('kata_subjek', $subjek->kata_subjek) }}" required>

                            <!-- error message untuk title -->
                            @error('kata_subjek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <a href="{{ route('subject.index') }}" class="btn btn-secondary" title="Back"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" title="Save">Update <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
