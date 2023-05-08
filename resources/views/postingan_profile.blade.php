@extends ('sidebar')
@section('content') 
<div id="content-page" class="content-page">
<div class="container">
   <div class="row">
   <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                                 <span class="mb-0 d-inline-block">Add New Post</span>
                                 <p class="mb-0 text-primary">Just Now</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Hapus Postingan</h6>
                                                <p class="mb-0">Hapus Postinganmu Disini.</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class=" d-grid grid-rows-2 grid-flow-col gap-3">
                        <div class="row-span-2 row-span-md-1">
                           <img src="images/page-img/p2.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                        <div class="row-span-1">
                           <img src="images/page-img/p1.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                        <div class="row-span-1 ">
                           <img src="images/page-img/p3.jpg" alt="post-image" class="img-fluid rounded w-100">
                        </div>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <button class = "like-btn"><i class = "far fa-heart"></i></button> 
                                    </span>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/like">Suka</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="/komen"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/komen">Komentar</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-flag"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                              <ul class="list-inline mb-0">
                                 <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <li class="list-inline-item"><a href="javascript:void();">Laporkan</a></li>
                                 </form>
                              </ul>
                           </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div> 
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/03.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Barb Ackue</h5>
                                 <span class="mb-0 d-inline-block">Added New Image in a Post</span>
                                 <p class="mb-0 text-primary">1 hour ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Hapus Postingan</h6>
                                                <p class="mb-0">Hapus Postinganmu Disini.</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <a href="javascript:void();"><img src="images/page-img/p4.jpg" alt="post-image" class="img-fluid rounded w-100"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <button class = "like-btn"><i class = "far fa-heart"></i></button> 
                                    </span>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/like">Suka</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/komen">Komentar</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#lapor-modal">
                                    <input type="button" style="border:none;"><a href="/komen"><i class="far fa-flag"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                              <ul class="list-inline mb-0">
                                 <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <li class="list-inline-item"><a href="javascript:void();">Laporkan</a></li>
                                 </form>
                              </ul>
                           </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         
      
         
         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/04.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class=" d-flex  justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Ira Membrit</h5>
                                 <p class="mb-0 d-inline-block">Update her Status</p>
                                 <p class="mb-0 text-primary">6 hour ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Hapus Postingan</h6>
                                                <p class="mb-0">Hapus Postinganmu Disini.</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <button class = "like-btn"><i class = "far fa-heart"></i></button> 
                                    </span>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/like">Suka</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal">
                                    <input type="button" style="border:none;"><a href="/komen"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/komen">Komentar</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-flag"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                              <ul class="list-inline mb-0">
                                 <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <li class="list-inline-item"><a href="javascript:void();">Laporkan</a></li>
                                 </form>
                              </ul>
                           </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="post-item">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid avatar-60" src="images/user/1.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Bni Cyst</h5>
                                 <p class="ms-1 mb-0 d-inline-block">Changed Profile Picture</p>
                                 <p class="mb-0">3 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Hapus Postingan</h6>
                                                <p class="mb-0">Hapus Postinganmu Disini.</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="user-post text-center">
                     <a href="javascript:void();"><img src="images/page-img/p5.jpg" alt="post-image" class="img-fluid rounded w-100 mt-3"></a>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <button class = "like-btn"><i class = "far fa-heart"></i></button> 
                                    </span>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/like">Suka</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal">
                                    <input type="button" style="border:none;"><a href="/komen"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/komen">Komentar</a></li>
                                 </ul>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-flag"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                              <ul class="list-inline mb-0">
                                 <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <li class="list-inline-item"><a href="javascript:void();">Laporkan</a></li>
                                 </form>
                              </ul>
                           </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
        

         <div class="col-sm-12">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class="user-post-data">
                     <div class="d-flex justify-content-between">
                        <div class="me-3">
                           <img class="rounded-circle img-fluid" src="images/user/02.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Paige Turner</h5>
                                 <p class="mb-0 d-inline-block">Added New Video in his Timeline</p>
                                 <p class="mb-0 text-primary">1 day ago</p>
                              </div>
                              <div class="card-post-toolbar">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu m-0 p-0">
                                       <a class="dropdown-item p-3" href="#">
                                          <div class="d-flex align-items-top">
                                             <div class="h4">
                                                <i class="ri-save-line"></i>
                                             </div>
                                             <div class="data ms-2">
                                                <h6>Hapus Postingan</h6>
                                                <p class="mb-0">Hapus Postinganmu Disini.</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="mt-3">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                  </div>
                  <div class="user-post">
                     <div class="ratio ratio-16x9">
                        <iframe  src="https://www.youtube.com/embed/j_GsIanLxZk?rel=0" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="comment-area mt-3">
                     <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="like-block position-relative d-flex align-items-center">
                           <div class="d-flex align-items-center">
                              <div class="like-data">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    <button class = "like-btn"><i class = "far fa-heart"></i></button> 
                                    </span>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/like">Suka</a></li>
                                 </ul>
                              </div>
                           <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="/komen"><i class="far fa-comment"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                                 <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="/komen">Komentar</a></li>
                                 </ul>
                           </div>
                           <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-flag"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                              <ul class="list-inline mb-0">
                                 <form data-bs-toggle="modal" data-bs-target="#lapor-modal" action="javascript:void();">
                                    <li class="list-inline-item"><a href="javascript:void();">Laporkan</a></li>
                                 </form>
                              </ul>
                           </div>
                        </div>
                       </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="lapor-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                  <div class="modal-dialog   modal-fullscreen-sm-down">
                     <div class="modal-content">
                        <div class="modal-header" >
                           <h5 class="modal-title" id="post-modalLabel">Laporkan</h5>
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                        </div>
                        <div class="modal-body">
                           <div class="d-flex align-items-center">
                              <form class="post-text ms-3 w-100" action="javascript:void();">
                                 <input type="button"  src="images/icon/komen.png" class="form-control rounded" style="border:none;">
                              </form>
                           </div>
                         <div class = "lapor">Apakah anda memiliki Keluhan terhadap postingan ini?</div>
                     </form> <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Ketikkan keluhanmu disini...">
                        <div class="comment-attagement d-flex">
                           <a href="javascript:void();"><i class="far fa-paper-plane"></i></a>
                        </div>
                     </form>
                     </div>
                     </div>
                  </div>
                  </div>
         </div>
		<button class="welcome-modal-btn">
			<a href="postingan"><i class="fas fa-arrow-up"></i></a>
		</button>
    <!-- Wrapper End-->
   @endsection