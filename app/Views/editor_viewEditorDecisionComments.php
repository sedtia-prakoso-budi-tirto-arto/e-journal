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
                <h2>Editor/Author Correspondence</h2>
                <div id="content">



                    <script type="text/javascript">
                        // In case this page is the result of a comment submit, reload the parent
                        // so that the necessary buttons will be activated.
                        window.opener.location.reload();
                        // 
                    </script>
                    <div id="existingComments">
                        <table class="data" width="100%">
                            <tbody>
                                <tr>
                                    <td class="nodata">No Comments</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <br>


                    <form method="post" action="https://iptek.its.ac.id/index.php/itj/editor/postEditorDecisionComment">
                        <input type="hidden" name="articleId" value="12749">


                        <div id="new">

                            <table class="data" width="100%">
                                <tbody>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="commentTitle">
                                                Subject </label>
                                        </td>
                                        <td class="value"><input type="text" name="commentTitle" id="commentTitle" value="testing" size="50" maxlength="255" class="textField"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td class="label">
                                            <label for="comments">
                                                Add Comment </label>
                                        </td>
                                        <span>
                                            <td>
                                                <textarea id="comments" name="comments" rows="10" cols="50" class="textArea"></textarea>
                                            </td>
                                        </span>
                                    </tr>
                                </tbody>
                            </table>

                            <p><input type="submit" name="save" value="Save" class="button defaultButton"> <input type="button" value="Close" class="button" onclick="window.close()"></p>

                            <p><span class="formRequired">* Denotes required field</span></p>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>