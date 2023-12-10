<x-admin-layout>
    <x-page-title title="Roles List" />
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Dashboard 01</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        {{-- {{ $nalyze_data }} --}}
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive DataTable</h3>
                    </div>
                    <div class="card-body">
                        {{-- <a href="{{ route('analyses.create') }}" class="btn btn-primary mb-4"> Add New Data</a> --}}
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                <thead>
                                    <tr>
                                        {{-- <th class="wd-15p border-bottom-0">Photo</th> --}}
                                        <th class="wd-15p border-bottom-0">Name</th>
                                        <th class="wd-15p border-bottom-0">Guard Name</th>
                                        {{-- <th class="wd-20p border-bottom-0">Description</th>
                                        <th class="wd-15p border-bottom-0">Added By</th>
                                        <th class="wd-10p border-bottom-0">Status</th> --}}
                                        <th class="wd-10p border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $key => $role)
                                        <tr>
                                            {{-- <td>
                                                <img src="{{ asset('storage/'.$role->image) }}" alt="" width="75" height="75">
                                            </td> --}}
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->guard_name }}</td>
                                            {{-- <td>{{ $role->description }}</td>
                                            <td>{{ $role->user->name}}</td>
                                            <td>
                                                <span class="badge p-2 @if($role->status == 'Active') bg-success @else bg-danger @endif">{{ $role->status }}</span>
                                            </td> --}}
                                            <td>
                                                <div class="btn-list">
                                                    <a href="{{ route('roles.edit', $role->id ) }}" class="btn btn-sm btn-primary">
                                                        <span class="fe fe-edit"> </span>
                                                    </a>
                                                    {{-- <button id="bDel" type="button" class="btn  btn-sm btn-danger">
                                                        <span class="fe fe-trash-2"> </span>
                                                    </button> --}}
                                                    {{-- <button id="bAcep" type="button" class="btn  btn-sm btn-primary">
                                                        <span class="fe fe-check-circle"> </span>
                                                    </button>
                                                    <button id="bCanc" type="button" class="btn  btn-sm btn-danger">
                                                        <span class="fe fe-x-circle"> </span>
                                                    </button> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- CONTAINER END -->
</x-admin-layout>
