

@extends('front.master')
@section('body')
    
    <section id="content">
        <div class="container">
            <div class="span12">
                <h4 class="text-danger text">Get in touch with us by filling <strong>contact form below</strong></h4>

                <form action="" method="post"  class=" contactForm">

                    <div class="row">
                        <div class="span6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Applicant's Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="span6 form-group">
                           <select >
                               <option >Gender</option>
                               <option >Male</option>
                               <option >Female</option>
                           </select>
                        </div>
                        <div class="span6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Father's Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Mother's Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Mobile (student)"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Mobile (Guardian)"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>

                        <br/>
                        <h6 class="text text-danger">Academic Information</h6>
                        <h4>SSC *</h4>

                        <div class="span2 form-group">
                            <select id="name">
                                <option>--select board--</option>
                                <option>Chittagong</option>
                                <option>Dhaka</option>
                                <option>Madrashah</option>
                            </select>

                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Roll No"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Reg. No."
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <select  id="name">
                                <option>--passing year--</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                            </select>

                            <div class="validation"></div>
                        </div>

                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="GPA"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Institute name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>


                        <h4>HSC *</h4>

                        <div class="span2 form-group">
                            <select id="name">
                                <option>--select board--</option>
                                <option>Chittagong</option>
                                <option>Dhaka</option>
                                <option>Madrashah</option>
                            </select>

                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Roll No"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Reg. No."
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <select  id="name">
                                <option>--passing year--</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                            </select>

                            <div class="validation"></div>
                        </div>

                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="GPA"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="span2 form-group">
                            <input type="text" name="name"  id="name"
                                   placeholder="Institute name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>


                        <h4>Program Type*</h4>


                        <div class="span6 form-group">
                            <select  id="name">
                                <option>--passing year--</option>
                                <option>Biology+Math</option>
                                <option>Medical</option>
                                <option>Engineering</option>

                            </select>
                        </div>
                        <div class="span2 form-group">
                            <input type="submit" class="btn btn-block" value="Send Info" />
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection