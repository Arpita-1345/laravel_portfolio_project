@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Education</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Education</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title 1</th>
                        <th scope="col">Title 2</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>
                    @if (count($educations) > 0)
                        @foreach ($educations as $education)
                            <tr>
                                {{-- <th scope="row">{{$education->id}}</th> --}}
                                <td>{{ $education->title1 }}</td>
                                <td>{{ $education->title2 }}</td>
                                <td>{{ $education->description }}</td>
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{ route('admin.education.edit', $education->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-2"> 
                                             <form action="{{ route('admin.education.destroy', $education->id) }}"  method="POST">
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
