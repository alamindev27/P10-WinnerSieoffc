<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at center, #1a2a3a 0%, #050a0f 100%);
        }


        .title-top {
            color: #ffffff;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .sub-title {
            color: #ffcc00;
            /* Yellow color */
            font-weight: 800;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .bengali-text {
            color: #ffffff;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .amount-text {
            color: #ffcc00;
            font-weight: bold;
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        /* Button Styling */
        .claim-btn {
            background: linear-gradient(to bottom, #ffd700, #ff8c00);
            border: none;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: bold;
            font-size: 1rem;
            color: #000;
            width: 100%;
            margin-bottom: 10px;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .footer-link {
            color: #ffffff;
            font-size: 0.9rem;
            text-decoration: none;
            display: block;
            margin-bottom: 20px;
        }

        /* Timer Section */
        .timer-box {
            border: 2px solid #3dcc3d;
            border-radius: 15px;
            padding: 12px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #ffffff;
            font-weight: bold;
            font-size: 1.4rem;
            background: rgba(0, 0, 0, 0.4);
            /* Outer and Inner Glow for the box */
            box-shadow: 0 0 10px rgba(61, 204, 61, 0.3), inset 0 0 10px rgba(61, 204, 61, 0.2);
        }

        .time-unit {
            color: #ffffff;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
        }

        .timer-divider {
            color: #aaa;
        }

        .green-num {
            color: #a2ff00;
            text-shadow: 0 0 8px rgba(162, 255, 0, 0.8), 0 0 15px rgba(162, 255, 0, 0.5);
        }

        .purple-num {
            color: #e066ff;
            text-shadow: 0 0 8px rgba(224, 102, 255, 0.8), 0 0 15px rgba(224, 102, 255, 0.5);
        }

        .yellow-num {
            color: #ffff00;
            text-shadow: 0 0 8px rgba(255, 255, 0, 0.8), 0 0 15px rgba(255, 255, 0, 0.5);
        }

        .entry-count {
            color: #ffcc00;
            font-size: 1.1rem;
            margin-top: 20px;
            font-weight: bold;
        }

        .pink-text {
            color: #ff3399;
        }

        /* Step Section Design */
        .step-container {
            border: 1px solid #1a5a8a;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.4);
            margin-top: 15px;
            overflow: hidden;
            display: flex;
        }

        .step-box {
            position: relative;
            flex: 1;
            padding: 12px 5px;
            border-right: 1px solid rgba(0, 150, 255, 0.3);
        }

        .step-box::after {
            content: "";
            position: absolute;
            right: -10px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 10px solid rgba(0, 150, 255, 0.5);
            /* Glowing blue arrow */
            z-index: 10;
        }

        .step-title {
            font-weight: 800;
            font-size: 1.1rem;
            margin-bottom: 8px;
            text-transform: capitalize;
        }

        .step-1-color {
            color: #ffffff;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7), 0 0 15px rgba(255, 255, 255, 0.4);
        }

        .step-2-color,
        .step-3-color {
            color: #ccff00;
            /* Neon yellow-green */
            text-shadow: 0 0 10px rgba(204, 255, 0, 0.8), 0 0 20px rgba(204, 255, 0, 0.5);
        }

        .step-icon {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .step-desc {
            font-size: 0.8rem;
            color: #ddd;
        }

        /* Proof Section Design */
        .proof-card {
            border: 1px solid #1a5a8a;
            border-radius: 15px;
            background: rgba(0, 5, 15, 0.8);
            margin-top: 25px;
            padding: 15px;
            box-shadow: inset 0 0 15px rgba(0, 150, 255, 0.2);
        }

        .proof-title {
            color: #ffffff;
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .yellow-highlight {
            color: #ffcc00;
        }

        .result-row {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid #222;
            border-radius: 8px;
            margin-bottom: 8px;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .day-text {
            color: #eee;
            font-weight: 500;
        }

        .win-text {
            color: #55ff55;
            font-weight: bold;
        }

        .loss-text {
            color: #ff4444;
            font-weight: bold;
        }

        .status-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .win-icon {
            background: #55ff55;
            color: #000;
        }

        .loss-icon {
            background: #ff4444;
            color: #fff;
        }

        Eibare apnar deya tin number image-er section-ti design kore dicchi. Eta holo stats (Total Members & Won) ebong ekta premium badge section. Ei code-tuku ager code-er proof-card er thik niche boshate hobe. Updated HTML & CSS Code HTML <style>

        /* Stats Section */
        .stats-container {
            border: 1px solid #333;
            border-radius: 12px;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            margin-top: 20px;
        }

        .stat-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }

        .stat-row:first-child {
            border-bottom: 1px solid #222;
            margin-bottom: 5px;
        }

        .stat-value {
            font-weight: bold;
            font-size: 1.4rem;
        }

        .yellow-text {
            color: #ffcc00;
        }

        .green-text {
            color: #55ff55;
        }

        .stat-label {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .divider-line {
            color: #444;
            margin: 0 10px;
        }

        /* Badge Section */
        .badge-container {
            border: 1px solid #444;
            border-radius: 50px;
            background: linear-gradient(90deg, #001529 0%, #000 100%);
            margin-top: 20px;
            padding: 8px 15px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        /* Glow effect for badge border */
        .badge-container::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50px;
            box-shadow: inset 0 0 10px rgba(0, 150, 255, 0.3);
            pointer-events: none;
        }

        .badge-icon-circle {
            background: #ccff00;
            /* Neon yellow-green */
            color: #000;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 1.2rem;
            margin-right: 15px;
            border: 2px solid #fff;
        }

        .badge-text {
            text-align: left;
            line-height: 1.2;
        }

        .badge-text-top {
            color: #fff;
            font-weight: bold;
            font-size: 0.95rem;
        }

        .badge-text-bottom {
            color: #ffcc00;
            font-size: 0.85rem;
        }

        /* Final Claim Button Styling */
        .final-claim-btn {
            background: linear-gradient(90deg, #0a2e4e 0%, #1a5a8a 100%);
            border: 1px solid #0096ff;
            border-radius: 50px;
            color: white;
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <div class="mx-auto">
                    <div class="title-top">Bangladesh Trusted</div>
                    <div class="sub-title">Free Multi Tips Channel</div>

                    <div class="bengali-text">আজকের ফ্রি মাল্টি কোড নিয়ে</div>
                    <div class="amount-text">2000+ টাকা জিতুন</div>

                    <button class="claim-btn">
                        Claim Today's Free Multi 🔥
                    </button>

                    <a href="#" class="footer-link">Free Sign up & Win Big!</a>

                    <div class="timer-box">
                        <div class="time-unit"><span class="green-num">05</span> Hrs</div>
                        <div class="timer-divider">|</div>
                        <div class="time-unit"><span class="purple-num">34</span> Min</div>
                        <div class="timer-divider">|</div>
                        <div class="time-unit"><span class="yellow-num">12</span> Sec</div>
                    </div>




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

                    <div class="proof-card">
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



                    <div class="proof-card">

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
                    <div class="badge-container">
                        <div class="badge-icon-circle">#1</div>
                        <div class="badge-text">
                            <div class="badge-text-top">Bangladesh #1 Free Multi</div>
                            <div class="badge-text-bottom">Paid Tips 💸 🔥</div>
                        </div>
                    </div>

                    <button class="final-claim-btn">
                        <span>🔥</span> Claim Now Free
                    </button>










                </div>
            </div>
        </div>
    </div>



    <br><br><br><br><br><br><br><br>
</body>

</html>




















































{{-- @extends('frontend.layouts.app')

@section('head')
    <link rel="preload" as="image" href="{{ asset($banner->image) }}">
    @include('frontend.layouts.partials.index-style')
@endsection

@section('content')
    <section class="prediction-section py-1">
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col-md-10 offset-md-1">
                    <div class="hero-content">
                        <h1 class="hero-title fw-bold mb-3">
                            {{ $banner->heading_1 }} <span class="highlight-text">{{ $banner->heading_2 }}</span>
                        </h1>
                        <p class="hero-description mx-auto mb-4">{{ $banner->short_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset($banner->image) }}" alt="" class="img-fluid w-100" style="border: 2px solid #3498db; border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    <section class="prediction-section py-3">
        <div class="container text-center">

            <a href="#" class="text-danger">Previous উইনিং প্রুফ চেক করুন</a>

            <div class="d-flex justify-content-center gap-3 my-4">
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

            <div class="d-flex justify-content-center gap-3 mb-4">
                <a href="{{ route('frontend.videos') }}" class="btn btn-next-1 btn-sm">একাউন্ট খোলার Tutorials দেখুন</a>
            </div>

            <div class="intro-text mb-4">
                <small>যারা 1xbet/Melbet/Linebet সহ বিভিন্ন বেটিং সাইটে প্রচুর লসে আছেন তারা আমাদের সাইটের ১০০% ফিক্সড মাল্টি একদম ফ্রি - তে খেলে প্রতিদিন ২০-৫০ হাজার টাকা ইনকাম করতে পারবেন। কোনো প্রকার পেমেন্ট করা লাগবে না, একদম ফ্রি তেই লস কভার করতে পারবেন</small>
            </div>

            <div class="alert-box mb-3">
                <small><span class="text-warning">⚠️ Important:</span> আপনার মাল্টির কোড সক্রিয় করতে আপনাকে নীচের যেকোনো একটি লিঙ্ক ব্যবহার করে নিবন্ধন করতে হবে এবং ১০০০৳ ডিপোজিট করতে হবে!</small>
            </div>

            <div class="promo-container mx-auto">


                <div class="row align-items-center mb-2 g-2">
                    @forelse ($promos as $item)
                        <div class="col-lg-6">
                            <div class="promo-code-box d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="hand-icon me-2">👉</span>
                                    <a href="{{ $item->link }}" target="_blank" title="{{ $item->name }}">
                                        <img src="{{ asset($item->icon) }}" alt="">
                                    </a>
                                </div>

                                <span style="font-size: 17px;">Promo code:
                                    <span class="code" id="code-{{ $loop->index }}">{{ $item->promo_code }}</span>

                                    <span class="copy-wrapper" onclick="copyToClipboard('{{ $item->promo_code }}', this)">
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
                                    </span>
                                </span>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-bg-color mb-0">No promo codes available at the moment.</div>
                        </div>
                    @endforelse
                </div>
            </div>
            <button class="btn-next mt-2" data-bs-toggle="modal" data-bs-target="#registrationModal">Next</button>

            <div class="modal fade" id="registrationModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content custom-modal-bg">
                        <div class="modal-body text-center p-5">
                            <h4 class="modal-title-custom mb-3">Registration Check</h4>
                            <p class="modal-text-custom mb-4">Did you register through one of the links?</p>

                            <div class="d-flex justify-content-center gap-3">
                                <button onclick="return window.location.href='{{ route('frontend.verify.player') }}'"
                                    class="btn-modal btn-yes d-flex align-items-center justify-content-center">
                                    <span class="me-2">✅</span> Yes
                                </button>
                                <button class="btn-modal btn-no d-flex align-items-center justify-content-center"
                                    data-bs-dismiss="modal">
                                    <span class="me-2">❌</span> No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="social-media-section py-3">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="section-title text-white fw-bold">Connect With Us</h3>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($socials as $item)
                    <div class="col-6 col-md-3">
                        <a href="{{ $item->link }}" class="social-card {{ Str::slug($item->name) }}" target="_blank">

                            <div class="social-icon-box">
                                {!! $item->icon !!}
                            </div>
                            <h5>{{ $item->name }}</h5>
                            <p>{{ $item->subscriber }}</p>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
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
@endsection --}}
