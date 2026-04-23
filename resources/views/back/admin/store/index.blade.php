@include('includes.header')

<div class="page-wrapper">
    <div class="page-content">

        <!-- Page Header + Controls -->
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between align-items-center gap-2">

                <!-- Left: Title + Info -->
                <div>
                    <h5 class="mb-0 text-uppercase">Stores List</h5>
                    <small class="text-muted">Manage all stores easily</small>
                </div>

                <!-- Right: Actions -->
                <div class="d-flex align-items-center gap-2">

                    <!-- Search -->
                    <input type="text" class="form-control form-control-sm" style="width: 220px;"
                        placeholder="🔍 Search store...">

                    <!-- Add Button -->
                    <a href="{{ route('store.create') }}" class="btn btn-success btn-sm px-3">
                        <i class="bx bx-plus"></i> Add Store
                    </a>

                </div>

            </div>


            <!-- Table Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">

                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">

                            <!-- Table Head -->
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4" width="60">#</th>
                                    <th>Store Details</th>
                                    <th>Email</th>
                                    <th width="160">Phone</th>
                                    <th width="120">Image</th>
                                    <th width="160" class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                                @foreach ($stores as $store)
                                    <tr>
                                        <td class="ps-4 fw-semibold">1</td>

                                        <td>
                                            <div class="d-flex align-items-center gap-3">

                                                <div>
                                                    <div>{{ $store->name }}</div>
                                                    <small class="text-muted">
                                                        {{ $store->city }}, {{ $store->state }}, {{ $store->country }},
                                                        <br>
                                                        {{ $store->address }}
                                                    </small>
                                                </div>
                                            </div>
                                        </td>

                                        <td>{{ $store->email }}</td>
                                        <td>{{ $store->phone }}</td>

                                        <td>
                                            <img src="{{ asset('uploads/stores/' . $store->image) }}"
                                                class="rounded border" width="45" height="45">
                                        </td>

                                        <td class="text-center">

                                            <div class="d-flex justify-content-center gap-2">

                                                <!-- Edit -->
                                                <a href="{{ route('store.edit', $store->id) }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    <i class="bx bx-edit"></i>
                                                </a>

                                                <!-- Delete -->
                                                <form action="{{ route('store.destroy', $store->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                     
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are you sure?')"> <i class="bx bx-trash"></i>
                                                        Delete
                                                    </button>
                                                    
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="card-footer bg-white d-flex justify-content-between align-items-center">

                    <small class="text-muted">
                        Showing
                        <b>{{ $stores->firstItem() }}</b>
                        to
                        <b>{{ $stores->lastItem() }}</b>
                        of
                        <b>{{ $stores->total() }}</b> entries
                    </small>

                    <ul class="pagination pagination-sm mb-0">

                        <!-- Previous -->
                        <li class="page-item {{ $stores->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $stores->previousPageUrl() ?? '#' }}">Previous</a>
                        </li>

                        <!-- Page Numbers -->
                        @for ($i = 1; $i <= $stores->lastPage(); $i++)
                            <li class="page-item {{ $stores->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $stores->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        <!-- Next -->
                        <li class="page-item {{ $stores->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $stores->nextPageUrl() ?? '#' }}">Next</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>

@include('includes.footer')
