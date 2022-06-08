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

                <h2 class="mt-2">Future Issues</h2>

                <hr>

                <div id="content">

                    <div class="row" style="margin-top: -10pt;">
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/createIssue">Create Issue</a></div>
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/futureIssue">Future Issues</a></div>
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/backIssue">Back Issues</a></div>
                    </div>

                    <div id="issues">
                        <table width="100%" class="listing">
                            <tbody>
                                <tr>
                                    <td colspan="3" class="headseparator">&nbsp;</td>
                                </tr>
                                <tr class="heading" valign="bottom">
                                    <td width="80%">Issue</td>
                                    <td width="15%">Items</td>
                                    <td width="5%" align="right">Action</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="headseparator">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/790" class="action">Vol 2, No 1 (2023)</a></td>
                                    <td>3</td>
                                    <td align="right"><a href="" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="separator">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/809" class="action">Vol 2, No 2 (2023)</a></td>
                                    <td>0</td>
                                    <td align="right"><a href="" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="separator">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/817" class="action">Vol 3, No 20 (2024)</a></td>
                                    <td>0</td>
                                    <td align="right"><a href="" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="separator">&nbsp;</td>
                                </tr>
                                <tr valign="top">
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/818" class="action">Vol 3, No 20 (2024)</a></td>
                                    <td>0</td>
                                    <td align="right"><a href="" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="endseparator">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="left">1 - 4 of 4 Items</td>
                                    <td colspan="2" align="right"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div><!-- content -->
            </div>
        </div>
    </div>