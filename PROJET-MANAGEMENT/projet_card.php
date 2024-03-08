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
        <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <h2 class="mb-0">Projects<span class="fw-normal text-700 ms-3">(32)</span></h2>
          </div>
          <div class="col-auto"><a class="btn btn-primary px-5" href="create-new.html"><i class="fa-solid fa-plus me-2"></i>Add new project</a></div>
        </div>
        <div class="row justify-content-between align-items-end mb-4 g-3">
          <div class="col-12 col-sm-auto">
            <ul class="nav nav-links mx-n2">
              <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page" href="#">All<span class="text-700 fw-semi-bold">(32)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Ongoing<span class="text-700 fw-semi-bold">(14)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Cancelled<span class="text-700 fw-semi-bold">(2)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Finished<span class="text-700 fw-semi-bold">(14)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#">Postponed<span class="text-700 fw-semi-bold">(2)</span></a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
              <div class="search-box me-3">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search projects" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div><a class="btn btn-phoenix-primary px-3 me-1" type="button" href="project-list-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="List view"><span class="fa-solid fa-list fs--2"></span></a><a class="btn btn-phoenix-primary px-3 me-1" type="button" href="project-board-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Board view"><svg width="9" height="9" viewbox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0.5C0 0.223857 0.223858 0 0.5 0H1.83333C2.10948 0 2.33333 0.223858 2.33333 0.5V1.83333C2.33333 2.10948 2.10948 2.33333 1.83333 2.33333H0.5C0.223857 2.33333 0 2.10948 0 1.83333V0.5Z" fill="currentColor"></path>
                  <path d="M3.33333 0.5C3.33333 0.223857 3.55719 0 3.83333 0H5.16667C5.44281 0 5.66667 0.223858 5.66667 0.5V1.83333C5.66667 2.10948 5.44281 2.33333 5.16667 2.33333H3.83333C3.55719 2.33333 3.33333 2.10948 3.33333 1.83333V0.5Z" fill="currentColor"></path>
                  <path d="M6.66667 0.5C6.66667 0.223857 6.89052 0 7.16667 0H8.5C8.77614 0 9 0.223858 9 0.5V1.83333C9 2.10948 8.77614 2.33333 8.5 2.33333H7.16667C6.89052 2.33333 6.66667 2.10948 6.66667 1.83333V0.5Z" fill="currentColor"></path>
                  <path d="M0 3.83333C0 3.55719 0.223858 3.33333 0.5 3.33333H1.83333C2.10948 3.33333 2.33333 3.55719 2.33333 3.83333V5.16667C2.33333 5.44281 2.10948 5.66667 1.83333 5.66667H0.5C0.223857 5.66667 0 5.44281 0 5.16667V3.83333Z" fill="currentColor"></path>
                  <path d="M3.33333 3.83333C3.33333 3.55719 3.55719 3.33333 3.83333 3.33333H5.16667C5.44281 3.33333 5.66667 3.55719 5.66667 3.83333V5.16667C5.66667 5.44281 5.44281 5.66667 5.16667 5.66667H3.83333C3.55719 5.66667 3.33333 5.44281 3.33333 5.16667V3.83333Z" fill="currentColor"></path>
                  <path d="M6.66667 3.83333C6.66667 3.55719 6.89052 3.33333 7.16667 3.33333H8.5C8.77614 3.33333 9 3.55719 9 3.83333V5.16667C9 5.44281 8.77614 5.66667 8.5 5.66667H7.16667C6.89052 5.66667 6.66667 5.44281 6.66667 5.16667V3.83333Z" fill="currentColor"></path>
                  <path d="M0 7.16667C0 6.89052 0.223858 6.66667 0.5 6.66667H1.83333C2.10948 6.66667 2.33333 6.89052 2.33333 7.16667V8.5C2.33333 8.77614 2.10948 9 1.83333 9H0.5C0.223857 9 0 8.77614 0 8.5V7.16667Z" fill="currentColor"></path>
                  <path d="M3.33333 7.16667C3.33333 6.89052 3.55719 6.66667 3.83333 6.66667H5.16667C5.44281 6.66667 5.66667 6.89052 5.66667 7.16667V8.5C5.66667 8.77614 5.44281 9 5.16667 9H3.83333C3.55719 9 3.33333 8.77614 3.33333 8.5V7.16667Z" fill="currentColor"></path>
                  <path d="M6.66667 7.16667C6.66667 6.89052 6.89052 6.66667 7.16667 6.66667H8.5C8.77614 6.66667 9 6.89052 9 7.16667V8.5C9 8.77614 8.77614 9 8.5 9H7.16667C6.89052 9 6.66667 8.77614 6.66667 8.5V7.16667Z" fill="currentColor"></path>
                </svg></a><a class="btn btn-phoenix-primary px-3 border-0 text-900" type="button" href="project-card-view.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Card view"><svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0.5C0 0.223858 0.223858 0 0.5 0H3.5C3.77614 0 4 0.223858 4 0.5V3.5C4 3.77614 3.77614 4 3.5 4H0.5C0.223858 4 0 3.77614 0 3.5V0.5Z" fill="currentColor"></path>
                  <path d="M0 5.5C0 5.22386 0.223858 5 0.5 5H3.5C3.77614 5 4 5.22386 4 5.5V8.5C4 8.77614 3.77614 9 3.5 9H0.5C0.223858 9 0 8.77614 0 8.5V5.5Z" fill="currentColor"></path>
                  <path d="M5 0.5C5 0.223858 5.22386 0 5.5 0H8.5C8.77614 0 9 0.223858 9 0.5V3.5C9 3.77614 8.77614 4 8.5 4H5.5C5.22386 4 5 3.77614 5 3.5V0.5Z" fill="currentColor"></path>
                  <path d="M5 5.5C5 5.22386 5.22386 5 5.5 5H8.5C8.77614 5 9 5.22386 9 5.5V8.5C9 8.77614 8.77614 9 8.5 9H5.5C5.22386 9 5 8.77614 5 8.5V5.5Z" fill="currentColor"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3 mb-9">
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Project Doughnut Dungeon</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-success"><span class="badge-label">completed</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> Gusteau’s Restaurant</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">8,742$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">100%</p>
                </div>
                <div class="progress bg-success-100">
                  <div class="progress-bar rounded bg-success" role="progressbar" aria-label="Success example" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	17th Nov. 2020</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	21st May 2028</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/59.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/27.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/23.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <div class="avatar-name rounded-circle "><span>+4</span></div>
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">287<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Water resistant mosquito killer gun</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-warning"><span class="badge-label">inactive</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> Monsters.Inc</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">10,500$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">76%</p>
                </div>
                <div class="progress bg-warning-100">
                  <div class="progress-bar rounded bg-warning" role="progressbar" aria-label="Success example" style="width: 76%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	8th Mar. 2021</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	15th Sept. 2022</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/31.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/30.png" alt="" />
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">125<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Execution of Micky the foul mousie</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-primary"><span class="badge-label">ongoing</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> Dashney Peeps Corp.</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">18,976$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">89%</p>
                </div>
                <div class="progress bg-primary-100">
                  <div class="progress-bar rounded bg-primary" role="progressbar" aria-label="Success example" style="width: 89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	17th Nov. 2020</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	23rd Sept. 2026</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/24.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/31.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/22.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/19.png" alt="" />
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">72<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Harnessing stupidity from Jerry</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-danger"><span class="badge-label">Critical</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> Gobble the Bleep Inc</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">8,742$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">15%</p>
                </div>
                <div class="progress bg-danger-100">
                  <div class="progress-bar rounded bg-danger" role="progressbar" aria-label="Success example" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	1st Jan. 2016</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	4th Apr. 2022</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/13.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/18.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <div class="avatar-name rounded-circle "><span>+2</span></div>
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">91<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">Making the Butterflies shoot each other dead</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-primary"><span class="badge-label">ongoing</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> Monsters.Inc</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">35,000$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">76%</p>
                </div>
                <div class="progress bg-primary-100">
                  <div class="progress-bar rounded bg-primary" role="progressbar" aria-label="Success example" style="width: 76%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	24th Dec. 2019</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	15th Jan. 2024</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/34.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/59.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <div class="avatar-name rounded-circle "><span>+2</span></div>
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">134<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 hover-actions-trigger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5">The chewing gum attack</h4>
                  <div class="hover-actions top-0 end-0 mt-4 me-4"><button class="btn btn-primary btn-icon flex-shrink-0" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button></div>
                </div><span class="badge badge-phoenix fs--2 mb-4 badge-phoenix-secondary"><span class="badge-label">Cancelled</span></span>
                <div class="d-flex align-items-center mb-2"><span class="fa-solid fa-user me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 text-truncate lh-1">Client : <span class="fw-semi-bold text-primary ms-1"> DablewGuys Studio</span></p>
                </div>
                <div class="d-flex align-items-center mb-4"><span class="fa-solid fa-credit-card me-2 text-700 fs--1 fw-extra-bold"></span>
                  <p class="fw-bold mb-0 lh-1">Budget : <span class="ms-1 text-1100">250$</span></p>
                </div>
                <div class="d-flex justify-content-between text-700 fw-semi-bold">
                  <p class="mb-2"> Progress</p>
                  <p class="mb-2 text-1100">32%</p>
                </div>
                <div class="progress bg-300">
                  <div class="progress-bar rounded bg-700" role="progressbar" aria-label="Success example" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0 fw-bold fs--1">Started :<span class="fw-semi-bold text-600 ms-1">	4th Aug. 2018</span></p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <p class="mb-0 fw-bold fs--1">Deadline : <span class="fw-semi-bold text-600 ms-1">	22nd Oct. 2023</span></p>
                </div>
                <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                  <div class="avatar-group avatar-group-dense">
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/35.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/13.png" alt="" />
                    </div>
                    <div class="avatar avatar-m  rounded-circle">
                      <img class="rounded-circle " src="../assets/img/team/27.png" alt="" />
                    </div>
                  </div>
                  <div class="mt-lg-3 mt-xl-0"> <i class="fa-solid fa-list-check me-1"></i>
                    <p class="d-inline-block fw-bold mb-0">28<span class="fw-normal">	Task</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="projectsCardViewModal" tabindex="-1" aria-labelledby="projectsCardViewModal" aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content overflow-hidden">
              <div class="modal-header position-relative p-0"><input class="d-none" id="projectCoverInput" type="file" /><label class="position-absolute top-0 start-0" for="projectCoverInput">
                  <div class="bg-white rounded-2 py-2 px-3 fs--1 fw-bolder mt-3 ms-3 cursor-pointer" style="--phoenix-bg-opacity: .64;"><span class="fa-solid fa-image me-1"></span>Change</div>
                </label><button class="btn btn-circle position-absolute end-0 top-0 mt-3 me-3 bg-white" style="--phoenix-bg-opacity: .64;" data-bs-dismiss="modal"><span class="fa-solid fa-xmark text-900"></span></button><img class="w-100" src="../assets/img/generic/43.png" alt="" style="max-height: 200px;min-height: 150px;" /></div>
              <div class="modal-body p-5 px-md-6">
                <div class="row g-5">
                  <div class="col-12 col-md-9">
                    <div class="mb-4">
                      <h3 class="fw-bolder lh-sm">It was popularised in the 1960s with the release of Letraset</h3>
                      <p class="text-1000 fw-semi-bold mb-0">In list<a class="ms-1 fw-bold" href="#!">Review </a></p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                      <p class="text-1000 fw-700 mb-0 me-2">64%</p>
                      <div class="progress bg-300 flex-1">
                        <div class="progress-bar bg-800 rounded-3" role="progressbar" style="width: 64%"></div>
                      </div>
                    </div>
                    <h6 class="text-800 mb-2">Due date</h6>
                    <div class="flatpickr-input-container flatpickr-input-sm w-50 mb-3"><input class="form-control form-control-sm ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                    <div class="mb-3">
                      <h6 class="text-800 mb-2">Assignees</h6>
                      <div class="avatar avatar-m  me-1">
                        <img class="rounded-circle " src="../assets/img/team/60.png" alt="" />
                      </div>
                      <div class="avatar avatar-m  me-1">
                        <img class="rounded-circle " src="../assets/img/team/58.png" alt="" />
                      </div>
                      <div class="avatar avatar-m  me-1">
                        <img class="rounded-circle " src="../assets/img/team/59.png" alt="" />
                      </div>
                      <div class="avatar avatar-m  me-1">
                        <img class="rounded-circle " src="../assets/img/team/34.png" alt="" />
                      </div><button class="btn btn-sm btn-phoenix-secondary btn-circle"><span class="fa-solid fa-plus"></span></button>
                    </div>
                    <div class="mb-5">
                      <h6 class="text-800 mb-2">Labels</h6>
                      <div class="d-flex align-items-center"><span class="badge badge-phoenix badge-phoenix-info fs--2 me-2">INFO</span><span class="badge badge-phoenix badge-phoenix-warning fs--2 me-2">URGENT</span><span class="badge badge-phoenix badge-phoenix-success fs--2 me-2">DONE</span><a class="text-900 fw-bolder fs--1 lh-1 text-decoration-none" href="#!"> <span class="fa-solid fa-plus me-1"></span>Add another</a></div>
                    </div>
                    <div class="mb-6">
                      <div class="d-flex align-items-center mb-3">
                        <h4 class="me-3">Description</h4><button class="btn btn-link p-0"><span class="fa-solid fa-pen"></span></button>
                      </div>
                      <p class="text-1000">
                        <The>female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches...</The><a class="fw-semi-bold" href="#!">see more </a>
                      </p>
                    </div>
                    <div class="bg-100 rounded-2 p-4 mb-3">
                      <div class="row justify-contnet-between border-bottom g-0 gy-2 pb-3">
                        <div class="col-12 col-sm">
                          <p class="fs--1 text-800 mb-2"><a class="fw-semi-bold" href="#!">Anthony Van Dyck </a>uploaded a file </p><img class="rounded-2 mb-2" src="../assets/img/generic/42.png" alt="" width="220px" />
                          <p class="text-1000 fw-semi-bold fs--1 mb-0">Fruit blast</p>
                        </div>
                        <div class="col-12 col-sm-auto">
                          <p class="text-800 fw-semi-bold fs--2 mb-0">Oct 3 at 4:38 pm</p>
                        </div>
                      </div>
                      <div class="row justify-contnet-between border-bottom g-0 gy-1 py-3 align-items-center">
                        <div class="col-12 col-sm">
                          <p class="fs--1 text-800 mb-0"><span class="text-1000 fw-semi-bold me-1">You</span>created this task</p>
                        </div>
                        <div class="col-12 col-sm-auto">
                          <p class="text-800 fw-semi-bold fs--2 mb-0">Oct 4 at 12:18 pm</p>
                        </div>
                      </div>
                      <div class="row justify-contnet-between border-bottom g-0 gy-1 py-3 align-items-center">
                        <div class="col-12 col-sm">
                          <p class="fs--1 text-800 mb-1"><a class="fw-semi-bold" href="#!">Kazimir Malevich </a>added a subtask</p>
                          <div class="d-flex">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000"><span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span>Doing</p><span class="text-800 fs--1 mx-2">to</span>
                            <p class="mb-0 fs--1 fw-semi-bold text-1000"><span class="fa-solid fa-circle text-primary" data-fa-transform="shrink-8"> </span>Review</p>
                          </div>
                        </div>
                        <div class="col-12 col-sm-auto">
                          <p class="text-800 fw-semi-bold fs--2 mb-0">Oct 5 at 9:59 am</p>
                        </div>
                      </div>
                      <div class="row justify-contnet-between gx-2 align-items-center pt-3">
                        <div class="col col-auto">
                          <div class="avatar avatar-m status-online ">
                            <img class="rounded-circle " src="../assets/img/team/30.png" alt="" />
                          </div>
                        </div>
                        <div class="col col-auto flex-1">
                          <p class="fs--1 text-800 mb-0"><a class="fw-semi-bold" href="#!">Peter Paul Rubens </a>commented</p>
                        </div>
                        <div class="col-12 col-sm-auto order-1 order-sm-0">
                          <p class="text-800 fw-semi-bold fs--2 mb-0">Oct 5 at 9:59 am</p>
                        </div>
                        <div class="col-12 col-sm-11 offset-sm-1">
                          <p class="text-900 fs--1 mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                      </div>
                    </div><textarea class="form-control form-control mb-3" type="text" rows="3" placeholder="Add comment"></textarea>
                    <div class="d-flex flex-between-center pb-3 border-bottom mb-6">
                      <div class="d-flex"><button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-image text-600 fs-0"></span></button><button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-calendar-days text-600 fs-0"></span></button><button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-location-dot text-600 fs-0"></span></button><button class="btn btn-sm px-2 py-0"><span class="fa-solid fa-tag text-600 fs-0"></span></button></div><button class="btn btn-sm btn-primary px-6">Comment</button>
                    </div>
                    <div class="mb-6">
                      <div class="mb-7">
                        <h4 class="mb-4">To do list <span class="text-700 fw-normal fs-2">(23)</span></h4>
                        <div class="row align-items-center justify-content-between g-0 mb-3">
                          <div class="col-12 col-sm-auto">
                            <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                              </form>
                            </div>
                          </div>
                          <div class="col-auto d-flex">
                            <p class="mb-0 ms-sm-3 fs--1 text-700 fw-bold"><span class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</p><button class="btn btn-link p-0 ms-3 fs--1 text-primary fw-bold text-decoration-none"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</button>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-0">Designing the dungeon</label>
                                  <div class="badge badge-phoenix fs--2 ms-auto badge-phoenix-primary"><span class="fw-bold badge-label">DRAFT</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-1">Hiring a motion graphic designer</label>
                                  <div class="badge badge-phoenix fs--2 ms-auto badge-phoenix-warning"><span class="fw-bold badge-label">URGENT</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-2">Daily Meetings Purpose, participants</label>
                                  <div class="badge badge-phoenix fs--2 ms-auto badge-phoenix-info"><span class="fw-bold badge-label">ON PROCESS</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>4</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Dec, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">05:00 AM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-3">Finalizing the geometric shapes</label></div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-4">Daily meeting with team members</label></div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center">
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">1 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-5">Daily Standup Meetings</label></div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center">
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">13 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">10:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-6">Procrastinate for a month</label>
                                  <div class="badge badge-phoenix fs--2 ms-auto badge-phoenix-info"><span class="fw-bold badge-label">ON PROCESS</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-8">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-7">warming up</label>
                                  <div class="badge badge-phoenix fs--2 ms-auto badge-phoenix-info"><span class="fw-bold badge-label">CLOSE</span></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">12 Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">12:00 PM</p>
                              </div>
                            </div>
                          </div>
                          <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top border-bottom">
                            <div class="col-12">
                              <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-9">
                                <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1" for="checkbox-todo-8">Make ready for release</label></div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                                <p class="text-700 fs--2 mb-md-0 me-2 mb-0">2o Nov, 2021</p>
                                <p class="text-700 fs--2 fw-bold mb-md-0 mb-0">1:00 AM</p>
                              </div>
                            </div>
                          </div>
                        </div><a class="fw-bold fs--1 mt-4 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a>
                      </div>
                    </div>
                    <h4 class="mb-3">Files</h4>
                    <div class="border-top border-300 pt-3 pb-4">
                      <div class="me-n3">
                        <div class="d-flex flex-between-center">
                          <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                            <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                          </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download<a class="dropdown-item" href="#!">Report abuse</a></a></div>
                        </div>
                        <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../assets/img/generic/40.png" style="max-width:undefinedpx" />
                      </div>
                    </div>
                    <div class="border-top border-300 py-3">
                      <div class="me-n3">
                        <div class="d-flex flex-between-center">
                          <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                            <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                          </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download<a class="dropdown-item" href="#!">Report abuse</a></a></div>
                        </div>
                        <p class="fs--1 text-700 mb-1"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                      </div>
                    </div>
                    <div class="border-top border-bottom border-300 py-3 mb-3">
                      <div class="me-n3">
                        <div class="d-flex flex-between-center">
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download<a class="dropdown-item" href="#!">Report abuse</a></a></div>
                        </div>
                        <p class="fs--1 text-700 mb-1"><span>123 kB</span><span class="text-400 mx-1">|</span><a href="#!">Shantinan Mekalan</a><span class="text-400 mx-1">|</span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                      </div>
                    </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a>
                  </div>
                  <div class="col-12 col-md-3">
                    <h5 class="text-800 mb-3">Add to card</h5>
                    <div class="mb-6"><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-user-plus"></span>Assignee</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-tag"></span>Labels</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-paperclip"></span>Attachments</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-square-check"></span>Checklist</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-calendar-days"></span>Dates</button></div>
                    <h5 class="text-800 mb-3">Actions</h5>
                    <div class="mb-6"><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-arrow-right"></span>Move</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-copy"></span>Copy</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-trash"></span>Remove</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-box-archive"></span>Archive</button><button class="btn btn-sm btn-soft-secondary rounded-3 mb-2 d-flex align-items-center w-100"><span class="me-2 fa-solid fa-share-nodes"></span>Share</button></div>
                  </div>
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