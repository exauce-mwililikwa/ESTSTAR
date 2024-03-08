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
          <div id="projectSummary"
            data-list='{"valueNames":["projectName","assigness","start","deadline","task","projectprogress","status","action"],"page":6,"pagination":true}'>
            <div class="row mb-4 gx-6 gy-3 align-items-center">
              <div class="col-auto">
                <h2 class="mb-0">Projects<span class="fw-normal text-700 ms-3">(32)</span></h2>
              </div>
              <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.html"><i
                    class="fa-solid fa-plus me-2"></i>Add new project</a></div>
            </div>
            <div class="row g-3 justify-content-between align-items-end mb-4">
              <div class="col-12 col-sm-auto">
                <ul class="nav nav-links mx-n2">
                  <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page" href="#">All<span
                        class="text-700 fw-semi-bold">(32)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Ongoing<span
                        class="text-700 fw-semi-bold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Cancelled<span
                        class="text-700 fw-semi-bold">(2)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Finished<span
                        class="text-700 fw-semi-bold">(14)</span></a></li>
                  <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Postponed<span
                        class="text-700 fw-semi-bold">(2)</span></a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-auto">
                <div class="d-flex align-items-center">
                  <div class="search-box me-3">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                        class="form-control search-input search" type="search" placeholder="Search projects"
                        aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div><a class="btn btn-phoenix-primary px-3 me-1 border-0 text-900" type="button"
                    href="project-list-view.html" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-title="List view"><span class="fa-solid fa-list fs--2"></span></a><a
                    class="btn btn-phoenix-primary px-3 me-1" type="button" href="project-board-view.html"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Board view"><svg width="9"
                      height="9" viewbox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M0 0.5C0 0.223857 0.223858 0 0.5 0H1.83333C2.10948 0 2.33333 0.223858 2.33333 0.5V1.83333C2.33333 2.10948 2.10948 2.33333 1.83333 2.33333H0.5C0.223857 2.33333 0 2.10948 0 1.83333V0.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M3.33333 0.5C3.33333 0.223857 3.55719 0 3.83333 0H5.16667C5.44281 0 5.66667 0.223858 5.66667 0.5V1.83333C5.66667 2.10948 5.44281 2.33333 5.16667 2.33333H3.83333C3.55719 2.33333 3.33333 2.10948 3.33333 1.83333V0.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M6.66667 0.5C6.66667 0.223857 6.89052 0 7.16667 0H8.5C8.77614 0 9 0.223858 9 0.5V1.83333C9 2.10948 8.77614 2.33333 8.5 2.33333H7.16667C6.89052 2.33333 6.66667 2.10948 6.66667 1.83333V0.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M0 3.83333C0 3.55719 0.223858 3.33333 0.5 3.33333H1.83333C2.10948 3.33333 2.33333 3.55719 2.33333 3.83333V5.16667C2.33333 5.44281 2.10948 5.66667 1.83333 5.66667H0.5C0.223857 5.66667 0 5.44281 0 5.16667V3.83333Z"
                        fill="currentColor"></path>
                      <path
                        d="M3.33333 3.83333C3.33333 3.55719 3.55719 3.33333 3.83333 3.33333H5.16667C5.44281 3.33333 5.66667 3.55719 5.66667 3.83333V5.16667C5.66667 5.44281 5.44281 5.66667 5.16667 5.66667H3.83333C3.55719 5.66667 3.33333 5.44281 3.33333 5.16667V3.83333Z"
                        fill="currentColor"></path>
                      <path
                        d="M6.66667 3.83333C6.66667 3.55719 6.89052 3.33333 7.16667 3.33333H8.5C8.77614 3.33333 9 3.55719 9 3.83333V5.16667C9 5.44281 8.77614 5.66667 8.5 5.66667H7.16667C6.89052 5.66667 6.66667 5.44281 6.66667 5.16667V3.83333Z"
                        fill="currentColor"></path>
                      <path
                        d="M0 7.16667C0 6.89052 0.223858 6.66667 0.5 6.66667H1.83333C2.10948 6.66667 2.33333 6.89052 2.33333 7.16667V8.5C2.33333 8.77614 2.10948 9 1.83333 9H0.5C0.223857 9 0 8.77614 0 8.5V7.16667Z"
                        fill="currentColor"></path>
                      <path
                        d="M3.33333 7.16667C3.33333 6.89052 3.55719 6.66667 3.83333 6.66667H5.16667C5.44281 6.66667 5.66667 6.89052 5.66667 7.16667V8.5C5.66667 8.77614 5.44281 9 5.16667 9H3.83333C3.55719 9 3.33333 8.77614 3.33333 8.5V7.16667Z"
                        fill="currentColor"></path>
                      <path
                        d="M6.66667 7.16667C6.66667 6.89052 6.89052 6.66667 7.16667 6.66667H8.5C8.77614 6.66667 9 6.89052 9 7.16667V8.5C9 8.77614 8.77614 9 8.5 9H7.16667C6.89052 9 6.66667 8.77614 6.66667 8.5V7.16667Z"
                        fill="currentColor"></path>
                    </svg></a><a class="btn btn-phoenix-primary px-3" type="button" href="project-card-view.html"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9"
                      viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z"
                        fill="currentColor"></path>
                      <path
                        d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z"
                        fill="currentColor"></path>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0 border-top border-200">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="projectName"
                      style="width:30%;">PROJECT NAME</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">ASSIGNESS
                    </th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="start" style="width:10%;">START DATE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="deadline" style="width:15%;">DEADLINE</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th>
                    <th class="sort align-middle ps-3" scope="col" data-sort="projectprogress" style="width:5%;">
                      PROGRESS</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="statuses" style="width:10%;">STATUS
                    </th>
                    <th class="sort align-middle text-end" scope="col" style="width:10%;"></th>
                  </tr>
                </thead>
                <tbody class="list" id="table-latest-review-body">
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Project Doughnut Dungeon</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/34.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/59.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+2</span></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">May 21, 2028</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">287</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">145 / 145</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-success">completed</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Water resistant mosquito killer gun</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/1.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/2.png" alt="" />
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Mar 08, 2021</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Sep 15, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">125</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">148 / 223</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 66.3677130044843%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-warning">inactive</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Execution of Micky the foul mousie</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/20.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <div class="avatar-name rounded-circle"><span>R</span></div>
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Nov 17, 2020</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Sep 23, 2026</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">72</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">277 / 539</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.39146567717996%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Harnessing stupidity from Jerry</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/11.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/12.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/13.png" alt="" />
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 01, 2016</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Apr 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">91</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">169 / 394</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 42.89340101522843%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Making the Butterflies shoot each other
                        dead</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/14.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/16.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/18.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/20.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <div class="avatar-name rounded-circle "><span>+3</span></div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Dec 24, 2019</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 15, 2024</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">134</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-primary">ongoing</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">The chewing gum attack</a></td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/31.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/33.png" alt="" />
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Aug 4, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Oct 22, 2023</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">24</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">600 / 600</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-secondary">Cancelled</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                  <tr class="position-static">
                    <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a
                        class="text-decoration-none fw-bold fs-0" href="#">Olga Dies Dreaming by Xóchitl González</a>
                    </td>
                    <td class="align-middle white-space-nowrap assigness ps-3 py-4">
                      <div class="avatar-group avatar-group-dense">
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/11.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/12.png" alt="" />
                        </div>
                        <div class="avatar avatar-s  rounded-circle">
                          <img class="rounded-circle " src="../assets/img/team/13.png" alt="" />
                        </div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap start ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 01, 2018</p>
                    </td>
                    <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                      <p class="mb-0 fs--1 text-900">Jan 04, 2022</p>
                    </td>
                    <td class="align-middle white-space-nowrap task ps-3 py-4">
                      <p class="fw-bo text-900 fs--1 mb-0">80</p>
                    <td class="align-middle white-space-nowrap ps-3 projectprogress">
                      <p class="text-800 fs--2 mb-0">150 / 294</p>
                      <div class="progress" style="height:3px;">
                        <div class="progress-bar bg-success" style="width: 51.02040816326531%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td class="align-middle white-space-nowrap text-end statuses"><span
                        class="badge badge-phoenix fs--2 badge-phoenix-danger">Critical</span></td>
                    <td class="align-middle text-end white-space-nowrap pe-0 action">
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a
                            class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="d-flex flex-wrap align-items-center justify-content-between py-3 pe-0 fs--1 border-bottom border-200">
              <div class="d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                  class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                    data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!"
                  data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                    data-fa-transform="down-1"></span></a>
              </div>
              <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                    class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                    class="fas fa-chevron-right"></span></button>
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