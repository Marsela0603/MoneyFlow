<x-layout>
    <x-slot name="page_name">Kontak</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Kontak</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section contact">
      <div class="row gy-4">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p>Jalan Lenteng Agung Raya No.20<br>Kec. Jagakarsa, DKI Jakarta 12640</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Hubungi Kami</h3>
                <p>(021) 4759 603<br>(021) 6510300</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>info@velocar.com<br>contact@velocar.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Layanan 24 Jam</h3>
                <p>Senin - Minggu<br>00.00 - 24.00</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subjek" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>
    </x-slot>
</x-layout>