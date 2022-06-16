<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Objek') }}</h1>

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
                    <form method="POST" action="{{ route('objek.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Kata Predikat</label>
                            <input type="text" class="form-control" placeholder="Masukkan kata Objek" name="kata_objek">
                        </div>

                        <div class="text-center">
                            <a href="{{ route('objek.index') }}" class="btn btn-secondary" title="Back"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" title="Save">Save <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>