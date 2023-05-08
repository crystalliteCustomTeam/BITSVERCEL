<section>
    <div class="form--fold newBlack pt-100">
    <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                        <h2 class="heading f-40 f-playfair f-700 mb-3 mb-xxl-5 f-center">
                            Let's Talk Apps. <br class="d-lg-none d-block" />Reserve A Spot!
                        </h2>
                            <form id="bottomform">
                                <div class="form--items">
                                    <input type="text" name="name" id="name" placeholder="Hi, what's your name?" required />
                                </div>
                                <div class="form--items">
                                    <input type="email" name="email" id="email" placeholder="What's your email address?" required />
                                </div>
                                <div class="form--items">
                                    <input type="tel" name="phone" id="phone" placeholder="Your contact number" required minlength="7"
                                        maxlength="14" onkeypress="return /[0-9]/i.test(event.key)" />
                                </div>
                                <div class="form--items">
                                    <textarea name="message" placeholder="Please include any notes or specific questions here" cols="10" rows="5"></textarea>
                                </div>
                                <div class="form--btn">
                                    <button type="submit" id="butsave" class="b-gradient">Submit</button>
                                </div>
                            </form>
                            <h4 id="success"></h4>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>