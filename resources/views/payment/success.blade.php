@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-7">
            <h1 class="fs-5x">
                Congratulations!
            </h1>
            <h1>
                Your payment is paid successfully!
            </h1>
        </div>
        <div class="col-12 text-center mt-7">
            <a href="/projects" class="btn btn-primary w-300px mx-3">Browser Projects.</a>
            <a href="/home" class="btn btn-light-warning w-300px mx-3">Home</a>
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
