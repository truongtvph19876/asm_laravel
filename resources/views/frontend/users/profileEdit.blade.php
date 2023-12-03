@extends('frontend.layouts.app')

@section('title') Edit {{$$module_name_singular->name}}'s Profile @endsection

@section('content')
    <form action="{{ route('frontend.users.profileUpdate', encode_id($$module_name_singular->id)) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="card-body text-center" style="display: flex; flex-direction: column">
                        <img class="rounded-circle mt-5 mx-auto" width="150px" src="{{ Storage::url($$module_name_singular->profile->avatar) }}">
                        <div>
                            <label for="avatar" class="btn">Upload avatar</label>
                            <input id="avatar" name="avatar" style="visibility:hidden;" type="file">
                        </div>
                        <span class="font-weight-bold">{{ $$module_name_singular->profile->name }}</span>
                        <span class="text-black-50">{{ $$module_name_singular->profile->email }}</span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-center">Profile Settings</h4>
                    </div>
                    <div class="p-3 py-5">
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <input type="text" class="form-control" placeholder="first name" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Surname</label>
                                <input type="text" class="form-control" value="" placeholder="mobile">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="">
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <button class="btn btn-primary profile-button my-2" type="submit">Save Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
