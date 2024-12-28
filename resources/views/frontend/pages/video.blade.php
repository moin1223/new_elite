@php
    $collection = \App\Models\AuthImageVideo::all();
@endphp
<section>
    <section class="container text-start shadow-sm p-4 rounded-3 my-5">
        <h4 class="fw-bold my-4 fs-4 mb-4 d-block">এলিট পণ্যের সাথে সেলিব্রেটিদের অভিজ্ঞতা।
            <p class="bg-warning" style="height: 2px; width: 100%; margin-top: 10px;"></p>
        </h4>
        <div class="row mt-5">
            {{-- @foreach ($collection as $item) --}}
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    {{-- <iframe class="w-100 h-100" src="{{ $item->video_url }}" title="YouTube video player" --}}
                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/GMuv4jFa-XU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/xUlAjw-nfLA"
                        title="তানজিন তিশার ফিটনেস সিক্রেট- Fat Bluster Tea | Elite Corporation" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/RwtPV3vTaJo"
                        title="ববির সুন্দর ত্বকের গোপন রহস্য- Organic Blue Tea | Elite Corporation" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/jKoiIuleokA"
                        title="বৃষ্টির আকর্ষনীয় সৌন্দর্যের গোপন রেসিপি | Elite Corporation" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/AjCJIOzxWyo"
                        title="মুন আহমেদের সৌন্দর্যের সিক্রেট উপাদান | Elite Corporation" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/BQETzWMsZ0g"
                        title="তৌহিদ আফ্রিদীর এনার্জির চাবিকাঠি- Vita Routine | Elite Corporation" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/nfB8UivGLc0"
                        title="মেহজাবিনের ন্যাচারাল সুস্বাস্থ্যের সিক্রেট- Natural Health Supplement | Elite Corporation"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="video-container">
                    <iframe width="300" height="150" src="https://www.youtube.com/embed/oFvzPgGVZKU"
                title="মেহজাবিনের সু-স্বাস্থ্যের গোপন রেসিপি- Natural Health Care Supplement | Elite Corporation"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                </div>
            </div>
            
            {{-- @endforeach --}}
        </div>
    </section>
</section>

<!-- Optional Custom CSS -->
<style>
    /* Make video iframe responsive with 16:9 aspect ratio */
    .video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
        background: #000;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Optional: Add margin for smaller screens */
    @media (max-width: 768px) {
        .video-container {
            padding-bottom: 56.25%;
            /* 16:9 ratio */
        }
    }
</style>
