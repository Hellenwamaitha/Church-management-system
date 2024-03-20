@extends('members.layouts')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="float-start">
            Members Information
        </div>
        <div class="float-end">
            <a href="{{ route('members.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
        </div>
    </div>
    <div class="card-body">

        <div class="row">
            <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $member->name }}
            </div>
        </div>

        <div class="row">
            <label for="department" class="col-md-4 col-form-label text-md-end text-start"><strong>Department:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $member->department }}
            </div>
        </div>

        <div class="row">
            <label for="phone_number" class="col-md-4 col-form-label text-md-end text-start"><strong>Phone number:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $member->phone_number }}
            </div>
        </div>

        <div class="row">
            <label for="residence" class="col-md-4 col-form-label text-md-end text-start"><strong>Residence:</strong></label>
            <div class="col-md-6" style="line-height: 35px;">
                {{ $member->residence }}
            </div>
        </div>

    </div>
</div>

@endsection
