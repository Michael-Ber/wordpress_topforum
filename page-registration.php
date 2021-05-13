<?php 

/*
Template Name: Registration
*/

?>

<?php 
    get_header();
?>

<section class="registration">
    <div class="container">
        <h1 class="registration__title title">2 EASY STEPS TO REGISTER</h1>
        <div class="registration__btns">
            <div class="registration__btn">
                <a href="#">FILL IN THE FORM IN ENGLISH</a>
            </div>
            <div class="registration__btn">
                <a href="#">READ THOROUGHLY TERMS&CONDITIONS</a>
            </div>
        </div>
        
        
        <div class="registration__form">
            <form action="#">
                <div class="registration__choose">
                    <span class="registration__lettering">Please, choose a conference:</span>
                    <select name="conf" id="conf" class="registration__select">
                        <option disabled selected value="" class="exhibitors__option">Wealth TOP FORUM Israel 2016</option>
                        <option value="option1" class="registration__option">option1</option>
                        <option value="option2" class="registration__option">option2</option>
                        <option value="option3" class="registration__option">option3</option>
                        <option value="option4" class="registration__option">option4</option>
                        <option value="option5" class="registration__option">option5</option>
                    </select>
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Please choose <span>delegate package:</span></span>
                    <div class="registration__wrapper-inner">
                        <div class="registration__package-btn">standart</div>
                        <div class="registration__package-btn">premium</div>
                    </div>
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Name:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Surname:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Company Name:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Business Area</span>
                    <select name="conf" id="conf" class="registration__select">
                        <option disabled selected value="" class="exhibitors__option">Forex companies</option>
                        <option value="option1" class="registration__option">option1</option>
                        <option value="option2" class="registration__option">option2</option>
                        <option value="option3" class="registration__option">option3</option>
                        <option value="option4" class="registration__option">option4</option>
                        <option value="option5" class="registration__option">option5</option>
                    </select>
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Position:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">E-mail (for organizers):</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">E-mail (for sponsors):</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Mobile Number (for organizers):</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Country:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Web-site:</span>
                    <input required name="regname" id="regname" type="text" class="registration__input">
                </div>
                <div class="registration__choose">
                    <span class="registration__lettering">Method of payment:</span></span>
                    <div class="registration__wrapper-inner">
                        <div class="registration__package-btn registration__package-btn_pay">free</div>
                        <div class="registration__package-btn registration__package-btn_pay">
                            <div style="background: url('./assets/icons/registration/visa.png') center center no-repeat; height: 16px;">
                            </div>
                        </div>
                        <div class="registration__package-btn registration__package-btn_pay">invoice</div>
                        <div class="registration__package-btn registration__package-btn_pay">
                            <div style="background: url('./assets/icons/registration/paypal.png') center center no-repeat; height: 16px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="registration__submit">
                    <div class="registration__submit-terms">
                        <input type="checkbox" id="regcheck" name="regcheck">
                        <label for="regcheck">I accept <a href="#">Terms&Conditions</a></label>
                    </div>
                    <button type="submit" id="regsubmit" name="regsubmit" class="registration__submit-btn btn">Submit</button>
                </div>
            </form>
            
        </div>
    </div>
</section>

<?php 
    get_footer();
?>