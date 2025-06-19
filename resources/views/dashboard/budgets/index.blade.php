<x-layout>
    <x-slot name="page_name">Budget Reminder</x-slot>
    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Budget</li>
    </x-slot>

    <x-slot name="page_content">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Budget Reminders</h5>
                            <p class="text-muted">
    This table shows your active monthly budget limits by category. Monitor which budgets are on track and which have been exceeded, so you can manage your expenses more effectively.
</p>

                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <a href="{{ route('dashboard.budgets.create') }}" class="btn btn-primary mb-3">+ Add Reminder</a>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                        <th>Limit</th>
                                        <th>Period</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($reminders as $reminder)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $reminder->category->name }}</td>
                                            <td>Rp {{ number_format($reminder->limit_amount, 0, ',', '.') }}</td>
                                            <td>{{ ucfirst($reminder->period) }} - {{ $reminder->month }} {{ $reminder->year }}</td>
                                            <td>
                                                @if($reminder->isExceeded())
                                                    <span class="badge bg-danger">Exceeded</span>
                                                @else
                                                    <span class="badge bg-success">On Track</span>
                                                @endif
                                            </td>
                                            <td>
    <a href="{{ route('dashboard.budget.edit', $reminder->id) }}" class="btn btn-warning btn-sm"><i class="bx bx-edit"></i></a>
    <form action="{{ route('dashboard.budget.destroy', $reminder->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete reminder for {{ $reminder->category->name }}?')"><i class="ri-delete-bin-5-line"></i></button>
    </form>
</td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No reminders yet</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
