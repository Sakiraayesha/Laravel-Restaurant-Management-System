@extends('admin.home')

@section('content')
<div class="container">
    <form action={{empty($admin) ? "/addadmin" : "/admin/update/$admin->id"}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10 offset-1 formWrapper">
                <div class="row">
                    <h1 class="contentTitle">
                        {{empty($admin) ? "ADD ADMIN" : "EDIT ADMIN DETAILS"}}
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label pl-0 inputLabel">Name</label>
                            <input id="name" name="name" type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ !empty($admin) ? $admin->name : ""}}"
                            placeholder="Name" required/>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label pl-0 inputLabel">Email</label>
                            <input id="email" name="email" type="text" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ !empty($admin) ? $admin->email : ""}}"
                            placeholder="Email" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label pl-0 inputLabel">Password</label>
                            <input id="password" name="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" 
                            placeholder="Password"
                            @empty($admin)
                                required
                            @endempty
                            />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="row">
                            <div class="itemImgWrapper">
                                <img id="itemImg" src= {{ !empty($admin) ? "/storage/".$admin->profile_photo_path : "/assets/images/upload.png"}} />
                            </div>
                            <label for="image" class="col-form-label uploadImg">Upload Image</label>
                            <input type="file" id="image" name="image" style="display: none" 
                            accept="image/*" onchange="loadFile(event)"
                            class="form-control @error('image') is-invalid @enderror" 
                            @empty($admin)
                                required
                            @endempty
                            />
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn saveButton">
                        {{empty($admin) ? "SAVE" : "UPDATE"}}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

<script>
    var loadFile = function(event) {
        var image = document.getElementById('itemImg');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>