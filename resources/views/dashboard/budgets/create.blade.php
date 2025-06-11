<x-layout>
    <x-slot name="page_name">Set Budget Reminder</x-slot>
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
                            <h5 class="card-title">Set Budget Reminder</h5>

                            <form action="{{ route('dashboard.budgets.store') }}" method="POST">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="category_id" required>
                                            <option value="">-- Select Category --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Limit Amount</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="limit_amount" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Period</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="period" required>
                                            <option value="weekly">Weekly</option>
                                            <option value="monthly">Monthly</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Month</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="month" required>
                                            @foreach ([
                                                'January', 'February', 'March', 'April', 'May', 'June',
                                                'July', 'August', 'September', 'October', 'November', 'December'
                                            ] as $month)
                                                <option value="{{ $month }}">{{ $month }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Year</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="year" value="{{ date('Y') }}" required>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <a href="{{ route('dashboard.budget.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
