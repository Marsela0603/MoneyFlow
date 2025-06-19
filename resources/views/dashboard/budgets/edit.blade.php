<x-layout>
    <x-slot name="page_name">Edit Budget Reminder</x-slot>
    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.budget.index') }}">Budget</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </x-slot>

    <x-slot name="page_content">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Budget Reminder</h5>

                    <form action="{{ route('dashboard.budget.update', $budget->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $budget->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Limit Amount</label>
                            <input type="number" step="0.01" name="limit_amount" class="form-control" value="{{ $budget->limit_amount }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Period</label>
                            <select name="period" class="form-control">
                                <option value="monthly" {{ $budget->period === 'monthly' ? 'selected' : '' }}>Monthly</option>
                                <option value="weekly" {{ $budget->period === 'weekly' ? 'selected' : '' }}>Weekly</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Month</label>
                            <select name="month" class="form-control">
                                @foreach (['January','February','March','April','May','June','July','August','September','October','November','December'] as $month)
                                    <option value="{{ $month }}" {{ $budget->month === $month ? 'selected' : '' }}>{{ $month }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Year</label>
                            <input type="number" name="year" class="form-control" value="{{ $budget->year }}">
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('dashboard.budget.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
