<x-admin-layout>
    <x-page-title title="Edit Data" />
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Update Role Data</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Role</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Role Data</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <label for="role">Role Name</label>
                                    <input type="text" name="name" value="{{ $role->name }}"
                                        class="form-control @error('name') is-invalid @enderror" id="role">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-3 col-md-4 mb-3">
                                    <label for="role"> Permissions </label>
                                    @forelse ($permissions as $permission)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                                id="permission-{{ $permission->id }}"
                                                @if($role->hasPermissionTo($permission->name))
                                                    checked
                                                @endif
                                                >

                                            <label class="form-check-label" for="permission-{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @empty
                                        <span class="fs-4"> <b>No Permission Found</b></span>
                                    @endforelse
                                    
                                </div>
                            </div>
                            {{-- <div class="form-row">
                                <div class="col-xl-6 mb-3">
                                    <label for="short">Short Detail</label>
                                    <textarea class="form-control @error('short_detail') is-invalid @enderror" 
                                        aria-describedby="shortFeedBack"
                                        name="short_detail" id="short" cols="30" rows="5">{{ $role->short_detail }}
                                    </textarea>
                                    @error('short_detail')
                                        <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                    @enderror
                                    
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="short">Complete Descritpion</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                        aria-describedby="shortFeedBack"
                                        name="description" id="short" cols="30" rows="10">{{ $role->description }}
                                    </textarea>
                                    @error('description')
                                        <div id="shortFeedBack" class="invalid-feedback">{{ $message }}<div>
                                    @enderror
                                    
                                </div>
                            </div> --}}
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
