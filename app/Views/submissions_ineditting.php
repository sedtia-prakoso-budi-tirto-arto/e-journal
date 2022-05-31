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
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/editor" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Submissions
                    </a>
                </li>
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/editor" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        in Editting
                    </a>
                </li>
            </ul>
            <div class="fs-5 mt-2 fw-semibold border-bottom pb-3" style="margin-left: 50pt;">Submissions in Editting</div>
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
                                    <a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsInEditting" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">In Editting (4)</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="accordion-body">
                                    <a href="<?php echo base_url() . '/'; ?>index.php/Submissions/submissionsArchives" class="text-decoration-none link-primary fw-normal" style="font-size: 15px;">Archives</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-3 ms-2">
                <div class="col">
                    <button class="btn btn-outline-primary dropdown-toggle" style="width: 100pt; margin-left: 50pt;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Assigned To
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">All Editors</a></li>
                        <li><a class="dropdown-item" href="#">Me</a></li>
                    </ul>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary dropdown-toggle" style="width: 100pt; margin-left: -112pt;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        In Section
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">All Sections</a></li>
                        <li><a class="dropdown-item" href="#">Articles</a></li>
                    </ul>
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
            <div class="tabel" style="margin-right: 67px;">
                <table class="table mt-1" style="margin-left: 50pt; font-size: 10pt">
                    <tbody style="text-align :center;">
                        <tr>
                            <th> ID </th>
                            <th>MM - DD SUBMIT</th>
                            <th> SEC </th>
                            <th> AUTHORS </th>
                            <th> TITLE </th>
                            <th></th>
                            <th></th>
                            <th>COPY EDIT</th>
                            <th>LAYOUT</th>
                            <th>PROOF</th>
                            <th>SE</th>
                        </tr>
                        <tr style="background-color: #EDEBC4;">
                            <td>12536</td>
                            <td>03-15</td>
                            <td>ART</td>
                            <td>Niani</td>
                            <td><a href="">test</a></td>
                            <td></td>
                            <td></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>BN</td>
                        </tr>
                        <tr style="background-color: #EDEBC4;">
                            <td>12682</td>
                            <td>04-05</td>
                            <td>ART</td>
                            <td>Niani</td>
                            <td><a href="">test</a></td>
                            <td></td>
                            <td></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>BN</td>
                        </tr>
                        <tr style="background-color: #EDEBC4;">
                            <td>12892</td>
                            <td>05-10</td>
                            <td>ART</td>
                            <td>Last</td>
                            <td><a href="">Pemberitahuan</a></td>
                            <td></td>
                            <td></td>
                            <td>05-10</td>
                            <td>-</td>
                            <td>-</td>
                            <td>BN</td>
                        </tr>
                        <tr style="background-color: #EDEBC4;">
                            <td>12929</td>
                            <td>05-14</td>
                            <td>ART</td>
                            <td>Ahmad</td>
                            <td><a href="">test</a></td>
                            <td></td>
                            <td></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>BN</td>
                        </tr>
                        <tr style="background-color: #EDEBC4;">
                            <td>13009</td>
                            <td>05-23</td>
                            <td>ART</td>
                            <td>Niani</td>
                            <td><a href="">coba author</a></td>
                            <td></td>
                            <td></td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>BN</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-left: 50pt; margin-top:-10pt; font-size:10pt;">1 - 05 of 5 Items</p>
            <div class="note mt-4" style="margin-left:50pt;">
                <p class="fs-5 fw-semibold">Notes</p>
                <ul style="font-size:10pt;">1. Highlighted items indicate action is required by an editor, labelled as follows:
                    <li class="ms-5" style="background-color: #EDEBC4;">An action is required in the copyediting stage</li>
                    <li class="ms-5" style="background-color: #D8E9BD;">An action is required in the layout editing stage</li>
                    <li class="ms-5" style="background-color: #C6EBE4;">An action is required in the proofreading stage</li>
                </ul>
            </div>
        </div>

    </div>