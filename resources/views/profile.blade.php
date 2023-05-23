@extends('sidebar')
@section('content')
<div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body profile-page p-0">
               <div class="profile-header">
                  <div class="position-relative">
                     @foreach($user as $profile)
                     <div class="profile-img">
                        <img src="{{ $profile->photo }}" alt="profile-img" class="avatar-130 img-fluid" />
                     </div>
                     <div class="profile-detail">
                        <h3 class="profile">{{ $profile->username }}</h3>
                     </div>
                     @endforeach
                  </div>
                  <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                     <div class="social-links">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center pe-3">
                              <a href="#"><img src="" class="img-fluid rounded" alt=""></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="" class="img-fluid rounded" alt=""></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="" class="img-fluid rounded" alt=""></a>
                           </li>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card">
            <div class="card-body p-0">
               <div class="user-tabing">
                  <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-about-tab" data-bs-toggle="pill" data-bs-target="#about" role="button">Profil</a>
                     </li>
                     <li class="nav-item col-12 col-sm-3 p-0">
                        <a class="nav-link" href="#pills-photos-tab" data-bs-toggle="pill" data-bs-target="#photos" role="button">Postingan</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="tab-pane fade active show" id="about" role="tabpanel" >
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Informasi Pribadi</a>
                              </li>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Tentang Saya</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-9 ps-4">
                           @foreach($user as $profile)
                           <div class="tab-content" >
                              <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                              <h4 >Informasi Pribadi</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Nama</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">{{ $profile->name }}</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Tanggal Lahir</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">{{ $profile->born_date }}</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Jenis Kelamin</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">{{ $profile->gender }}</p>
                                    </div>
                                 </div>
                              <h4 class="mt-3">Contact Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">{{ $profile->email }}</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Nomor HP</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">{{ $profile->phone }}</p>
                                    </div>
                                    <div class="col-3">
                                        <h6>Alamat</h6>
                                     </div>
                                     <div class="col-9">
                                        <p class="mb-0">{{ $profile->address }}</p>
                                     </div>
                                 </div>
                              </div>

                              <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                 <h4 class="mb-3">Bio Saya</h4>
                                 <p>{{ $profile->bio }}</p>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="photos" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Postingan</h2>
                     <div class="friend-list-tab mt-2">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13">
                                    @foreach($posts as $post)
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="{{ route('postingan.profile', ['id' => $post->id]) }}">
                                          <img src="{{ $post->image }}" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> {{ $post->likes->count() }} <i class="ri-heart-3-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> {{ $post->comments->count() }} <i class="ri-chat-3-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          @if(auth()->user()->id == $post->user->id)
                                          <a href="deletePost/{{$post->id}}" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan" onclick="return confirm('Yain ingin menghapus data?') ">
                                             <i class="ri-delete-bin-6-line"></i>
                                          </a>
                                          @endif
                                       </div>
                                    </div>
                                    @endforeach
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      </div>
    </div>
@endsection
