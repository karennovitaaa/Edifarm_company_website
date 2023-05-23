@extends('AdminMaster')
@section('content')
<div class="row">
    <div class="">
        <div class="col-sm-12 card position-relative inner-page-bg bg-primary" style="height: 150px;">
        <div class="inner-page-title">
            <h3 class="text-white">Laporkan</h3>
            <p class="text-white"></p>
        </div>
        </div>
    </div>
    <div id="content-page" class="content-page">
        <div class="container relative">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="card">
                        <div class="card-body p-0">
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
                                    <div class="tab-pane fade show active" id="mail-starred" role="tabpanel">
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