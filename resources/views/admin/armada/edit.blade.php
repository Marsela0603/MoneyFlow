<x-layout>
    <x-slot name="page_name">Jenis Kendaraan</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/jenis_kendaraan">Armada</a></li>
        <li class="breadcrumb-item active">Edit Form Armada</li>
    </x-slot>

    <x-slot name="page_content">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Form Armada</h5>

                <!-- General Form Elements -->
                <form action="{{ url('dashboard/armada/update', $armada->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <label for="merk" class="col-sm-2 col-form-label">Nama Kendaraan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $armada->merk }}" id="merk" name="merk" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nopol" class="col-sm-2 col-form-label">No. Polisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $armada->nopol }}" id="nopol" name="nopol" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="thn_beli" class="col-sm-2 col-form-label">Tahun Beli</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $armada->thn_beli }}" id="thn_beli" name="thn_beli" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" id="deskripsi" name="deskripsi" required>{{ $armada->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_kendaraan_id" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="jenis_kendaraan_id" name="jenis_kendaraan_id" required>
                                <option selected disabled>Pilih Jenis Kendaraan</option>
                                @foreach($jenis_kendaraans as $jenis_kendaraan)
                                    <option value="{{ $jenis_kendaraan->id }}" {{ $jenis_kendaraan->id == $armada->jenis_kendaraan_id ? 'selected' : '' }}>{{ $jenis_kendaraan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kapasitas_kursi" class="col-sm-2 col-form-label">Kapasitas Kursi</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $armada->kapasitas_kursi }}" id="kapasitas_kursi" name="kapasitas_kursi" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="biaya" class="col-sm-2 col-form-label">Biaya</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $armada->biaya }}" id="biaya" name="biaya" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{ $armada->rating }}" id="rating" name="rating" min="1" max="5" required>
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
