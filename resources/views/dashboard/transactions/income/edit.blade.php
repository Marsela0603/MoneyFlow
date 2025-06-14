<x-layout>
    <x-slot name="page_name">Edit Income</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transactions.income.index') }}">Income</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Income</h5>

                        <form action="{{ route('transactions.income.update', $transaction->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select name="category_id" id="category_id" class="form-select" required>
                                    <option value="" disabled selected>-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $transaction->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control" min="0" value="{{ old('amount', $transaction->amount) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $transaction->date) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $transaction->description) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Income</button>
                            <a href="{{ route('transactions.income.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    </x-slot>
</x-layout>
