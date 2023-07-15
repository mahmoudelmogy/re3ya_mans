@extends('admin.layout.app')


@section('heading','Settings Page Content')


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_settings_update') }}" method="post">
                        @csrf

                        <div class="form-group mb-3">
                            <label>phone one</label>
                                <input type="text" name="phone_one" class="form-control" value="{{ $settings->phone_one }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>phone two</label>
                                <input type="text" name="phone_two" class="form-control" value="{{ $settings->phone_two }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>phone three</label>
                                <input type="text" name="phone_three" class="form-control" value="{{ $settings->phone_three }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>email</label>
                                <input type="text" name="email" class="form-control" value="{{ $settings->email }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{ $settings->instagram }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Linkedin</label>
                                <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Copyright</label>
                                <input type="text" name="copyright_text" class="form-control" value="{{ $settings->copyright_text }}">
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
