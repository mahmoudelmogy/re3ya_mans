@extends('admin.layout.app')

@section('heading', 'All Socails')

@section('button')
<div>

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
                                <th>Personal Id</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($socials as $item)
                                <tr>


                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$item->rSocial->personal}}</td>
                                        <td><a title="download" href="{{ asset('uploads/'.$item->file) }}" download="file" ><img src="{{ asset('uploads/'.$item->file) }}" alt="" class="w_150"></a></td>
                                        <td class="pt_10 pb_10">
                                            <a  href="{{ route('admin_all_social_search_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
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
