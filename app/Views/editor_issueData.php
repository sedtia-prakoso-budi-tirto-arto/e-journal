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
                        <div class="col"><a href="<?php echo base_url() . '/'; ?>Editor/issueGalley">Issue Galleys</a></div>
                        <div class="col"><a href="https://iptek.its.ac.id/index.php/itj/issue/view/809">Preview Issue</a></div>
                    </div>

                    <form id="issue" method="post" action="https://iptek.its.ac.id/index.php/itj/editor/editIssue/809" enctype="multipart/form-data">
                        <input type="hidden" name="fileName[en_US]" value="">
                        <input type="hidden" name="originalFileName[en_US]" value="">
                        <div id="issueId">
                            <h3>Identification</h3>
                            <table width="100%" class="data">
                                <tbody>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="volume">
                                                Volume </label>
                                        </td>
                                        <td width="80%" class="value"><input type="text" name="volume" id="volume" value="2" size="5" maxlength="5" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="number">
                                                Number </label>
                                        </td>
                                        <td class="value"><input type="text" name="number" id="number" value="2" size="5" maxlength="10" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="year">
                                                Year </label>
                                        </td>
                                        <td class="value"><input type="text" name="year" id="year" value="2023" size="5" maxlength="4" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="labelFormat">
                                                Issue identification </label>
                                        </td>
                                        <td class="value"><input type="checkbox" name="showVolume" id="showVolume" value="1" checked="checked"><label for="showVolume"> Volume</label><br><input type="checkbox" name="showNumber" id="showNumber" value="1" checked="checked"><label for="showNumber"> Number</label><br><input type="checkbox" name="showYear" id="showYear" value="1" checked="checked"><label for="showYear"> Year</label><br><input type="checkbox" name="showTitle" id="showTitle" value="1"><label for="showTitle"> Title</label></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="title">
                                                Title </label>
                                        </td>
                                        <td class="value"><input type="text" name="title[en_US]" id="title" value="" size="40" maxlength="120" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="description">
                                                Description </label>
                                        </td>
                                        <td class="value"><textarea name="description[en_US]" id="description" cols="40" rows="5" class="textArea"></textarea><span role="application" aria-labelledby="description_voice" id="description_parent" class="mceEditor defaultSkin"><span class="mceVoiceLabel" style="display:none;" id="description_voice">Rich Text Area</span>
                                            </span></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">Status</td>
                                        <td class="value">
                                            Unpublished

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="separator"></div>




                        <div id="issueCover">
                            <h3>Cover</h3>
                            <table width="100%" class="data">
                                <tbody>
                                    <tr valign="top">
                                        <td class="label" colspan="2"><input type="checkbox" name="showCoverPage[en_US]" id="showCoverPage" value="1"> <label for="showCoverPage">Create a cover for this issue with the following elements.</label></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="coverPage">
                                                Cover image </label>
                                        </td>
                                        <td width="80%" class="value"><input type="file" name="coverPage" id="coverPage" class="uploadField">&nbsp;&nbsp;Use Save to upload file.<br>(Allowed formats: .gif, .jpg, or .png )<br>Uploaded:&nbsp;—</td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="coverPageAltText">
                                                Alternate text </label>
                                        </td>
                                        <td width="80%" class="value"><input type="text" name="coverPageAltText[en_US]" value="" size="40" maxlength="255" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td>&nbsp;</td>
                                        <td class="value"><span class="instruct">Please provide alternate text for this image to ensure accessibility for users with text-only browsers or assistive devices.</span></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="styleFile">
                                                Stylesheet </label>
                                        </td>
                                        <td width="80%" class="value"><input type="file" name="styleFile" id="styleFile" class="uploadField">&nbsp;&nbsp;Use Save to upload file.<br>Uploaded:&nbsp;—</td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="coverPageDescription">
                                                Cover caption </label>
                                        </td>
                                        <td class="value"><textarea name="coverPageDescription[en_US]" id="coverPageDescription" cols="40" rows="5" class="textArea"></textarea><span role="application" aria-labelledby="coverPageDescription_voice" id="coverPageDescription_parent" class="mceEditor defaultSkin"><span class="mceVoiceLabel" style="display:none;" id="coverPageDescription_voice">Rich Text Area</span>
                                            </span></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="hideCoverPageArchives">
                                                Display </label>
                                        </td>
                                        <td width="80%" class="value"><input type="checkbox" name="hideCoverPageArchives[en_US]" id="hideCoverPageArchives" value="1"> <label for="hideCoverPageArchives">Do not display cover image thumbnail in issue listing.</label></td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">&nbsp;</td>
                                        <td class="value"><input type="checkbox" name="hideCoverPageCover[en_US]" id="hideCoverPageCover" value="1"> <label for="hideCoverPageCover">Do not display cover image prior to table of contents.</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p><input type="submit" value="Save" class="button defaultButton"> <input type="button" value="Cancel" onclick="document.location.href='https://iptek.its.ac.id/index.php/itj/editor/issueData/809'" class="button"></p>

                        <p><span class="formRequired">* Denotes required field</span></p>

                    </form>


                </div><!-- content -->
            </div>
        </div>
    </div>