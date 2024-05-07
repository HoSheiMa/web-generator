@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-7">
            <h1 class="fs-5x">
                Congratulations!

            </h1>
            <h1>
                You are just created new project
            </h1>
        </div>
        <div class="col-8">
            <a href="apps/projects/project.html" class="card border-hover-primary">
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
                    <!--begin::Progress-->
                    <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
                        <div class="bg-primary rounded h-4px" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Users-->

                    <!--end::Users-->
                </div>
                <!--end:: Card body-->
            </a>
        </div>
        <div class="col-12 text-center mt-7">
            <a href="/studio/{{ $project->id }}" class="btn btn-primary w-300px mx-3">Go Studio, and Start Editing.</a>
            <a href="/projects/{{ $project->id }}/export" class="btn btn-light-warning w-300px mx-3">Export Zip</a>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>
    <script>
        const duration = 5 * 1000,
            animationEnd = Date.now() + duration,
            defaults = {
                startVelocity: 30,
                spread: 180,
                ticks: 30,
                zIndex: 0
            };

        function randomInRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        const interval = setInterval(function() {
            const timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return clearInterval(interval);
            }

            const particleCount = 50 * (timeLeft / duration);

            // since particles fall down, start a bit higher than random
            confetti(
                Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                        x: randomInRange(0.1, 0.3),
                        y: Math.random() - 0.2
                    },
                })
            );
            confetti(
                Object.assign({}, defaults, {
                    particleCount,
                    origin: {
                        x: randomInRange(0.7, 0.9),
                        y: Math.random() - 0.2
                    },
                })
            );
        }, 250);
    </script>
@endsection
