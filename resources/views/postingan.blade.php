@extends ('sidebar')

@push('styles')
    @livewireStyles
@endpush

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="post-modal-data" class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Tambah Postingan</h4>
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
                                                class="avatar-61 rounded-circle img-fluid">
                                        </div>
                                        <input type="text" name="caption" class="form-control rounded"
                                            placeholder="Tulis keterangan disini..." style="border:none;">
                                    </div>
                                    <hr>
                                    <div class="d-flex align-items-center  invisiblefile">
                                        <div class="bg-soft-primary rounded p-2 pointer me-3">
                                            <img src="images/small/07.png" alt="icon" class="img-fluid"> Foto
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

            @livewire('post-like')
                
            <button id="scrollToTopBtn" class="welcome-modal-btn">
                <a href="postingan"><i class="fas fa-arrow-up"></i></a>
            </button>
            <!-- Wrapper End-->
        @endsection

@push('scripts')
    @livewireScripts
@endpush
