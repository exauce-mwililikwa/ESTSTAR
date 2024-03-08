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
        <div class="mb-9">
          <h2 class="mb-4">Todo list<span class="text-700 fw-normal">(23)</span></h2>
          <div class="row align-items-center g-3 mb-3">
            <div class="col-sm-auto">
              <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search tasks" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="d-flex"><a class="btn btn-link p-0 ms-3 fs--1 text-700 hover-text-primary fw-bold text-decoration-none" href="#!"><span class="fas fa-filter me-1 fw-extra-bold fs--2"></span>23 tasks</a><a class="btn btn-link p-0 ms-3 fs--1 text-700 hover-text-primary fw-bold text-decoration-none" href="#!"><span class="fas fa-sort me-1 fw-extra-bold fs--2"></span>Sorting</a></div>
            </div>
          </div>
          <div class="mb-4 todo-list">
            
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-0" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Designing the dungeon</label>
                    <div class="badge badge-phoenix fs--2 badge-phoenix-primary"><span class="fw-bold badge-label">DRAFT</span></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-1">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Designing the dungeon</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>


            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-2">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-1" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Hiring a motion graphic designer</label>
                    <div class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="fw-bold badge-label">URGENT</span></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button><button class="btn p-0 text-warning fs--2 me-2"><span class="fas fa-tasks me-1"></span>3</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-2">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Hiring a motion graphic designer</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-3">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-2" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Daily Meetings Purpose, participants</label>
                    <div class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="fw-bold badge-label">ON PROCESS</span></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>4</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Dec, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">05:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-3">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Daily Meetings Purpose, participants</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-4">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-3" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Finalizing the geometric shapes</label></div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-4">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Finalizing the geometric shapes</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-5">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-4" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Daily meeting with team members</label></div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center">
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">1 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-5">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Daily meeting with team members</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-6">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-5" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Daily Standup Meetings</label></div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center">
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">13 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">10:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-6">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Daily Standup Meetings</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-7">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-6" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Procrastinate for a month</label>
                    <div class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="fw-bold badge-label">ON PROCESS</span></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-7">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Procrastinate for a month</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-8">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-7" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">warming up</label>
                    <div class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="fw-bold badge-label">CLOSE</span></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>3</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">12 Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">12:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-8">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">warming up</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
            <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-200 py-3 gx-0 border-top border-bottom" data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-9">
              <div class="col-12 col-md-auto flex-1">
                <div>
                  <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1"><input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" type="checkbox" id="checkbox-todo-8" data-event-propagation-prevent="data-event-propagation-prevent" /><label class="form-check-label mb-0 fs-0 me-2 line-clamp-1 flex-grow-1 flex-md-grow-0">Make ready for release</label></div>
                </div>
              </div>
              <div class="col-12 col-md-auto">
                <div class="d-flex ms-4 lh-1 align-items-center"><button class="btn p-0 text-700 fs--2 me-2"><span class="fas fa-paperclip me-1"></span>2</button>
                  <p class="text-700 fs--2 mb-md-0 me-2 me-md-3 mb-0">2o Nov, 2021</p>
                  <div class="d-none d-md-block end-0 position-absolute" style="top: 23%;">
                    <div class="hover-actions end-0"><button class="btn btn-phoenix-secondary btn-icon me-1 fs--2 text-900 px-0 me-1" data-event-propagation-prevent="data-event-propagation-prevent"><span class="fas fa-edit"></span></button><button class="btn btn-phoenix-secondary btn-icon fs--2 text-danger px-0"><span class="fas fa-trash"></span></button></div>
                  </div>
                  <div class="hover-md-hide hover-lg-show hover-xl-hide">
                    <p class="text-700 fs--2 ps-md-3 border-start-md border-300 fw-bold mb-md-0 mb-0">1:00 AM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offcanvas offcanvas-end content-offcanvas offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" tabindex="-1" aria-labelledby="offcanvasExampleLabel" data-todo-content-offcanvas="data-todo-content-offcanvas" id="todoOffcanvas-9">
              <div class="offcanvas-body p-0">
                <div class="p-5 p-md-6">
                  <div class="d-flex flex-between-center mb-4">
                    <h2 class="fw-bold fs-2 mb-0 text-1000 line-clamp-1">Make ready for release</h2><button class="btn btn-phoenix-secondary btn-icon flex-shrink-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fa-solid fa-xmark"></span></button>
                  </div>
                  <div class="mb-6">
                    <div class="d-flex align-items-center mb-3">
                      <h4 class="text-900 me-3">Description</h4><a class="btn btn-link text-decoration-none p-0" href="#!"><span class="fa-solid fa-pen"></span></a>
                    </div>
                    <p class="text-1000 mb-0">The female circus horse-rider is a recurring subject in Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus. They visited Paris’s historic Cirque d’Hiver Bouglione together; Vollard lent Chagall his private box seats. Chagall completed 19 gouaches Chagall’s work. In 1926 the art dealer Ambroise Vollard invited Chagall to make a project based on the circus.</p>
                  </div>
                  <h4 class="mb-3">Subtasks</h4>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask1" /><label class="form-check-label mb-0 fs-0" for="subtask1">Study Dragons</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask2" /><label class="form-check-label mb-0 fs-0" for="subtask2">Procrastinate a bit</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div>
                  <div class="d-flex flex-between-center hover-actions-trigger border-300 py-3 border-top border-bottom mb-3">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto"><input class="form-check-input form-check-line-through mt-0 me-3" type="checkbox" id="subtask3" /><label class="form-check-label mb-0 fs-0" for="subtask3">Staring at the notebook for 5 mins</label></div>
                    <div class="hover-actions end-0"><button class="btn btn-sm me-1 fs--2 text-700 px-0 me-3"><span class="fa-solid fa-pencil"></span></button><button class="btn btn-sm text-700 px-0"><span class="fa-solid fa-xmark fs-0"></span></button></div>
                  </div><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add subtask</a>
                </div>
                <div class="mb-6">
                  <div class="px-5 px-md-6">
                    <h4 class="mb-3">Files</h4>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-700 fs--1"></span>
                          <p class="text-1000 mb-0 lh-1">Silly_sight_1.png</p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                      <p class="fs--1 text-700 mb-2"><span>768kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">21st Dec, 12:56 PM</span></p><img class="rounded-2" src="../../assets/img/generic/40.png" style="max-width:270px" />
                    </div>
                  </div>
                  <div class="border-top border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">All_images.zip</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>12.8 mB</span><span class="text-400 mx-1">| </span><a href="#!">Yves Tanguy </a><span class="text-400 mx-1">| </span><span class="text-nowrap">19th Dec, 08:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border-top border-bottom border-300 px-5 px-md-6 py-4">
                    <div class="me-n3">
                      <div class="d-flex flex-between-center">
                        <div>
                          <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-file-lines me-2 fs--1 text-700"></span>
                            <p class="text-1000 mb-0 lh-1">Project.txt</p>
                          </div>
                          <p class="fs--1 text-700 mb-0"><span>123 kB</span><span class="text-400 mx-1">| </span><a href="#!">Shantinan Mekalan </a><span class="text-400 mx-1">| </span><span class="text-nowrap">12th Dec, 12:56 PM</span></p>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" id="documentations" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="documentations"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a><a class="dropdown-item" href="#!">Download</a><a class="dropdown-item" href="#!">Report abuse</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="px-5 px-md-6 my-3"><a class="fw-bold fs--1 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add file(s)</a></div>
                </div>
                <div class="px-5 px-md-6">
                  <h4 class="mb-4 text-black">Others Information</h4>
                  <h5 class="text-1000 mb-2">Status</h5><select class="form-select mb-4" aria-label="Default select example">
                    <option selected="">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <h5 class="text-1000 mb-2">Due Date</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Set the due date" data-options='{"disableMobile":true}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Reminder</h5>
                  <div class="flatpickr-input-container mb-4"><input class="form-control datetimepicker ps-6" id="datepicker" type="text" placeholder="Reminder" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span class="uil uil-bell-school flatpickr-icon text-700"></span></div>
                  <h5 class="text-1000 mb-2">Tag</h5>
                  <div class="choices-select-container mb-6"><select class="form-select" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                      <option value="">Select organizer...</option>
                      <option>Massachusetts Institute of Technology</option>
                      <option>University of Chicago</option>
                      <option>GSAS Open Labs At Harvard</option>
                      <option>California Institute of Technology</option>
                    </select><span class="uil uil-tag-alt choices-icon text-700" style="top: 26%;"></span></div>
                  <div class="text-end mb-9"><button class="btn btn-phoenix-danger">Delete Task</button></div>
                </div>
              </div>
            </div>
          </div><a class="fw-bold fs--1 mt-4 text-decoration-none" href="#!"><span class="fas fa-plus me-1"></span>Add new task</a>
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