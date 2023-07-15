@extends('admin.layout.app')


@section('heading','Create Team')

@section('button')

<div class="">
    <a href="{{ route('admin_Team') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All </a>
</div>

@endsection


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_Team_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Photo *</label>
                            <div>
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Heading*</label>
                            <input type="text" class="form-control" name="heading" value="{{ old('heading') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description*</label>
                            <textarea name="description" class="form-control editor" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>facebook</label>
                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>instagram</label>
                            <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>linkedin</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
