<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Data Objek') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Objek</a></div>
            <div class="breadcrumb-item"><a href="{{ route('objek.index') }}">Data Objek</a></div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('objek.update', $objek->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Kata Objek</label>
                            <input type="text" class="form-control @error('kata_objek') is-invalid @enderror"
                                name="kata_objek" value="{{ old('kata_objek', $objek->kata_objek) }}" required>

                            <!-- error message untuk title -->
                            @error('kata_objek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <a href="{{ route('objek.index') }}" class="btn btn-secondary" title="Back"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" title="Save">Update <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>