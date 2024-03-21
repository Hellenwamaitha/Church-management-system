<!-- @extends('believers.layouts')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <div class="float-start">
            Edit Believer
        </div>
        <div class="float-end">
            <a href="{{ route('believers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('believers.update', $believer->id) }}" method="post">
            @csrf
            @method("PUT")

            <div class="mb-3 row">
                <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $believer->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="department" class="col-md-4 col-form-label text-md-end text-start">Department</label>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department" value="{{ $believer->department }}">
                    @error('department')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-end text-start">Phone number</label>
                <div class="col-md-6">
                    <input type="number" step="0.01" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ $believer->phone_number }}">
                    @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="residence" class="col-md-4 col-form-label text-md-end text-start">Residence</label>
                <div class="col-md-6">
                    <textarea class="form-control @error('residence') is-invalid @enderror" id="residence" name="residence">{{ $believer->residence }}</textarea>
                    @error('residence')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection -->
