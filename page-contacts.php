<?php 

/*
Template Name: Contacts
*/

?>

<?php 
    get_header();
?>

    <div class="contacts">
        <div class="container">
            <div class="contacts__wrapper">
                <div class="contacts__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6329.522354986339!2d17.14841571635769!3d48.16352629301357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8ed00f935e21%3A0xcb9c726bd2b3cf6b!2zVHJuYXZza8OhIGNlc3RhIDE3Ny84MiwgODIxIDAyIEJyYXRpc2xhdmEsINCh0LvQvtCy0LDQutC40Y8!5e0!3m2!1sru!2sru!4v1619764650310!5m2!1sru!2sru" style="width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contacts__data">
                    <div class="contacts__item">
                        <span class="contacts__department">DELEGATE ENQUIRIES</span>
                        <span class="contacts__department contacts__department_name">Tony Bradley</span>
                        <div class="contacts__link">
                            <span>E: </span><a href="#">tony.bradley@allanlloyds.com</a>
                        </div>
                        <div class="contacts__phone">
                            <span>P: </span><a href="tel:+421221025322">+421 221 025 322</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <span class="contacts__department">BUSINESS DEVELOPMENT</span>
                        <span class="contacts__department contacts__department_name">Sam Khalaf</span>
                        <div class="contacts__link">
                            <span>E: </span><a href="#">bus.dev@allanlloyds.com</a>
                        </div>
                        <div class="contacts__phone">
                            <span>P: </span><a href="tel:+421221025324">+421 221 025 324</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <span class="contacts__department">COMMUNICATIONS DEPARTMENT</span>
                        <span class="contacts__department contacts__department_name">Michael Sheridan</span>
                        <div class="contacts__link">
                            <span>E: </span><a href="#">michael.sheridan@allanlloyds.com</a>
                        </div>
                        <div class="contacts__phone">
                            <span>P: </span><a href="tel:+421221025322">+421 221 025 322</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <span class="contacts__department">MARKETING</span>
                        <span class="contacts__department contacts__department_name">Amy Taylor</span>
                        <div class="contacts__link">
                            <span>E: </span><a href="#">amy.taylor@allanlloyds.com</a>
                        </div>
                        <div class="contacts__phone">
                            <span>P: </span><a href="tel:+421221025322">+421 221 025 322</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="feedback">
        <div class="container">
            <h1 class="feedback__title title">feedback</h1>
            <div class="feedback__wrapper">
                <div class="feedback__form">
                    <form action="#">
                        <div class="feedback__form-field feedappeal">
                            <label for="feedappeal">Your appeal</label>
                            <textarea required rows="10" id="feedappeal" name="feedappeal"></textarea>
                        </div>
                        
                        <div class="feedback__form-field feedemail">
                            <label for="feedemail">How to contact you?</label>
                            <input placeholder="Email" required type="text" id="feedemail" name="feedmail">
                        </div>

                        <div class="feedback__form-field feedname">
                            <input placeholder="Your name" required type="text" id="feedname" name="feedname">
                        </div>
                        <button class="feedback__btn feedbtn">send</button>
                        
                    </form>
                </div>
                <div class="feedback__questions">
                    <span class="feedback__questions-info">You can also ask questions by phone of a hot line:</span>
                    <a href="tel:+421221025322" class="feedback__questions-phone">+421 221 025 322</a>
                    <span class="feedback__questions-info">The answers to many questions already in our <a href="#">FAQ</a></span>
                    <span class="feedback__questions-info">All suggestions and comments are considered mandatory!</span>
                </div>
            </div>
        </div>
    </section>


<?php 
    get_footer();
?>