@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('admin.contact.update',$contact->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- {{ method_field('PUT')}} --}}
            
    
                <div class="row">
                    
                    <div class="form-gourp.col.md-4 mt=3">
                        <div>
                            <div class="mb-3">
                            <label for="email"><h4>Email</h4></label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$contact->email}}">
                        </div>
                        <div>
                            <div class="mb-5">
                            <label for="call"><h4>Call</h4></label>
                            <input type="text" class="form-control" id="call" name="call" value="{{$contact->call}}">
                        </div>
                        <div>
                        <div class="form-group col-md-6 mt-3">
                            <label for="location"><h4>Location</h4></label>
                            <textarea type="text" class="form-control" id="location" name="location"> value="{{$contact->location}}" </textarea>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn-btn-primary mt-5">
        </div>
    </form>
    </main>
@endsection
