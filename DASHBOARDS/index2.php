<?php
    include('../include/navbar.php');
?>
  <div class="content">
        <div class="pb-5">
          <div class="row g-4">
            <div class="col-12 col-xxl-6">
              <div class="mb-8">
                <h2 class="mb-2">Ecommerce Dashboard</h2>
                <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
              </div>
              <div class="row align-items-center g-4">
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><img src="../assets/img/icons/illustrations/4l.png" alt="" height="46" width="46" />
                    <div class="ms-3">
                      <h4 class="mb-0">57d new orders</h4>
                      <p class="text-800 fs--1 mb-0">Awating processing</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><img src="../assets/img/icons/illustrations/3l.png" alt="" height="46" width="46" />
                    <div class="ms-3">
                      <h4 class="mb-0">5 orders</h4>
                      <p class="text-800 fs--1 mb-0">On hold</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/2l.png" alt="" height="46" width="46" />
                    <div class="ms-3">
                      <h4 class="mb-0">15 products</h4>
                      <p class="text-800 fs--1 mb-0">Out of stock</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="bg-200 mb-6 mt-4" />
              <div class="row flex-between-center mb-4 g-3">
                <div class="col-auto">
                  <h3>Total sells</h3>
                  <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-8 col-sm-4"><select class="form-select form-select-sm mt-2" id="select-gross-revenue-month">
                    <option>Mar 1 - 31, 2022</option>
                    <option>April 1 - 30, 2022</option>
                    <option>May 1 - 31, 2022</option>
                  </select></div>
              </div>
              <div class="echart-total-sales-chart" style="min-height:320px;width:100%" data-echart-responsive="data-echart-responsive"></div>
            </div>
            <div class="col-12 col-xxl-6">
              <div class="row g-3">
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-1">Total orders<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2"><span class="badge-label">-6.8%</span></span></h5>
                          <h6 class="text-700">Last 7 days</h6>
                        </div>
                        <h4>16,247</h4>
                      </div>
                      <div class="d-flex justify-content-center px-4 py-6">
                        <div class="echart-total-orders" style="height:85px;width:115px"></div>
                      </div>
                      <div class="mt-2">
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">52%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-primary-100 me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">48%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-1">New customers<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs--1 ms-2"> <span class="badge-label">+26.5%</span></span></h5>
                          <h6 class="text-700">Last 7 days</h6>
                        </div>
                        <h4>356</h4>
                      </div>
                      <div class="pb-0 pt-4">
                        <div class="echarts-new-customers" style="height:180px;width:100%;" data-echart-responsive="true"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-2">Top coupons</h5>
                          <h6 class="text-700">Last 7 days</h6>
                        </div>
                      </div>
                      <div class="pb-4 pt-3">
                        <div class="echart-top-coupons" style="height:115px;width:100%;"></div>
                      </div>
                      <div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Percentage discount</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">72%</h6>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary-200 me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed card discount</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">18%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-info me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Fixed product discount</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">10%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="mb-2">Paying vs non paying</h5>
                          <h6 class="text-700">Last 7 days</h6>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center pt-3">
                        <div style="height:145px;width:140px"><canvas id="payingCustomerChart"></canvas></div>
                      </div>
                      <div class="mt-3">
                        <div class="d-flex align-items-center mb-2">
                          <div class="bullet-item bg-primary me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">30%</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="bullet-item bg-primary-100 me-2"></div>
                          <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer</h6>
                          <h6 class="text-900 fw-semi-bold mb-0">70%</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
          <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
            <div class="row align-items-end justify-content-between pb-5 g-3">
              <div class="col-auto">
                <h3>Latest reviews</h3>
                <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
              </div>
              <div class="col-12 col-md-auto">
                <div class="row g-2 gy-3">
                  <div class="col-auto flex-1">
                    <div class="search-box">
                      <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div>
                  </div>
                  <div class="col-auto"><button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100 me-2" type="button">All products</button><button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive mx-n1 px-1Latest">reviews<table class="table fs--1 mb-0 border-top border-200">
                <thead>
                  <tr>
                    <th class="white-space-nowrap fs--1 ps-0 align-middle">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </th>
                    <th class="sort white-space-nowrap align-middle" scope="col"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                    <th class="sort align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
                    <th class="sort align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                    <th class="sort align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                    <th class="sort text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                    <th class="sort text-end align-middle" scope="col" data-sort="time">TIME</th>
                    <th class="sort text-end pe-0 align-middle" scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/1.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools fo...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l">
                          <div class="avatar-name rounded-circle"><span>R</span></div>
                        </div>
                        <h6 class="mb-0 ms-3 text-900">Richard Dawkins</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Just now</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/2.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/59.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Ashley Garrett</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Just now</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/3.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/58.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Woodrow Burton</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">It's a Mac, after all. Once you've gone Mac, there's no going back. My first Mac lasted over nine years, and this is my second.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Just now</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/4.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Eric McGee</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">Personally, I like the minimalist style, but I wouldn't choose it if I were searching for a computer that I would use frequently. It's...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 09, 3:23 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/5.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gam...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Kim Carroll</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">It performs exactly as expected. There are three of these in the family.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 09, 2:15 PM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/6.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Barbara Lucas</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 08, 8:53 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/7.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/3.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Ansolo Lazinatov</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 07, 9:00 PM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/8.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Amazon Basics Matte Black Wired Keyboard - US ...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/26.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Emma watson</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">I have started using this theme in the last week and it has really impressed me very much, the support is second to none.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 07, 11:20 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/9.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Amazon Basics Mesh, Mid-Back, Swivel Office De...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/29.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Rowen Atkinson</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpassed. Great theme ...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 07, 2:00 PM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/10.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Si...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l">
                          <div class="avatar-name rounded-circle"><span>A</span></div>
                        </div>
                        <h6 class="mb-0 ms-3 text-900">Anthony Hopkins</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks. Very easy to us...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 06, 8:00 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/11.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Echo Dot (4th Gen) _ Smart speaker with Alexa ...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/8.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Jennifer Schramm</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 05, 4:00 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/12.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, an...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Raymond Mims</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expecting a response a...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 04, 6:53 PM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/13.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Nintendo Switch with Neon Blue and Neon Red Jo...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/9.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Michael Jenkins</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It's really good and I ...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 04, 12:00 PM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/14.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Oculus Rift S PC-Powered VR Gaming Headset</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Kristine Cadena</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">Excellent. All my doubts were answered by the team quickly. I highly recommend it.</p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 03, 8:53 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
                    <td class="fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap py-0">
                      <div class="rounded-2 border"><img src="assets/img/products/15.png" alt="" width="53" /></div>
                    </td>
                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold" href="apps/e-commerce/landing/product-details.html">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...</a></td>
                    <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                        <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/24.png" alt="" /></div>
                        <h6 class="mb-0 ms-3 text-900">Suzanne Martinez</h6>
                      </a></td>
                    <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                    <td class="align-middle review" style="min-width:350px;">
                      <p class="fs--1 fw-semi-bold text-1000 mb-0">This theme is great. Clean and easy to understand. Perfect for those who don't have time to start everything from scratch. The support...<a href='#!'>See more</a></p>
                    </td>
                    <td class="align-middle text-start ps-5 status"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Approved</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                    <td class="align-middle text-end time white-space-nowrap">
                      <div class="hover-hide">
                        <h6 class="text-1000 mb-0">Nov 03, 10:43 AM</h6>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end pe-0">
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
            <div class="row align-items-center py-1">
              <div class="pagination d-none"></div>
              <div class="col d-flex fs--1">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
              </div>
              <div class="col-auto d-flex">
                <button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button>
              </div>
            </div>
          </div>
        </div>
        <div class="row gx-6">
          <div class="col-12 col-xl-6">
            <div class="mb-5 mt-7">
              <h3>Top regions by revenue</h3>
              <p class="text-700">Where you generated most of the revenue</p>
            </div>
            <div class="table-responsive scrollbar">
              <table class="table fs--2 mb-0">
                <thead>
                  <tr>
                    <th class="border-top border-200 ps-0 align-middle" scope="col" style="width:32%">COUNTRY</th>
                    <th class="border-top border-200 align-middle" scope="col" style="width:17%">USERS</th>
                    <th class="border-top border-200 text-end align-middle" scope="col" style="width:16%">TRANSACTIONS</th>
                    <th class="border-top border-200 text-end align-middle" scope="col" style="width:20%">REVENUE</th>
                    <th class="border-top border-200 text-end pe-0 align-middle" scope="col" style="width:17%">CONV. RATE</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td></td>
                    <td class="align-middle py-4">
                      <h4 class="mb-0 fw-normal">377,620</h4>
                    </td>
                    <td class="align-middle text-end py-4">
                      <h4 class="mb-0 fw-normal">236</h4>
                    </td>
                    <td class="align-middle text-end py-4">
                      <h4 class="mb-0 fw-normal">$15,758</h4>
                    </td>
                    <td class="align-middle text-end py-4 pe-0">
                      <h4 class="mb-0 fw-normal">10.32%</h4>
                    </td>
                  </tr>
                  <tr>
                    <td class="white-space-nowrap ps-0" style="width:32%">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-3">1. </h6><a href="#!">
                          <div class="d-flex align-items-center"><img src="assets/img/country/india.png" alt="" width="24" />
                            <p class="mb-0 ps-3 text-primary fw-bold fs--1">India</p>
                          </div>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width:17%">
                      <h6 class="mb-0">92896<span class="text-700 fw-semi-bold ms-2">(41.6%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">67<span class="text-700 fw-semi-bold ms-2">(34.3%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">$7560<span class="text-700 fw-semi-bold ms-2">(36.9%)</span></h6>
                    </td>
                    <td class="align-middle text-end pe-0" style="width:17%">
                      <h6>14.01%</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="white-space-nowrap ps-0" style="width:32%">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-3">2. </h6><a href="#!">
                          <div class="d-flex align-items-center"><img src="assets/img/country/china.png" alt="" width="24" />
                            <p class="mb-0 ps-3 text-primary fw-bold fs--1">China</p>
                          </div>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width:17%">
                      <h6 class="mb-0">50496<span class="text-700 fw-semi-bold ms-2">(32.8%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">54<span class="text-700 fw-semi-bold ms-2">(23.8%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">$6532<span class="text-700 fw-semi-bold ms-2">(26.5%)</span></h6>
                    </td>
                    <td class="align-middle text-end pe-0" style="width:17%">
                      <h6>23.56%</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="white-space-nowrap ps-0" style="width:32%">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-3">3. </h6><a href="#!">
                          <div class="d-flex align-items-center"><img src="assets/img/country/usa.png" alt="" width="24" />
                            <p class="mb-0 ps-3 text-primary fw-bold fs--1">USA</p>
                          </div>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width:17%">
                      <h6 class="mb-0">45679<span class="text-700 fw-semi-bold ms-2">(24.3%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">35<span class="text-700 fw-semi-bold ms-2">(19.7%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">$5432<span class="text-700 fw-semi-bold ms-2">(16.9%)</span></h6>
                    </td>
                    <td class="align-middle text-end pe-0" style="width:17%">
                      <h6>10.23%</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="white-space-nowrap ps-0" style="width:32%">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-3">4. </h6><a href="#!">
                          <div class="d-flex align-items-center"><img src="assets/img/country/south-korea.png" alt="" width="24" />
                            <p class="mb-0 ps-3 text-primary fw-bold fs--1">South Korea</p>
                          </div>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width:17%">
                      <h6 class="mb-0">36453<span class="text-700 fw-semi-bold ms-2">(19.7%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">22<span class="text-700 fw-semi-bold ms-2">(9.54%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">$4673<span class="text-700 fw-semi-bold ms-2">(11.6%)</span></h6>
                    </td>
                    <td class="align-middle text-end pe-0" style="width:17%">
                      <h6>8.85%</h6>
                    </td>
                  </tr>
                  <tr>
                    <td class="white-space-nowrap ps-0" style="width:32%">
                      <div class="d-flex align-items-center">
                        <h6 class="mb-0 me-3">5. </h6><a href="#!">
                          <div class="d-flex align-items-center"><img src="assets/img/country/vietnam.png" alt="" width="24" />
                            <p class="mb-0 ps-3 text-primary fw-bold fs--1">Vietnam</p>
                          </div>
                        </a>
                      </div>
                    </td>
                    <td class="align-middle" style="width:17%">
                      <h6 class="mb-0">15007<span class="text-700 fw-semi-bold ms-2">(11.9%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">17<span class="text-700 fw-semi-bold ms-2">(6.91%)</span></h6>
                    </td>
                    <td class="align-middle text-end" style="width:17%">
                      <h6 class="mb-0">$2456<span class="text-700 fw-semi-bold ms-2">(10.2%)</span></h6>
                    </td>
                    <td class="align-middle text-end pe-0" style="width:17%">
                      <h6>6.01%</h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex align-items-center justify-content-between py-2 fs--1 mb-1">
              <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="">1 to 5 <span class="text-600"> Items of </span> 15</p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-2" data-fa-transform="down-1"></span></a>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="mx-n4 mx-lg-n6 ms-xl-0 h-100">
              <div class="h-100 w-100 py-5">
                <div class="googlemap revenue-map h-100" style="min-height: 300px;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 pb-9 border-top border-300">
          <div class="row g-6">
            <div class="col-12 col-xl-6">
              <div class="me-xl-4">
                <div>
                  <h3>Projection vs actual</h3>
                  <p class="mb-1 text-700">Actual earnings vs projected earnings</p>
                </div>
                <div class="echart-projection-actual" style="height:300px; width:100%" data-echart-responsive="data-echart-responsive"></div>
              </div>
            </div>
            <div class="col-12 col-xl-6">
              <div>
                <h3>Returning customer rate</h3>
                <p class="mb-1 text-700">Rate of customers returning to your shop over time</p>
              </div>
              <div class="echart-returning-customer" style="height:300px;" data-echart-responsive="data-echart-responsive"></div>
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
<script src="../vendors/popper/popper.min.js"></script>
<script src="../vendors/bootstrap/bootstrap.min.js"></script>
<script src="../vendors/anchorjs/anchor.min.js"></script>
<script src="../vendors/is/is.min.js"></script>
<script src="../vendors/fontawesome/all.min.js"></script>
<script src="../vendors/lodash/lodash.min.js"></script>
<script src="../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
<script src="../vendors/list.js/list.min.js"></script>
<script src="../vendors/feather-icons/feather.min.js"></script>
<script src="../vendors/dayjs/dayjs.min.js"></script>
<script src="../vendors/choices/choices.min.js"></script>
<script src="../vendors/echarts/echarts.min.js"></script>
<script src="../vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
<script src="../assets/js/phoenix.js"></script>
<script src="../vendors/chart/chart.min.js"></script>
   
<script src="../assets/js/ecommerce-dashboard.js"></script>
 
<script src="../assets/js/projectmanagement-dashboard.js"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:18:29 GMT -->

</html>