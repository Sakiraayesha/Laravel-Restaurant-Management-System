@extends('admin.home')

@section('content')
<div class="container">
    <form action={{empty($chef) ? "/addchef" : "/chefs/update/$chef->id"}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10 offset-1 formWrapper">
                <div class="row">
                    <h1 class="contentTitle">
                        {{empty($chef) ? "ADD CHEF" : "EDIT CHEF DETAILS"}}
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label pl-0 inputLabel">Name</label>
                            <input id="name" name="name" type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ !empty($chef) ? $chef->name : ""}}"
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
                            value="{{ !empty($chef) ? $chef->email : ""}}"
                            placeholder="Email" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="rank" class="col-md-4 col-form-label pl-0 inputLabel">Rank</label>
                            <input id="rank" name="rank" type="text" 
                            class="form-control @error('rank') is-invalid @enderror" 
                            value="{{ !empty($chef) ? $chef->rank : ""}}"
                            placeholder="Rank" required/>
                            @error('rank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="facebook" class="col-md-4 col-form-label pl-0 inputLabel">Facebook</label>
                            <input id="facebook" name="facebook" type="text" 
                            class="form-control @error('image') is-invalid @enderror"
                            value="{{ !empty($chef) ? $chef->facebook : ""}}"
                            placeholder="Facebook URL"/>
                            @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="twitter" class="col-md-4 col-form-label pl-0 inputLabel">Twitter</label>
                            <input id="twitter" name="twitter" type="text" 
                            class="form-control @error('twitter') is-invalid @enderror" 
                            value="{{ !empty($chef) ? $chef->twitter : ""}}"
                            placeholder="Twitter URL" required/>
                            @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="instagram" class="col-md-4 col-form-label pl-0 inputLabel">Instagram</label>
                            <input id="instagram" name="instagram" type="text" 
                            class="form-control @error('instagram') is-invalid @enderror" 
                            value="{{ !empty($chef) ? $chef->instagram : ""}}"
                            placeholder="Instagram URL" required/>
                            @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="row">
                            <div class="itemImgWrapper">
                                <img id="itemImg" src= {{ !empty($chef) ? "/storage/".$chef->image : "/assets/images/upload.png"}} />
                            </div>
                            <label for="image" class="col-form-label uploadImg">Upload Image</label>
                            <input type="file" id="image" name="image" style="display: none" 
                            accept="image/*" onchange="loadFile(event)"
                            class="form-control @error('image') is-invalid @enderror" 
                            @empty($chef)
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
                        {{empty($chef) ? "SAVE" : "UPDATE"}}
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