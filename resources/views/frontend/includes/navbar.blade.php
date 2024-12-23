<style>
    /* For the navbar button, with a sliding effect */
    #btn {
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        /* Adjust the duration as needed */
    }

    /* Styling for black button */
    .black-button {
        background-color: black;
        color: white;
    }

    .modal-backdrop.fade {
        z-index: 1;
    }

    /* Mobile responsive search form */
    @media screen and (min-width: 350px) and (max-width: 412px) {
        .serach {
            margin-left: 30px;
        }
    }
</style>

<header class=" sticky-top sm-static overflow-hidden ">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fw-bold shadow bg-white sticky-top z-3">
        <div class="d-flex align-items-center order-first">
            <a href="{{ route('home-page') }}"
                class="navbar-brand fs-3 me-1 me-md-2 me-lg-5 ms-1 ms-md-2 ms-lg-4 mb-1 mb-lg-3">
                <img src="/frontend/images/elit-logo.jpg" style="height: 55px" alt="Logo">
            </a>
        </div>

        <!-- Mobile menu button -->
        <button class="btn bg-warning text-white d-block d-md-none me-2 me-lg-3 order-2 order-sm-3" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
            aria-controls="offcanvasWithBothOptions">
            <i class='bx bx-menu bx-sm'></i>
        </button>

        <!-- Search Form -->
        <form action="{{ route('seller-search') }}" method="POST" class="order-sm-0 order-3">
            @csrf
            <div class="container mt-4 ms-1 serach">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="mobile_number" value="88"
                        placeholder="Enter authorized seller number" aria-label="Search" aria-describedby="basic-addon2"
                        style="width: 200px;">
                    <div class="input-group-append">
                        <button class="btn black-button" type="submit">Search</button>
                    </div>
                </div>

                <!-- Error Message -->
                @if (session('sellerMessage'))
                    <div id="emailHelp" class="form-text text-danger">{{ session('sellerMessage') }}</div>
                @else
                    <div id="emailHelp" class="form-text text-danger">
                        মোবাইল নাম্বার দ্বারা অথেন্টিক সেলার কে যাচাই করুন
                    </div>
                @endif
            </div>
        </form>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="btn">
            <ul class="navbar-nav ms-auto ul-bg">
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('home-page') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('check-authenticity') }}" class="nav-link">Check authenticity</a>
                </li>
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('authorized-prtbners') }}" class="nav-link">Authorized Partner</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="{{ route('reseller') }}" class="nav-link">Reseller</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="{{ route('ব্যবহারবিধি') }}" class="nav-link">ব্যবহারবিধি</a>
                    </li>
                @endif
                @isset($products)
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="#products" class="nav-link">Products</a>
                    </li>
                @else
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="{{ route('home-page') }}" class="nav-link">Products</a>
                    </li>
                @endisset
                @isset($products)
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="#about" class="nav-link">About us</a>
                    </li>
                @else
                    <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                        <a href="{{ route('home-page') }}" class="nav-link">About us</a>
                    </li>
                @endisset
            </ul>
        </div>
    </nav>
</header>

<!-- Offcanvas Menu for Mobile Devices -->
<div class="offcanvas offcanvas-end z-auto p-0" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <ul class=" p-2">
        <a href="{{ route('home-page') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">Home</a>
        <a href="{{ route('check-authenticity') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">Check
            authenticity</a>
        <a href="{{ route('authorized-prtbners') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">Authorized
            Partner</a>
        @if (Auth::check())
            <a href="{{ route('reseller') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">Reseller</a>
            <a href="{{ route('ব্যবহারবিধি') }}"
                class="nav-link my-1 bg-white border px-2 py-2 rounded">ব্যবহারবিধি</a>
        @endif
        @isset($products)
            <a href="#products" class="nav-link my-1 bg-white border px-2 py-2 rounded">Products</a>
        @else
            <a href="{{ route('home-page') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">Products</a>
        @endisset
        @isset($products)
            <a href="#about" class="nav-link my-1 bg-white border px-2 py-2 rounded">About us</a>
        @else
            <a href="{{ route('home-page') }}" class="nav-link my-1 bg-white border px-2 py-2 rounded">About us</a>
        @endisset
    </ul>
</div>

<script>
    // Custom Button for Toggle Effect (for mobile view)
    const customButton = document.getElementById("custom");
    const customNav = document.getElementById("btn");

    customButton.addEventListener("click", function() {
        // Toggle the visibility of customNav with a slide-up/slide-down effect
        if (customNav.style.maxHeight === "0px" || customNav.style.maxHeight === "") {
            customNav.style.maxHeight = customNav.scrollHeight + "px";
        } else {
            customNav.style.maxHeight = "0px";
        }
    });
</script>
