<div class="row g-5">
    <div class="col-md-8">
        <div class="p-3 bg-white position-sticky">
            <ul class="nav border-bottom" style="padding-bottom: 16pt; margin-left:50pt;">
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/home" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Home
                    </a>
                </li>
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/home" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        User
                    </a>
                </li>
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/editor" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Editor
                    </a>
                </li>
            </ul>
            <div class="fs-5 mt-2 fw-semibold border-bottom pb-3" style="margin-left: 50pt;">Editor Home</div>
            <div class="accordion accordion-flush border-bottom pb-1" style="margin-left: 50pt;" id="accordionFlushExample">
                <div class="accordion-item" style="margin-left: -15pt;">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Submissions
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="row">
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsUnassigned" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Unassigned (12)</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsInReview" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">In Review (5)</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">In Editting (4)</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Archives</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown mt-2 border-bottom" style="margin-left: 50pt;">
                <div class="row">
                    <div class="col mt-4">
                        <div class="mb-3">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col">
                        <label for="">between</label>
                        <div class="input-group flex-nowrap">
                            <input type="date" class="form-control" placeholder="Between" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="col">
                        <label for="">and</label>
                        <div class="input-group flex-nowrap">
                            <input type="date" class="form-control" placeholder="And" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
                <div class="row mt-1 mb-3 ms-2">
                    <div class="col">
                        <button class="btn btn-outline-primary dropdown-toggle" style="width: 100pt;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Title
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Title</a></li>
                            <li><a class="dropdown-item" href="#">Submission ID</a></li>
                            <li><a class="dropdown-item" href="#">Author</a></li>
                            <li><a class="dropdown-item" href="#">Editor</a></li>
                            <li><a class="dropdown-item" href="#">Reviewer</a></li>
                            <li><a class="dropdown-item" href="#">Copyeditor</a></li>
                            <li><a class="dropdown-item" href="#">Layout Editor</a></li>
                            <li><a class="dropdown-item" href="#">Proofreader</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-primary dropdown-toggle" style="width: 100pt;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Contains
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Contains</a></li>
                            <li><a class="dropdown-item" href="#">Is</a></li>
                            <li><a class="dropdown-item" href="#">Starts with</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-primary dropdown-toggle" style="width: 100pt;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Submitted
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Submitted</a></li>
                            <li><a class="dropdown-item" href="#">Copy edited</a></li>
                            <li><a class="dropdown-item" href="#">Layout edited</a></li>
                            <li><a class="dropdown-item" href="#">Proofread</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-sm" style="padding: 5pt; width: 100pt;">Search</button>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush border-bottom pb-1" style="margin-left: 50pt;" id="accordionFlushExample">
                <div class="accordion-item" style="margin-left: -15pt;">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Issues
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="row">
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Create Issue</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Notify Users</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Future Issues</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="#" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Back Issues</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-primary table-striped mt-1" style="margin-left: 50pt; font-size: 10pt">
                <tbody style="text-align :center;">
                    <tr>
                        <th> ID </th>
                        <th> MM - DD
                            SUBMIT
                        </th>
                        <th> SEC </th>
                        <th> AUTHORS </th>
                        <th> TITLE </th>
                    </tr>
                    <tr>
                        <td>12541</td>
                        <td>05-24</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">test</a></td>
                    </tr>
                    <tr>
                        <td>12687</td>
                        <td>05-25</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">xczxzcxcz</a></td>
                    </tr>
                    <tr>
                        <td>12749</td>
                        <td>05-25</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">testing</a></td>
                    </tr>
                    <tr>
                        <td>12755</td>
                        <td>04-12</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">fg</a></td>
                    </tr>
                    <tr>
                        <td>12759</td>
                        <td>04-12</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">l</a></td>
                    </tr>
                    <tr>
                        <td>12808</td>
                        <td>05-12</td>
                        <td>ART</td>
                        <td>Asdad</td>
                        <td><a href="">dsaasd</a></td>
                    </tr>
                    <tr>
                        <td>12886</td>
                        <td>05-10</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">tes</a></td>
                    </tr>
                    <tr>
                        <td>12899</td>
                        <td>05-24</td>
                        <td>ART</td>
                        <td>Niani, Camilla</td>
                        <td><a href="">ini judul</a></td>
                    </tr>
                    <tr>
                        <td>12919</td>
                        <td>05-12</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">wawa</a></td>
                    </tr>
                    <tr>
                        <td>12920</td>
                        <td>05-12</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">wawa</a></td>
                    </tr>
                    <tr>
                        <td>12923</td>
                        <td>05-14</td>
                        <td>ART</td>
                        <td>Niani</td>
                        <td><a href="">test</a></td>
                    </tr>
                </tbody>
            </table>
            <p style="margin-left: 50pt; margin-top:-10pt; font-size:10pt;">1 - 11 of 11 Items</p>
        </div>

    </div>