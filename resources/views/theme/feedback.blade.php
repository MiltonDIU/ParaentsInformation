@extends('layouts.master')
@section('content')


    <!-- ----------------------- edit profile start ----------------------- -->
    <section id="edit_profile_main">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" href="{{route('profile')}}"><i class="fas fa-pencil-alt"></i>Edit Profile</a>
                            <a class="nav-link" href="{{route('profile')}}"><i class="fas fa-lock"></i>Reset Password</a>
                            <a class="nav-link" href="{{ route('feedback') }}"><i class="fas fa-envelope"></i>Feedback</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="edit_profile" role="tabpanel" aria-labelledby="edit_profile_tab">
                            <form method="POST" action="{{ route("admin.feedbacks.store") }}" enctype="multipart/form-data">
                                @csrf
                            <div class="edit_form_groups">



                                <div class="edit_input full_width mb-3">
                                    <label for="presentAddress" class="paragraph edit_input_text">Feedback Type</label>
                                    <select style="margin-left: 25px" class="form-control select2 {{ $errors->has('feedback_category') ? 'is-invalid' : '' }}" name="feedback_category_id" id="feedback_category_id">
                                        @foreach(  \App\Models\Feedback::feedbackCategories() as $id => $entry)
                                            <option value="{{ $id }}" {{ old('feedback_category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                        @endforeach
                                    </select>

                                </div>


                                <div class="edit_input full_width mb-3">
                                    <label for="presentAddress" class="paragraph edit_input_text">Feedback Message</label>
                                    <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{{ old('content') }}</textarea>

                                </div>
                                <div class="col-md-12">
                                    @if($errors->has('content'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('content') }}
                                        </div>
                                    @endif
                                </div>


                                <div class="edit_input full_width mb-3">
                                    <label for="presentAddress" class="paragraph edit_input_text"></label>
                                    <input type="submit" value="Send" class="btn btn regular_btn submit_btn">
                                </div>

                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- edit profile end ----------------------- -->


@endsection
