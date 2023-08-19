@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">main</li>
            </ol>
            <form action="{{ route ('admin.main.update',$main->id)}}" method="post" enctype="multipart/form-data">
                @csrf
    
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <input type="hidden" value="{{ $main->id }}" name="id">
                        <h3>background image</h3>
                        <img style="height:30vh" src="{{ asset('assets/img/header-bg.jpg') }}" class="img=thumbnail">
                        <input class="mt-3" type="file" id="bc_img" name="bc_img" url="{{ $main->bc_img}}">
                    </div>
                    <div class="form-gourp.col.md-4 mt=3">
                        <div>
                            <div class="mb-3">
                            <label for="title"><h4>title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $main->title}}">
                        </div>

                        <div>
                            <div class="mb-5">
                            <label for="sub title"><h4>sub title</h4></label>
                            <input type="text" class="form-control" id="sub title" name="sub title" value="{{ $main->sub_title}}" >
                        </div>
                        <div class="mb-5">
                            <label for="sub title"><h4>name</h4></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $main->name}}" >
                        </div>
                        <div class="mb-5">
                            <label for="sub title"><h4>status</h4></label>
                            <input type="text" class="form-control" id="status" name="status" value="{{ $main->status}}" >
                        </div>
                        <div>
                            <div class="mb-5">
                            <label for="years"><h4>Years</h4></label>
                            <input type="integer" class="form-control" id="years" name="years" value="{{ $main->years}}" >
                        </div>
                        <div>
                            <div class="mb-5">
                            <label for="projects"><h4>Projects</h4></label>
                            <input type="integer" class="form-control" id="projects" name="projects" value="{{ $main->projects}}" >
                        </div>
                        <div>
                            <div class="mb-5">
                            <label for="companies"><h4>Companies</h4></label>
                            <input type="integer" class="form-control" id="companies" name="companies" value="{{ $main->companies}}" >
                        </div>
                        <div>
                            <div class="mb-5">
                            <label for="description"><h4>description</h4></label>
                            <input type="longtext" class="form-control" id="description" name="description" value="{{ $main->description}}" >
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn-btn-primary mt-5">
        </div>
    </form>
    </main>
@endsection
