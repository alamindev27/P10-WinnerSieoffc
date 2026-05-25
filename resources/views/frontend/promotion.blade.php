@extends('frontend.layouts.app')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #020b1e;
            color: #ffffff;
            font-family: 'Hind Siliguri', sans-serif;
            padding: 20px 0;
        }



        /* Top Badge */
        .top-badge {
            background: linear-gradient(90deg, #ffd700, #ffa500);
            color: #000;
            font-size: 8px;
            font-weight: bold;
            border-radius: 20px;
            padding: 3px 12px;
            display: inline-block;
        }

        /* Banner Box */
        .banner-box {
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .banner-logo {
            width: 140px;
            margin-bottom: 5px;
        }

        .banner-subtext {
            font-size: 11px;
            color: #8fa0c0;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Action Box (Get Free Code) */
        .action-box {
            background-color: #04163c;
            border: 1px solid #124099;
            border-radius: 12px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .icon-square {
            background-color: #05235e;
            border: 1px solid #124099;
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #007bff;
            font-weight: bold;
            font-size: 18px;
        }

        .btn-click-here {
            background: linear-gradient(90deg, #3275ff, #7f32ff);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 9px 14px;
            font-weight: bold;
            font-size: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: 0.3s;
            box-shadow: 0 0 15px rgba(127, 50, 255, 0.4);
        }

        .btn-click-here:hover {
            color: white;
            opacity: 0.9;
        }

        .circle-arrow {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 15px;
            height: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
        }

        /* Features Grid */
        .feature-item {
            text-align: center;
            padding: 10px;
        }

        .feature-icon-blue {
            color: #3275ff;
            font-size: 24px;
        }

        .feature-icon-purple {
            color: #b05cff;
            font-size: 24px;
        }

        .feature-icon-gold {
            color: #ffb700;
            font-size: 24px;
        }

        .feature-title {
            font-size: 9px;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 2px;
        }

        .feature-sub {
            font-size: 8px;
            color: #8fa0c0;
        }

        .divider-v {
            border-right: 1px dashed rgba(143, 160, 192, 0.2);
        }

        /* Terms & Conditions Section */
        .terms-box {
            background-color: #04163c;
            border: 1px solid #0b265c;
            border-radius: 12px;
            padding: 20px;
        }

        .terms-title {
            font-size: 14px;
            color: #ffffff;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .step-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .step-item {
            display: flex;
            gap: 12px;
            font-size: 10px;
            color: #c4d1ec;
            margin-top: 12px;
            align-items: flex-start;
        }

        .step-num {
            background-color: #124099;
            color: #3275ff;
            border: 1px solid #1a56cc;
            border-radius: 50%;
            min-width: 15px;
            height: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8px;
            font-weight: bold;
        }

        /* Warning Box */
        .warning-box {
            background-color: rgba(255, 165, 0, 0.03);
            border: 1px solid #ff9f05;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .warning-icon {
            color: #ff9f05;
            font-size: 21px;
        }

        .warning-text {
            color: #ffb733;
            font-size: 10px;
            margin-bottom: 0;
            line-height: 1.5;
        }

        /* Telegram Box */
        .telegram-box {
            background-color: #04163c;
            border: 1px solid #0b265c;
            border-radius: 12px;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tg-icon-circle {
            background-color: #229ed9;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .btn-telegram {
            background-color: transparent;
            border: 1px solid #124099;
            color: #ffffff;
            border-radius: 20px;
            padding: 9px 16px;
            font-size: 9px;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: 0.3s;
        }

        .btn-telegram:hover {
            background-color: #124099;
            color: white;
        }

        /* পপআপের জন্য কাস্টম স্টাইল */
        .custom-modal-bg {
            background: #121212 !important;
            /* ডার্ক ব্যাকগ্রাউন্ড */
            border: 2px solid #00d2ff !important;
            /* সায়ান বর্ডার গ্লো */
            border-radius: 20px !important;
            box-shadow: 0 0 25px rgba(0, 210, 255, 0.3);
        }

        .modal-title-custom {
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 77, 77, 0.2);
        }

        .modal-text-custom {
            color: #eeeeee;
        }

        .btn-modal {
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-modal:hover {
            transform: scale(1.02);
            filter: brightness(1.2);
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="main-container d-flex flex-column gap-3">

            <div class="text-center">
                <span class="top-badge mb-2"><i class="fa-solid fa-crown"></i> PREMIUM ACCESS • 100% FREE</span>
                {{-- <h2 class="fs-6 fw-bold mt-1" style="color: #ffffff;">ফ্রি মাল্টি পেতে <span style="color: #2b77ff;">Get Code </span> এ ক্লিক করুন</h2> --}}
                <h2 class="fs-6 fw-bold mt-1" style="color: #ffffff;">{{ $promotionData->heading_top }}</h2>
                <p class="text-white mb-0" style="font-size: 8px;">Official Partner • Trusted • Secure • Fast Access <i
                        class="fa-solid fa-circle-check text-primary"></i></p>
            </div>

            <div class="banner-box ">
                <img src="{{ asset($promotionData->banner) }}" alt="" class="img-fluid rounded border w-100">
            </div>

            <div class="row g-0 py-2" style="border: 1px solid rgba(18, 64, 153, 0.3); border-radius: 8px;">
                <div class="col-4 feature-item divider-v">
                    <i class="fa-solid fa-shield-halved feature-icon-blue"></i>
                    <div class="feature-title" style="color: #3275ff;">Official Partner Links</div>
                    <div class="feature-sub">Trusted & Verified</div>
                </div>
                <div class="col-4 feature-item divider-v">
                    <i class="fa-solid fa-lock feature-icon-purple"></i>
                    <div class="feature-title" style="color: #b05cff;">Secure Registration</div>
                    <div class="feature-sub">Safe & Protected</div>
                </div>
                <div class="col-4 feature-item">
                    <i class="fa-solid fa-gift feature-icon-gold"></i>
                    <div class="feature-title" style="color: #ffc107;">100% Free Access</div>
                    <div class="feature-sub">No Hidden Charges</div>
                </div>
            </div>
            @forelse ($datas as $item)
                <div class="action-box" data-bs-toggle="modal" data-bs-target="#promoErrorModal"
                    onclick="setBetslipCode('{{ $item->multi_code }}')">
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon-square">1X</div>
                        <div>
                            <div class="fw-bold text-white mb-0" style="font-size: 14px;">Get Free Code</div>
                            <div style="font-size: 9px; color: #8fa0c0;">100% Working • Instant Access</div>
                        </div>
                    </div>
                    <a href="#" class="btn-click-here text-nowrap"> CLICK HERE
                        <div class="circle-arrow"><i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-bg-color mb-0">No promo codes available at the moment.</div>
                </div>
            @endforelse

            @auth
                <div class="modal fade" id="promoErrorModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content custom-modal-bg">
                            <div class="modal-body text-center p-5">
                                <div class="mb-3">
                                    <span style="font-size: 50px;">✅</span>
                                </div>

                                <h3 class="modal-title-custom mb-3" style="color: #00d2ff;">তথ্য!</h3>

                                <p class="modal-text-custom mb-4" style="font-size: 1.1rem; line-height: 1.6;">
                                    Your Bet Slip Code is: <span class="yellow-highlight fw-bold" id="multicode"></span>.
                                </p>

                                <div class="d-flex justify-content-center">
                                    <button class="btn-modal btn-no w-100" data-bs-dismiss="modal"
                                        style="background: linear-gradient(145deg, #00d2ff, #007bff);">
                                        ঠিক আছে
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="modal fade" id="promoErrorModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content custom-modal-bg">
                            <div class="modal-body text-center p-5">
                                <div class="mb-3">
                                    <span style="font-size: 50px;">⚠️</span>
                                </div>

                                <h3 class="modal-title-custom mb-3" style="color: #ff4d4d;">দুঃখিত!</h3>

                                <p class="modal-text-custom mb-4" style="font-size: 12px;">
                                    {{-- আপনি সঠিক ভাবে প্রমোকোড ব্যবহার করে একাউন্ট রেজিষ্ট্রেশন করেন নি। আবার একাউন্ট খুলে চেস্টা
                                    করুন। --}}
                                    আপনি এখনো আমাদের Promocode দিয়ে একাউন্ট রেজিস্ট্রেশন অথবা ১০০০৳ ডিপোজিট সম্পন্ন করেননি।
                                    ফ্রি মাল্টি পেতে হলে অবশ্যই Promocode ব্যবহার করে রেজিস্ট্রেশন ও মিনিমাম ১০০০৳ ডিপোজিট করতে
                                    হবে।
                                </p>

                                <div class="d-flex justify-content-center">
                                    <button class="btn-modal btn-no w-100" data-bs-dismiss="modal"
                                        style="background: linear-gradient(145deg, #ff4d4d, #a71d2a);">
                                        বন্ধ করুন
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth


            <div class="terms-box">
                <div class="terms-title">
                    <i class="fa-solid fa-file-text text-primary"></i> Terms & Conditions (শর্তাবলী)
                </div>
                <ul class="step-list">
                    <li class="step-item">
                        <span class="step-num">1</span>
                        <div>প্রথমে উপরের "Get Free Code" বাটনে ক্লিক করুন।</div>
                    </li>
                    <li class="step-item">
                        <span class="step-num">2</span>
                        <div>যদি আপনি সঠিকভাবে প্রোমোকোড ব্যবহার করে একাউন্ট রেজিস্ট্রেশন করুন।</div>
                    </li>
                    <li class="step-item">
                        <span class="step-num">3</span>
                        <div>কোডটি কপি করুন এবং আমাদের ওয়েবসাইটে লগইন করে মাল্টি অ্যাক্সেস পেতে কোডটি ব্যবহার করুন।</div>
                    </li>
                    <li class="step-item">
                        <span class="step-num">4</span>
                        <div>যদি আপনি সঠিকভাবে প্রোমোকোড ব্যবহার না করে থাকেন।</div>
                    </li>
                </ul>
            </div>

            <div class="warning-box">
                <div class="warning-icon">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <div>
                    <p class="warning-text">ফ্রি মাল্টি কোড পেতে হলে অবশ্যই সঠিক প্রোমোকোড ব্যবহার করে একাউন্ট ওপেন করুন,
                        অন্যথায় কোড প্রদান করা সম্ভব হবে না।</p>
                </div>
            </div>

            <div class="telegram-box">
                <div class="d-flex align-items-center gap-2">
                    <div class="tg-icon-circle">
                        <i class="fa-brands fa-telegram"></i>
                    </div>
                    <div>
                        <div class="text-white" style="font-size: 10px; margin-bottom: -2px;">Join Our Official</div>
                        <div class="fw-bold text-white" style="font-size: 14px; color: #2b77ff !important;">Telegram
                            Channel
                        </div>
                        <div style="font-size: 9px; color: #5a6e91;">Latest Update • New Codes • Instant Notification</div>
                    </div>
                </div>
                <a href="{{ social()->link }}" target="_blank" class="btn-telegram text-nowrap">
                    JOIN TELEGRAM <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
                </a>
            </div>

        </div>
    </div>
@endsection
@section('footer')

<script>
    function setBetslipCode(code) {
            $('#multicode').text(code);
        }

</script>

@endsection
