@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Contact</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Call</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contacts) > 0)
                        @foreach ($contacts as $contact)
                            <tr>
                               
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->call }}</td>
                                <td>{{ $contact->location }}</td>
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{ route('admin.contact.edit', $contact->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-2"> 
                                             <form action="{{ route('admin.contact.destroy', $contact->id) }}"  method="POST">
                                                @csrf
                                                @method('DELETE') 
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        
                        @endforeach
                    @endif

                </tbody>
            </table>
    </main>
@endsection
