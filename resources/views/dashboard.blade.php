<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('kalimat.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Kalimat</label>
                                <input type="text" class="form-control" placeholder="Masukan kalimat" name="kata_kalimat">
                            </div>

                            <div class="text-right">
                                <!-- <a href="{{ route('kalimat.index') }}" class="btn btn-secondary" title="Back"><i
                                        class="fas fa-arrow-left"></i> Back</a> -->
                                <button class="btn btn-primary" title="Save">Proses <i class="fas fa-clock"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

    <div class="bg-white shadow-xl sm:rounded-lg">
        <table class="table table-bordered border-primary">
            <tbody>
                <tr>
                <th scope="col">KATA 1</th>
                <th scope="col">Subjek</th>
                </tr>
                <tr>
                    <th scope="col">KATA 2</th>  
                    <th scope="col">Predikat</th>
                </tr>
                
            </tbody>
        </table>
    </div>
</x-app-layout>

