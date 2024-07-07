<x-layout>
    <x-slot name="page_name">Armada</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/armada">Armada</a></li>
        <li class="breadcrumb-item active">Form Armada</li>
    </x-slot>

    <x-slot name="page_content">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Armada</h5>
                <!-- General Form Elements -->
                <form action="{{ url('/dashboard/armada/store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="merk" class="col-sm-2 col-form-label">Nama Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="merk" name="merk" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nopol" class="col-sm-2 col-form-label">No. Polisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nopol" name="nopol" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="thn_beli" class="col-sm-2 col-form-label">Tahun Beli</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="thn_beli" name="thn_beli" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_kendaraan_id" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="jenis_kendaraan_id" name="jenis_kendaraan_id" required>
                                <option selected disabled>Pilih Jenis Kendaraan</option>
                                @foreach($jenis_kendaraans as $jenis_kendaraan)
                                    <option value="{{ $jenis_kendaraan->id }}">{{ $jenis_kendaraan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kapasitas_kursi" class="col-sm-2 col-form-label">Kapasitas Kursi</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kapasitas_kursi" name="kapasitas_kursi" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="biaya" class="col-sm-2 col-form-label">Biaya</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="biaya" name="biaya" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
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
