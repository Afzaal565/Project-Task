<x-admin-layout>
    <x-page-title title="Add New Role" />
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Upload Image Data</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Alayze</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Upload Image With Other Detail</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('analyses.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title"
                                        >
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="photo">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="photo"
                                        name="image" value="{{ old('image') }}" required >
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="short">Short Detail</label>
                                    <textarea class="form-control @error('short_detail') is-invalid @enderror" 
                                        aria-describedby="shortFeedBack" value="{{ old('short_detail') }}"
                                        name="short_detail" id="short" cols="30" rows="5">
                                    </textarea>
                                    @error('short_detail')
                                        <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                    @enderror
                                    
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="short">Complete Descritpion</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                        aria-describedby="shortFeedBack" value="{{ old('description') }}"
                                        name="description" id="short" cols="30" rows="10">
                                    </textarea>
                                    @error('description')
                                        <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                    @enderror
                                    
                                </div>
                            </div>
                            <button class="btn btn-primary float-end" type="submit">Upload Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 END -->
    </div>
    <!-- CONTAINER END -->
</x-admin-layout>
