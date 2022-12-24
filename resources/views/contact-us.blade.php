@extends('layout.master')

@section('banner')
    @includeIf('layout.banner')
@endsection

@section('content')
    <!-- content begin -->
    <div id="content" class="no-top">
        <section id="de-map" class="no-top" aria-label="map-container">
            <div class="map-container map-fullwidth">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.7152203584424!2d-118.2453181849353!3d34.05117548060617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c648d9808fbd%3A0xb79dfbc6ae338c12!2s100%20S%20Main%20St%2C%20Los%20Angeles%2C%20CA%2090012%2C%20USA!5e0!3m2!1sen!2sid!4v1592143290578!5m2!1sen!2sid"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </section>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <form name="contactForm" id='contact_form' method="post">
                        <div class="row">
                            <div class="col-md-12 mb10">
                                <h3>Send Us Message</h3>
                            </div>
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='Name' id='name' class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='Email' id='email' class="form-control"
                                        placeholder="Your Email" required="">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control"
                                        placeholder="Your Phone" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                </p>
                            </div>
                        </div>
                    </form>

                    <div id="success_message" class='success'>
                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                    </div>
                    <div id="error_message" class='error'>
                        Sorry there was an error sending your form.
                    </div>

                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span><strong>Address:</strong>Saudi Arabia</span>
                            <span><strong>Phone:</strong>(234) 000 890 5667</span>
                            <span><strong>Fax:</strong>(234) 000 890 5667</span>
                            <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                            <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                            <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
