@extends('layouts.dashboard')

@section('content')
    <!--end::Navbar-->
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">My Projects
            <span class="fs-6 text-gray-500 fw-semibold ms-1">Active</span>
        </h3>
        <!--end::Heading-->
        <!--begin::Actions-->
        <div class="d-flex flex-wrap my-2">
            <div class="me-4">
                <!--begin::Select-->
                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-125px">
                    <option value="*" selected="selected">All</option>
                    <option value="READY">In Progress</option>
                    <option value="PENDING">Ready</option>
                    <option value="ERROR">Error</option>
                </select>
                <!--end::Select-->
            </div>
            <a href="/projects/create" class="btn btn-primary btn-sm">New
                Project</a>
        </div>
        <button class="btn btn-primary btn-sm "><a class="text-light" href="/projects/create">Direct to New Project</a></button>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9">
        <!--begin::Col-->
        @foreach ($projects as $project)
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <div class="card border-hover-primary">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="{{ $project->image_url }}" alt="image" class="p-3" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <span
                                class="badge 
                            @if ($project->status == App\Core\Classes\Utils::PENDING) badge-light-primary
                                @elseif ($project->status == App\Core\Classes\Utils::READY)
                                badge-light-success
                                @else
                                badge-light-danger @endif
                            fw-bold me-auto px-4 py-3">
                                @if ($project->status == App\Core\Classes\Utils::PENDING)
                                    In Progress
                                @elseif ($project->status == App\Core\Classes\Utils::READY)
                                    Ready
                                @else
                                    ERROR
                                @endif

                            </span>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bold text-gray-900">{{ $project->name }}</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">{{ substr($project->details, 0, 60) . '...' }}</p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            <div class="border border-gray-300 border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{ $project->created_at }}</div>
                                <div class="fw-semibold text-gray-500">Created Date</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{ strtoupper($project->theme_name) }}</div>
                                <div class="fw-semibold text-gray-500">Theme</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-6 text-gray-800 fw-bold">{{ strtoupper($project->type) }}</div>
                                <div class="fw-semibold text-gray-500">TYPE</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <iframe class="d-none d-lg-inline-block" style="transform: scale(0.45) translateX(-63.5%)" src="/Outputs/{{ $project->id }}/home.php" width="1000"
                            height="400"></iframe>
                        <div class="my-2">
                            <a href="/studio/{{ $project->id }}" class="btn btn-icon btn-light-primary">
                                <i class="ki-duotone ki-pencil fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <form style="display: inline" action="/projects/{{ $project->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure you want to Unassign this agent?')" type="submit" class="btn btn-icon btn-light-danger">
                                    <i class="ki-duotone ki-trash fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </button>
                            </form>

                            <a href="/projects/{{ $project->id }}/export" class="btn  btn-light-warning">
                                Export
                            </a>
                        </div>
                        <!--begin::Progress-->
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: {{ random_int(0, 100) }}%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--end::Row-->
    <!--begin::Pagination-->
    <div class="d-flex flex-stack flex-wrap pt-10">
        <div class="fs-6 fw-semibold text-gray-700"></div>
        <!--begin::Pages-->
        {{ $projects->links() }}
        <!--end::Pages-->
    </div>
@endsection
