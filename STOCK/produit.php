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
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Products</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Published <span class="text-700 fw-semi-bold">(70348)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Drafts <span class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">On discount <span class="text-700 fw-semi-bold">(810)</span></a></li>
          </ul>
          <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
                <div class="col-auto">
                  <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Category<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Vendor<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                  </div>
                </div>
                <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add product</button></div>
              </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs--1 align-middle" style="max-width:20px; width:18px;">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </th>
                      <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                      <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;" data-sort="product">PRODUCT NAME</th>
                      <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                      <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">CATEGORY</th>
                      <th class="sort align-middle ps-3" scope="col" data-sort="tags" style="width:250px;">TAGS</th>
                      <th class="sort align-middle fs-0 text-center ps-4" scope="col" style="width:125px;"></th>
                      <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">VENDOR</th>
                      <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">PUBLISHED ON</th>
                      <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/1.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; ...</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$39</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Plants</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;">
                      <a class="text-decoration-none" href="#!">
                        <span class="badge badge-tag me-2 mb-2">Health</span>
                      </a><a class="text-decoration-none" href="#!">
                        <span class="badge badge-tag me-2 mb-2">Exercise</span>
                      </a><a class="text-decoration-none" href="#!">
                        <span class="badge badge-tag me-2 mb-2">Discipline</span>
                      </a><a class="text-decoration-none" href="#!">
                        <span class="badge badge-tag me-2 mb-2">Lifestyle</span>
                      </a><a class="text-decoration-none" href="#!">
                        <span class="badge badge-tag me-2 mb-2">Fitness</span>
                      </a>
                    </td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Blue Olive Plant sellers. Inc</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 12, 10:45 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/2.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$87</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Furniture</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Class</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Camera</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Discipline</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">invincible</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Pro</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Swag</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Beatrice Furnitures</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 11, 7:36 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/3.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$9</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Plants</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Efficiency</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Handy</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gray</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">PlantPlanet</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 11, 8:16 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/4.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$8 - $58</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Toys</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Color</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Stunning</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Retina</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Green</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">PC killer</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 8, 6:39 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/5.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$120</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Music</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Meeting</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Record</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Sound</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Inertia Fashion</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 8, 5:32 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/6.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">PlayStation 5 DualSense Wireless Controller</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$239</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Gadgets</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Game</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Control</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Nav</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Playstation</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 6, 11:34 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/7.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$4</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Food</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Ipad</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Pro</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Thunderbolt</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Space</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Maimuna’s Bakery</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 1, 7:45 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/8.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$98</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Keyboard</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Smooth</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Butter</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">RGB</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Black</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Green fashion</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 3, 12:27 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/10.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$568</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Battery</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Eastacy</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 1, 9:39 AM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/12.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$17</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Drinks</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Steering</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">PS4/3</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Racing</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">BrewerBro</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Oct 30, 3:49 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/21.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Apple Pencil (2nd Generation)</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$28</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apple</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Creativity</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Color</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Stunning</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Eastacy</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Nov 25, 5:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/16.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Apple AirPods (2nd Generation)</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$20</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Fashion</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Music</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Meeting</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Record</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Sound</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Sep 20, 1:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/17.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Xbox Series S</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$30</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Gadget</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Lifestyle</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Audio</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">FutureTech Inc</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Oct 18, 3:40 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/18.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Seagate Portable 2TB External Hard Drive Portable HDD</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$50</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Accessories</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Portable</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Magic</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Black</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Sep 20, 1:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/19.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">Intel Core i9-11900K Desktop Processor 8 Cores up to 5.3 GHz Unlocked</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$80</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Accessories</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Intel</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Apex</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Lifestyle</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4"><span class="fas fa-star text-warning"></span></td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">BrewerBro</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Dec 01, 12:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <div class="border rounded-2"><img src="../assets/img/products/20.png" alt="" width="53" /></div>
                      </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">ASUS TUF Gaming F15 Gaming Laptop</a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">$150</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">Computer</td>
                      <td class="tags align-middle review pb-2 ps-4" style="min-width:225px;"><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Gaming</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Battery</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Performance</span></a><a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-2">Wireless</span></a></td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <div class="d-toggle-container">
                          <div class="d-block-hover"><span class="fas fa-star text-warning"></span></div>
                          <div class="d-none-hover"><span class="far fa-star text-warning"></span></div>
                        </div>
                      </td>
                      <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">Kizzstore</a></td>
                      <td class="time align-middle white-space-nowrap text-600 ps-4">Dec 01, 12:00 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
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