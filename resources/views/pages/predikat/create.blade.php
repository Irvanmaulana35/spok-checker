<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Predikat') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Predikat</a></div>
            <div class="breadcrumb-item"><a href="{{ route('subject.index') }}">Data Predikat</a></div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('predikat.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Kata Predikat</label>
                            <input type="text" class="form-control" placeholder="Masukkan kata Predikat" name="kata_predikat">
                        </div>

                        <div class="text-center">
                            <a href="{{ route('predikat.index') }}" class="btn btn-secondary" title="Back"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button class="btn btn-primary" title="Save">Save <i class="fas fa-save"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
   