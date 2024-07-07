<x-layout>
    <x-slot name="page_name">Peminjaman</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/peminjaman">Peminjaman</a></li>
        <li class="breadcrumb-item active">Form Peminjaman</li>
    </x-slot>

    <x-slot name="page_content">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Peminjaman</h5>

                <!-- General Form Elements -->
                <form action="{{ url('/dashboard/peminjaman/store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Masukkan jenis kendaraan" id="nama" name="nama" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" placeholder="Masukkan deskripsi" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
        </div>
    </x-slot>
</x-layout>
