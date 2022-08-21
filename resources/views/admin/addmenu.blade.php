@extends('admin.home')

@section('content')
<div class="container">
    <form action={{empty($item) ? "/addmenu" : "/menu/update/$item->id"}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-10 offset-1 formWrapper">
                <div class="row">
                    <h1 class="contentTitle">
                        {{empty($item) ? "ADD MENU" : "EDIT MENU"}}
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label pl-0 inputLabel">Title</label>
                            <input id="title" name="title" type="text" 
                            class="form-control @error('title') is-invalid @enderror" 
                            value="{{ !empty($item) ? $item->title : ""}}"
                            placeholder="Title" required/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label pl-0 inputLabel">Price</label>
                            <input id="price" name="price" type="number" step="0.01" min="0"
                            class="form-control @error('price') is-invalid @enderror" 
                            value="{{ !empty($item) ? $item->price : ""}}"
                            placeholder="Price" required/>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="desc" class="col-md-4 col-form-label pl-0 inputLabel">Description</label>
                            <textarea id="desc" name="desc" rows="5"
                            class="form-control @error('desc') is-invalid @enderror" 
                            placeholder="Description" required>{{!empty($item) ? $item->desc : ""}}</textarea>
                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mx-auto">
                        <div class="row">
                            <div class="itemImgWrapper">
                                <img id="itemImg" src= {{ !empty($item) ? "/storage/".$item->image : "/assets/images/upload.png"}} />
                            </div>
                            <label for="image" class="col-form-label uploadImg">Upload Image</label>
                            <input type="file" id="image" name="image" style="display: none" 
                            accept="image/*" onchange="loadFile(event)"
                            @empty($item)
                            class="form-control @error('image') is-invalid @enderror" required
                            @endempty />
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
                        {{empty($item) ? "SAVE" : "UPDATE"}}
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