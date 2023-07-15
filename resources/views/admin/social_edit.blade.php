@extends('admin.layout.app')


@section('heading','Edit Social')

@section('button')

<div class="">
    <a href="{{ route('admin_Social') }}" class="btn btn-primary"><i class="fas fa-plus"></i> View All </a>
</div>

@endsection


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_Social_update',$social_single->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Existing First Photo</label>
                            <div>
                                <img src="{{ asset('uploads/'.$social_single->first_photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change First Photo</label>
                            <div>
                                <input type="file" name="first_photo">
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label>Existing Second Photo</label>
                            <div>
                                <img src="{{ asset('uploads/'.$social_single->second_photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Change Second Photo</label>
                            <div>
                                <input type="file" name="second_photo">
                            </div>
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
