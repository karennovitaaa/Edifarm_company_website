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
                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                <li class="me-1">
                                    <div id="navbarDropdown" data-bs-toggle="dropdown">
                                        <div class="d-flex align-items-center form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"><i class="ri-arrow-down-s-line"></i></label>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reload"><a href="#"><i class="ri-restart-line"></i></a></li>
                                <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                <li class="me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Inbox"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"><a href="#"><i class="ri-drag-move-2-line"></i></a></li>
                            </ul>
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
                                    <li class="me-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Setting"><a href="#"><i class="ri-list-settings-line"></i></a></li>
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
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk">
                                                <label class="form-check-label" for="mailk"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">{{ $report->username }}</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">{{ $report->reason }} 
                                        <span></span>
                                        </a>
                                        <div class="iq-email-date">{{ $report->created_at }}</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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




                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk1">
                                                <label class="form-check-label" for="mailk1"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Megan Allen (@meganallen) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">08:15 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk2">
                                                <label class="form-check-label" for="mailk2"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Dixa Horton (@dixahorton) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk3">
                                                <label class="form-check-label" for="mailk3"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk4">
                                                <label class="form-check-label" for="mailk4"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk017">
                                                <label class="form-check-label" for="mailk017"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk6">
                                                <label class="form-check-label" for="mailk6"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk7">
                                                <label class="form-check-label" for="mailk7"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk8">
                                                <label class="form-check-label" for="mailk8"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk9">
                                                <label class="form-check-label" for="mailk9"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk011">
                                                <label class="form-check-label" for="mailk011"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk11">
                                                <label class="form-check-label" for="mailk11"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk12">
                                                <label class="form-check-label" for="mailk12"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk13">
                                                <label class="form-check-label" for="mailk13"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk14">
                                                <label class="form-check-label" for="mailk14"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk15">
                                                <label class="form-check-label" for="mailk15"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk16">
                                                <label class="form-check-label" for="mailk16"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk17">
                                                <label class="form-check-label" for="mailk17"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-starred" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk02">
                                                <label class="form-check-label" for="mailk02"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Dixa Horton (@dixahorton) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk03">
                                                <label class="form-check-label" for="mailk03"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk04">
                                                <label class="form-check-label" for="mailk04"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
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
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                            </ul>
                                                            <div class="iq-email-search d-flex">
                                                            <ul class="list-inline d-flex align-items-center justify-content-between m-0 p-0">
                                                                <li class="me-3">
                                                                    <a class="font-size-14" href="#">1 of 505</a>
                                                                </li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                                <li class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-0">
                                                    <div class="iq-inbox-subject p-3">
                                                        <h5 class="mb-2">Your elite author Graphic Optimization reward is ready!</h5>
                                                        <div class="iq-inbox-subject-info">
                                                            <div class="iq-subject-info">
                                                            <img src="../assets/images/user/user-1.jpg" class="img-fluid rounded-circle avatar-80" alt="#">
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
                                                            <hr>
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
                                    </div>                                </li>
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk5">
                                                <label class="form-check-label" for="mailk5"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk018">
                                                <label class="form-check-label" for="mailk018"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-snoozed" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk004">
                                                <label class="form-check-label" for="mailk004"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk012">
                                                <label class="form-check-label" for="mailk012"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk024">
                                                <label class="form-check-label" for="mailk024"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-draft" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk09">
                                                <label class="form-check-label" for="mailk09"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk013">
                                                <label class="form-check-label" for="mailk013"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk014">
                                                <label class="form-check-label" for="mailk014"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk019">
                                                <label class="form-check-label" for="mailk019"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk025">
                                                <label class="form-check-label" for="mailk025"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-sent" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk015">
                                                <label class="form-check-label" for="mailk015"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk020">
                                                <label class="form-check-label" for="mailk020"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk026">
                                                <label class="form-check-label" for="mailk026"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk027">
                                                <label class="form-check-label" for="mailk027"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk032">
                                                <label class="form-check-label" for="mailk032"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk037">
                                                <label class="form-check-label" for="mailk037"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-trash" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk028">
                                                <label class="form-check-label" for="mailk028"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk033">
                                                <label class="form-check-label" for="mailk033"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk038">
                                                <label class="form-check-label" for="mailk038"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-important" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk029">
                                                <label class="form-check-label" for="mailk029"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk034">
                                                <label class="form-check-label" for="mailk034"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="iq-unread">
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk035">
                                                <label class="form-check-label" for="mailk035"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle text-warning"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk009">
                                                <label class="form-check-label" for="mailk009"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk010">
                                                <label class="form-check-label" for="mailk010"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk016">
                                                <label class="form-check-label" for="mailk016"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            </div>
                            <div class="tab-pane fade" id="mail-spam" role="tabpanel">
                            <ul class="iq-email-sender-list">
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk021">
                                                <label class="form-check-label" for="mailk021"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Jopour Xiong (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Mackenzie Bnio (@mackenzieBnio) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk023">
                                                <label class="form-check-label" for="mailk023"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Deray Billings (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk030">
                                                <label class="form-check-label" for="mailk030"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Lauren Drury (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk031">
                                                <label class="form-check-label" for="mailk031"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Fabian Ros (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk036">
                                                <label class="form-check-label" for="mailk036"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Dixa Horton (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-self-center iq-unread-inner">
                                        <div class="iq-email-sender-info">
                                        <div class="iq-checkbox-mail">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="mailk040">
                                                <label class="form-check-label" for="mailk040"></label>
                                            </div>
                                        </div>
                                        <span class="ri-star-line iq-star-toggle"></span>
                                        <a href="#" class="iq-email-title">Megan Allen (Me)</a>
                                        </div>
                                        <div class="iq-email-content">
                                        <a href="#" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                        you a direct message on Twitter! &nbsp;–&nbsp;
                                        <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="iq-email-date">11:49 am</div>
                                        </div>
                                        <ul class="iq-social-media list-inline">
                                        <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                        <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                        <li><a href="#"><i class="ri-time-line"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
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