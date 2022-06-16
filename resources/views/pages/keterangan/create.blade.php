<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Keterangan') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Keterangan</a></div>
            <div class="breadcrumb-item"><a href="{{ route('keterangan.index') }}">Data Keterangan</a></div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('keterangan.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Kata Keterangan</label>
                            <input type="text" class="form-control" placeholder="Masukkan kata keterangan" name="kata_keterangan">
                        </div>

                        <div class="text-center">
                            <a href="{{ route('keterangan.index') }}" class="btn btn-secondary" title="Back"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" title="Save">Save <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>