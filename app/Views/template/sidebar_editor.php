<div class="col-md-4">
    <div class="p-3 bg-white position-sticky" style="width: 280px; ">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <span class="fs-5 fw-semibold">Open Journal System</span>
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                    User
                </button>
                <div class="collapse" id="user-collapse">
                    <div class="ms-4 ps-1" style="font-size: 14px;">You are logged in as <strong>Barunanto</strong></div>
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">My Journals</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">My Profile</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Log Out</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <div class="ms-4 ps-1" style="font-size: 15px;">EDITOR</div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#submissions-collapse" aria-expanded="false">
                    Submissions
                </button>
                <div class="collapse" id="submissions-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsUnassigned" class="link-dark d-inline-flex text-decoration-none rounded">Unassigned (12)</a></li>
                        <li><a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsInReview" class="link-dark d-inline-flex text-decoration-none rounded">In Review (5)</a></li>
                        <li><a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsInEditting" class="link-dark d-inline-flex text-decoration-none rounded">In Editting (5)</a></li>
                        <li><a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsArchives" class="link-dark d-inline-flex text-decoration-none rounded">Archives</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#issues-collapse" aria-expanded="false">
                    Issues
                </button>
                <div class="collapse" id="issues-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Create Issue</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Notify Users</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Future Issues</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Back Issues</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#notifications-collapse" aria-expanded="false">
                    Notifications
                </button>
                <div class="collapse" id="notifications-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">View (7 new)</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Manage</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#jurnal-collapse" aria-expanded="false">
                    Journal Content
                </button>
                <div class="collapse" id="jurnal-collapse">
                    <label for="exampleDataList" class="form-label"></label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." style="margin-top: -15pt;">
                    <datalist id=" datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                    <div class="btn-group mt-1">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            All
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">All</a></li>
                            <li><a class="dropdown-item" href="#">Authors</a></li>
                            <li><a class="dropdown-item" href="#">Title</a></li>
                            <li><a class="dropdown-item" href="#">Abstract</a></li>
                            <li><a class="dropdown-item" href="#">Index Terms</a></li>
                            <li><a class="dropdown-item" href="#">Full Text</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-primary mt-1">Search</button>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Browse
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">By Issue</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">By Author</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">By Title</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Other Journals</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#info-collapse" aria-expanded="false">
                    Information
                </button>
                <div class="collapse" id="info-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">For Readers</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">For Authors</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">For Librarians</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>