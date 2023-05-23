<div>
    @foreach($posts as $post)
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
                                            href="{{ route('profile.user', ['id' => $post->user->id]) }}" >{{ $post->user->username }}</a>
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
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                        @if($post->hasLike)
                                        <button wire:click="suka({{ $post->id }})" style="background-color: white; color: black;"><i class="fas fa-heart"></i></button>
                                        @else
                                        <button wire:click="suka({{ $post->id }})" style="background-color: white; color: black;"><i class="far fa-heart"></i></button>
                                        @endif
                                    </span>
                                </div>
                                <div class="total-like-block ms-2 me-3">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a>{{ $post->likes->count() }} Suka</a></li>
                                    </ul>
                                </div>
                                <div class="total-comment-block">
                                    <button href="/komen/{{ $post->id }}" style="background-color: white; color: black;"><i class="far fa-comment"></i></button>
                                </div>
                                <div class="total-like-block ms-2 me-3">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a href="/komen/{{ $post->id }}">{{ $post->comments->count() }} Komentar</a></li>
                                    </ul>
                                </div>
                                @if(auth()->user()->id != $post->user->id)
                                <div class="total-comment-block">
                                    <button data-bs-toggle="modal" data-bs-target="#lapor-modal" style="background-color: white; color: black;"><i class="far fa-flag"></i></button>
                                </div>
                                <div class="total-like-block ms-2 me-3">
                                    <ul class="list-inline mb-0">
                                        <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                            <li class="list-inline-item">
                                                <a href="javascript:void();">Laporkan</a>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="lapor-modal" tabindex="-1" aria-labelledby="post-modalLabel" aria-hidden="false">
        <div class="modal-dialog   modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="post-modalLabel">Laporkan</h5>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                </div>
                <div class="modal-body">
                    <div class="lapor">Apakah anda memiliki Keluhan terhadap postingan ini?</div>
                    <form wire:submit.prevent="store({{ $post->id }})" class="comment-text d-flex align-items-center mt-3">
                        <input wire:model.defer="body" type="text" class="form-control rounded" placeholder="Ketikkan keluhanmu disini..." required>
                        <div class="comment-attagement d-flex">
                            <button type="submit"><i class="far fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    Livewire.on('tableCreated', () => {
        // Close the modal using your preferred method
        // For example, if you're using Bootstrap's modal, you can use jQuery to close it
        $('#lapor-modal').modal('hide');
    });
    </script>

    @endforeach
</div>