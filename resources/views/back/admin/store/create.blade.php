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

                    <form action="{{ route('store.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">

                            <!-- Store Name -->
                            <div class="col-md-6">
                                <label class="form-label">Store Name</label>
                                <input type="text" name="name" value="{{ old('store_name') }}"
                                    class="form-control @error('store_name') is-invalid @enderror"
                                    placeholder="Enter store name">

                                @error('store_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="Enter phone number">

                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" name="city" value="{{ old('city') }}"
                                    class="form-control @error('city') is-invalid @enderror" placeholder="Enter city">

                                @error('city')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">State</label>
                                <input type="text" name="state" value="{{ old('state') }}"
                                    class="form-control @error('state') is-invalid @enderror" placeholder="Enter State">

                                @error('state')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Country</label>
                                <input type="text" name="country" value="{{ old('country') }}"
                                    class="form-control @error('country') is-invalid @enderror" placeholder="Enter Country">

                                @error('country')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="col-md-12">
                                <label class="form-label">Address</label>
                                <input type="text" name="address" value="{{ old('address') }}"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Enter full address">

                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-6">
                                <label class="form-label">Store Image</label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" >

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Preview Box -->
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-md-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Enter description">{{ old('description') }}</textarea>

                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ route('store.index') }}" class="btn btn-light px-4">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-success px-4">
                                <i class="bx bx-save"></i> Save Store
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
