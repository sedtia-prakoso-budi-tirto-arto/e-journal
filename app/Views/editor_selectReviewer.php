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
                        Unassigned
                    </a>
                </li>
            </ul>

            <div id="main" style="margin-left: 50pt;">

                <h2>Reviewers</h2>
                <hr>
                <div id="content">

                    <script type="text/javascript">
                        function sortSearch(heading, direction) {
                            var submitForm = document.getElementById('submit');
                            submitForm.sort.value = heading;
                            submitForm.sortDirection.value = direction;
                            submitForm.submit();
                        }
                        // 
                    </script>

                    <div id="selectReviewer">
                        <h3>Select Reviewer</h3>
                        <form id="submit" method="post" action="">
                            <input type="hidden" name="sort" value="name">
                            <input type="hidden" name="sortDirection" value="ASC">
                            <select name="searchField" size="1" class="selectMenu">
                                <option label="Reviewing interests" value="interests">Reviewing interests</option>
                                <option label="First Name" value="first_name">First Name</option>
                                <option label="Last Name" value="last_name">Last Name</option>
                                <option label="Username" value="username">Username</option>
                                <option label="Email" value="email">Email</option>

                            </select>
                            <select name="searchMatch" size="1" class="selectMenu">
                                <option value="contains">contains</option>
                                <option value="is">is</option>
                                <option value="startsWith">starts with</option>
                            </select>
                            <input type="text" size="10" name="search" class="textField" value="">&nbsp;<input type="submit" value="Search" class="button">
                        </form>

                        <p><a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=A">A</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=B">B</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=C">C</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=D">D</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=E">E</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=F">F</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=G">G</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=H">H</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=I">I</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=J">J</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=K">K</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=L">L</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=M">M</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=N">N</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=O">O</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=P">P</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=Q">Q</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=R">R</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=S">S</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=T">T</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=U">U</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=V">V</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=W">W</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=X">X</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=Y">Y</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749?searchInitial=Z">Z</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749"><strong>All</strong></a></p>

                        <p><a class="action" href="">Enroll an Existing User As Reviewer</a>&nbsp;|&nbsp;<a class="action" href="">Create New Reviewer</a></p>

                        <div id="reviewers">
                            <table class="listing" width="100%">
                                <tbody>
                                    <tr>
                                        <td colspan="7" class="headseparator">&nbsp;</td>
                                    </tr>
                                    <tr class="heading" valign="bottom">
                                        <td width="20%"><a href="javascript:sortSearch('reviewerName','2')" style="font-weight:bold" class="text-decoration-none">Name</a></td>
                                        <td>Reviewing interests</td>
                                        <td width="8%"><a href="javascript:sortSearch('done','1')" class="text-decoration-none">Done</a></td>
                                        <td width="8%"><a href="javascript:sortSearch('average','1')" class="text-decoration-none">Weeks</a></td>
                                        <td width="13%"><a href="javascript:sortSearch('latest','1')" class="text-decoration-none">Latest</a></td>
                                        <td width="8%"><a href="javascript:sortSearch('active','1')" class="text-decoration-none">Active</a></td>
                                        <td width="7%" class="heading">Action</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="headseparator">&nbsp;</td>
                                    </tr>

                                    <tr valign="top">
                                        <td><a class="action" href="<?php echo base_url() . '/'; ?>Editor/userProfile">Prayogi Reviewer</a></td>
                                        <td></td>

                                        <td>
                                            12
                                        </td>

                                        <td>
                                            0
                                        </td>
                                        <td>2022-06-07</td>
                                        <td>2</td>
                                        <td>
                                            <a class="action" href="https://iptek.its.ac.id/index.php/itj/editor/selectReviewer/12749/16017">Assign</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="endseparator">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="left">1 - 1 of 1 Items</td>
                                        <td colspan="5" align="right"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <h4>Notes</h4>
                            <p>Name links to reviewer's profile.<br>
                                Ratings is out of 5 (Excellent).<br>
                                Weeks refers to average period of time to complete a review.<br>
                                Latest is date of most recently accepted review.<br>
                                Active is how many reviews are currently being considered or underway.</p>
                        </div>
                    </div>


                </div><!-- content -->
            </div>
        </div>
    </div>