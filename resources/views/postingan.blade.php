@extends ('sidebar')
@section('content') 
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
                        <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle">
                     </div>
                     <form class="post-text ms-3 w-100 "  data-bs-toggle="modal" data-bs-target="#post-modal" action="javascript:void();">
                        <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                     </form>
                  </div>
                  <hr>
                  <ul class=" post-opt-block d-flex list-inline m-0 p-0 flex-wrap">
                     <li class="me-3 mb-md-0 mb-2">
                        <a href="#" class="btn btn-soft-primary">
                           <img src="images/small/07.png" alt="icon" class="img-fluid me-2"> Photo/Video
                        </a>
                     </li>
                     <li class="me-3 mb-md-0 mb-2">
                        <a href="#" class="btn btn-soft-primary">
                           <img src="images/small/08.png" alt="icon" class="img-fluid me-2"> Tag Friend
                        </a>
                     </li>
                     <li class="me-3">
                        <a href="#" class="btn btn-soft-primary">
                           <img src="images/small/09.png" alt="icon" class="img-fluid me-2"> Feeling/Activity
                        </a>
                     </li>
                     <li>
                        <button class="btn btn-soft-primary">
                           <div class="card-header-toolbar d-flex align-items-center">
                                 <div class="dropdown-toggle" id="post-option"   data-bs-toggle="dropdown">
                                    <i class="ri-more-fill"></i>
                                 </div>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Check in</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live Video</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Gif</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Watch Party</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play with Friend</a>
                                 </div>
                              </div>
                           </div>
                        </button>
                     </li>
                  </ul>
               </div>
               <div class="modal fade" id="post-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                  <div class="modal-dialog   modal-fullscreen-sm-down">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                        </div>
                        <div class="modal-body">
                           <div class="d-flex align-items-center">
                              <div class="user-img">
                                 <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                              </div>
                              <form class="post-text ms-3 w-100" action="javascript:void();">
                                 <input type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                              </form>
                           </div>
                           <hr>
                           <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/07.png" alt="icon" class="img-fluid"> Photo/Video</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/10.png" alt="icon" class="img-fluid"> Check in</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/11.png" alt="icon" class="img-fluid"> Live Video</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/12.png" alt="icon" class="img-fluid"> Gif</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/13.png" alt="icon" class="img-fluid"> Watch Party</div>
                              </li>
                              <li class="col-md-6 mb-3">
                                 <div class="bg-soft-primary rounded p-2 pointer me-3"><a href="#"></a><img src="images/small/14.png" alt="icon" class="img-fluid"> Play with Friends</div>
                              </li>
                           </ul>
                           <hr>
                           <div class="other-option">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <div class="user-img me-3">
                                       <img src="images/user/1.jpg" alt="userimg" class="avatar-60 rounded-circle img-fluid">
                                    </div>
                                    <h6>Your Story</h6>
                                 </div>
                                 <div class="card-post-toolbar">
                                       <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                       <span class="btn btn-primary">Friend</span>
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-save-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Public</h6>
                                                   <p class="mb-0">Anyone on or off Facebook</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                               <i class="ri-close-circle-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Friends</h6>
                                                   <p class="mb-0">Your Friend on facebook</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-user-unfollow-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Friends except</h6>
                                                   <p class="mb-0">Don't show to some friends</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <i class="ri-notification-line h4"></i>
                                                <div class="data ms-2">
                                                   <h6>Only Me</h6>
                                                   <p class="mb-0">Only me</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                        </div>
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
                           <img class="rounded-circle img-fluid" src="images/user/01.jpg" alt="">
                        </div>
                        <div class="w-100">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h5 class="mb-0 d-inline-block">Anna Sthesia</h5>
                                 <span class="mb-0 d-inline-block">Add New Post</span>
                                 <p class="mb-0 text-primary">Just Now</p>
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
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Likes
                                    </span>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Comment
                                    </span>
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
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Likes
                                    </span>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Comment
                                    </span>
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
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Likes
                                    </span>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Comment
                                    </span>
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
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Likes
                                    </span>
                              </div>
                              <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                              </div>
                              <div class="total-like-block ms-2 me-3">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Comment
                                    </span>
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
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Likes
                                    </span>
                              </div>
                           
                           <div class="total-comment-block">
                                 <form class="post-text ms-3 w-100 " data-bs-toggle="modal" data-bs-target="#komen-modal" action="javascript:void();">
                                    <input type="button" style="border:none;"><a href="javascript:void();"><i class="far fa-comment"></i></a>
                                 </form>
                           </div>
                           <div class="total-like-block ms-2 me-3">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                    Comment
                                    </span>
                           </div>
                        </div>
                       </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div>


         <div class="modal fade" id="komen-modal" tabindex="-1"  aria-labelledby="post-modalLabel" aria-hidden="true" >
                  <div class="modal-dialog   modal-fullscreen-sm-down">
                     <div class="modal-content">
                        <div class="modal-header" >
                           <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                        </div>
                        <div class="modal-body">
                           <div class="d-flex align-items-center">
                              <form class="post-text ms-3 w-100" action="javascript:void();">
                                 <input type="button"  src="images/icon/komen.png" class="form-control rounded" style="border:none;">
                              </form>
                           </div>
                          
                     <ul class="post-comments list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex">
                              <div class="user-img">
                                 <img src="images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Monty Carlo</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex ">
                              <div class="user-img">
                                 <img src="images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                              </div>
                              <div class="comment-data-block ms-3">
                                 <h6>Paul Molive</h6>
                                 <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                 <div class="d-flex flex-wrap align-items-center comment-activity">
                                    <a href="javascript:void();">like</a>
                                    <a href="javascript:void();">reply</a>
                                    <a href="javascript:void();">translate</a>
                                    <span> 5 min </span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                        <input type="text" class="form-control rounded" placeholder="Enter Your Comment">
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