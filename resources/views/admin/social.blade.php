@extends('admin.layout.app')


@section('heading','Socials')

@section('button')

<div class="">
    {{-- <a href="{{ route('admin_Social_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a> --}}
</div>

@endsection


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>first Photo</th>
                                    <th>second Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($socials as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('uploads/'.$item->first_photo) }}" class="w_100"></td>
                                            <td><img src="{{ asset('uploads/'.$item->second_photo) }}" class="w_100"></td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_Social_edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                {{-- <a href="{{ route('admin_Social_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
