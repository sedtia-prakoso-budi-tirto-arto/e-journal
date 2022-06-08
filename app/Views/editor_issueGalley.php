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

                <h2>Vol 2, No 2 (2023)</h2>

                <hr>

                <div id="content">

                    <div class="row" style="margin-top: -10pt; margin-bottom: 20pt;">
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/createIssue">Create Issue</a></div>
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/futureIssue">Future Issues</a></div>
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/backIssue">Back Issues</a></div>
                    </div>

                    <form action="#">
                        Issue: <select name="issue" class="selectMenu" onchange="if(this.options[this.selectedIndex].value > 0) location.href='https://iptek.its.ac.id/index.php/itj/editor/issueToc/ISSUE_ID'.replace('ISSUE_ID', this.options[this.selectedIndex].value)" size="1">
                            <option label="------    Future Issues    ------" value="-100">------ Future Issues ------</option>
                            <option label="Vol 2, No 2 (2023)" value="809" selected="selected">Vol 2, No 2 (2023)</option>
                            <option label="Vol 3, No 20 (2024)" value="817">Vol 3, No 20 (2024)</option>
                            <option label="Vol 3, No 20 (2024)" value="818">Vol 3, No 20 (2024)</option>
                            <option label="Vol 1, No 1 (2025)" value="822">Vol 1, No 1 (2025)</option>
                            <option label="------    Current Issue    ------" value="-101">------ Current Issue ------</option>
                            <option label="------    Back Issues    ------" value="-102">------ Back Issues ------</option>
                            <option label="Vol 1, No 1 (2022)" value="787">Vol 1, No 1 (2022)</option>
                            <option label="Vol 1, No 2 (2022)" value="789">Vol 1, No 2 (2022)</option>
                        </select>
                    </form>

                    <hr>

                    <div class="separator"></div>

                    <div class="row mb-3" style="margin-top: -10pt;">
                        <div class="col"><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/809">Table of Contents</a></div>
                        <div class="col"><a href="<?php echo base_url() . '/'; ?>Editor/issueData">Issue Data</a></div>
                        <div class="col"><a href="https://iptek.its.ac.id/index.php/itj/editor/issueGalleys/809">Issue Galleys</a></div>
                        <div class="col"><a href="https://iptek.its.ac.id/index.php/itj/issue/view/809">Preview Issue</a></div>
                    </div>

                    <form id="issueGalleys" method="post" action="https://iptek.its.ac.id/index.php/itj/editor/uploadIssueGalley/809" enctype="multipart/form-data">
                        <div id="issueId">
                            <h3>Issue Galleys</h3>
                            <p>Publish galleys with entire issue contents.</p>
                            <hr>
                            <table width="100%" class="data">
                            </table>
                            <table width="100%" class="info">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="heading">Galley Format</td>
                                        <td class="heading">File</td>
                                        <td class="heading">Order</td>
                                        <td class="heading">Action</td>
                                        <td class="heading">Views</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="nodata fst-italic" style="text-align: center;">No issue galleys have been published.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <input type="file" name="galleyFile" id="galleyFile" size="10" class="uploadField">
                            <input type="submit" value="Upload" class="button">
                        </div>
                    </form>


                </div><!-- content -->
            </div>
        </div>
    </div>