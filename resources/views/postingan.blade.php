@extends ('sidebar')
@section('content')
{{-- @dd($posts[0]['user']['username']) --}}
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="post-modal-data" class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Create Post</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="user-img">
                                    <img src="{{ session()->get('photo') }}" alt="userimg"
                                        class="avatar-60 rounded-circle">
                                </div>
                                <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#post-modal"
                                    action="javascript:void();">
                                    <input type="text" class="form-control rounded"
                                        placeholder="Buat postingan disini..." style="border:none;">
                                </form>
                            </div>
                        </div>
                    </div>
                    </button>
                    </li>
                    </ul>
                </div>
                <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="true">
                    <div class="modal-dialog   modal-fullscreen-sm-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                        class="ri-close-fill"></i></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('postup/') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex align-items-center">
                                        <div class="user-img">
                                            <img src="{{ session()->get('photo') }}" alt="userimg"
                                                class="avatar-60 rounded-circle img-fluid">
                                        </div>
                                        <input type="text" name="caption" class="form-control rounded"
                                            placeholder="Tulis keterangan disini..." style="border:none;">
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center  invisiblefile">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3">
                                            <img src="images/small/07.png" alt="icon" class="img-fluid"> Photo/Video
                                            <input class="" type="file" name="image">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($posts as $post)
                @if ($post->image == null)
                    <!-- <div class="col-sm-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="user-post-data">
                                    <div class="d-flex justify-content-between">
                                        <div class="me-3">
                                            <img class="avatar-60 rounded-circle" src="{{ $post->photo }}" alt="">
                                        </div>
                                        <div class="w-100">
                                            <div class=" d-flex  justify-content-between">
                                                <div class="">
                                                    <h5 class="mb-0 d-inline-block"><a
                                                            href="/profile">{{ $post->user->username }}</a></h5>
                                                    <p class="mb-0 d-inline-block"></p>
                                                    <p class="mb-0 text-primary">{{ Str::limit($post->created_at, 10) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="card card-block card-stretch card-height">
                                                <div class="card-body">
                                                    <div class="user-post-data">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="me-3">
                                                                <img class="rounded-circle img-fluid"
                                                                    src="images/user/02.jpg" alt="">
                                                            </div>
                                                            <div class="w-100">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="">
                                                                        <h5 class="mb-0 d-inline-block"><a
                                                                                href="/profile">Paige Turner</a></h5>
                                                                        <p class="mb-0 d-inline-block">Added New Video in
                                                                            his Timeline</p>
                                                                        <p class="mb-0 text-primary">1 day ago</p>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <p>{{ $post->caption }}</p>
                                                                    </div>
                                                                    <div class="comment-area mt-3">
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center flex-wrap">
                                                                            <div
                                                                                class="like-block position-relative d-flex align-items-center">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="like-data">
                                                                                        <span class="dropdown-toggle"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            role="button">
                                                                                            <button class="like-btn"><i
                                                                                                    class="far fa-heart"></i></button>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="total-like-block ms-2 me-3">
                                                                                        <ul class="list-inline mb-0">
                                                                                            <li class="list-inline-item"><a
                                                                                                    href="/like">Suka</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="total-comment-block">
                                                                                        <form class="post-text ms-3 w-100 "
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#komen-modal">
                                                                                            <input type="button"
                                                                                                style="border:none;"><a
                                                                                                href="/komen"><i
                                                                                                    class="far fa-comment"></i></a>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div
                                                                                        class="total-like-block ms-2 me-3">
                                                                                        <ul class="list-inline mb-0">
                                                                                            <li class="list-inline-item"><a
                                                                                                    href="/komen">Komentar</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="total-comment-block">
                                                                                        <form class="post-text ms-3 w-100 "
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#lapor-modal"
                                                                                            action="javascript:void();">
                                                                                            <input type="button"
                                                                                                style="border:none;"><a
                                                                                                href="javascript:void();"><i
                                                                                                    class="far fa-flag"></i></a>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div
                                                                                        class="total-like-block ms-2 me-3">
                                                                                        <ul class="list-inline mb-0">
                                                                                            <form data-bs-toggle="modal"
                                                                                                data-bs-target="#lapor-modal"
                                                                                                action="javascript:void();">
                                                                                                <li
                                                                                                    class="list-inline-item">
                                                                                                    <a
                                                                                                        href="javascript:void();">Laporkan</a>
                                                                                                </li>
                                                                                            </form>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                @else
                    <div class="col-sm-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="user-post-data">
                                    <div class="d-flex justify-content-between">
                                        <div class="me-3">
                                            <img class="avatar-60 rounded-circle"
                                                src="{{ $post->user->photo }}"
                                                alt="">
                                        </div>
                                        <div class="w-100">
                                            <div
                                                class="d-flex  justify-content-between">
                                                <div class="">
                                                    <h5  class="mb-0 d-inline-block fw-normal"><a
                                                            href=/profile>{{ $post->user->username }}</a>
                                                    </h5>
                                                    <span
                                                        class="mb-0 d-inline-block"></span>
                                                    <p class="mb-0 text-primary">
                                                        {{ $post->created_at->locale('id')->diffForHumans() }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p>{{ $post->caption }}</p>
                                </div>

                                                                    <div class="user-post">
                                                                        <a href="javascript:void();"><img
                                                                                src="{{ $post->image }}"
                                                                                alt="post-image"
                                                                                class="img-fluid rounded w-100"></a>
                                                                    </div>

                                <div class="comment-area mt-3">
                                    <div
                                        class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div
                                            class="like-block position-relative d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <a href="/suka/{{ $post->id }}">
                                                    <div class="like-data">
                                                        <span class="dropdown-toggle"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            role="button">
                                                            <button class="like-btn" >
                                                                <i class="far fa-heart"></i></button>
                                                        </span>
                                                    </div>
                                                    <div
                                                        class="total-like-block ms-2 me-3">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p >{{ $post->likes->count() }} Suka</p>
                                                                
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                                <div class="total-comment-block">
                                                    <form class="post-text ms-3 w-100 "
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#komen-modal"
                                                        action="javascript:void();">
                                                        <input type="button"
                                                            style="border:none;height:10px;margin-bottom:5px"><a
                                                            href="/komen/{{ $post->id }}"><i
                                                                class="far fa-comment"></i></a>
                                                    </form>
                                                </div>
                                                <div
                                                    class="total-like-block ms-2 me-3">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item"><a
                                                                href="/komen/{{ $post->id }}">Komentar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="total-comment-block">
                                                    <form class="post-text ms-3 w-100 "
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#lapor-modal">
                                                        <input type="button"
                                                            style="border:none;height:10px;margin-bottom:5px"><a
                                                            href="javascript:void();"><i
                                                                class="far fa-flag"></i></a>
                                                    </form>
                                                </div>
                                                <div
                                                    class="total-like-block ms-2 me-3">
                                                    <ul class="list-inline mb-0">
                                                        <form data-bs-toggle="modal"
                                                            data-bs-target="#lapor-modal"
                                                            action="javascript:void();">
                                                            <li
                                                                class="list-inline-item">
                                                                <a
                                                                    href="javascript:void();">Laporkan</a>
                                                            </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach




            <div class="modal fade" id="lapor-modal" tabindex="-1" aria-labelledby="post-modalLabel"
                aria-hidden="true">
                <div class="modal-dialog   modal-fullscreen-sm-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="post-modalLabel">Laporkan</h5>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class="ri-close-fill"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex align-items-center">
                                <form class="post-text ms-3 w-100" action="javascript:void();">
                                    <input type="button" src="images/icon/komen.png" class="form-control rounded"
                                        style="border:none;">
                                </form>
                            </div>
                            <div class="lapor">Apakah anda memiliki Keluhan terhadap postingan ini?</div>
                            </form>
                            <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                <input type="text" class="form-control rounded"
                                    placeholder="Ketikkan keluhanmu disini...">
                                <div class="comment-attagement d-flex">
                                    <a href="javascript:void();"><i class="far fa-paper-plane"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <button class="welcome-modal-btn">
                <a href="postingan"><i class="fas fa-arrow-up"></i></a>
            </button>
            <!-- Wrapper End-->
        @endsection
