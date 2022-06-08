<div class="row g-5">
    <div class="col-md-8">
        <div class="p-3 bg-white position-sticky">
            <ul class="nav border-bottom" style="padding-bottom: 16pt; margin-left:50pt;">
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>home" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Home
                    </a>
                </li>
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>About" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        About the Journal
                    </a>
                </li>
            </ul>

            <div id="main" style="margin-left: 50pt;">

                <h2 class="mt-2">Back Issues</h2>

                <hr>

                <div id="content">

                    <script type="text/javascript">
                        $(document).ready(function() {
                            setupTableDND("#dragTable", "moveIssue");
                        });
                    </script>

                    <div class="row" style="margin-top: -10pt; margin-bottom: 20pt;">
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/createIssue">Create Issue</a></div>
                        <div class="col"><a class="text-decoration-none" href="<?php echo base_url() . '/'; ?>Editor/futureIssue">Future Issues</a></div>
                        <div class="col"><a class="text-decoration-none" href="h<?php echo base_url() . '/'; ?>Editor/backIssue">Back Issues</a></div>
                    </div>

                    <p>This journal uses custom issue ordering. <a href="https://iptek.its.ac.id/index.php/itj/editor/resetIssueOrder" class="action">Reset to defaults</a></p>

                    <div id="issues">
                        <table width="100%" class="listing" id="dragTable">
                            <tbody>
                                <tr>
                                    <td colspan="5" class="headseparator">&nbsp;</td>
                                </tr>
                                <tr class="heading" valign="bottom">
                                    <td width="60%">Issue</td>
                                    <td width="15%">Published</td>
                                    <td width="15%">Items</td>
                                    <td width="5%">Order</td>
                                    <td width="5%" align="right">Action</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="headseparator">&nbsp;</td>
                                </tr>

                                <tr valign="top" class="data" id="issue-787">
                                    <td class="drag"><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/787" class="action">Vol 1, No 1 (2022)</a></td>
                                    <td class="drag">2022-03-29</td>
                                    <td class="drag">1</td>
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/moveIssue?d=u&amp;id=787&amp;issuesPage=1">↑</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/moveIssue?d=d&amp;id=787&amp;issuesPage=1">↓</a></td>
                                    <td align="right"><a href="https://iptek.its.ac.id/index.php/itj/editor/removeIssue/787?issuesPage=1" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr valign="top" class="data" id="issue-789">
                                    <td class="drag"><a href="https://iptek.its.ac.id/index.php/itj/editor/issueToc/789" class="action">Vol 1, No 2 (2022)</a></td>
                                    <td class="drag">2022-06-03</td>
                                    <td class="drag">2</td>
                                    <td><a href="https://iptek.its.ac.id/index.php/itj/editor/moveIssue?d=u&amp;id=789&amp;issuesPage=1">↑</a> <a href="https://iptek.its.ac.id/index.php/itj/editor/moveIssue?d=d&amp;id=789&amp;issuesPage=1">↓</a></td>
                                    <td align="right"><a href="https://iptek.its.ac.id/index.php/itj/editor/removeIssue/789?issuesPage=1" onclick="return confirm('Are you sure you want to permanently delete this issue?')" class="action">Delete</a></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="endseparator">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">1 - 2 of 2 Items</td>
                                    <td colspan="3" align="right"></td>
                                </tr>
                            </tbody>
                        </table>

                        <form action="https://iptek.its.ac.id/index.php/itj/editor/setCurrentIssue" method="post">
                            Current Issue&nbsp;&nbsp;
                            <select name="issueId" class="selectMenu">
                                <option value="">None</option>
                                <option label="Vol 1, No 1 (2022)" value="787">Vol 1, No 1 (2022)</option>
                                <option label="Vol 1, No 2 (2022)" value="789">Vol 1, No 2 (2022)</option>

                            </select>
                            <input type="submit" value="Record" class="button defaultButton">
                        </form>
                    </div>

                </div><!-- content -->
            </div>
        </div>
    </div>