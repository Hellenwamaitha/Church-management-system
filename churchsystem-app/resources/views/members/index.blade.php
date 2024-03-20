@extends('members.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="container">
            <div class="container-header">Members List</div>
            <div class="container-body">
                <a href="{{ route('members.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Member</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Residence</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($members as $member)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->department }}</td>
                            <td>{{ $member->phone number }}</td>
                            <td>{{ $member->residence }}</td>
                            <td>
                                <form action="{{ route('members.destroy', $member->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('members.show', $member->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this member');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Member Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $members->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection