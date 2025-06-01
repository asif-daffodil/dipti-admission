<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIPTI - Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid bg-dark text-white small ">
        {{-- topbar --}}
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center justify-content-lg-start ">
                            <a href="https://www.facebook.com/DaffodilTrainingInstitute" target="_blank"
                                class="text-white me-3">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://x.com/info_dipti" target="_blank" class="text-white me-3">
                                <i class="fa-brands fa-x"></i>
                            </a>
                            <a href="https://www.youtube.com/user/diptichannel" target="_blank" class="text-white me-3">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/daffodiltraining" target="_blank"
                                class="text-white me-3">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end justify-content-lg-end gap-3">
                        {{-- 02 9134695, 01713 49 32 67,
                 {{-- 02 9134695 01713 49 32 67 info@dipti.com.bd 9:00 AM - 9:00 PM --}}
                        <div>
                            <i class="fa-solid fa-phone me-2"></i>
                            <span>02 9134695, 01713 49 32 67</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-envelope me-2"></i>
                            <span>info@dipti.com.bd</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-clock me-2"></i>
                            <span>9:00 AM - 9:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        {{-- Navbar --}}
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary col-md-12 border-bottom">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid"
                            style="height: 72px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i
                                        class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://dipti.com.bd" target="_blank"><i
                                        class="fa-solid fa-book-bookmark"></i> Main Website</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 d-flex flex-column justify-content-start align-items-start gap-3 mb-5 mb-lg-0">
                <h1>Boost Up Your Career in IT & Animation Sector</h1>
                <p>
                    Dear {{ $request->fullname }},
                </p>
                <p>
                    thank you for your submission. One of our staff members will contact you by as soon as possible.
                </p>
                <a href="{{ url('/') }}" class="btn btn-primary">Continue</a>
            </div>
            <div class="col-md-6 d-flex flex-column gap-3">
                <iframe style="width: 100%; max-width: 560px; min-height: 315px;"
                    src="https://www.youtube.com/embed/C6I607W27r8?si=cDaK5NoHNnyI6WgH" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="container py-5"> <!-- Added py-5 for vertical padding -->
        <h2 class="text-center mb-4">Our Videos</h2> <!-- Added heading for context -->
        <div class="row g-4"> <!-- Changed g-3 to g-4 for better spacing -->
            <div class="col-12 col-md-4">
                <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
                    <!-- Added shadow and rounded corners -->
                    <iframe src="https://www.youtube.com/embed/5IjUhabMFj0?si=8kt9Be4DF8FbWzSz"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/mT3Jbt5S5HQ?si=KTNlsEDphpvebxqB"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="ratio ratio-16x9 shadow-sm rounded overflow-hidden">
                    <iframe src="https://www.youtube.com/embed/VPr5b_Q_SOo?si=bcbNGGsza94PD1dn"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        Copyright &copy; 2004-2025 Daffodil International Professional Training Institute (DIPTI). All Rights Reserved.
        Powered by DIPTI Web Team
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
