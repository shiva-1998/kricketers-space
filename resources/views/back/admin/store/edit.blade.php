@include('includes.header')

<div class="page-wrapper">
    <div class="page-content">

        <!-- Page Header -->
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <h5 class=" mb-0 text-uppercase">Add Store</h5>
                    <small class="text-muted">Create a new store</small>
                </div>

                <a href="{{ route('store.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bx bx-arrow-back"></i> Back
                </a>

            </div>


            <!-- Form Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">

                    <form action="{{ route('store.update', $store->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">

                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label">Store Name</label>
                                <input type="text" name="name" value="{{ old('name', $store->name) }}"
                                    class="form-control">
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone', $store->phone) }}"
                                    class="form-control">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email', $store->email) }}"
                                    class="form-control">
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" name="city" value="{{ old('city', $store->city) }}"
                                    class="form-control">
                            </div>

                            <!-- State -->
                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" name="state" value="{{ old('state', $store->state) }}"
                                    class="form-control">
                            </div>

                            <!-- Country -->
                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <input type="text" name="country" value="{{ old('country', $store->country) }}"
                                    class="form-control">
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="{{ old('address', $store->address) }}"
                                    class="form-control">
                            </div>

                            <!-- Image -->
                            <div class="col-md-12">
                                <label class="form-label">Store Image</label>
                                <input type="file" name="image" class="form-control">

                                @if ($store->image)
                                    <img src="{{ asset('uploads/stores/' . $store->image) }}" width="80"
                                        class="mt-2 rounded">
                                @endif
                            </div>

                            <!-- Password -->
                           
                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control">{{ old('description', $store->description) }}</textarea>
                            </div>

                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('store.index') }}" class="btn btn-light px-4">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bx bx-save"></i> Update Store
                            </button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
