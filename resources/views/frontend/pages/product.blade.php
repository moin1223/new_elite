@extends('frontend.layouts.default')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/fe1ecc4ddb.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <style>
        .swiper-container {
            padding: 20px 30px;
            position: relative;
            margin-top: 30px;
        }

        .swiper-slide {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .swiper-slide:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }



        .card-img-top {
            transition: transform 0.3s ease;
        }

        .card-img-top:hover {
            transform: scale(1);
        }

        .card-title {
            font-size: 1rem;
        }

        .text-muted {
            font-size: 0.9rem;
        }

        .card-text {
            font-size: 0.95rem;
        }

        .btn-dark,
        .btn-outline-dark {
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-dark:hover,
        .btn-outline-dark:hover {
            background-color: #343a40;
            color: #fff;
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            border-radius: 50%;
            padding: 5px;
            font-size: 18px;
            background: #eff0f1;
            height: 40px;
            width: 40px;
            display: flex;
            text-align: center;
            color: white
        }

        .swiper-button-next {
            right: 12px;
        }

        .swiper-button-prev {
            left: 12px;
        }

        .details,
        .review {
            border: 1px solid #f8b807c7;
            color: rgb(19, 12, 12);
        }

        .details:hover,
        .review:hover {
            background: #f8b807c7;
            border: 1px solid #f8b807c7;
            color: white;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 30px !important;
        }
    </style>

    @include('frontend.includes.slider')
    @php
        $products = \App\Models\Category::with('product')->get();
        $collection = \App\Models\AuthImageVideo::all();
    @endphp



    <section class="container ps-3 pt-4 bg-white border rounded-3">

        <div class="text-center mt-5 ">
            <h1 class="fw-bold" id="products">Our Products</h1>
        </div>
        @foreach ($products as $category)
            <h4 class="fw-bold my-4 ms-4 d-block">{{ $category->category_name }}
                <p class="bg-warning" style="height: 2px; width: 100%; margin-top: 10px;"></p>
            </h4>


            <div class="swiper-container container overflow-hidden position-relative">
                <div class="swiper-wrapper" id="health-products">
                    @foreach ($category->product as $single_product)
                        <div class="swiper-slide item">
                            <div class="card shadow-sm border-0 rounded-3 p-0">
                                <img src="{{ $single_product->image }}"
                                    class="card-img-top disable-right-click-image rounded-top" alt="...">
                                <div class="card-body">
                                    <h5
                                        class="card-title text-uppercase fw-bold mb-2 border-bottom pb-2 text-secondary mx-1">
                                        {{ $single_product->product_name }}
                                    </h5>

                                    <div class="d-flex gap-2 align-items-center justify-content-between mx-1">
                                        <div class="d-flex gap-1 align-items-center">
                                            <p class="card-text mb-0 text-decoration-line-through d-inline text-danger">
                                                Price {{ $single_product->old_price }}TK
                                            </p>
                                            <span class='mx-1 fs-4 text-success'>{{ $single_product->new_price }}Tk</span>
                                        </div>
                                        <p class="text-muted mt-2 mb-0">{{ $single_product->weight }}gm</p>
                                    </div>

                                    <div class="d-flex justify-content-between mt-3">
                                        @auth
                                            <div class="w-100 mx-1">
                                                <a href="{{ route('product-review', $single_product->id) }}"
                                                    class="btn btn-sm px-4 py-2 w-100  review ">Review</a>
                                            </div>
                                        @endauth
                                        <div class="w-100 mx-1">
                                            <a href="{{ route('product-details', $single_product->id) }}"
                                                class="btn btn-sm px-4 py-2 w-100 details">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next text-warning fw-bold text-base"></div>
                <div class="swiper-button-prev text-warning fw-bold text-base"></div>
            </div>
        @endforeach

    </section>



    </section>




    {{-- about us --}}
    {{-- <section id="about" class="container">
        <h3 class="text-center fs-2 fw-bold mt-5">About Us</h3>
        <div class="row p-2 mt-4">
            <div class="col-12 col-lg-6">
            </div>
            <div class="text-center">
                <p class="fs-5">
                    Welcome to Elite Corporation.
                    Elite Corporation is mainly supplying health, cosmetic and spice products all over Bangladesh. <br>
                <p class="text-align">Each product is hygienic and chemical free. Organic products are mainly needed to keep
                    our body healthy, especially during corona time doctors advised to consume different types of tea or
                    masala tea or organic products to avoid that dangerous virus.</p>
                <p class="text-align">
                    During the Corona period, we have realized that we need to boost our immune system to keep our body
                    healthy and protect us from the clutches of Corona. Only organic or natural products can boost our
                    body's immune system. Each of our products is tested by Bangladesh Science Lab and some products are
                    packaged approved by BSTI.</p>

                <p>Stay healthy by consuming Elite Corporation products.</p>
                </p>
            </div>
        </div>
    </section> --}}

    {{-- video section  --}}
    <div class="my-5 ">
        @include('frontend.pages.video')
    </div>
    {{-- about section  --}}
    <section id="about" class="container my-5 bg-white shadow-sm border py-5 rounded">
        <h3 class="text-center fs-2 fw-bold mt-5">About Us</h3>
        <div class="row p-2 mt-4">
            <div class="col-12 col-lg-6">
                <!-- You can add an image or infographic here -->
            </div>
            <div class="col-12  text-left">
                <p class="fs-5">
                    Welcome to <strong class="text-warning"> Elite Corporation</strong> , Elite Corporation is mainly
                    supplying health, cosmetic
                    and spice products all over Bangladesh.
                </p>


                <div class="text-start mt-4">
                    <div class="d-flex gap-3 align-items-center">
                        <h4 class="fs-5 fw-bold my-4">Why Choose Us?</h4>
                        {{-- <p class="bg-warning" style="height: 2px; width: 200px; margin-top: 10px;"></p> --}}
                    </div>

                    <ul class="list-unstyled my-4">
                        <li class="d-flex gap-3 align-items-start my-2">
                            <img src={{ asset('assets/img/check.png') }} class="img-fluid" width="20px" height="20px" />
                            <p class="fs-6 text-justify">
                                Each product is hygienic and chemical-free. Organic products are essential for maintaining a
                                healthy body, especially during the corona period. Doctors advised consuming different types
                                of tea, masala tea, and other organic products to avoid dangerous viruses.
                            </p>
                        </li>
                        <li class="d-flex gap-3 align-items-start my-2">
                            <img src={{ asset('assets/img/check.png') }} class="img-fluid" width="20px" height="20px" />
                            <p class="fs-6 text-justify">
                                During the corona period, we realized the importance of boosting our immune system to keep
                                our bodies healthy and protect us from the virus. Only organic or natural products can boost
                                our immune system. All of our products are tested by Bangladesh Science Lab, and some are
                                approved by BSTI packaging standards.
                            </p>
                        </li>
                    </ul>
                </div>



                <p class="mt-4 text-align">
                    During the pandemic, we recognized the importance of boosting our immune systems to stay protected from
                    harmful viruses. Organic products, such as our selection of teas and spices, are ideal for strengthening
                    your immunity naturally.
                </p>

                <p class="fs-5 mt-4">
                    Stay healthy, stay strong with <strong>Elite Corporation</strong>. Consume our organic products and give
                    your body the natural boost it deserves.
                </p>
            </div>
        </div>
    </section>
@endsection

@section('content-js')
    <script src="{{ asset('website/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('website/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('website/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.donation-action', function() {
                const user_id = $(this).attr("data-id");
                const actionName = $(this).attr("action-name");
                $('#user-id').val(user_id);
                $('#exampleModal').modal('show');
                $.ajax({
                    url: "{{ route('get-requested-user-details') }}",
                    data: {
                        user_id: user_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $("#user-info").html(
                            `
                        <h6><span class="fw-bold">Name: </span>${response.first_name} ${response.last_name}</h6>
                        <h6 class="mt-3"><span class="fw-bold">Email Address: </span>${response.email}</h6>
                        <h6 class="mt-3"><span class="fw-bold">Requested Role: </span>${response.role}</h6>
                        <h6 class="mt-3"><span class="fw-bold">Division: </span>${response.division.name}</h6>
                        <h6 class="mt-3"><span class="fw-bold">District: </span>${response.district.name}</h6>
                        <h6 class="mt-3"><span class="fw-bold">Thana: </span>${response.thana.name}</h6>
                        <h6 class="mt-3"><span class="fw-bold">Mobile Number: </span>${response.mobile_number}</h6>
                        ${response.whats_app_number ? `<h6 class="mt-3"><span class="fw-bold">Whats Number: </span>${response.whats_app_number}</h6>` : ''}
                        ${response.gender ? `<h6 class="mt-3"><span class="fw-bold">Gender: </span>${response.gender}</h6>` : ''}
                        ${response.group?.name ? `<h6 class="mt-3"><span class="fw-bold">Group Name: </span>${response.group.name}</h6>` : ''}
                        ${response.ward_no ? `<h6 class="mt-3"><span class="fw-bold">Ward No: </span>${response.ward_no}</h6>` : ''}
                        ${response.monitor_name ? `<h6 class="mt-3"><span class="fw-bold">Monitor Name: </span>${response.monitor_name}</h6>` : ''}
                        ${response.monitor_number ? `<h6 class="mt-3"><span class="fw-bold">Monitor Number: </span>${response.monitor_number}</h6>` : ''}
                        ${response.drector_name ? `<h6 class="mt-3"><span class="fw-bold">Drector Name: </span>${response.drector_name}</h6>` : ''}
                        ${response.director_number ? `<h6 class="mt-3"><span class="fw-bold">Director Number: </span>${response.director_number}</h6>` : ''}
                        ${response.address ? `<h6 class="mt-3"><span class="fw-bold">Address: </span>${response.address}</h6>` : ''}
                    `);
                    }
                });
            });
        });
    </script>
@endsection
