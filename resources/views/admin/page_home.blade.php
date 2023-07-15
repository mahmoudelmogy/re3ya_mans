@extends('admin.layout.app')


@section('heading','Home Page Content')


@section('main_content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('admin_home_update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row custom-tap">

                            <div class="col-lg-3 col-md-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Banner</button>

                                    <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Achevements</button>

                                    <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Teams</button>

                                    <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">Ethad</button>

                                    <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false">Social Search</button>

                                    <button class="nav-link" id="v-pills-6-tab" data-bs-toggle="pill" data-bs-target="#v-pills-6" type="button" role="tab" aria-controls="v-pills-6" aria-selected="false">Activites</button>






                                  </div>
                            </div>
                            {{-- end buttons --}}

                            <div class="col-lg-9 col-md-12">
                                <div class="tab-content" id="v-pills-tabContent">

                                      {{-- Banner section start --}}
                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="{{ $page_home_data->heading }}">
                                                </div>


                                                <div class="mb-4">
                                                    <label class="form-label">Existing Photo *</label>
                                                    <div>
                                                        <img src="{{asset('uploads/'.$page_home_data->photo) }}" alt="" class="w_300">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Change photo *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="photo">
                                                    </div>
                                                </div>


                                                <div class="mb-4">
                                                    <label class="form-label">Existing Background *</label>
                                                    <div>
                                                        <img src="{{asset('uploads/'.$page_home_data->background) }}" alt="" class="w_300">
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Change Background *</label>
                                                    <div>
                                                        <input type="file" class="form-control mt_10" name="background">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                      {{-- Banner section end --}}

                                      {{-- Achevements section start --}}

                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="achevement_heading" value="{{ $page_home_data->achevement_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Sub Heading</label>
                                                    <input type="text" class="form-control" name="achevement_subheading" value="{{ $page_home_data->achevement_subheading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status*</label>
                                                    <select name="achevement_status" class="form-control select2">
                                                        <option value="Show" @if($page_home_data->achevement_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->achevement_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                      {{-- Achevements section end --}}

                                     {{-- teams section start --}}

                                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="teams_heading" value="{{ $page_home_data->teams_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Sub Heading</label>
                                                    <input type="text" class="form-control" name="teams_subheading" value="{{ $page_home_data->teams_subheading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status*</label>
                                                    <select name="teams_status" class="form-control select2">
                                                        <option value="Show" @if($page_home_data->teams_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->teams_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                      {{-- teams section end --}}


                                      {{-- ethad section start --}}

                                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="mb-4">
                                                            <label class="form-label">Status*</label>
                                                            <select name="ethad_status" class="form-control select2">
                                                                <option value="Show" @if($page_home_data->ethad_status == 'Show') selected @endif>Show</option>
                                                                <option value="Hide" @if($page_home_data->ethad_status == 'Hide') selected @endif>Hide</option>
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                      {{-- ethad section end --}}

                                       {{-- Social Search section start --}}

                                    <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="social_search_heading" value="{{ $page_home_data->social_search_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Sub Heading</label>
                                                    <input type="text" class="form-control" name="social_search_subheading" value="{{ $page_home_data->social_search_subheading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status*</label>
                                                    <select name="social_search_status" class="form-control select2">
                                                        <option value="Show" @if($page_home_data->social_search_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->social_search_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                      {{-- Social Search section end --}}

                                       {{-- Activites section start --}}

                                    <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab" tabindex="0">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="activites_heading" value="{{ $page_home_data->activites_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Sub Heading</label>
                                                    <input type="text" class="form-control" name="activites_subheading" value="{{ $page_home_data->activites_subheading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Status*</label>
                                                    <select name="activites_status" class="form-control select2">
                                                        <option value="Show" @if($page_home_data->activites_status == 'Show') selected @endif>Show</option>
                                                        <option value="Hide" @if($page_home_data->activites_status == 'Hide') selected @endif>Hide</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      {{-- Activites section end --}}




                                  </div>

                                  <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
