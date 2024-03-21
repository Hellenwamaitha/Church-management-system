<!-- @extends('layout')
@section('content')

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
          <td>Name</td>
          <td>Department</td>
          <td>Phone</td>
          <td>Residence</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($believer as $believers)
        <tr>
            <td>{{$believers->id}}</td>
            <td>{{$believers->name}}</td>
            <td>{{$believers->department}}</td>
            <td>{{$believers->phone}}</td>
            <td>{{$believers->residence}}</td>
            <td class="text-center">
                <a href="{{ route('believers.edit', $believers->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('believers.destroy', $believers->id)}}" method="post" style="display: inline-block">
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
@endsection -->

