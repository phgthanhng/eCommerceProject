<?php require APPROOT . '/views/includes/header.php';  ?>

<div class="container" style="min-height: 100vh;">
    <div style="margin-top: 40px;">
        <div class="container-fluid">
            <h1 style="text-align: center;">Contact Information</h1>
            <hr>
            <form id="contactForm-1" action="javascript:void(0);" method="get"><input class="form-control" type="hidden"
                    name="Introduction" value="This email was sent from www.awebsite.com"><input class="form-control"
                    type="hidden" name="subject" value="Awebsite.com Contact Form"><input class="form-control"
                    type="hidden" name="to" value="email@awebsite.com">
                <div class="row">
                    <div class="col-md-6">
                        <div id="successfail-1"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6" id="message-1">
                        <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small
                                    class="required-input">&nbsp;(*required)</small></small></h2>
                        <div class="form-group mb-3"><label class="form-label" for="from-name">Name</label><span
                                class="required-input">*</span>
                            <div class="input-group"><span class="input-group-text"><i
                                        class="fa fa-user-o"></i></span><input class="form-control" type="text"
                                    id="from-name-1" name="name" required="" placeholder="Full Name"></div>
                        </div>
                        <div class="form-group mb-3"><label class="form-label" for="from-email">Email</label><span
                                class="required-input">*</span>
                            <div class="input-group"><span class="input-group-text"><i
                                        class="fa fa-envelope-o"></i></span><input class="form-control" type="text"
                                    id="from-email-1" name="email" required="" placeholder="Email Address"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                <div class="form-group mb-3"><label class="form-label"
                                        for="from-phone">Phone</label><span class="required-input">*</span>
                                    <div class="input-group"><span class="input-group-text"><i
                                                class="fa fa-phone"></i></span><input class="form-control" type="text"
                                            id="from-phone-1" name="phone" required="" placeholder="Primary Phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3"><label class="form-label"
                                for="from-comments">Comments</label><textarea class="form-control" id="from-comments-1"
                                name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col"><button class="btn btn-primary d-block w-100" type="reset"><i
                                            class="fa fa-undo"></i> Reset</button></div>
                                <div class="col"><button class="btn btn-primary d-block w-100" type="submit">Submit
                                        <i class="fa fa-chevron-circle-right"></i></button></div>
                            </div>
                        </div>
                        <hr class="d-flex d-md-none">
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="location">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.5662545669616!2d-73.5815356839947!3d45.49867857910134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a4022e6f657%3A0x172d60ddcb77f441!2s1380%20Sherbrooke%20St%20W%2C%20Montreal%2C%20QC%20H3G%201J5!5e0!3m2!1sen!2sca!4v1639350545790!5m2!1sen!2sca"
                                        width="500" height="300" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                <div><span><strong>Jane Doe</strong></span></div>
                                <div><span>allbookedup@awebsite.com</span></div>
                                <div><span>www.allbookedup.com</span></div>
                                <hr class="d-sm-none d-md-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                <div><span><strong>All Booked Up!</strong></span></div>
                                <div><span>1380 Sherbrooke St W,</span></div>
                                <div><span>Montreal, QC H3G 1J5</span></div>
                                <div><abbr data-toggle="tooltip" data-placement="top"
                                        title="Office Phone: 438-867-5309"></abbr> 438-867-5309</div>
                                <hr class="d-sm-none">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Contact Information</h4><button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="contactForm-2" action="javascript:void(0);" method="get"><input class="form-control"
                                type="hidden" name="Introduction"
                                value="This email was sent from www.awebsite.com"><input class="form-control"
                                type="hidden" name="subject" value="Awebsite.com Contact Form"><input
                                class="form-control" type="hidden" name="to" value="email@awebsite.com">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="successfail-2"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6" id="message-2">
                                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact Us<small><small
                                                class="required-input">&nbsp;(*required)</small></small></h2>
                                    <div class="form-group mb-3"><label class="form-label"
                                            for="from-name">Name</label><span class="required-input">*</span>
                                        <div class="input-group"><span class="input-group-text"><i
                                                    class="fa fa-user-o"></i></span><input class="form-control"
                                                type="text" id="from-name-2" name="name" required=""
                                                placeholder="Full Name"></div>
                                    </div>
                                    <div class="form-group mb-3"><label class="form-label"
                                            for="from-email">Email</label><span class="required-input">*</span>
                                        <div class="input-group"><span class="input-group-text"><i
                                                    class="fa fa-envelope-o"></i></span><input class="form-control"
                                                type="text" id="from-email-2" name="email" required=""
                                                placeholder="Email Address"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                            <div class="form-group mb-3"><label class="form-label"
                                                    for="from-phone">Phone</label><span class="required-input">*</span>
                                                <div class="input-group"><span class="input-group-text"><i
                                                            class="fa fa-phone"></i></span><input class="form-control"
                                                        type="text" id="from-phone-2" name="phone" required=""
                                                        placeholder="Primary Phone"></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group mb-3"><label class="form-label"
                                            for="from-comments">Comments</label>
                                        <textarea class="form-control" style="overflow-y: scroll;" id="from-comments-2"
                                            name="comments" placeholder="Enter Comments" rows="5""></textarea></div>
                                    <div class=" form-group mb-3">
                                        <div class="row">
                                            <div class="col"><button class="btn btn-primary d-block w-100"
                                                    type="reset"><i class="fa fa-undo"></i> Reset</button></div>
                                            <div class="col"><button class="btn btn-primary d-block w-100"
                                                    type="submit">Submit <i
                                                        class="fa fa-chevron-circle-right"></i></button></div>
                                        </div>
                                    </div>
                                    <hr class="d-flex d-md-none">
                                </div>
                                <div class="col-12 col-md-6">
                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="static-map"><a rel="noopener"
                                                    href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                    target="_blank"> <img class="img-fluid"
                                                        src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"
                                                        alt="Google Map of Daytona International Speedway"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                            <div><span><strong>Name</strong></span></div>
                                            <div><span>email@awebsite.com</span></div>
                                            <div><span>www.awebsite.com</span></div>
                                            <hr class="d-sm-none d-md-block d-lg-none">
                                        </div>
                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                            <div><span><strong>Office Name</strong></span></div>
                                            <div><span>55 Icannot Dr</span></div>
                                            <div><span>Daytone Beach, FL 85150</span></div>
                                            <div><abbr data-toggle="tooltip" data-placement="top"
                                                    title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                            <hr class="d-sm-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';  ?>