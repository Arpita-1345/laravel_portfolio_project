@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('admin.abouts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
    
                <div class="row">
                    <div class="form-gourp.col.md-4 mt=3">
                        <div>
                            <div class="mb-3">
                            <label for="title"><h4>Title 1</h4></label>
                            <input type="text" class="form-control" id="title1" name="title1">
                        </div>

                        <div>
                            <div class="mb-5">
                            <label for="title"><h4>Title 2</h4></label>
                            <input type="text" class="form-control" id="title2" name="title2" >
                        </div>
                        <div>
                        <div class="form-group col-md-6 mt-3">
                            <label for="description"><h4>Description</h4></label>
                            <textarea type="text" class="form-control" id="description" name="description" > </textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn-btn-primary mt-5">
        </div>
    </form>
    </main>
@endsection
