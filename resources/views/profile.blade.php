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
                        <div class="profile-img-edit">
                        <img class="profile-pic" src="/images/user/11.png" alt="profile-pic">
                        </div>
                  </div>
               </div>
                     <div class="profile-detail">
                        <h3 class="">{{session()->get('nama') }}</h3>
                     </div>
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
            <div class="tab-pane fade" id="about" role="tabpanel" >
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                              <li>
                                 <a class="nav-link active" href="#v-pills-basicinfo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-basicinfo-tab" role="button">Contact and Basic Info</a>
                              </li>
                              </li>
                              <li>
                                 <a class="nav-link" href="#v-pills-details-tab" data-bs-toggle="pill" data-bs-target="#v-pills-details-tab" role="button">Details About You</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-9 ps-4">
                           <div class="tab-content" >
                              <div class="tab-pane fade active show" id="v-pills-basicinfo-tab" role="tabpanel"  aria-labelledby="v-pills-basicinfo-tab">
                                 <h4>Contact Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Email</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Bnijohn@gmail.com</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Mobile</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">(001) 4544 565 456</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Address</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">United States of America</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Websites and Social Links</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Website</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Social Link</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">www.bootstrap.com</p>
                                    </div>
                                 </div>
                                 <h4 class="mt-3">Basic Information</h4>
                                 <hr>
                                 <div class="row">
                                    <div class="col-3">
                                       <h6>Birth Date</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">24 January</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Birth Year</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">1994</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>Gender</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Female</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>interested in</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">Designing</p>
                                    </div>
                                    <div class="col-3">
                                       <h6>language</h6>
                                    </div>
                                    <div class="col-9">
                                       <p class="mb-0">English, French</p>
                                    </div>
                                 </div>
                              </div>

                              <div class="tab-pane fade" id="v-pills-details-tab" role="tabpanel" aria-labelledby="v-pills-details-tab">
                                 <h4 class="mb-3">About You</h4>
                                 <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                 <h4 class="mt-3 mb-3">Other Name</h4>
                                 <p>Bini Rock</p>
                                 <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              </div>
                           </div>
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
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="/like" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="/postingan_profile">
                                          <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="/komen" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"><i class="ri-flag-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Hapus Postingan"><i class="ri-delete-bin-6-line"></i></a>
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
      </div>
    </div>
@endsection
