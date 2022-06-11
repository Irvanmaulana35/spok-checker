<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Subjek') }}</h1>

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
                    <a href="{{ route('subject.create') }}" class="btn btn-primary mb-2 mt-2">Tambah Data</a>
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
                                @foreach ($subjek as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->kata_subjek }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ route('subject.edit', $item->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <form action="{{ route('subject.destroy', $item->id) }} "
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

    </div>
</x-app-layout>
