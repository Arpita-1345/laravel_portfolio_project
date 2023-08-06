@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Portfolio</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Portfolio</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title 1</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>

                </thead>
                <tbody>
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                {{-- <th scope="row">{{$education->id}}</th> --}}
                                <td>{{ $portfolio->title1 }}</td>
                                <td>{{ $portfolio->description }}</td>
                                <td>
                                    <img style="height: 10vh" src="{{url($portfolio->image)}}" alt="image">
                                </td>
                                    <td>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-2"> 
                                             <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}"  method="POST">
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
