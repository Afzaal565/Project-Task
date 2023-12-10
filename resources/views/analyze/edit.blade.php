<x-admin-layout>
    <x-page-title title="Edit Data" />
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
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">View of image</h3>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('storage/' . $analysis->image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Image Data With Other Detail</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('analyses.update', $analysis->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" value="{{ $analysis->title }}"
                                        class="form-control @error('title') is-invalid @enderror" id="title">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if (auth()->user()->hasRole('user'))
                                    <div class="col-xl-6 mb-3">
                                        <label for="photo">Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="photo" name="image" value="{{ $analysis->image }}">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="short">Short Detail</label>
                                    <textarea class="form-control @error('short_detail') is-invalid @enderror" aria-describedby="shortFeedBack"
                                        name="short_detail" id="short" cols="30" rows="5">{{ $analysis->short_detail }}
                                    </textarea>
                                    @error('short_detail')
                                        <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                            @enderror

                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label for="short">Complete Descritpion</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" aria-describedby="shortFeedBack"
                                                name="description" id="short" cols="30" rows="10">{{ $analysis->description }}
                                    </textarea>
                                            @error('description')
                                                <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                                    @enderror

                                                </div>
                                                @can('create-reply')
                                                    <div class="col-xl-6 mb-3">
                                                        <label for="short">Review of image</label>
                                                        <textarea class="form-control @error('review') is-invalid @enderror" name="review" id="short" cols="30"
                                                            rows="10">{{ $analysis->review }}
                                        </textarea>
                                                        @error('review')
                                                            <div class="invalid-feedback">{{ $message }}<div>
                                                                @enderror

                                                            </div>
                                                        @endcan

                                                        @can('change-status')
                                                            <div class="col-xl-6 mb-3">
                                                                <label for="status">Status</label>
                                                                <select name="status" id="status" class="form-select">
                                                                    <option value="1"
                                                                        @if ($analysis->status == 'Active') selected @endif>
                                                                        Active</option>
                                                                    <option value="0"
                                                                        @if ($analysis->status == 'Inactive') selected @endif>
                                                                        Inactive</option>
                                                                </select>
                                                            </div>
                                                        @endcan
                                                    </div>
                                                    <button class="btn btn-primary float-end" type="submit">Upload
                                                        Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 END -->
    </div>
    <!-- CONTAINER END -->
</x-admin-layout>
