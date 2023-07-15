@extends('admin.layout.app')


@section('heading','Edit Achievement')

@section('button')

<div class="">
    <a href="{{ route('admin_Achievement') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All </a>
</div>

@endsection


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_Achievement_update',$achievement_single->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Existing Photo</label>
                            <div>
                                <img src="{{ asset('uploads/'.$achievement_single->photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Photo</label>
                            <div>
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Heading*</label>
                            <input type="text" class="form-control" name="heading" value="{{ $achievement_single->heading }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Slug*</label>
                            <input type="text" class="form-control" name="slug" value="{{ $achievement_single->slug }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description*</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $achievement_single->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
