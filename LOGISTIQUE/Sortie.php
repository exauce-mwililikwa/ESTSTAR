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
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>
        <div class="mb-9">
          <div class="row g-2 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Sortie logistique</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">New <span class="text-700 fw-semi-bold">(6)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Abandoned checkouts <span class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Locals <span class="text-700 fw-semi-bold">(6,810)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Email subscribers <span class="text-700 fw-semi-bold">(8)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Top reviews <span class="text-700 fw-semi-bold">(2)</span></a></li>
          </ul>
          <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
                <div class="col-auto">
                  <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search customers" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Country<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">US</a></li>
                        <li><a class="dropdown-item" href="#">Uk</a></li>
                        <li><a class="dropdown-item" href="#">Australia</a></li>
                      </ul>
                    </div>
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> VIP<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">VIP 1</a></li>
                        <li><a class="dropdown-item" href="#">VIP 2</a></li>
                        <li><a class="dropdown-item" href="#">VIP 3</a></li>
                        <li></li>
                      </ul>
                    </div><button class="btn btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                  </div>
                </div>
                <div class="col-auto">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nouveau</button>
<div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Modal title</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
      </div>
      <div class="modal-body">
        <p class="text-700 lh-lg mb-0">This is a static modal example (meaning its position and display have been overridden). Included are the modal header, modal body (required for padding), and modal footer (optional). </p>
      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="button">Okay</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
    </div>
  </div>
</div>
                
                </div>
              </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
              <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                <table class="table table-sm fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">AGENT</th>
                      <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">EMAIL</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">ORDERS</th>
                      <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">SALAIRE</th>
                      <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:25%;">SERVICE</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="last-seen" style="width:15%;">ADRESSE</th>
                      <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:10%;min-width: 150px;">INSCRIT DEPUIS</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/32.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Carry Anna</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">89</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 23987</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Budapest</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">34 min ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 12, 12:56 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Milind Mikuja</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:mimiku@yahoo.com">mimiku@yahoo.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">76</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 21567</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Manchester</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 hours ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 9, 2:28 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/35.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Stanly Drinkwater</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:stnlwasser@hotmail.com">stnlwasser@hotmail.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">69</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 19872</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Smallville</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">43 min ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 4, 12:56 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/57.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Josef Stravinsky</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:Josefsky@sni.it">Josefsky@sni.it</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">67</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 17996</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Metropolis</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 hours ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 1, 4:07 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/58.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Igor Borvibson</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:vibigorr@technext.it">vibigorr@technext.it</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">61</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 16785</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Central city</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">5 days ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 28, 7:28 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/59.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Katerina Karenin</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:karkat99@gmail.com">karkat99@gmail.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">58</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 14956</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Gotham</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 weeks ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 24, 10:16 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m">
                            <div class="avatar-name rounded-circle"><span>R</span></div>
                          </div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Roy Anderson</p>
                        </a>
                      </td>

                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:andersonroy@netflix.chill">andersonroy@netflix.chill</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">52</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 12509</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Vancouver</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">4 days ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 5:43 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/31.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Martina scorcese</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:cesetina1@gmail.com">cesetina1@gmail.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">49</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 11003</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Viena</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 min ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 2:09 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/33.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Luis Bunuel</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:luisuel@live.com">luisuel@live.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">44</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7897</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Bangalore</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">56 min ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 16, 3:22 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/34.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Jean Renoir</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:renoirjean1836@gmail.com">renoirjean1836@gmail.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">37</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7781</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Chittagong</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">Yesterday</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 09, 8:49 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/29.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Ricky Antony</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:ricky@example.com">ricky@example.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">33</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7825</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">New Jersey</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">1 hour ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 19, 8:00 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/3.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Emma Watson</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:emma@example.com">emma@example.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">45</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 18975</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">New York</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 hours ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 15, 12:00 PM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../assets/img/team/avatar.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Jennifer Schramm</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:jennifer@example.com">jennifer@example.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">39</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 8967</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Charlotte</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">12 hours ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 12, 11:00 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/32.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Raymond Mims</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:raymond@example.com">raymond@example.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">30</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 14587</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Artesia</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 day ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 10, 8:30 AM</td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0 py-3">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-m"><img class="rounded-circle" src="../assets/img/team/25.png" alt="" /></div>
                          <p class="mb-0 ms-3 text-1100 fw-bold">Michael Jenkins</p>
                        </a></td>
                      <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:jenkins@example.com">jenkins@example.com</a></td>
                      <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">43</td>
                      <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 45697</td>
                      <td class="city align-middle white-space-nowrap text-1000 ps-7">Philadelphia</td>
                      <td class="last-seen align-middle white-space-nowrap text-700 text-end">12 hours ago</td>
                      <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 3, 8:30 AM</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
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
              value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="assets/img/generic/default-light.png" alt="" /></span><span
                class="label-text">Light</span></label></div>
          <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
              value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                  src="assets/img/generic/default-dark.png" alt="" /></span><span class="label-text">
                Dark</span></label></div>
        </div>
      </div>
      <div class="setting-panel-item">
        <h5 class="setting-panel-item-title">Navigation Type</h5>
        <div class="row gx-2">
          <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio"
              value="vertical" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none"
                  src="assets/img/generic/default-dark.png" alt="" /></span><span
                class="label-text">Vertical</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio"
              value="horizontal" data-theme-control="phoenixNavbarPosition" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none"
                  src="assets/img/generic/top-default.png" alt="" /><img class="img-fluid img-prototype d-light-none"
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
                class="img-fluid img-prototype d-dark-none" src="assets/img/generic/default-light.png" alt="" /><img
                class="img-fluid img-prototype d-light-none" src="assets/img/generic/default-dark.png" alt="" /><span
                class="label-text d-dark-none"> Default</span><span
                class="label-text d-light-none">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name"
              value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label
              class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img
                class="img-fluid img-prototype d-dark-none" src="assets/img/generic/vertical-darker.png" alt="" /><img
                class="img-fluid img-prototype d-light-none" src="assets/img/generic/vertical-lighter.png"
                alt="" /><span class="label-text d-dark-none"> Darker</span><span
                class="label-text d-light-none">Lighter</span></label></div>
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
                  class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-default-dark.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim"
              data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs--1"
              for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img
                  class="img-fluid img-prototype d-dark-none mb-0" src="assets/img/generic/top-slim.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-slim-dark.png"
                  alt="" /></span><span class="label-text"> Slim</span></label></div>
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
                  class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-darker.png"
                  alt="" /></span><span class="label-text">Default</span></label></div>
          <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio"
              value="darker" data-theme-control="phoenixNavbarTopStyle" /><label
              class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span
                class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"
                  src="assets/img/generic/navbar-top-style-light.png" alt="" /><img
                  class="img-fluid img-prototype d-light-none mb-0" src="assets/img/generic/top-style-lighter.png"
                  alt="" /></span><span class="label-text d-dark-none">Darker</span><span
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