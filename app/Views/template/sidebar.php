<div class="col-md-4">
    <div class="p-3 bg-white position-sticky" style="width: 280px; ">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <span class="fs-5 fw-semibold">Open Journal System</span>
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                    User
                </button>
                <div class="collapse" id="home-collapse">
                    <form action="<?php echo base_url() . '/index.php/Authenticate/auth'; ?>" method="post" role="form">
                        <div class="mb-1">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-1">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                        </div>
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Login</button>
                    </form>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                    Notifications
                </button>
                <div class="collapse" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">View</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Subscribe</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                    Journal Content
                </button>
                <div class="collapse" id="orders-collapse">
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
                            Action
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
                    <button type="button" class="btn btn-success mt-1">Search</button>
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