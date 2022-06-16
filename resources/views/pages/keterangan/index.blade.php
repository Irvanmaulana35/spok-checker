<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Keterangan') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Keterangan</a></div>
            <div class="breadcrumb-item"><a href="{{ route('keterangan.index') }}">Data Keterangan</a></div>
        </div>
    </x-slot>

    <div class="col-12 col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{ route('keterangan.create') }}" class="btn btn-primary mb-2 mt-2">Tambah Data</a>
                    @include('messages.alert')
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($keterangan as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kata_keterangan }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ route('keterangan.edit', $item->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <form action="{{ route('keterangan.destroy', $item->id) }} "
                                                class='ml-1 delete-form' method='POST'>
                                                @csrf
                                                <input type='hidden' name='_method' value='delete'>
                                                <button class='btn btn-danger btn-sm'
                                                    onclick='confirm(`Apakah anda yakin ingin menghapus ?`);'>
                                                    Hapus <i class='fas fa-trash'></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
    </div>
</x-app-layout>
