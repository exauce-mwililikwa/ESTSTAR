  
     
<?php
include('../include/navbar.php');
?>

      <div class="content">
        <div class="row gy-3 mb-6 justify-content-between">
          <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-1100">Projects Dashboard</h2>
            <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
          </div>
          <div class="col-md-3 col-auto">
            <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker"
                type="text"
                data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span
                class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
          </div>
        </div>
        <div class="row mb-3 gy-6">
          <div class="col-12 col-xxl-2">
            <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">32<span class="fs-1 fw-semi-bold text-900 ms-2">Projects</span></h2>
                    <p class="text-800 fs--1 mb-0">Awating processing</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span
                    class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">94<span class="fs-1 fw-semi-bold text-900 ms-2">Members</span></h2>
                    <p class="text-800 fs--1 mb-0">Working hard</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">23<span class="fs-1 fw-semi-bold text-900 ms-2">Invoices</span></h2>
                    <p class="text-800 fs--1 mb-0">Soon to be cleared</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">3<span class="fs-1 fw-semi-bold text-900 ms-2">Refunds</span></h2>
                    <p class="text-800 fs--1 mb-0">Fresh start</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
            <div class="mx-xxl-0">
              <h3>Project: zero Roadmap</h3>
              <p class="text-700">Phase 2 is now ongoing</p>
              <div class="gantt-zero-roadmap">
                <div class="row g-2 flex-between-center mb-3">
                  <div class="col-12 col-sm-auto">
                    <div class="d-flex">
                      <div class="d-flex align-items-end me-3"><label class="form-check-label mb-0 me-2 lh-1 text-900"
                          for="progress">Progress</label>
                        <div class="form-check form-switch min-h-auto mb-0"><input class="form-check-input"
                            id="progress" type="checkbox" checked="" data-gantt-progress="data-gantt-progress" /></div>
                      </div>
                      <div class="d-flex align-items-end flex-1"><label class="form-check-label mb-0 me-2 lh-1 text-900"
                          for="links">Links</label>
                        <div class="form-check form-switch min-h-auto flex-1 mb-0"><input class="form-check-input"
                            id="links" type="checkbox" checked="" data-gantt-links="data-gantt-links" /></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-auto">
                    <div class="btn-group" role="group" data-gantt-scale="data-gantt-scale"><input class="btn-check"
                        id="weekView" type="radio" name="scaleView" autocomplete="off" value="week" checked="" /><label
                        class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="weekView">Week</label><input
                        class="btn-check" id="monthView" type="radio" name="scaleView" value="month"
                        autocomplete="off" /><label class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0"
                        for="monthView">Month</label><input class="btn-check" id="yearView" type="radio"
                        name="scaleView" value="year" autocomplete="off" /><label
                        class="btn btn-phoenix-secondary hover-bg-100 fs--2 py-1 mb-0" for="yearView">Year</label></div>
                  </div>
                </div>
                <div class="gantt-zero-roadmap-chart"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
            <div class="card border border-300 h-100 w-100 overflow-hidden">
              <div class="bg-holder d-block bg-card"
                style="background-image:url(assets/img/spot-illustrations/32.png);background-position: top right;">
              </div>
              <!--/.bg-holder-->
              <div class="bg-holder d-none d-sm-block d-lg-none d-xxl-block bg-card"
                style="background-image:url(assets/img/spot-illustrations/21.png);background-position: bottom right; background-size: auto;">
              </div>
              <!--/.bg-holder-->
              <div class="card-body px-5 position-relative">
                <div class="badge badge-phoenix fs--2 badge-phoenix-warning mb-4"><span class="fw-bold">Coming
                    soon</span><span class="fa-solid fa-award ms-1"></span></div>
                <h3 class="mb-5">Early bird gets the warm leads!</h3>
                <p class="text-700 fw-semi-bold">Phoenix CRM Dashboard is coming to <br
                    class="d-none d-sm-block" />market soon for fulfilling your every <br
                    class="d-none d-sm-block" />CRM related needs. </p>
              </div>
              <div class="card-footer border-0 py-0 px-5 z-index-1">
                <p class="text-700 fw-semi-bold">Follow <a href="https://themewagon.com/">ThemeWagon </a>at <br
                    class="d-none d-xxl-block" />Bootstrap Marketplace for updates.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
          <div class="row">
            <div class="col-12 col-xl-7 col-xxl-6">
              <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                  <h3 class="text-1100 text-nowrap">Issues Discovered</h3>
                  <p class="text-700 mb-md-7">Newly found and yet to be solved</p>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-bold">Issue type </p>
                    <p class="mb-0 fs--1">Total count <span class="fw-bold">257</span></p>
                  </div>
                  <hr class="bg-200 mb-2 mt-2" />
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/green.png" alt=""
                        height="8" width="16" />Product design</p>
                    <h5 class="mb-0 text-900">78</h5>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/blue.png" alt=""
                        height="8" width="16" />Development</p>
                    <h5 class="mb-0 text-900">63</h5>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/skyblue.png" alt=""
                        height="8" width="16" />QA &amp; Testing</p>
                    <h5 class="mb-0 text-900">56</h5>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/red.png" alt=""
                        height="8" width="16" />Customer queries</p>
                    <h5 class="mb-0 text-900">36</h5>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="assets/img/icons/yellow.png" alt=""
                        height="8" width="16" />R &amp; D </p>
                    <h5 class="mb-0 text-900">24</h5>
                  </div><button class="btn btn-outline-primary mt-5">See Details<span
                      class="fas fa-angle-right ms-2 fs--2 text-center"></span></button>
                </div>
                <div class="col-12 col-md-6">
                  <div class="position-relative mb-sm-4 mb-xl-0">
                    <div class="echart-issue-chart" style="min-height:390px;width:100%"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-5 col-xxl-6">
              <h3>Project: eleven Progress</h3>
              <p class="text-700 mb-0 mb-xl-3">Deadline &amp; progress</p>
              <div class="echart-zero-burnout-chart" style="min-height:320px;width:100%"></div>
            </div>
          </div>
        </div>
        <div class="mx-lg-n4 mt-3">
          <div class="row g-3">
            <div class="col-12 col-xl-6 col-xxl-7">
              <div class="card todo-list h-100">
                <div class="card-header border-bottom-0 pb-0">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <h3 class="text-1100">To do</h3>
                      <p class="mb-md-0 mb-lg-2 text-700">Task assigned to me</p>
                    </div>
                    <div class="col-auto w-100 w-md-auto mb-3">
                      <div class="row align-items-center justify-content-between g-0">
                        <div class="col-12 col-sm-auto">
                          <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input search" type="search" placeholder="Search tasks"
                                aria-label="Search" />
                              <span class="fas fa-search search-box-icon"></span>
                            </form>
                          </div>
                        </div>
                        <div class="col-auto d-flex">
                          <p class="mb-0 ms-sm-3 fs--1 text-700 fw-bold"><span
                              class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</p><button
                            class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold text-decoration-none"><span
                              class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pb-0 scrollbar to-do-list-body">
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-0"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Designing
                            the dungeon</label>
                          <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-primary"><span
                              class="fw-bold badge-label">DRAFT</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>2</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-1"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Hiring
                            a motion graphic designer</label>
                          <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-warning"><span
                              class="fw-bold badge-label">URGENT</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>2</button><button
                            class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-2"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Daily
                            Meetings Purpose, participants</label>
                          <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-info"><span
                              class="fw-bold badge-label">ON PROCESS</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>4</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Dec, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              05:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-3"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Finalizing
                            the geometric shapes</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-4"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Daily
                            meeting with team members</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center">
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">1 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-5"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Daily
                            Standup Meetings</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center">
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">13 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              10:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-6"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Procrastinate
                            for a month</label>
                          <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-info"><span
                              class="fw-bold badge-label">ON PROCESS</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-7"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">warming
                            up</label>
                          <div class="badge badge-phoenix ms-auto fs--2 badge-phoenix-info"><span
                              class="fw-bold badge-label">CLOSE</span></div>
                        </div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>3</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">12 Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              12:00 PM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="d-flex hover-actions-trigger py-3 border-top border-bottom"><input
                      class="form-check-input form-check-input-todolist flex-shrink-0 my-1 me-2 form-check-input-undefined"
                      type="checkbox" id="checkbox-todo-8"
                      data-event-propagation-prevent="data-event-propagation-prevent" />
                    <div
                      class="row justify-content-between align-items-md-center btn-reveal-trigger border-200 gx-0 flex-1"
                      data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="mb-1 mb-md-0 d-flex align-items-center lh-1"><label
                            class="form-check-label mb-1 mb-md-0 mb-xl-1 mb-xxl-0 fs-0 me-2 line-clamp-1 text-900">Make
                            ready for release</label></div>
                      </div>
                      <div class="col-12 col-md-auto col-xl-12 col-xxl-auto">
                        <div class="d-flex lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span
                              class="fas fa-paperclip me-1"></span>2</button>
                          <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 me-xl-2 me-xxl-3 mb-0">2o Nov, 2021</p>
                          <div class="hover-md-hide hover-xl-show hover-xxl-hide">
                            <p
                              class="text-700 fs--2 fw-bold mb-md-0 mb-0 ps-md-3 ps-xl-0 ps-xxl-3 border-start-md border-xl-0 border-start-xxl border-300">
                              1:00 AM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block d-xl-none d-xxl-block end-0 position-absolute" style="top: 23%;"
                      data-event-propagation-prevent="data-event-propagation-prevent">
                      <div class="hover-actions end-0" data-event-propagation-prevent="data-event-propagation-prevent">
                        <button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-edit"></span></button><button
                          class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"
                          data-event-propagation-prevent="data-event-propagation-prevent"><span
                            class="fas fa-trash"></span></button></div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content bg-soft overflow-hidden">
                        <div class="modal-header px-6 py-5 border-300 pe-sm-5 px-md-6">
                          <h3 class="text-1000 fw-bolder mb-0">Designing the Dungeon Blueprint</h3><button
                            class="btn btn-phoenix-secondary btn-icon btn-icon-xl flex-shrink-0" type="button"
                            data-bs-dismiss="modal" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                        </div>
                        <div class="modal-body bg-100 px-6 py-0">
                          <div class="row gx-14">
                            <div class="col-12 col-lg-7 border-end-lg border-300">
                              <div class="py-6">
                                <div class="mb-7">
                                  <div class="d-flex align-items-center mb-3">
                                    <h4 class="text-900 me-3">Description</h4><a
                                      class="btn btn-link text-decoration-none p-0" href="#!"><span
                                        class="fa-solid fa-pen"></span></a>
                                  </div>
                                  <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in
                                    Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a
                                    project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione
                                    together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches
                                    Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a
                                    project based on the circus.</p>
                                </div>
                                <div class="mb-7">
                                  <h4 class="mb-3">Subtasks</h4>
                                  <div
                                    class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                      <input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox"
                                        id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study
                                        Dragons</label></div>
                                    <div class="hover-actions end-0"><button
                                        class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span
                                          class="fa-solid fa-pencil"></span></button><button
                                        class="btn btn-sm text-700 px-0"><span
                                          class="fa-solid fa-xmark fs-0"></span></button></div>
                                  </div>
                                  <div
                                    class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                      <input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox"
                                        id="subtask2" /><label class="form-check-label mb-0 fs-0"
                                        for="subtask2">Procrastinate a bit</label></div>
                                    <div class="hover-actions end-0"><button
                                        class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span
                                          class="fa-solid fa-pencil"></span></button><button
                                        class="btn btn-sm text-700 px-0"><span
                                          class="fa-solid fa-xmark fs-0"></span></button></div>
                                  </div>
                                  <div
                                    class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                      <input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox"
                                        id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring
                                        at the notebook for 5 mins</label></div>
                                    <div class="hover-actions end-0"><button
                                        class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span
                                          class="fa-solid fa-pencil"></span></button><button
                                        class="btn btn-sm text-700 px-0"><span
                                          class="fa-solid fa-xmark fs-0"></span></button></div>
                                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span
                                      class="fas fa-plus me-1"></span>Add subtask</a>
                                </div>
                                <div class="mb-3">
                                  <div>
                                    <h4 class="mb-3">Files</h4>
                                  </div>
                                  <div class="border-top border-300 px-0 pt-4 pb-3">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div class="d-flex mb-1"><span
                                            class="fa-solid fa-image me-2 text-700 fs--1"></span>
                                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                                        </div>
                                        <div class="font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" id="documentations" data-bs-toggle="dropdown"
                                            data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"
                                            aria-labelledby="documentations"><a class="dropdown-item"
                                              href="#!">Edit</a><a class="dropdown-item text-danger"
                                              href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a
                                              class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">|
                                        </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">|
                                        </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img
                                        class="rounded-2" src="assets/img/generic/40.png"
                                        style="max-width:undefinedpx" />
                                    </div>
                                  </div>
                                  <div class="border-top border-300 px-0 pt-4 pb-3">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div>
                                          <div class="d-flex align-items-center mb-1"><span
                                              class="fa-solid fa-image me-2 fs--1 text-700"></span>
                                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                                          </div>
                                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span
                                              class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span
                                              class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56
                                              PM</span></p>
                                        </div>
                                        <div class="font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" id="documentations" data-bs-toggle="dropdown"
                                            data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"
                                            aria-labelledby="documentations"><a class="dropdown-item"
                                              href="#!">Edit</a><a class="dropdown-item text-danger"
                                              href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a
                                              class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="border-top border-bottom border-300 px-0 pt-4 pb-3">
                                    <div class="me-n3">
                                      <div class="d-flex flex-between-center">
                                        <div>
                                          <div class="d-flex align-items-center mb-1"><span
                                              class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                                          </div>
                                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span
                                              class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span
                                              class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56
                                              PM</span></p>
                                        </div>
                                        <div class="font-sans-serif btn-reveal-trigger"><button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" id="documentations" data-bs-toggle="dropdown"
                                            data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2"
                                            aria-labelledby="documentations"><a class="dropdown-item"
                                              href="#!">Edit</a><a class="dropdown-item text-danger"
                                              href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a
                                              class="dropdown-item" href="#!">Report abuse</a></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span
                                    class="fas fa-plus me-1"></span>Add file(s)</a>
                              </div>
                            </div>
                            <div class="col-12 col-lg-5">
                              <div class="py-6">
                                <h4 class="mb-4 text-black">Others Information</h4>
                                <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4"
                                  aria-label="Default select example">
                                  <option selected="">Select</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                                <h5 class="text-1000 mb-2">Due Date</h5>
                                <div class="flatpickr-input-container mb-4"><input
                                    class="form-control datetimepicker ps-6" id="datepicker" type="text"
                                    placeholder="Set the due date" data-options='{"disableMobile":true}' /><span
                                    class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                                <h5 class="text-1000 mb-2">Reminder</h5>
                                <div class="flatpickr-input-container mb-4"><input
                                    class="form-control datetimepicker ps-6" id="datepicker" type="text"
                                    placeholder="Reminder"
                                    data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span
                                    class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                                <h5 class="text-1000 mb-2">Tag</h5>
                                <div class="choices-select-container mb-6"><select class="form-select"
                                    id="organizerMultiple" data-choices="data-choices" multiple="multiple"
                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Select organizer...</option>
                                    <option>Massachusetts Institute of Technology</option>
                                    <option>University of Chicago</option>
                                    <option>GSAS Open Labs At Harvard</option>
                                    <option>California Institute of Technology</option>
                                  </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span>
                                </div>
                                <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer border-0"><a class="fw-bold fs--1 mt-4 text-decoration-none" href="#!"><span
                      class="fas fa-plus me-1"></span>Add new task</a></div>
              </div>
            </div>
            <div class="col-12 col-xl-6 col-xxl-5">
              <div class="card h-100">
                <div class="card-body">
                  <div class="card-title mb-1">
                    <h3 class="text-1100">Activity</h3>
                  </div>
                  <p class="text-700 mb-4">Recent activity across all projects</p>
                  <div class="timeline-vertical timeline-with-details">
                    <div class="timeline-item position-relative">
                      <div class="row g-md-3">
                        <div class="col-12 col-md-auto d-flex">
                          <div class="timeline-item-date order-1 order-md-0 me-md-4">
                            <p class="fs--2 fw-semi-bold text-600 text-end">01 DEC, 2023<br class="d-none d-md-block" />
                              10:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span
                                class="fa-solid fa-chess text-primary-600 fs--2 dark__text-primary-300"></span></div>
                            <span class="timeline-bar border-end border-dashed border-400"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs--1 lh-sm">Assigned as a director for Project The Chewing Gum Attack</h5>
                            <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                            <p class="fs--1 text-800 mb-5">Utilizing best practices to better leverage our assets, we
                              must engage in black sky leadership thinking, not the usual band-aid solution.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-md-3">
                        <div class="col-12 col-md-auto d-flex">
                          <div class="timeline-item-date order-1 order-md-0 me-md-4">
                            <p class="fs--2 fw-semi-bold text-600 text-end">05 DEC, 2023<br class="d-none d-md-block" />
                              12:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span
                                class="fa-solid fa-dove text-primary-600 fs--2 dark__text-primary-300"></span></div>
                            <span class="timeline-bar border-end border-dashed border-400"></span>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs--1 lh-sm">Assigned as a director for Project The Chewing Gum Attack</h5>
                            <p class="fs--1">by <span class="fw-semi-bold text-primary">Shantinon Mekalan</span></p>
                            <p class="fs--1 text-800 mb-5">We must repurpose with SEO optimized functionalities, instead
                              of using those over used frictioned kumbaya.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline-item position-relative">
                      <div class="row g-md-3">
                        <div class="col-12 col-md-auto d-flex">
                          <div class="timeline-item-date order-1 order-md-0 me-md-4">
                            <p class="fs--2 fw-semi-bold text-600 text-end">15 DEC, 2023<br class="d-none d-md-block" />
                              2:30 AM</p>
                          </div>
                          <div class="timeline-item-bar position-md-relative me-3 me-md-0 border-400">
                            <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-100"><span
                                class="fa-solid fa-dungeon text-primary-600 fs--2 dark__text-primary-300"></span></div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="timeline-item-content ps-6 ps-md-3">
                            <h5 class="fs--1 lh-sm">Archieved all the files for the Project Membrane Memories</h5>
                            <p class="fs--1">by <span class="fw-semi-bold text-primary">Sharuka Nijibum</span></p>
                            <p class="fs--1 text-800 mb-0">To get off the runway and paradigm shift, we should take
                              brass tacks with above-the-board actionable analytics, ramp up with viral partnering, not
                              the usual goat rodeo putting socks on an octopus.</p>
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
        <div class="row mt-3">
          <div class="col-12">
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 border-top border-300">
              <div id="projectSummary"
                data-list='{"valueNames":["project","assigness","start","deadline","calculation","projectprogress","status","action"],"page":6,"pagination":true}'>
                <div class="row align-items-end justify-content-between pb-4 g-3">
                  <div class="col-auto">
                    <h3>Projects</h3>
                    <p class="text-700 lh-sm mb-0">Brief summary of all projects</p>
                  </div>
                </div>
                <div class="table-responsive ms-n1 ps-1 scrollbar">
                  <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="project"
                          style="width:30%;">PROJECT NAME</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">
                          ASSIGNESS</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE
                        </th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE
                        </th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="calculation" style="width:12%;">
                          CALCULATION</th>
                        <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">
                          PROGRESS</th>
                        <th class="sort align-middle ps-8" scope="col" data-sort="status" style="width:10%;">STATUS</th>
                        <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                      </tr>
                    </thead>
                    <tbody class="list" id="table-latest-review-body">
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">Making the Butterflies shoot each other
                            dead</a></td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/9.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/25.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/32.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <div class="avatar-name rounded-circle "><span>+3</span></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 12, 2018</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 12, 2026</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-1100 fs--1 mb-0">$4</p>
                          <p class="fw-semi-bold fs--2 text-700 mb-0">Cost</p>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">145 / 145</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:30%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">Project Doughnut Dungeon</a></td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/22.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/28.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <div class="avatar-name rounded-circle"><span>R</span></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Jan 9, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 9, 2022</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button
                            class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">148 / 223</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:20%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:45%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:30%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">The Chewing Gum Attack</a></td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/34.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/59.png" alt="" />
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Sep 4, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 4, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-1100 fs--1 mb-0">$657k</p>
                          <p class="fw-semi-bold fs--2 text-700 mb-0">Estimation</p>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">277 / 539</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:10%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:10%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:45%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">Execution of Micky the foul mousie</a>
                        </td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/1.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/5.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/11.png" alt="" />
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Nov 1, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 1, 2024</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button
                            class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">16 / 56</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 28.57142857142857%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:45%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:15%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:20%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">Harnessing stupidity from Jerry</a></td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/21.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/23.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/25.png" alt="" />
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Dec 28, 2019</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Nov 28, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3"><button
                            class="btn btn-phoenix-secondary square-icon-btn"><span class="fas fa-plus"></span></button>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">169 / 394</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:25%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:35%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:20%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:15%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                      <tr class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 project"><a
                            class="text-decoration-none fw-bold fs-0" href="#">Water resistant mosquito killer gun</a>
                        </td>
                        <td class="align-middle white-space-nowrap assigness ps-3">
                          <div class="avatar-group avatar-group-dense">
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/30.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle avatar-placeholder" src="assets/img/team/avatar.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/59.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <img class="rounded-circle " src="assets/img/team/31.png" alt="" />
                            </div>
                            <div class="avatar avatar-s  rounded-circle">
                              <div class="avatar-name rounded-circle"><span>R</span></div>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3">
                          <p class="mb-0 fs--1 text-900">Feb 24, 2020</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3">
                          <p class="mb-0 fs--1 text-900">Nov 24, 2021</p>
                        </td>
                        <td class="align-middle white-space-nowrap calculation ps-3">
                          <p class="fw-bold text-1100 fs--1 mb-0">$55k</p>
                          <p class="fw-semi-bold fs--2 text-700 mb-0">Budget</p>
                        <td class="align-middle white-space-nowrap ps-3 projectprogress">
                          <p class="text-800 fs--2 mb-0">600 / 600</p>
                          <div class="progress" style="height:3px;">
                            <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="align-middle white-space-nowrap ps-8 status">
                          <div class="progress progress-stack mt-3" style="height:3px;">
                            <div class="progress-bar bg-info" style="width:24%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" style="width:5%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="5% Damage">
                            </div>
                            <div class="progress-bar bg-warning" style="width:35%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="45% Damage">
                            </div>
                            <div class="progress-bar bg-success" style="width:35%" aria-valuenow="25" aria-valuemin="0"
                              aria-valuemax="100" data-bs-toggle="tooltip" data-bs-placement="top" title="15% Damage">
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button
                              class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                              type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                              aria-expanded="false" data-bs-reference="parent"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#!">Remove</a>
                            </div>
                          </div>
                        </td>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                  <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                      class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                      data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
                  </div>
                  <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                        class="fas fa-chevron-right"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                  class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none" />2022
                &copy;<a class="ms-1" href="https://themewagon.com/">Themewagon</a></p>
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
  <script src="vendors/popper/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/anchorjs/anchor.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="vendors/lodash/lodash.min.js"></script>
  <script src="polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="vendors/list.js/list.min.js"></script>
  <script src="vendors/feather-icons/feather.min.js"></script>
  <script src="vendors/dayjs/dayjs.min.js"></script>
  <script src="vendors/choices/choices.min.js"></script>
  <script src="vendors/echarts/echarts.min.js"></script>
  <script src="vendors/dhtmlx-gantt/dhtmlxgantt.js"></script>
  <script src="assets/js/phoenix.js"></script>
  <script src="assets/js/projectmanagement-dashboard.js"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/dashboard/project-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:18:29 GMT -->

</html>