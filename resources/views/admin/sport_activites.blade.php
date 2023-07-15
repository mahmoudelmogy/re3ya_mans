@extends('admin.layout.app')

@section('heading', 'Sport Activites')

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
                                {{-- <th>SL</th> --}}
                                <th>Activity Name</th>
                                <th>Team Info</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($activites as $item)
                                <tr>
                                     @if ($item->rActivity->type == "Sport")
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{$item->rActivity->heading}}</td>
                                        <td>{{ $item->team_name }}</td>
                                        <td>{{ $item->mobile }}</td>

                                        <td class="pt_10 pb_10">
                                           <a href="{{ route('admin_sport_activites_delete',$item->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                     @endif
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
