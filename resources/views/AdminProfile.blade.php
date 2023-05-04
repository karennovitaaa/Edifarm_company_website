@extends('AdminMaster')
@section('content')    
<div id="content-page" class="content-page">
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body profile-page p-0">
               <div class="profile-header">
                  <div class="position-relative">
                     <img src="/images/user/foto_edifarm.jpg" alt="profile-bg" class="rounded img-fluid">
                  </div>
                  <div class="user-detail text-center mb-3">
                     <div class="profile-img">
                        <img src="/images/user/foto_profil_wishal.jpg" alt="profile-img" class="avatar-130 img-fluid" />
                     </div>
                     <div class="profile-detail">
                        <h3 class="">Edifarm</h3>
                     </div>
                  </div>
                  <div class="profile-info p-3 d-flex align-items-center justify-content-between position-relative">
                     <div class="social-links">
                        <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                           <li class="text-center pe-3">
                              <a href="#"><img src="/images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="/images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                           </li>
                           <li class="text-center pe-3">
                              <a href="#"><img src="/images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                           </li>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
      <div class="col-sm-12">
         <div class="tab-content">
            <div class="" id="photos" role="tabpanel">
               <div class="card">
                  <div class="card-body">
                     <h2>Postingan</h2>
                     <div class="friend-list-tab mt-2">
                        <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                           <li>
                              <a class="nav-link active" data-bs-toggle="pill" href="#pill-photosofyou" data-bs-target="#photosofyou">Foto</a>
                           </li>
                           <li>
                              <a class="nav-link" data-bs-toggle="pill" href="#pill-your-photos" data-bs-target="#your-photos">Video</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="//images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="your-photos" role="tabpanel">
                              <div class="card-body p-0">
                                 <div class="d-grid gap-2 d-grid-template-1fr-13 ">
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="user-images position-relative overflow-hidden">
                                          <a href="#">
                                          <img src="/images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                          </a>
                                          <div class="image-hover-data">
                                             <div class="product-elements-icon">
                                                <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                   <li><a href="#" class="pe-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                   <li><a href="#" class="pe-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <a href="#" class="image-edit-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
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