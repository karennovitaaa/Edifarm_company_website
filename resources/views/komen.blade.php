<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edifarm</title>

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/socialv.css?v=4.0.0') }}">
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/remixicon/fonts/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome-line-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-dYmLvC1rLz/rJksmDfCmOlk+ymMzfJxYYhX9lhHVQ0UyyB6lAg8bw/+Nz/pL0B5+5Ln03p5xkr06WZ0v/6/OYQ=="
        crossorigin="anonymous">

</head>
<body>
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body profile-page p-0">
                            <div class="profile-header">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="post-modalLabel">Komentar</h5>
                                </div>
                                <div class="position-relative mt-2" style="height: 500px; overflow: scroll;">
                                    <div class="modal-content">
                                        <ul class="post-comments list-inline p-0 m-0">
                                            @foreach ($post->comments as $comment)
                                            <li class="mb-2">
                                                <div class="d-flex2">
                                                    <div class="user-img">
                                                        <img src="{{ asset($post->user->photo) }}" alt="userimg"
                                                            class="avatar-35 rounded-circle img-fluid">
                                                    </div>
                                                    <div class="comment-data-block ms-3">
                                                        <h6 >{{ $post->user->username }}</h6>
                                                        <p class="mb-0">{{ $comment->pivot->comment }}</p>
                                                        <div class=" flex2-wrap align-items-center comment-activity">
                                                            <span> {{ $comment->pivot->updated_at->locale('id')->diffForHumans() }} </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="" style="margin-bottom: 10px; position: re;">
                                        <form class="comment-text d-flex2 align-items-center mt-3" action="/comment" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $post->id }}" name="post_id">
                                            {{-- <input type="hidden" value="{{ $post->id }}" name="post_id"> --}}
                                            <input type="text" class="form-control rounded"
                                                placeholder="Ketikkan komenmu disini..." name="comment">
                                            <div class="comment-attagement d-flex2">
                                                <button type="submit"><i class="far fa-paper-plane"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="js/charts/weather-chart.js"></script>
    <script src="js/app.js"></script>
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>

</body>
</html>