<main id="main-container">
    <!-- HOME SECTION -->
    <section class="content" id="home">
        <!-- HERO VIDEO -->
        <div class="hero_container">
            <video id="hero_video" class="hero_video" autoplay muted loop>
                <source src="<?php echo $this->baseUrl; ?>assets/video/1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
            </video>

            <div class="scroll_container" id="scrollButton">
                <span class="scroll_text">See more</span>
                <i class="ri-arrow-down-double-line"></i>
            </div>
        </div>
        
        <!-- ANNOUNCEMENT -->
        <div class="announcement-container container" id="announcement">
            <h2 class="announcement-title">
                <i class="ri-rfid-line"></i> Announcement
            </h2>
            <div class="announcement">
                <div class="announcement-body">
                    <span>June 3, 2024</span>
                    <h3>Notice to all:</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero fugit sit minus cum pariatur! Maiores quidem hic aut maxime ipsa reiciendis nesciunt magni distinctio voluptatem, eos nostrum numquam optio eius.</p>
                </div>
            </div>
        </div>

        <!-- RATES -->
        <div class="rates-container container-fluid d-flex flex-column justify-content-center align-items-center">
        <h2 class="rates-title my-3 text-center title">Rates</h2>
        <div class="rates row p-3 text-center">
            <!-- ENTRANCE FEES -->
            <div class="entrance col-lg-6 col-xl-4">
            <h3 class="rates-subtitle py-3 text-uppercase text-white bg-primary rounded-top">Entrance Fees</h3>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Entrance</th>
                    <th>Time</th>
                    <th>Prices</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Day Swimming <br>(Adults)</td>
                    <td>8:00AM - 5:00PM</td>
                    <td>₱ 75.00</td>
                </tr>
                <tr>
                    <td>Day Swimming <br>(Kids-Below 3ft)</td>
                    <td>8:00AM - 5:00PM</td>
                    <td>₱ 50.00</td>
                </tr>
                <tr>
                    <td>Night Swimming <br>(Adults)</td>
                    <td>7:00PM - 5:00AM</td>
                    <td>₱ 150.00</td>
                </tr>
                <tr>
                    <td>Night Swimming <br>(Kids-Below 3ft)</td>
                    <td>7:00PM - 5:00AM</td>
                    <td>₱ 100.00</td>
                </tr>
                </tbody>
            </table>
            </div>

            <!-- COTTAGES FEES -->
            <div class="cottages col-lg-6 col-xl-4">
            <h3 class="rates-subtitle py-3 text-uppercase text-white bg-primary rounded-top">Cottages Fees</h3>
            <table class="table table-bordered mt-2">
                <thead>
                <tr>
                    <th>Cottages / Table Location</th>
                    <th>Maximum Capacity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tables <br>(PAV 1)</td>
                    <td>6 PAX</td>
                    <td>₱ 250.00</td>
                </tr>
                <tr>
                    <td>Tables <br>(PAV 2)</td>
                    <td>6 PAX</td>
                    <td>₱ 250.00</td>
                </tr>
                <tr>
                    <td>Bamboo Cottage - 1 & 2</td>
                    <td>8 PAX</td>
                    <td>₱ 600.00</td>
                </tr>
                <tr>
                    <td>Family Cottage - 3, 4 & 5</td>
                    <td>18 PAX</td>
                    <td>₱ 1,000.00</td>
                </tr>
                <tr>
                    <td>Regular Cottage - 6 & 7</td>
                    <td>8 PAX</td>
                    <td>₱ 600.00</td>
                </tr>
                <tr>
                    <td>Cottage in Tisya <br>(1st Floor)</td>
                    <td>35 PAX</td>
                    <td>₱ 1,800.00</td>
                </tr>
                <tr>
                    <td>Cottage in Tisya <br>(2nd Floor)</td>
                    <td>100 PAX</td>
                    <td>₱ 3,000.00</td>
                </tr>
                <tr>
                    <td>Timothy, Tiffany, <br>Trizh, Troy</td>
                    <td>18 PAX</td>
                    <td>₱ 1,000.00</td>
                </tr>
                </tbody>
            </table>
            <h6 class="mt-3">Note: Excess in capacity must avail an Extra Table at the Counter</h6>
            </div>

            <!-- ROOM FEES -->
            <div class="rooms col-lg-6 col-xl-4">
            <h3 class="rates-subtitle py-3 text-uppercase text-white bg-primary rounded-top">Room Fees</h3>
            <table class="table table-bordered mt-2">
                <thead>
                <tr>
                    <th>Room # / Capacity</th>
                    <th>3 Hours (Minimum)</th>
                    <th>12 Hours</th>
                    <th>24 Hours</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Rm. 1 to 6 <br>(2 PAX)</td>
                    <td>₱ 350.00</td>
                    <td>₱ 1,200.00</td>
                    <td>₱ 2,400.00</td>
                </tr>
                <tr>
                    <td>Rm. 7 <br>(5 PAX)</td>
                    <td>₱ 500.00</td>
                    <td>₱ 1,600.00</td>
                    <td>₱ 3,200.00</td>
                </tr>
                <tr>
                    <td>Rm. 8 <br>(12 PAX)</td>
                    <td>₱ 1,200.00</td>
                    <td>₱ 3,200.00</td>
                    <td>₱ 4,800.00</td>
                </tr>
                <tr>
                    <td>Rm. 9 <br>(5 PAX)</td>
                    <td>₱ 550.00</td>
                    <td>₱ 1,650.00</td>
                    <td>₱ 3,050.00</td>
                </tr>
                </tbody>
            </table>
            <h6 class="mt-3">Notes:</h6>
            <h6>Additional Payments for the following:</h6>
            <h6>Extended Hours:<br> (RM 1 - 6) ₱100.00/hour<br>(RM 7 & 9) ₱150.00/hour <br>(RM 8) ₱250.00/hour</h6>
            </div>
        </div>
        </div>

        <!-- GALLERY -->
        <div class="gallery-container container-fluid">
            <h2 class="gallery-title text-center title">Gallery</h2>
            <div class="gallery">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper" id="gallery"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <!-- TESTIMONIAL -->
        <h2 class="testimonial-title title text-center">Feedback</h2>
        <div class="testimonial-container">
            <div class="progress-bar-testimonial"></div>
            <p class="testimonial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia repellendus, vitae suscipit culpa molestiae possimus voluptate consequuntur odit nulla saepe obcaecati dolorem laudantium praesentium aspernatur mollitia aperiam laborum rem cum commodi doloremque asperiores officia hic similique. Sint ad nobis quos?</p>
            <div class="user">
                <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="user" class="user-image">
                <div class="user-details">
                    <h4 class="username">Lola Smith</h4>
                    <p class="role">Marketing</p>
                </div>
            </div>
        </div>

        <!-- FAQS -->
        <div class="faqs-container">
            <h2 class="faqs-title title text-center">Frequently Asked Questions</h2>

            <h4 class="instruct">Click the Questions to Reveal the Answers:</h4>

            <div class="container-questions container-fluid container-xxl">

                <div class="accordion accordion-flush" id="accordionFlush">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Can I make a reservation on the Phone?
                            </button>
                        </h2>

                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">Yes, you can and your reservation will be duly noted. But it will be considered temporary and can be cancelled at any time if another guest makes a confirmed reservation for the same date.</div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">How do I make a confirmed reservation?
                            </button>
                        </h2>
                        
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">You can send us a picture of your reservation receipt through our Facebook Messenger page to help facilitate your reservations. Please present your deposit receipt to the front desk upon check-in for billing purposes, or you can call this number:(+639214496552).</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">What are your amenities?
                            </button>
                        </h2>
    
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">Please check out the website at Annesas-Resort.Online.com for more detailed information about the resort and its amenities and services. You can also browse or message us through our Facebook page or through email at annesasresort@gmail.com.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">What do you offer your Guests?
                            </button>
                        </h2>
    
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">Our resort give our guests the best summer vacation experience at the most affordable prices possible.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">Do you have free WIFI?
                            </button>
                        </h2>
    
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">Yes, we have free WIFI in our main lobby and password access is available upon request from our front desk staff.</div>
                        </div>
                    </div>

                </div>

            </div>
            <h6 class="noted">Note: For more information feel free to call us or message us on our contact page.</h6>
        </div>

        <!-- SOCIAL MEDIA -->
        <div class="social-container">
            <h2 class="social-title title text-center">Follow us!</h2>
            <div class="social-info">
                <a href="https://www.facebook.com/annesaresortofficial" class="facebook">
                    <i class="ri-facebook-circle-fill"></i>Facebook
                </a>
                <a href="https://www.instagram.com/annesasresort/" class="instagram">
                    <i class="ri-instagram-fill"></i>Instagram
                </a>
                <a href="https://www.youtube.com/c/LegalnaKamao/videos" class="youtube">
                    <i class="ri-youtube-fill"></i>Youtube
                </a>
            </div>
        </div>
    </section>

    <!-- OFFERS SECTION -->
    <section class="content" id="offers">
        <div class="offer-container container">
            <div class="offer-title title">
                <h1>Offers</h1>
            </div>
            <div class="offer-image mt-5">
                <div class="arrange-image">
                    <img src="assets/images/offers/legalnakamao.jpg" alt="">
                </div>
                <div class="arrange-image">
                    <img src="assets/images/offers/rates.jpg" alt="">
                </div>
                <div class="arrange-image">
                    <img src="assets/images/offers/plants.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="content" id="about">
        <div class="about-container container">
            <div class="about-title title">
                <h1>About Us</h1>
            </div>
            <div class="history-container mt-5" id="history">
                <div class="history-title title">
                    <h3>history</h3>
                </div>
                <div class="paragraph">
                    <p>The resort was established by its sole owner, a former seafarer working as a Restaurant Manager on a renowned international crew ship for almost two (2) decades. Her passion for hospitality combined with her dedication on providing a unique memorable experience with guest, inspired her to established a resort. The owner driven by her own experiences of wanting to create lasting memories with their loved ones without financial strain, designed the resort to cater families and group of friends seeking an affordable yet enjoyable retreat. Located in the vibrant of Dao Street, Annesas Resort officially opended its door in the summer of 2017. It started with two pools, four tents and two bamboo huts. Despite its modest beginning, the resort quickly gained popularity for it's clean facilities, warm hospitality and exceptional service. Believing in continuous improvement and evolution, the owner added two more pools to the resort, bringing the total of four. the pool was designed with a unique theme, providing guests with varied and immersive experiences. Ten more rooms has been added to ensure guest has saw a place to relax and rest. And recently, a boxing gym known as "Legal na Kamao Boxing Gym" is built as added amenities with extra charge. This addition further enhanced the resort's appeal and set it apart from its competitors. Annesas Resort look to the future it continues to honor it's past staying true ti it's root while embracing new opportunity for growth and innovation. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mission-title title">
                        <h3>Mission</h3>
                    </div>
                    <div class="paragraph">
                        <p>We are Affordable Resort whose incredible family of associates puts the soul in hospitality every day. The needs of our guests, associates and owners are in the forefront of everything we do. Through authenticity and innovation, we create unique memorable experiences.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vision-title title">
                        <h3>Vision</h3>
                    </div>
                    <div class="paragraph">
                        <p>Proudly opening doors to the true spirit of a Destination Resort and true meaning of Hospitality.</p>
                    </div>
                </div>
            </div>

            <div class="rules-container" id="rules">
                <div class="rules-title title">
                    <h3>Pool Rules</h3>
                </div>

                <div class="pool-rules row">
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/jewelry.png" alt="">
                        <p>No Jewelries</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/zipper.png" alt="">
                        <p>No Buttons / Zippers</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/maong.png" alt="">
                        <p>No Maong</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/stairs.png" alt="">
                        <p>Use the Stairs</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/shower.png" alt="">
                        <p>Shower before going to pool</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/shout.png" alt="">
                        <p>Don't Shout</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/pets.png" alt="">
                        <p>No pets</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/dive.png" alt="">
                        <p>No diving</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/run.png" alt="">
                        <p>Don't run</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/litter.png" alt="">
                        <p>No littering</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/drowning.png" alt="">
                        <p>Don't swim alone if you can't swim</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/play.png" alt="">
                        <p>No Rough Play</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/pee.png" alt="">
                        <p>No peeing in the pool</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/kids.png" alt="">
                        <p>Watch your children</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/restroom.png" alt="">
                        <p>Use the restrooms</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/drink.png" alt="">
                        <p>No Drinking</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/food.png" alt="">
                        <p>No food</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/smoking.png" alt="">
                        <p>No smoking</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/swimsuit.png" alt="">
                        <p>Use proper swim wear</p>
                    </div>
                    <div class="warning-image col col-md-4 col-xl-2">
                        <img src="assets/images/poolrules/caution.png" alt="">
                        <p>Be careful</p>
                    </div>
                </div>
                
            </div>

            <div class="terms-container" id="terms">
                <div class="terms-title title">
                    <h3>Terms and Conditions</h3>
                </div>
                <div class="terms-paragraph">
                    <div class="terms-intro">
                        <p>These terms and conditions (the “Terms and Conditions”) govern the use of annesa.phsite.tech (the “Site”). This Site is owned and operated by Annesas Resort and Events Place. This Site is an ecommerce website.</p>
                        <p>By using this Site, you indicate that you have read and understand these Terms and Conditions and agree to abide by them at all times.</p>
                        <p>THESE TERMS AND CONDITIONS CONTAIN A DISPUTE RESOLUTION CLAUSE THAT IMPACTS YOUR RIGHTS ABOUT HOW TO RESOLVE DISPUTES. PLEASE READ IT CAREFULLY.</p>
                    </div>
                    <div class="mini-title">
                        <h5>Intellectual Property</h5>
                    </div>
                    <p>All content published and made available on our Site is the property of Annesas Resort and Events Place and the Site’s creators. This includes, but is not limited to images, text, logos, documents, downloadable files and anything that contributes to the composition of our Site.</p>
                    <div class="mini-title">
                        <h5>Acceptable Use</h5>
                    </div>
                    <p>As a user of our Site, you agree to use our Site legally, not to use our Site for illegal purposes and not to:</p>
                    <ul>
                        <li>Violate the rights of other users of our Site;</li>
                        <li>Violate the intellectual property rights of the Site owners or any third party to the Site;</li>
                        <li>Hack into the account of another user of the Site; or</li>
                        <li>Act in any way that could be considered fraudulent.</li>
                    </ul>
                    <p>If we believe you are using our Site illegally or in a manner that violates these Terms and Conditions, we reserve the right to limit, suspend or terminate your access to our Site. We also reserve the right to take any legal steps necessary to prevent you from accessing our Site.</p>
                    <div class="mini-title">
                        <h5>Accounts</h5>
                    </div>
                    <p>When you create an account on our Site, you agree to the following:</p>
                    <div class="numbers">
                        <ol>
                            <li>You are solely responsible for your account and the security and privacy of your account, including passwords or sensitive information attached to that account; and</li>
                            <li>All personal information you provide to us through your account is up to date, accurate, and truthful and that you will update your personal information if it changes. </li>
                        </ol>
                    </div>
                    <p>We reserve the right to suspend or terminate your account if you are using our Site illegally or if you violate these Terms and Conditions.</p>
                    <div class="mini-title">
                        <h5>Sale of Services</h5>
                    </div>
                    <p>These Terms and Conditions govern the sale of services available on our Site.<br>The following services are available on our Site:</p>
                    <ul>
                        <li>Sparring Area;</li>
                        <li>Pool Services; and</li>
                        <li>Events Place.</li>
                    </ul>
                    <p>The services will be paid for in full when the services are ordered.</p>
                    <p>These Terms and Conditions apply to all the services that are displayed on our Site at the time you access it. All information, descriptions, or Images that we provide about our services are as accurate as possible. However, we are not legally bound by such information, descriptions, or images as we cannot guarantee the accuracy of all services we provide. You agree to purchase services from our Site at your own risk.</p>
                    <p>We reserve the right to modify, reject or cancel your order whenever it becomes necessary. If we cancel your order and have already processed your payment, we will give you a refund equal to the amount you paid. You agree that it is your responsibility to monitor your payment instrument to verify receipt of any refund.</p>
                    <div class="mini-title">
                        <h5>Payments</h5>
                    </div>
                    <p>We accept the following payment methods on our Site:</p>
                    <ul>
                        <li>Gcash.</li>
                    </ul>
                    <p>When you provide us with your payment information, you authorize our use of and access to the payment instrument you have chosen to use. By providing us with your payment information, you authorize us to charge the amount due to this payment instrument.</p>
                    <p>If we believe your payment has violated any law or these Terms and Conditions, we reserve the right to cancel or reverse your transaction.</p>
                    <div class="mini-title">
                        <h5>Refunds</h5>
                    </div>
                    <p>Refunds for Services We provide refunds for services sold on our Site as follows:</p>
                    <ul>
                        <li>The reservation fee will be fully refunded if the reservations are canceled 1 week before the reserved schedule.</li>
                    </ul>
                    <div class="mini-title">
                        <h5>Consumer Protection Law</h5>
                    </div>
                    <p>Where any consumer protection legislation in your jurisdiction applies and cannot be excluded, these Terms and Conditions will not limit your legal rights and remedies under that legislation. These Terms and Conditions will be read subject to the mandatory provisions of that legislation. If there is a conflict between these Terms and Conditions and that legislation, the mandatory provisions of the legislation will apply.</p>
                    <div class="mini-title">
                        <h5>Links to Other Websites</h5>
                    </div>
                    <p>Our Site contains links to third party websites or services that we do not own or control. We are not responsible for the content, policies, or practices of any third party website or service linked to on our Site. It is your responsibility to read the terms and conditions and privacy policies of these third party websites before using these sites.</p>
                    <div class="mini-title">
                        <h5>Limitation of Liability</h5>
                    </div>
                    <p>Annesa's Resort and Events Place and our directors, officers, agents, employees, subsidiaries, and affiliates will not be liable for any actions, claims losses damages liabilities and expenses including legal fees from your use of the Site.</p>
                    <div class="mini-title">
                        <h5>Indemnity</h5>
                    </div>
                    <p>Except where prohibited by law, by using this Site you indemnify and hold harmless Annesa's Resort and Events Place and our directors, officers, agents, employees, subsidiaries, and affiliates from any actions, claims, losses, damages, liabilities and expenses including legal fees arising out of your use of our Site or your violation of these Terms and Conditions.</p>
                    <div class="mini-title">
                        <h5>Applicable Law</h5>
                    </div>
                    <p>These Terms and Conditions are governed by the laws of the Philippines.</p>
                    <div class="mini-title">
                        <h5>Dispute Resolution</h5>
                    </div>
                    <p>Subject to any exceptions specified in these Terms and Conditions, if you and Annesa's Resort and Events Place are unable to resolve any dispute through informal discussion, then you and Annesa's Resort and Events Place agree to submit the issue before a mediator. The decision of the mediator will not be binding. Any mediator must be a neutral party acceptable to both you and Annesa's Resort and Events Place.</p>
                    <p>Notwithstanding any other provision in these Terms and Conditions, you and Annesa's Resort and Events Place agree that you both retain the right to bring an action in small claims court and to bring an action for injunctive relief or intellectual property infringement.</p>
                    <div class="mini-title">
                        <h5>Severability</h5>
                    </div>
                    <p>If at any time any of the provisions set forth in these Terms and Conditions are found to be inconsistent or invalid under applicable laws, those provisions will be deemed void and will be removed from these Terms and Conditions. All other provisions will not be affected by the removal and the rest of these Terms and Conditions will still be considered valid.</p>
                    <div class="mini-title">
                        <h5>Changes</h5>
                    </div>
                    <p>These Terms and Conditions may be amended from time to time in order to maintain compliance with the law and to reflect any changes to the way we operate our Site and the way we expect users to behave on our Site. We will notify users by email of changes to these Terms and Conditions or post a notice on our Site.</p>
                    <div class="mini-title">
                        <h5>Contact Details</h5>
                    </div>
                    <ul>
                        <li>(+63) 0921-449-6552</li>
                        <li>annesaresort@yahoo.com</li>
                        <li>Dao St. Brgy. San Jose, Montalban, Rizal</li>
                    </ul>
                    <p>You can also contact us through the contact page in our Site.</p>
                    <div class="effectivity">
                        <p>Effective Date: 20th day of April, 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="content" id="contact">
        <div class="contact-container container">
            <div class="contact-title title">
                <h1>Contact Us</h1>
            </div>

            <div class="row my-5">
                <div class="container-input col-md-6">
                    <form class="form-container" method="POST">
                        <div class="form-group">
                            <label for="fullname">Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="emailcontact">Email address</label>
                            <input type="email" class="form-control" id="emailcontact" aria-describedby="emailHelp" placeholder="Enter your email" autocomplete="true">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="phonenumbercontact">Phone Number</label>
                            <input type="tel" class="form-control" id="phonenumbercontact" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="text" class="form-control" id="message" placeholder="Anything we can help you with?">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>

                <div class="contact-map col-md-6">
                    <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.71581088126!2d121.13154580000001!3d14.7286526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb195a8234af%3A0xe2ddd20c71e1c3ce!2sAnnesa&#39;s%20Resort!5e0!3m2!1sen!2sph!4v1718263313414!5m2!1sen!2sph" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="contact-info row">
                <div class="contact-logo col-lg-4">
                    <i class="ri-phone-fill"></i> +639214496552
                </div>
                <div class="contact-logo col-lg-4">
                    <i class="ri-mail-fill"></i> annesaresort@yahoo.com
                </div>
                <div class="contact-logo col-lg-4">
                    <i class="ri-map-pin-fill"></i> Dao St., Brgy. San Jose, Montalban, Rizal
                </div>
            </div>
        </div>
    </section>

    <!-- BOOK NOW -->
    <section class="content" id="book">
        <div class="book-container container">
            <div class="book-title title">
                <h1 class="title">Book Now</h1>
            </div>

            <!-- TABLES -->
            <div class="table-title title">
                <h3>Tables</h3>
            </div>

            <div class="book-row row d-flex align-items-center justify-content-between">
                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title">
                            <h3>Pavilion 1<br>ni Maria<br> (6pax)</h3>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 250.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal">
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/no-image.png" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title">
                            <h3>Pavilion 2<br>ni Berto <br> (6pax)</h3>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 250.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"                            
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/pavilion2niberto.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title">
                            <h3>cottage ni tisya<br>(1st Floor)<br>(35pax)</h3>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 1,800.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/cottagenitisya1st.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="2ndfloor">
                            <h3>cottage ni tisya<br>(2nd Floor)<br>(100pax)</h3>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 3,000.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"                         
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/cottagenitisya2nd.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- COTTAGES -->
            <div class="cottage-title title">
                <h3>cottages</h3>
            </div>

            <div class="book-row row d-flex justify-content-between">
                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="bamboo">
                            <h3>Bamboo cottage<br>(1 & 2)<br>(8pax)</h3>
                        </div>

                        <div class="cottage">
                            <div class="row">
                                <div class="col">
                                    <h5>Cottage:</h5>
                                </div>

                                <div class="col">
                                    <select id="cottage1" class="cottage-select">
                                        <option value="Ponceng">Ponceng</option>
                                        <option value="Vireng">Vireng</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 600.00</h5>
                                </div>
                            </div>
                        </div>

                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/Bamboo1.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="4t">
                            <h3>(Timothy, Tiffany, Trizh, Troy)<br>Cottage<br>(18pax)</h3>
                        </div>
                        <div class="cottage">
                            <div class="row">
                                <div class="col">
                                    <h5>Cottage:</h5>
                                </div>
                                <div class="col">
                                    <select id="cottage2" class="cottage-select">
                                        <option value="Timothy">Timothy</option>
                                        <option value="Tiffany">Tiffany</option>
                                        <option value="Trizh">Trizh</option>
                                        <option value="Troy">Troy</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 1,000.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/4t.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="regular">
                            <h3>Regular Cottage<br>(Tryse, Tricia, Taragis)<br>(8pax)</h3>
                        </div>
                        <div class="cottage">
                            <div class="row">
                                <div class="col">
                                    <h5>Cottage:</h5>
                                </div>
                                <div class="col">
                                    <select id="cottage3" class="cottage-select">
                                        <option value="Tryse">Tryse</option>
                                        <option value="Tricia">Tricia</option>
                                        <option value="Taragis">Taragis</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 600.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/regularcottage.jpg" alt="">
                    </div>
                </div>
                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="family">
                            <h3>Family Cottage<br>(Tristan, Edil, Tracy)<br>(18pax)</h3>
                        </div>
                        <div class="cottage">
                            <div class="row">
                                <div class="col">
                                    <h5>Cottage:</h5>
                                </div>
                                <div class="col">
                                    <select id="cottage4">
                                        <option value="Tristan">Tristan</option>
                                        <option value="Edil">Edil</option>
                                        <option value="Tracy">Tracy</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5>₱ 1,000.00</h5>
                                </div>
                            </div>
                        </div>
                        <button                             
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal">Reserve</button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/familycottage.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- ROOMS -->
            <div class="room-title title">
                <h3>Rooms</h3>
            </div>

            <div class="book-row row d-flex justify-content-between">
                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="rm1to6">
                            <h3>rooms 1 - 6 <br> (2pax)</h3>
                        </div>
                        <div class="details-container">
                            <p>Inclusions:</p>
                            <ul>
                                <li>1 Single Bed</li>
                                <li>Toilets</li>
                                <li>Air Condition</li>
                            </ul>
                        </div>
                        <div class="numbers">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Room:</h5>
                                </div>
                                <div class="col">
                                    <select id="numbers1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hours">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Hours:</h5>
                                </div>
                                <div class="col">
                                    <select id="roomhour1">
                                        <option value="3">3</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5 id="roomprice1">₱ 350.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary reserve-btn" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal" 
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/room1-6.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="rm7">
                            <h3>Family room 7 <br> (5pax)</h3>
                        </div>
                        <div class="details-container">
                            <p>Inclusions:</p>
                            <ul>
                                <li>1 Double Deck Bed</li>
                                <li>2 Pull-up Bed</li>
                                <li>Toilets</li>
                                <li>Air Condition</li>
                            </ul>
                        </div>
                        <div class="numbers">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Room:</h5>
                                </div>
                                <div class="col">
                                    <select id="familynumber7">
                                        <option value="7">7</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hours">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Hours:</h5>
                                </div>
                                <div class="col">
                                    <select id="familyhour7">
                                        <option value="3">3</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5 id="familyprice7">₱ 500.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/familyrm7.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="rm8">
                            <h3>family room 8 <br> (12pax)</h3>
                        </div>
                        <div class="details-container">
                            <p>Inclusions:</p>
                            <ul>
                                <li>2 Double Deck Bed</li>
                                <li>2 Pull-up Bed</li>
                                <li>Toilets</li>
                                <li>Air Condition</li>
                            </ul>
                        </div>
                        <div class="numbers">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Room:</h5>
                                </div>
                                <div class="col">
                                    <select id="familynumber8">
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hours">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Hours:</h5>
                                </div>
                                <div class="col">
                                    <select id="hourfamily8">
                                        <option value="3">3</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5 id="hourprice8">₱ 1,200.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/familyrm8.jpg" alt="">
                    </div>
                </div>

                <div class="book col-lg-6 col-xl-6 col-12 row">
                    <div class="book-details col-md-6">
                        <div class="details-title title" id="rm9">
                            <h3>family room 9 <br> (5pax)</h3>
                        </div>
                        <div class="details-container">
                            <p>Inclusions:</p>
                            <ul>
                                <li>2 Single Bed</li>
                                <li>1 Pull-up Bed</li>
                                <li>Toilets</li>
                                <li>Air Condition</li>
                            </ul>
                        </div>
                        <div class="numbers">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Room:</h5>
                                </div>
                                <div class="col">
                                    <select id="familynumber9">
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="hours">
                            <div class="row">
                                <div class="col">
                                    <h5>No. of Hours:</h5>
                                </div>
                                <div class="col">
                                    <select id="familyhour9">
                                        <option value="3">3</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="prices">
                            <div class="row">
                                <div class="col">
                                    <h5>Price:</h5>
                                </div>
                                <div class="col">
                                    <h5 id="familyprice9">₱ 550.00</h5>
                                </div>
                            </div>
                        </div>
                        <button 
                            class="btn btn-primary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#loginModal"
                        >
                            Reserve
                        </button>
                    </div>
                    <div class="book-image col-md-6">
                        <img src="assets/images/cottages/no-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>