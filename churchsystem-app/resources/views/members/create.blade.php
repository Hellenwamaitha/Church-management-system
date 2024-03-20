@extends('members.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="container">
            <div class="container-header">
                <div class="float-start">
                    Add New Member
                </div>
                <div class="float-end">
                    <a href="{{ route('members.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('members.store') }}" method="post">
                    @csrf

                    

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="department" class="col-md-4 col-form-label text-md-end text-start">Department</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('department') is-invalid @enderror" id="department" name="department" value="{{ old('department') }}">
                            @if ($errors->has('department'))
                                <span class="text-danger">{{ $errors->first('department') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone number" class="col-md-4 col-form-label text-md-end text-start">Phone number</label>
                        <div class="col-md-6">
                          <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="phone number" name="phone number" value="{{ old('phone number) }}">
                            @if ($errors->has('phone number'))
                                <span class="text-danger">{{ $errors->first('phone number') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="residence" class="col-md-4 col-form-label text-md-end text-start">Residence</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="residence" name="residence">{{ old('residence') }}</textarea>
                            @if ($errors->has('residence'))
                                <span class="text-danger">{{ $errors->first('residence') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add member">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
