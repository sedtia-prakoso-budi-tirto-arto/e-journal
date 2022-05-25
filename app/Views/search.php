<div class="row g-5">
    <div class="col-md-8">
        <div class="p-3 bg-white position-sticky" style=" margin-left: 50pt;">
            <ul class="nav border-bottom" style="padding-bottom: 16pt;">
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/home" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Home
                    </a>
                </li>
                <li class="nav-item"> >> </li>
                <li class="nav-item">
                    <a href=" <?php echo base_url() . '/'; ?>index.php/search" class="mb-3 link-dark text-decoration-none fs-6 fst-italic">
                        Search
                    </a>
                </li>
            </ul>
            <div class="fs-5 mt-2 fw-semibold border-bottom pb-3">Search</div>
            <div class="d-flex align-items-center mt-2 mb-3">
                <div class="fs-6 mt-1 me-2">Search for</div>
                <form class="w-50 me-2" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
                <div class="text-end">
                    <button type="button" class="btn btn-success">Search</button>
                </div>
            </div>
            <div class="accordion accordion-flush border-bottom pb-3" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Additional Search Options (Click to show)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body fw-semibold">
                            Search Categories
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 102pt;">Authors</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 121pt;">Title</label>
                            <input type=" text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 99pt;">Abstract</label>
                            <input type=" text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 100pt;">Full Text</label>
                            <input type=" text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 36pt;">Suplementary File(s)</label>
                            <input type=" text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="accordion-body fw-semibold">
                            Publication Date
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 115pt;">From</label>
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 117pt;">Until</label>
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="accordion-body fw-semibold">
                            Index Terms
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 78pt;">Discipline(s)</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 83pt;">Keyword(s)</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 13pt;">Type(method/approach)</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 91pt;">Coverage</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-1">
                            <label class="col-form-label ms-4" style="margin-right: 33pt;">All Index Term Fields</label>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <button type="button" class="btn btn-success ms-4">Search</button>
                    </div>
                </div>
            </div>
            <div class="row g-3 border-bottom">
                <div class="col-md-6">
                    <div class="fs-6 mt-1 pt-1 fw-semibold pb-2" style="text-align: center;">Issue</div>
                </div>
                <div class="col-md-6">
                    <div class="fs-6 mt-1 pt-1 fw-semibold pb-2" style="text-align: center;">Title</div>
                </div>
            </div>
            <div class="row g-3 border-bottom">
                <div class="col-md-12 fst-italic" style="text-align: center; font-size: 12px;">No result</div>
            </div>


            <div class=" mt-4" style="font-size: 12px;">
                <ul>
                    Search tips: <br>

                    <li>Search terms are case-insensitive</li>
                    <li>Common words are ignored</li>
                    <li>By default only articles containing all terms in the query are returned (i.e., AND is implied)</li>
                    <li>Combine multiple words with OR to find articles containing either term; e.g., education OR research</li>
                    <li>Use parentheses to create more complex queries; e.g., archive ((journal OR conference) NOT theses)</li>
                    <li>Search for an exact phrase by putting it in quotes; e.g., "open access publishing"</li>
                    <li>Exclude a word by prefixing it with - or NOT; e.g. online -politics or online NOT politics</li>
                    <li>Use * in a term as a wildcard to match any sequence of characters; e.g., soci* morality would match documents containing "sociological" or "societal"</li>
                </ul>
            </div>
        </div>
    </div>