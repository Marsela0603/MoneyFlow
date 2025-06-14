<x-layout>
    <x-slot name="page_name">Contact</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Contact</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section contact">
      <div class="row gy-4">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p> Jl. Situ Indah 116, Tugu,<br> Cimanggis, Depok, West Java.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Contact Us</h3>
                <p>(021) 4759 603<br>(021) 6510300</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>info@moneyflow.com<br>contact@moneyflow.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>24-Hour Service</h3>
                <p>Monday - Sunday<br>00.00 - 24.00</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">
            {{-- ALERT SUCCESS --}}
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
            <form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="row gy-4">

        <div class="col-md-6">
            <input type="text" name="nama" class="form-control" placeholder="Name" required>
        </div>

        <div class="col-md-6">
            <select name="rating" class="form-control" required>
                <option value="">-- Choose Rating --</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} ⭐</option>
                @endfor
            </select>
        </div>

        <div class="col-md-12">
            <textarea class="form-control" name="description" rows="4" placeholder="Write your feedback or comments." required></textarea>
        </div>

        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>

    </div>
</form>

          </div>

        </div>

      </div>

    </section>
    </x-slot>
</x-layout>