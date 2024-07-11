@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Dashboard</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    </x-slot>

    <x-slot name="page_content">
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-6">
                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Selamat datang di halaman dashboard VELOCAR!</h5>
                            <p>Temukan kenyamanan dan kebebasan dalam perjalanan Anda dengan Velocar.
                              Kami menawarkan beragam pilihan kendaraan dari mobil mewah hingga bus dengan cakupan yang besar.
                              Nikmati pengalaman sewa mobil yang mudah, cepat, dan aman dengan layanan terbaik dari Velocar. Mulai petualangan Anda sekarang!</p>
                            <h5 class="card-title">Alur peminjaman melalui VELOCAR</h5>
                            
                            <div class="activity">
                                <!-- Activity items -->
                                <div class="activity-item d-flex">
                                    <div class="activite-label"></div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Lihat daftar armada yang kami sediakan di tabel <a href="/dashboard/armada/"
                                            class="fw-bold text-dark">armada</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label"></div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Isi form peminjaman di tabel <a href="/dashboard/peminjaman/create"
                                            class="fw-bold text-dark">peminjaman</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label"></div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Tunggu konfirmasi admin dan cek status peminjaman di tabel <a
                                            href="/dashboard/peminjaman/" class="fw-bold text-dark">peminjaman</a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label"></div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Cek total bayar di tabel <a href="/dashboard/pembayaran/"
                                            class="fw-bold text-dark">pembayaran</a>
                                    </div>
                                </div><!-- End activity item-->

                            </div><!-- End activity -->

                        </div><!-- End card body -->
                    </div><!-- End card -->
                </div><!-- End left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Statistik Kendaraan</h5>
                            <div id="pieChart"></div>
                        </div>
                    </div>
                </div><!-- End right side columns -->
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                      // Mengambil data untuk pie chart
                      let labels = [];
                      let series = [];

                      @foreach ($totalArmadaPerJenis as $armada)
                          labels.push('{{ $armada->jenis_kendaraan->nama }}');
                          series.push({{ $armada->total }});
                      @endforeach

                      // Menampilkan pie chart dengan data yang sudah didapat
                      new ApexCharts(document.querySelector("#pieChart"), {
                          series: series,
                          chart: {
                              height: 350,
                              type: 'pie',
                              toolbar: {
                                  show: true
                              }
                          },
                          labels: labels
                      }).render();
                  });
              </script>

            </div><!-- End row -->
            @auth
            @if (Auth::user()->role == User::ROLE_ADMIN)
            <div class="row">
              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Peminjaman</h5>
                    <p>Total Peminjaman yang perlu dikonfirmasi:
                    @if($totalPeminjamanPerluKonfirmasi > 0)
                    <a href="/dashboard/peminjaman"><span class="badge bg-warning text-dark"> {{ $totalPeminjamanPerluKonfirmasi }} peminjaman perlu dikonfirmasi</span></a>
                    @else
                    <span class="badge bg-success">Tidak ada peminjaman yang perlu dikonfirmasi saat ini.</span>
                    @endif
.</p>
                  </div>
                </div>

              </div>
            </div>
            @endif
            @endauth
        </section><!-- End section dashboard -->
    </x-slot><!-- End page content slot -->
</x-layout><!-- End layout component -->
