<!-- <link href="../vendors/choices/choices.min.css" rel="stylesheet">
  <link href="../vendors/dhtmlx-gantt/dhtmlxgantt.css" rel="stylesheet">
  <link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
  <link rel="../preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="../stylesheet" href="unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
      -->
<?php
include '../include/navbar.php';
?>

<div class="content">
        <div class="row gx-lg-6 gx-3 py-4 z-index-2 position-sticky bg-soft" style="top: 65px;">
          <div class="col-auto"><a class="btn btn-primary email-sidebar-width d-none d-lg-block" href="compose.html">Compose</a><button class="btn px-3 btn-phoenix-secondary text-700 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#emailSidebarColumn"><span class="fa-solid fa-bars"></span></button></div>
          <div class="col-auto d-lg-none"><a class="btn btn-primary" href="compose.html"> <span class="d-none d-sm-inline-block">Compose</span><span class="d-sm-none fas fa-plus"></span></a></div>
          <div class="col-auto flex-1">
            <div class="search-box w-100">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search ..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
        </div>
        <div class="row g-lg-6 mb-8">
          <div class="col-lg-auto">
            <div class="email-sidebar email-sidebar-width bp-xl bg-soft scrollbar phoenix-offcanvas" id="emailSidebarColumn">
              <div class="email-content">
                <div class="d-flex justify-content-between align-items-center">
                  <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">mailbox</p><button class="btn d-lg-none p-0 mb-2" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
                </div>
                <ul class="nav flex-column border-top fs--1 vertical-nav mb-4">
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-inbox"></span><span class="flex-1">Inbox</span><span class="nav-item-count">5</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none active" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-location-arrow"></span><span class="flex-1">Sent</span><span class="nav-item-count">23</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-pen"></span><span class="flex-1">Draft</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-exclamation-circle"></span><span class="flex-1">Spam</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-trash"></span><span class="flex-1">Trash</span></div>
                    </a></li>
                </ul>
                <div class="d-flex justify-content-between">
                  <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">Filtered</p><a class="fs--2 fw-bold text-decoration-none" href="#!"><span class="fa-solid fa-plus me-2"></span>Add Folder</a>
                </div>
                <ul class="nav flex-column border-top fs--1 vertical-nav mb-4">
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-star"></span><span class="flex-1">Starred</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="me-2 nav-icons uil uil-archive"></span><span class="flex-1">Archive</span></div>
                    </a></li>
                </ul>
                <div class="d-flex justify-content-between">
                  <p class="text-uppercase fs--2 text-600 mb-2 fw-bold">Labels</p><a class="fs--2 fw-bold text-decoration-none" href="#!"><span class="fa-solid fa-plus me-2"></span>Add Label</a>
                </div>
                <ul class="nav flex-column border-top fs--1 vertical-nav">
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-primary" data-fa-transform="shrink-10"></span><span class="flex-1">Personal</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-primary-600" data-fa-transform="shrink-10"></span><span class="flex-1">Work</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-success" data-fa-transform="shrink-10"></span><span class="flex-1">Payments</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-warning" data-fa-transform="shrink-10"></span><span class="flex-1">Invoices</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-danger" data-fa-transform="shrink-10"></span><span class="flex-1">Accounts</span></div>
                    </a></li>
                  <li class="nav-item"><a class="nav-link py-2 ps-0 pe-3 border-end border-bottom text-start outline-none" aria-current="page" href="#!">
                      <div class="d-flex align-items-center"><span class="ms-n1 me-1 fa-solid fa-circle text-info" data-fa-transform="shrink-10"></span><span class="flex-1">Forums</span></div>
                    </a></li>
                </ul>
              </div>
            </div>
            <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop="data-phoenix-backdrop" style="top: 0;"></div>
          </div>
          <div class="col-lg">
            <div class="px-lg-1">
              <div class="d-flex align-items-center flex-wrap position-sticky pb-2 bg-soft z-index-2" style="top: 150px">
                <div class="d-flex align-items-center flex-1 me-2"><button class="btn btn-sm p-0 me-2" type="button" onclick="location.reload()"><span class="text-primary fas fa-redo fs--2"></span></button>
                  <p class="fw-semi-bold fs--2 text-600 mb-0 lh-sm text-nowrap">Last refreshed 1m ago</p>
                </div>
                <div class="d-flex">
                  <p class="text-600 fs--1 fw-semi-bold mb-0 me-3">Showing : <span class="text-900">1-7 </span>of <span class="text-900">205</span></p><button class="btn p-0 me-3" type="button"><span class="text-500 fa-solid fa-angle-left fs--2"></span></button><button class="btn p-0" type="button"><span class="text-primary fa-solid fa-angle-right fs--2"></span></button>
                </div>
              </div>
              <div class="border-top border-200 py-2 d-flex justify-content-between mt-10">
                <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" id="" data-bulk-select-row="data-bulk-select-row" /></div>
                <div><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive"><span class="fas fa-archive fs--2"></span></button><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><span class="fas fa-trash fs--2"></span></button><button class="btn p-0 me-2 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star"><span class="fas fa-star fs--2"></span></button><button class="btn p-0 text-500 hover-text-600" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tags"><span class="fas fa-tag fs--2"></span></button></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-1" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/60.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Jessica Ball</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2 fw-bold">1 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">Quary about purchased soccer socks</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Greetings. I have purchased some socks under the bundle offer you availed this week. According to the offer I was thrilled to get a 25% off of any product I bought. Regardless, I had to pay the exact full price for them...</p>
                  </a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-2" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Danny Reid</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2 fw-bold">3 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">How to take the headache out of Order</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello! As I've mentioned before, we have this huge order deals to ship within this month. Also, the financial report is attached to this email. Hopefully, you'll find it useful for the company.</p>
                  </a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="#!"><span class="fas fa-file-pdf text-warning fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">Financial_Reports.pdf</span></a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="#!"><span class="fas fa-file-zipper text-warning fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">Frame20.zip</span></a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-3" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/57.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Harley Brown</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2">5 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">The Arnold Schwarzenegger of Order</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">I’ve come across your posts and found some favorable deals on your page. I’ve added a load of products to the cart and I don’t know the payment options you avail. Also, can you enlighten me about any discount or...</p>
                  </a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-4" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/59.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-1100 fw-bold inbox-link fs--1" href="email-detail.html">Hollie Stephens</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2 fw-bold">8 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1100">My order is not being taken</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello. I’m knocking to let you know that I am trying to place some orders on your site. But my orders are not being taken, maybe it’s technical issues. Can you help me with it as I really need the products I am trying to...</p>
                  </a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-5" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Natasha West</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2">20 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">Shipment is missing</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Greetings! I’ve got an email saying I was to get the products yesterday. But got a call instead saying the shipment was misplaced. Can you put some light on it? Really need the products.</p>
                  </a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger py-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-6" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="fas text-warning fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <div class="avatar-name rounded-circle"><span>R</span></div>
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Max Williamson</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2">30 M</span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">How can I order something urgently?</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">I saw your promotion on 25% sales. Do you avail emergency orders and urgent shipments? If you do, I need to place some orders. Please reply, thanks.</p>
                  </a><a class="d-inline-flex align-items-center border rounded-pill px-3 py-1 me-2 mt-2 inbox-link" href="#!"><span class="fa-solid fa-music text-primary fs--1"></span><span class="ms-2 fw-bold fs--2 text-900">syllabus</span></a></div>
              </div>
              <div class="border-top border-200 hover-actions-trigger pt-3">
                <div class="row align-items-sm-center gx-2">
                  <div class="col-auto">
                    <div class="d-flex flex-column flex-sm-row"><input class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox" id="checkbox-7" data-bulk-select-row="data-bulk-select-row" /><button class="btn p-0"><span class="far text-300 fa-star"></span></button></div>
                  </div>
                  <div class="col-auto">
                    <div class="avatar avatar-s  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/30.png" alt="" />
                    </div>
                  </div>
                  <div class="col-auto"><a class="text-900 fw-semi-bold inbox-link fs--1" href="email-detail.html">Ethan Hawkins</a></div>
                  <div class="col-auto ms-auto">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button>
                      <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Mark Unread</a><a class="dropdown-item" href="#!">Mark Important</a><a class="dropdown-item" href="#!">Archive</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Print</a><a class="dropdown-item" href="#!">Report Spam</a><a class="dropdown-item" href="#!">Report Phishing</a><a class="dropdown-item" href="#!">Mute Jessica Ball</a><a class="dropdown-item" href="#!">Block Jessica Ball</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                    </div><span class="fs--2">32 M    </span>
                  </div>
                </div>
                <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link" href="email-detail.html"><span class="fs--1 line-clamp-1 text-1000">How the delicacy of the products will be handled??</span>
                    <p class="fs--1 ps-0 text-700 mb-0 line-clamp-2">Hello! I need to purchase some delicate products. Can you tell me how you handle the delicacy of the products to be shipped? I don’t want to get my hands on broken things, so. Thank you! </p>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022 &copy;<a class="ms-1" href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v1.6.0</p>
            </div>
          </div>
        </footer>
      </div>
</div>
<script>
    var navbarTopShape = localStorage.getItem('phoenixNavbarTopShape');
    var navbarPosition = localStorage.getItem('phoenixNavbarPosition');
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTopNew = document.querySelector('#navbarTopNew');
    var navbarSlim = document.querySelector('#navbarSlim');
    var navbarTopSlimNew = document.querySelector('#navbarTopSlimNew');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
        navbarDefault.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarSlim.style.display = 'block';
        navbarVertical.style.display = 'inline-block';
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarVertical.remove();
        navbarTopNew.remove();
        navbarSlim.remove();
        navbarTopSlimNew.removeAttribute('style');
        body.classList.add('nav-slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
        navbarDefault.remove();
        navbarSlim.remove();
        navbarVertical.remove();
        navbarTopSlimNew.remove();
        navbarTopNew.removeAttribute('style');
        documentElement.classList.add('navbar-horizontal')

    } else {
        body.classList.remove('nav-slim');
        navbarSlim.remove();
        navbarTopNew.remove();
        navbarTopSlimNew.remove();
        navbarDefault.removeAttribute('style');
        navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = localStorage.getItem('phoenixNavbarTopStyle');
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
        navbarTop.classList.add('navbar-darker');
    }

    var navbarVerticalStyle = localStorage.getItem('phoenixNavbarVerticalStyle');
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
        navbarVertical.classList.add('navbar-darker');
    }
</script>
</main><!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header align-items-start border-bottom flex-column">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
            <div>
                <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
                <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
            </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span
                    class="fas fa-times fs-0"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span
                class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
    </div>
    <div class="offcanvas-body scrollbar px-card pt-2" id="themeController">
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Color Scheme</h5>
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                        value="light" data-theme-control="phoenixTheme" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="assets/img/generic/default-light.png" alt="" /></span><span
                            class="label-text">Light</span></label></div>
                <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                        value="dark" data-theme-control="phoenixTheme" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                            Dark</span></label></div>
            </div>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Navigation Type</h5>
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type"
                        type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                src="assets/img/generic/default-light.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png"
                                alt="" /></span><span class="label-text">Vertical</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type"
                        type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                                src="assets/img/generic/top-default.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none"
                                src="assets/img/generic/top-default-dark.png" alt="" /></span><span class="label-text">
                            Horizontal</span></label></div>
            </div>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name"
                        value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img
                            class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png"
                            alt="" /><img class="img-fluid img-prototype d-light-none"
                            src="assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none">
                            Default</span><span class="label-text d-light-none">Default</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
                        value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                            class="img-fluid img-prototype d-dark-none" src="assets/img/generic/vertical-darker.png"
                            alt="" /><img class="img-fluid img-prototype d-light-none"
                            src="assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none">
                            Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
            </div>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio"
                        value="default" data-theme-control="phoenixNavbarTopShape" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                src="assets/img/generic/top-default.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none mb-0"
                                src="assets/img/generic/top-default-dark.png" alt="" /></span><span
                            class="label-text">Default</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio"
                        value="slim" data-theme-control="phoenixNavbarTopShape" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                src="assets/img/generic/top-slim.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none mb-0"
                                src="assets/img/generic/top-slim-dark.png" alt="" /></span><span class="label-text">
                            Slim</span></label></div>
            </div>
        </div>
        <div class="setting-panel-item">
            <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio"
                        value="default" data-theme-control="phoenixNavbarTopStyle" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                src="assets/img/generic/top-default.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none mb-0"
                                src="assets/img/generic/top-style-darker.png" alt="" /></span><span
                            class="label-text">Default</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
                        value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                            class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                                src="assets/img/generic/navbar-top-style-light.png" alt="" /><img
                                class="img-fluid img-prototype d-light-none mb-0"
                                src="assets/img/generic/top-style-lighter.png" alt="" /></span><span
                            class="label-text d-dark-none">Darker</span><span
                            class="label-text d-light-none">Lighter</span></label></div>
            </div>
        </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="#!"
            target="_blank">Purchase template</a>
    </div>
</div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
    <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
            <div class="settings-popover"><span class="ripple"><span
                        class="fa-spin position-absolute all-0 d-flex flex-center"><span
                            class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                    fill="#2A7BE4"></path>
                            </svg></span></span></span></div>
        </div><small class="text-uppercase text-700 fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
    </div>
</a>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->

</body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:18:29 GMT -->

</html>