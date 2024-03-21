@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Department</td>
          <td>Phone</td>
          <td>Residence</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($believers as $believer)
        <tr>
            <td>{{$believer->id}}</td>
            <td>{{$believer->first_name}}</td>
            <td>{{$believer->last_name}}</td>
            <td>{{$believer->department}}</td>
            <td>{{$believer->phone}}</td>
            <td>{{$believer->residence}}</td>
            <td class="text-center">
                <a href="{{ route('believers.edit', $believer->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('believers.destroy', $believer->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
