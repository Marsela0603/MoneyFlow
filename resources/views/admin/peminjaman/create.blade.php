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
                    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ktp_peminjam" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="ktp_peminjam" name="ktp_peminjam" maxlength="16" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keperluan_pinjam" class="col-sm-2 col-form-label">Keperluan Pinjam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="keperluan_pinjam" name="keperluan_pinjam" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mulai" class="col-sm-2 col-form-label">Mulai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="mulai" name="mulai" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="selesai" class="col-sm-2 col-form-label">Selesai</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="selesai" name="selesai" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="komentar_peminjam" class="col-sm-2 col-form-label">Komentar</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="komentar_peminjam" name="komentar_peminjam"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="armada_id" class="col-sm-2 col-form-label">Armada</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="armada_id" name="armada_id" required>
                            <option selected disabled>Pilih Armada</option>
                            @foreach($armadas as $armada)
                                <option value="{{ $armada->id }}">{{ $armada->merk }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
            <!-- End General Form Elements -->
            </div>
        </div>
    </x-slot>
</x-layout>
