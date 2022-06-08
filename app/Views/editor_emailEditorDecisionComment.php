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

                <h2>Send Email</h2>


                <div id="content">



                    <script type="text/javascript">
                        function deleteAttachment(fileId) {
                            document.getElementById('emailForm').deleteAttachment.value = fileId;
                            document.getElementById('emailForm').submit();
                        }
                        // 
                    </script>
                    <div id="editorDecisionEmail">
                        <form method="post" name="emailForm" action="https://iptek.its.ac.id/index.php/itj/editor/emailEditorDecisionComment/send" enctype="multipart/form-data">
                            <input type="hidden" name="continued" value="1">
                            <input type="hidden" name="articleId" value="12749">

                            <input type="hidden" name="deleteAttachment" value="">




                            <table class="data" width="100%">
                                <tbody>
                                    <tr valign="top">
                                        <td class="label" width="20%">
                                            <label for="to">
                                                To </label>
                                        </td>
                                        <td width="80%" class="value">
                                            <input type="text" name="to[]" id="to" value="Cyntia Niani <cyntian@ppi.its.ac.id>" size="40" maxlength="120" class="textField"><br>

                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="cc">
                                                CC </label>
                                        </td>
                                        <td class="value">
                                            <input type="text" name="cc[]" id="cc" size="40" maxlength="120" class="textField">

                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="bcc">
                                                BCC </label>
                                        </td>
                                        <td class="value">
                                            <input type="text" name="bcc[]" id="bcc" size="40" maxlength="120" class="textField">

                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td></td>
                                        <td class="value">
                                            <input type="submit" name="blankTo" class="button" value="Add Recipient">
                                            <input type="submit" name="blankCc" class="button" value="Add CC">
                                            <input type="submit" name="blankBcc" class="button" value="Add BCC">
                                            <br>
                                            <input type="checkbox" name="bccSender" id="bccSender" value="1">&nbsp;&nbsp;<label for="bccSender">Send a copy of this message to my address (barunanto@ppi.its.ac.id)</label>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">Attachments</td>
                                        <td class="value">


                                            <input type="file" name="newAttachment" class="uploadField"> <input name="addAttachment" type="submit" class="button" value="Upload">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">&nbsp;</td>
                                        <td class="value">
                                            <input type="submit" name="importPeerReviews" class="button defaultButton" value="Import Peer Reviews">
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">From</td>
                                        <td class="value">"Baru Nanto" &lt;barunanto@ppi.its.ac.id&gt;</td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="20%" class="label">
                                            <label for="subject">
                                                Subject </label>
                                        </td>
                                        <td width="80%" class="value"><input type="text" id="subject" name="subject" value="[]" size="60" maxlength="90" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="body">
                                                Body </label>
                                        </td>
                                        <td class="value"><textarea name="body" cols="60" rows="15" class="textArea"></textarea></td>
                                    </tr>

                                    <tr>
                                        <td class="label">&nbsp;</td>
                                        <td class="value"><input type="checkbox" name="blindCcReviewers" value="1" id="blindCcReviewers">&nbsp;&nbsp;<label for="blindCcReviewers">After sending, present an editable BCC copy to send to reviewers.</label></td>
                                    </tr>
                                </tbody>
                            </table>

                            <p><input name="send" type="submit" value="Send" class="button defaultButton"> <input type="button" value="Cancel" class="button" onclick="history.go(-1)"> <input name="send[skip]" type="submit" value="Skip Email" class="button"></p>
                        </form>
                    </div>

                </div><!-- content -->
            </div>
        </div>
    </div>