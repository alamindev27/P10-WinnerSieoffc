@extends('frontend.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
@endsection
@section('content')


    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="hero-banner" style="background-image: url('{{ asset("frontend/img/1xbet.webp") }}');">
                    <div class="banner-overlay"></div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center text-center">
                            <div class="col-md-10 offset-md-1">
                                <div class="hero-content">
                                    <h1 class="hero-title fw-bold mb-3 text-white">
                                        Revolutionizing Digital Futures
                                    </h1>
                                    <p class="hero-description mx-auto mb-4">
                                        Unlock the potential of modern web development with innovative solutions. We build
                                        scalable, high-performance applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="carousel-item">
                <section class="hero-banner"
                    style="background-image: url('{{ asset("frontend/img/megapari.webp") }}');">
                    <div class="banner-overlay"></div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center text-center">
                            <div class="col-md-10 offset-md-1">
                                <div class="hero-content">
                                    <h1 class="hero-title fw-bold mb-3 text-white">Building Secure Systems</h1>
                                    <p class="hero-description mx-auto mb-4">High-end security and performance for your
                                        business applications with modern architecture.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
            style="z-index: 20;">
            <span class="carousel-control-prev-icon" aria-hidden="true"
                style="width: 2rem; height: 2rem; "></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
            style="z-index: 20;">
            <span class="carousel-control-next-icon" aria-hidden="true"
                style="width: 2rem; height: 2rem; "></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>












    <div class="container">
        <div class="row">


            <div class="col-12 text-center mt-3 mx-auto">
                <div class="title-top">Bangladesh Trusted</div>
                <div class="sub-title">Free Multi Tips</div>
            </div>





            <div class="col-12 col-lg-6 mx-auto">
                <img src="{{ asset($banner->image) }}" alt="" class="img-fluid w-100"
                    style="border: 2px solid #3498db; border-radius: 10px;">
            </div>

            <div class="col-12 text-center mt-3 mx-auto">

                <button class="claim-btn">
                    Claim Today's Free Multi 🔥
                </button>
                <a href="#" class="footer-link">
                    {{-- video icon --}}
                    Previous উইনিং প্রুফ চেক করুন</a>

            </div>

            <div class="col-12 text-center mt-2">

                <div class="d-flex justify-content-center">
                    @if (isset(setting()->voice) && file_exists(public_path(setting()->voice)))
                        <div class="" class="">
                            <audio controls
                                style="border: 2px solid #3498db; border-radius: 30px; box-shadow: 0 0 35px rgba(0, 210, 255, 0.6);">
                                <source src="{{ asset(setting()->voice) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    @endif
                </div>

            </div>


            <div class="col-12 text-center mt-3 mx-auto">

                <div class="timer-box">
                    <div class="time-unit"><span class="green-num">05</span> Hrs</div>
                    <div class="timer-divider">|</div>
                    <div class="time-unit"><span class="purple-num">34</span> Min</div>
                    <div class="timer-divider">|</div>
                    <div class="time-unit"><span class="yellow-num">12</span> Sec</div>
                </div>

            </div>



            <div class="col-12 text-center mt-3 mx-auto">

                <div class="proof-card p-2">
                    @forelse ($promos as $item)
                        <div class="result-row">
                            <span class="day-text">
                                <a href="{{ $item->link }}" target="_blank" title="{{ $item->name }}">
                                    <img src="{{ asset($item->icon) }}" alt="" class="img-fluid" style="max-width: 90px; vertical-align: middle;">
                                </a>
                            </span>
                            <span class="win-text" style="font-size: 13px;">PROMO CODE</span>
                            <span class="win-text"><span class="">{{ $item->promo_code }} <span
                                        class="copy-wrapper" onclick="copyToClipboard('{{ $item->promo_code }}', this)">
                                        <span class="copy-tooltip">Copied!</span>
                                        <span class="copy-btn" style="cursor: pointer;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                <path
                                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                                <path
                                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                            </svg>
                                        </span>
                                    </span></span></span>
                        </div>
                    @empty
                        <div class="col-12 mt-4 mx-auto">
                            <div class="alert alert-info mb-0 text-dark">No promo codes available at the moment.</div>
                        </div>
                    @endforelse
                </div>

            </div>



            <div class="col-12 text-center mt-3 mx-auto">

                <div class="entry-count">
                    Only 50 Free Entries Today! <span class="pink-text">(28 Left)</span>
                </div>

                <div class="step-container">
                    <div class="step-box">
                        <div class="step-title step-1-color">Step 1</div>
                        <div class="step-icon">📇</div>
                        <div class="step-desc"><span class="yellow-highlight">1</span> Sign Up</div>
                    </div>
                    <div class="step-box">
                        <div class="step-title step-2-color">Step 2</div>
                        <div class="step-icon">💼</div>
                        <div class="step-desc"><span class="yellow-highlight">2</span> Deposit</div>
                    </div>
                    <div class="step-box">
                        <div class="step-title step-3-color">Step 3</div>
                        <div class="step-icon">⚽</div>
                        <div class="step-desc">Get Free Multi</div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center mt-3 mx-auto">

                <div class="proof-card p-2">
                    <div class="proof-title">Proof Your Bankroll in <span class="yellow-highlight">3 Easy</span>
                    </div>

                    <div class="result-row">
                        <span class="day-text">🕒 Yesterday:</span>
                        <span class="win-text">WIN <span class="status-icon win-icon">✔</span></span>
                    </div>

                    <div class="result-row">
                        <span class="day-text">🕒 2 days ago:</span>
                        <span class="win-text">WIN <span class="status-icon win-icon">✔</span></span>
                    </div>

                    <div class="result-row">
                        <span class="day-text">🕒 3 days ago:</span>
                        <span class="loss-text">LOSS <span class="status-icon loss-icon">✖</span></span>
                    </div>
                </div>

            </div>

            <div class="col-12 text-center mt-3 mx-auto">


                <div class="proof-card p-2">

                    <div class="stats-container">
                        <div class="stat-row">
                            <span class="stat-value yellow-text">16,530+</span>
                            <span class="divider-line">|</span>
                            <span class="stat-label">Total Members</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-value green-text">Tk. 5,182,500+</span>
                            <span class="divider-line">|</span>
                            <span class="stat-label">Total Won</span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-12 text-center mt-3 mx-auto">

                <div class="badge-container">
                    <div class="badge-icon-circle">#1</div>
                    <div class="badge-text">
                        <div class="badge-text-top">Bangladesh #1 Free Multi</div>
                        <div class="badge-text-bottom">Paid Tips 💸 🔥</div>
                    </div>
                </div>

            </div>
            <div class="col-12 text-center mt-3 mx-auto">

                <button class="final-claim-btn">
                    <span>🔥</span> Claim Now Free
                </button>
            </div>
        </div>
    </div>



    <br><br><br><br><br><br><br><br>
@endsection
@section('footer')
    <script>
        function copyToClipboard(text, element) {
            const originalIcon =
                `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16"><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/></svg>`;
            const successIcon =
                `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16"><path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/></svg>`;

            const btn = element.querySelector('.copy-btn');

            // Clipboard Copy Logic
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(text).then(showSuccess);
            } else {
                let textArea = document.createElement("textarea");
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                try {
                    document.execCommand('copy');
                    showSuccess();
                } catch (err) {}
                textArea.remove();
            }

            function showSuccess() {
                // Show Tooltip & Change Icon
                element.classList.add('show-tooltip');
                btn.innerHTML = successIcon;
                btn.style.color = "#28a745";

                // Reset after 1.5 seconds
                setTimeout(() => {
                    element.classList.remove('show-tooltip');
                    btn.innerHTML = originalIcon;
                    btn.style.color = "";
                }, 1500);
            }
        }
    </script>
@endsection
