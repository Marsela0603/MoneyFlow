@use(App\Models\User)
<!-- resources/views/dashboard/notifications/index.blade.php -->
<x-layout>
    <x-slot name="page_name">Notifikasi</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Notifikasi</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Notifikasi</h5>
                        <p>Berikut adalah notifikasi yang kamu terima terkait aktivitas di sistem.</p>

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('dashboard.notifications.readAll') }}">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm mb-3"><i class="bi bi-check2-square"></i> Tandai semua telah dibaca</button>
                        </form>

                        <ul class="list-group">
                            @forelse ($notifications as $notif)
                            <li class="list-group-item {{ $notif->is_read ? '' : 'bg-light' }}">
                                <strong>{{ $notif->title }}</strong><br>
                                {{ $notif->message }}<br>
                                <small class="text-muted">{{ $notif->created_at->diffForHumans() }}</small>
                            </li>
                            @empty
                            <li class="list-group-item">Tidak ada notifikasi.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    </x-slot>
</x-layout>
