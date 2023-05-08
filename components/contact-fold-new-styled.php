<section class="contact-new new-styled newhomepage--contact" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <div class="heading-contact">
                    <h3 class="f-20 f-p f-montserrat mb-md-2 mb-1 top mb-xxl-5">Ready For The App Revolution?</h3>
                    <h3 class="f-60 f-playfair mb-lg-5 mb-md-4 mb-3 top home-color-3 section--titile mb-xxl-5">
                        Let's Connect and <br class="d-md-block d-none"/> Make It Happen!
                    </h3>
                </div>
                <div class="forms-dev">
                    <form action="javascript:;">
                        <div class="form-group required">
                            <input class="inputtext required" type="text" name="name" id="inputname" required="required" />
                            <label>FULL NAME</label>
                        </div>
                        <div class="form-group required">
                            <input class="inputtext required" type="text" required="required" name="email" />
                            <label>Email Address</label>
                        </div>
                        <input class="inputtext" type="text" placeholder="Company" name="company" />
                        <input class="inputtext" type="tel" placeholder="Phone" name="phone" />
                        <!-- <input class="inputtext disabled" type="disabled" placeholder="Message" name="disabled"
                            disabled /> -->
                        <textarea class="inputtext1 textarea" name="message" placeholder="Message" cols="30"
                            rows="7"></textarea>
                        <div class="mt-md-5 mt-4">
                            <button type=submit class="r--btn orange--shadow-btn f-uppercase f-700 b-0 w-100">
                            CLAIM YOUR FREE 30-MINUTE STRATEGY SESSION NOW
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .form-group.required {
        position: relative;
    }

    .form-group.required .inputtext.required {
        position: relative;
        z-index: 9;
        background: transparent;
    }

    .form-group.required label {
        position: absolute;
        left: 15px;
        top: 15px;
        z-index: 1;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
    }

    .form-group.required label::after {
        content: "*";
        color: red;
        position: relative;
        left: 5px;
    }

    input[required]:valid+label {
        display: none;
    }
</style>