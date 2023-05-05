@extends('AdminMaster')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
            <h3 class="text-white">Laporkan</h3>
            <p class="text-white"></p>
        </div>
        </div>
    </div>
    <div class="col-sm-12">
        <!-- Editable table -->
            <div class="card">
                <div class="card-body p-0">
                <div class="">
                    <div class="iq-email-to-list p-3">
                        <div class="iq-email-to-list-detail d-flex justify-content-between">
                            
                            <div class="iq-email-search d-flex">
                                <form class="me-2 position-relative searchbox">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form-control search-input" id="exampleInputEmail1" placeholder="Search">
                                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    </div>
                                </form>
                                <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                    <li class="me-2">
                                        <a class="font-size-14" href="#" id="navbarDropdown1" data-bs-toggle="dropdown">
                                        1 - 50 of 505
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <a class="dropdown-item" href="#">20 per page</a>
                                            <a class="dropdown-item" href="#">50 per page</a>
                                            <a class="dropdown-item" href="#">100 per page</a>
                                        </div>
                                    </li>
                                    <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                    <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="iq-email-listbox">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="mail-inbox" role="tabpanel">
                            <ul class="iq-email-sender-list">
                            @foreach($reports as $report)
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            
                                        </div>
                                        <a href="#" class="iq-email-title">{{ $report->username }}</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">{{ $report->reason }} 
                                        <span></span>
                                        </a>
                                        <div class="iq-email-date">{{ Str::limit($report->created_at, 10) }}</div>
                                        </div>
                                        <!-- <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul> -->
                                    </div> 
                                    <div class="email-app-details">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="">
                                                    <div class="iq-email-to-list p-3">
                                                        <div class="d-flex justify-content-between">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a href="javascript: void(0);" class="email-remove">
                                                                        <i class="ri-arrow-left-line m-0 h4"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                                <h6 class="mb-0">SocialV team <a href="dummy@SocialV.com">dummy@SocialV.com</a></h6>
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    to Me
                                                                    </a>
                                                                    <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                        <table class="iq-inbox-details">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>from:</td>
                                                                                <td>Medium Daily Digest</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>reply-to:</td>
                                                                                <td>noreply@gmail.com</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>to:</td>
                                                                                <td>iqonicdesigns@gmail.com</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>date:</td>
                                                                                <td>13 Dec 2019, 08:30</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>subject:</td>
                                                                                <td>The Golden Rule</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>security:</td>
                                                                                <td>Standard encryption</td>
                                                                            </tr>
                                                                        </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span class="align-self-center">Jan 15, 2029, 10:20AM</span>
                                                            </div>
                                                            <div class="iq-inbox-body mt-5">
                                                                <p>Hi Jopour Xiong,</p>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                                <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                                <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                            </div>
                                                            <div class="attegement">
                                                                <h6 class="mb-2">ATTACHED FILES:</h6>
                                                                <ul>
                                                                    <li class="icon icon-attegment">
                                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ms-1">mydoc.doc</span>
                                                                    </li>
                                                                    <li class="icon icon-attegment">
                                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ms-1">mydoc.pdf</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </li>
                            @endforeach
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div id="compose-email-popup" class="compose-popup modal modal-sticky-bottom-right modal-sticky-lg">
            <div class="card iq-border-radius-20 mb-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <h5 class="text-primary float-left"><i class="ri-pencil-fill"></i> Compose Message</h5>
                            <button type="submit" class="close-popup" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                        </div>
                    </div>
                    <form class="email-form">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
                            <div class="col-sm-10">
                                <select  id="inputEmail3" class="select2jsMultiSelect form-control" multiple="multiple">
                                <option value="Petey Cruiser">Petey Cruiser</option>
                                <option value="Bob Frapples">Bob Frapples</option>
                                <option value="Barb Ackue">Barb Ackue</option>
                                <option value="Greta Life">Greta Life</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cc" class="col-sm-2 col-form-label">Cc:</label>
                            <div class="col-sm-10">
                                <select  id="cc" class="select2jsMultiSelect form-control" multiple="multiple">
                                <option value="Brock Lee">Brock Lee</option>
                                <option value="Rick O'Shea">Rick O'Shea</option>
                                <option value="Cliff Hanger">Cliff Hanger</option>
                                <option value="Barb Dwyer">Barb Dwyer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                            <div class="col-sm-10">
                                <input type="text"  id="subject" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
                            <div class="col-md-10">
                                <textarea class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
                            </div>
                        </div>
                        <div class="form-group row align-items-center compose-bottom pt-3 m-0">
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="send-btn">
                                <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                                <div class="send-panel">
                                <label class="ms-2 mb-0 soft-bg-primary rounded" for="file"> <input type="file" id="file" style="display: none"> <a><i class="ri-attachment-line"></i> </a> </label>
                                <label class="ms-2 mb-0 soft-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-map-pin-user-line text-primary"></i></a>  </label>
                                <label class="ms-2 mb-0 soft-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-drive-line text-primary"></i></a>  </label>
                                <label class="ms-2 mb-0 soft-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-camera-line text-primary"></i></a>  </label>
                                <label class="ms-2 mb-0 soft-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-user-smile-line text-primary"></i></a>  </label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="send-panel">
                                    <label class="ms-2 mb-0 soft-bg-primary rounded" ><a href="javascript:void();"><i class="ri-settings-2-line text-primary"></i></a></label>
                                    <label class="ms-2 mb-0 soft-bg-primary rounded"><a href="javascript:void();"><i class="ri-delete-bin-line text-primary"></i></a>  </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection