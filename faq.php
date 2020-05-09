<?php include('header.php'); ?>

<section class="breadcrum py-4">
	<div class="container">
		<div class="d-flex">
			<div class="d-inline-flex w-100 align-items-center">
				<h2 class="font-weight-normal">Frequently Asked Questions</h2>
			</div>
			<div class="d-inline-flex w-100 align-items-center">
				<ul class="list-inline mb-0 w-100 text-lg-right font-weight-medium">
					<li class="list-inline-item"><a href="index.php">Home</a></li>
					<li class="list-inline-item"><i class='flaticon-angle-arrow-pointing-to-right'></i></li>
					<li class="list-inline-item">FAQ</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="sidebar-item w-100 h-100">
                    <div class="make-me-sticky"data-sticky data-sticky-for="1023" data-sticky-class="is-sticky" data-margin-top="100" data-margin-bottom="20">
                        <ul class="nav flex-column faq_topic text-left" id="myTab" role="tablist">
                            <li class="nav-item mb-3">
                                <a class="nav-link bg_black p-3 text-white d-flex active" id="shippingReturn-tab" data-toggle="tab" href="#shippingReturn" role="tab" aria-controls="shippingReturn" aria-selected="true">
                                    <i class="flaticon-return d-inline-flex align-items-center mr-3"></i>
                                    <h4 class="text-white font-weight-normal mb-0 d-inline-flex align-items-center">Shipping And Returns</h4>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link bg_black p-3 text-white d-flex" id="sizing-tab" data-toggle="tab" href="#sizing" role="tab" aria-controls="sizing" aria-selected="false">
                                    <i class="flaticon-jewelry-1 d-inline-flex align-items-center mr-3"></i>
                                    <h4 class="text-white font-weight-normal mb-0 d-inline-flex align-items-center">Sizing</h4>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link bg_black p-3 text-white d-flex" id="careRepair-tab" data-toggle="tab" href="#careRepair" role="tab" aria-controls="careRepair" aria-selected="false">
                                    <i class="flaticon-jewelry d-inline-flex align-items-center mr-3"></i>
                                    <h4 class="text-white font-weight-normal mb-0 d-inline-flex align-items-center">Care And Repair</h4>
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link bg_black p-3 text-white d-flex" id="jeweleryInfo-tab" data-toggle="tab" href="#jeweleryInfo" role="tab" aria-controls="jeweleryInfo" aria-selected="false">
                                    <i class="flaticon-aztec-necklace d-inline-flex align-items-center mr-3"></i>
                                    <h4 class="text-white font-weight-normal mb-0 d-inline-flex align-items-center">Jewelry Info</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="content_section">
                    <div class="tab-content" id="myTabContent">
                        <!-- Shipping And Returns -->
                        <div class="tab-pane fade faq_content p-lg-5 show active" id="shippingReturn" role="tabpanel" aria-labelledby="shippingReturn-tab">
                            <p class="font-weight-medium bg-white py-3 px-4">At <strong class="px-1">SAYARTH</strong> we aim to deliver your jewelry in the most efficient and effective manner, at the earliest.</p>
                            
                            <div id="acc_ShippingReturn" class="accordion shadow">
                                <!-- acc_ShippingReturn 1 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnOne" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnOne" aria-expanded="false" aria-controls="collapseacc_ShippingReturnOne" class="d-block position-relative text_black collapsible-link py-3">When will my SAYARTH purchase arrive ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnOne" aria-labelledby="acc_ShippingReturnOne" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">For international orders, you can contact us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> or <a href="mailto:info@sayarth.com" class="acc_link pl-1 font-weight-medium">info@sayarth.com</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 2 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnTwo" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnTwo" aria-expanded="false" aria-controls="collapseacc_ShippingReturnTwo" class="d-block position-relative collapsed text_black collapsible-link py-3">Where do you ship your products ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnTwo" aria-labelledby="acc_ShippingReturnTwo" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">We ship anywhere in India and globally.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 3 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnThree" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnThree" aria-expanded="false" aria-controls="collapseacc_ShippingReturnThree" class="d-block position-relative collapsed text_black collapsible-link py-3">What is the shipping cost ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnThree" aria-labelledby="acc_ShippingReturnThree" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="mb-0">We offer FREE shipping for orders anywhere in India.</p>
                                            <p class="m-0">Shipping cost of International orders will vary. You can contact us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> or <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> for the same.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 4 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnFour" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnFour" aria-expanded="false" aria-controls="collapseacc_ShippingReturnFour" class="d-block position-relative collapsed text_black collapsible-link py-3">Can I change the shipping address once the order has been placed ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnFour" aria-labelledby="acc_ShippingReturnFour" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="mb-0">We offer FREE shipping for orders anywhere in India.</p>
                                            <p class="m-0">Sure! You can contact us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> or <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> for a change in address.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 5 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnFive" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnFive" aria-expanded="false" aria-controls="collapseacc_ShippingReturnFive" class="d-block position-relative collapsed text_black collapsible-link py-3">Can I cancel my order after it has been placed ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnFive" aria-labelledby="acc_ShippingReturnFive" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Of course! You may cancel your order within 24 hours and either choose to receive a full refund or life-long store credit.  The full refund will be initiated within 3 working days.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 6 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnSix" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnSix" aria-expanded="false" aria-controls="collapseacc_ShippingReturnSix" class="d-block position-relative collapsed text_black collapsible-link py-3">Will my order be insured ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnSix" aria-labelledby="acc_ShippingReturnSix" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Don’t worry! All orders are insured by <strong class="px-1">SAYARTH</strong> designs.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 7 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnSeven" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnSeven" aria-expanded="false" aria-controls="collapseacc_ShippingReturnSeven" class="d-block position-relative collapsed text_black collapsible-link py-3">Where does my order ship from ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnSeven" aria-labelledby="acc_ShippingReturnSeven" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">All <strong class="px-1">SAYARTH</strong> pieces are made sustainably with love and shipped from Mumbai.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 8 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnEight" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnEight" aria-expanded="false" aria-controls="collapseacc_ShippingReturnEight" class="d-block position-relative collapsed text_black collapsible-link py-3">Whoops, I've ordered the wrong size.</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnEight" aria-labelledby="acc_ShippingReturnEight" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">No problem! We’ll gladly change your piece to the correct size within 10 days of delivery, at no cost! Send it across at your convenience and we’ll send you the re-sized piece at the earliest. Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to get in touch with our team.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 9 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnNine" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnNine" aria-expanded="false" aria-controls="collapseacc_ShippingReturnNine" class="d-block position-relative collapsed text_black collapsible-link py-3">What is your returns policy for India ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnNine" aria-labelledby="acc_ShippingReturnNine" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>The <strong class="px-1">SAYARTH</strong> policy is simple. In case, the product is not how you expected, we offer an exchange of another product of the same value, or a life-time store credit in your <strong class="px-1">SAYARTH</strong> account. You also have the option of transferring that amount into a gift card and giving it your loved ones! The exchange should take place within 10 days of purchase.</p>
                                            <p class="m-0">Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to get in touch with our team.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 10 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnTen" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnTen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnTen" class="d-block position-relative collapsed text_black collapsible-link py-3">What is your returns policy for International orders ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnTen" aria-labelledby="acc_ShippingReturnTen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>We offer an exchange of another product of the same value, or a life-time store credit in your <strong class="px-1">SAYARTH</strong> account. You also have the option of transferring that amount into a gift card and giving it your loved ones! The exchange should take place within 10 days of purchase. Shipping charges will be additional and will vary depending on the location.</p>
                                            <p class="m-0">Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or<a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to get in touch with our team.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 11 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnEleven" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnEleven" aria-expanded="false" aria-controls="collapseacc_ShippingReturnEleven" class="d-block position-relative collapsed text_black collapsible-link py-3">How do I return any SAYARTH merchandise for an exchange ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnEleven" aria-labelledby="acc_ShippingReturnEleven" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p><strong class="pr-1 acc_num">1.</strong> Please call our customer service number <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> or email us at <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> and you will be emailed an exchange form. Please print the exchange form and fill in the required information.</p>

                                            <p><strong class="pr-1 acc_num">2.</strong> In the event of making an exchange, place the unused merchandise in the original <strong class="px-1">SAYARTH</strong> packaging accompanied with the invoice, certificate, and insurance policy and seal it.</p>

                                            <p><strong class="pr-1 acc_num">3.</strong>Enclose the exchange form with the package.</p>

                                            <p><strong class="pr-1 acc_num">4.</strong>Items showing any sign of wear or that have been altered or tampered with (by anyone/entity besides SAYARTH) or damaged in any manner will not be accepted for exchange.</p>

                                            <p><strong class="pr-1 acc_num">5.</strong>Once the exchange is confirmed and approved by <strong class="pl-1">SAYARTH</strong>, your exchanged item shall be processed at the earliest. </p>

                                            <p class="font-weight-bold mb-2"><strong class="pr-1 acc_num">6.</strong>For Order Payment :</p>
                                            <p class="mb-0">You should receive your order within 15 days of placing it. To know the status, visit ‘<a href="#" class="acc_link font-weight-medium">Your order history</a>’, or email us at <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> to know more.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 12 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnTwelve" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnTwelve" aria-expanded="false" aria-controls="collapseacc_ShippingReturnTwelve" class="d-block position-relative collapsed text_black collapsible-link py-3">Can I customize my order ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnTwelve" aria-labelledby="acc_ShippingReturnTwelve" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Of course! We understand if you want to add a personal design element to your piece. If you have an entire design of your own, we could help you out with that too. Email us the changes or your design at <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> to turn it into reality, or call us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to discuss the same.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 13 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnThirteen" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnThirteen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnThirteen" class="d-block position-relative collapsed text_black collapsible-link py-3">Can I place an order over the phone ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnThirteen" aria-labelledby="acc_ShippingReturnThirteen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Absolutely! You can speak to our team before placing your order and they’ll help you out. Call us on <a href="tel:+919167000870" class="acc_link pl-1 font-weight-medium">+91 9167000870</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 14 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnFourteen" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnFourteen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnFourteen" class="d-block position-relative collapsed text_black collapsible-link py-3">Do you offer a warranty on your products ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnFourteen" aria-labelledby="acc_ShippingReturnFourteen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">All <strong class="px-1">SAYARTH</strong> jewelry comes with a lifetime warranty. We offer complimentary re-polishing, rhodium, cleaning and repair on the jewelry, forever. Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or call us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> for any concerns.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 15 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnFifteen" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnFifteen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnFifteen" class="d-block position-relative collapsed text_black collapsible-link py-3">Can I change or cancel my order ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnFifteen" aria-labelledby="acc_ShippingReturnFifteen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">You can contact us within 24 hours of placing the order, to let us know how about any changes or cancellations. Email us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or call us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> for the same.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 16 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnSixteen" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnSixteen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnSixteen" class="d-block position-relative collapsed text_black collapsible-link py-3">Which payment options do you accept ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnSixteen" aria-labelledby="acc_ShippingReturnSixteen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">We accept all major credit and debit cards and bank transfer options to make the payment.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_ShippingReturn 17 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_ShippingReturnSeventeen" class="card-header bg_transparent shadow-sm border-0 px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_ShippingReturnSeventeen" aria-expanded="false" aria-controls="collapseacc_ShippingReturnSeventeen" class="d-block position-relative collapsed text_black collapsible-link py-3">Is my information secure ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_ShippingReturnSeventeen" aria-labelledby="acc_ShippingReturnSeventeen" data-parent="#acc_ShippingReturn" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Your data is safe with us, and all financial information is encrypted and safeguarded. For more information, please check our <a href="#" class="acc_link px-1 font-weight-medium">Terms of Service</a> and <a href="#" class="acc_link px-1 font-weight-medium">Privacy Policy</a> pages.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Sizing -->
                        <div class="tab-pane fade faq_content p-lg-5" id="sizing" role="tabpanel" aria-labelledby="sizing-tab">
                            <div id="acc_Sizing" class="accordion shadow">
                                <!-- acc_Sizing 1 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_SizingOne" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_SizingOne" aria-expanded="false" aria-controls="collapseacc_SizingOne" class="d-block position-relative text_black collapsible-link py-3">I have ordered the wrong size, what do I do ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_SizingOne" aria-labelledby="acc_SizingOne" data-parent="#acc_Sizing" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Don’t worry! We’ll get it fixed. Send the piece across to us and we’ll make it in your correct size. If you’re unsure of your size, check out our sizing guide for rings and bracelets, or contact us on <a href="mailto:info@sayarth.com" class="acc_link pl-1 font-weight-medium">info@sayarth.com</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_Sizing 2 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_SizingTwo" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_SizingTwo" aria-expanded="false" aria-controls="collapseacc_SizingTwo" class="d-block position-relative text_black collapsible-link py-3">What’s my ring size ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_SizingTwo" aria-labelledby="acc_SizingTwo" data-parent="#acc_Sizing" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">We’ve just made finding out your ring size, a whole lot easier!</p>
                                            <p>If you already have a ring (can be any!) which fits you well, you can send that across and we’ll make your favourite <strong class="px-1">SAYARTH</strong> ring in the same size. Your original ring will be returned to you as is, with your <strong class="px-1">SAYARTH</strong> order.</p>
                                            <p>Or follow our quick and easy step-by-step guide on how to measure your ring size;</p>
                                            <p class="mb-0"><strong class="pr-2">1.</strong>Use a piece of string/ thread.</p>
                                            <p class="mb-0"><strong class="pr-2">2.</strong>Firmly string the thread around the finger you want to wear the Ring on.</p>
                                            <p class="mb-0"><strong class="pr-2">3.</strong>Mark the String where one end meets the other.</p>
                                            <p class="mb-0"><strong class="pr-2">4.</strong>Cut the String where it has been marked.</p>
                                            <p class="mb-0"><strong class="pr-2">5.</strong>Place the String on a Ruler to ascertain the exact length.</p>
                                            <p class="pb-2"><strong class="pr-2">6.</strong>Use the Chart mentioned below to find your Exact Size.</p>

                                            <div class="table-responsive acc_table my-4">
                                                <table class="table text-center table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Size (cm)</th>
                                                            <th>Size (mm)</th>
                                                            <th>Indian Size</th>
                                                            <th>U.S Size</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>4.4</td>
                                                            <td>44</td>
                                                            <td>4</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.5</td>
                                                            <td>45</td>
                                                            <td>5</td>
                                                            <td>3.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.6</td>
                                                            <td>46</td>
                                                            <td>6</td>
                                                            <td>4</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>4.7</td>
                                                            <td>47</td>
                                                            <td>7</td>
                                                            <td>4.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.8</td>
                                                            <td>48</td>
                                                            <td>8</td>
                                                            <td>5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.9</td>
                                                            <td>49</td>
                                                            <td>9</td>
                                                            <td>5.5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>50</td>
                                                            <td>10</td>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.1</td>
                                                            <td>51</td>
                                                            <td>11</td>
                                                            <td>6.5</td>
                                                        </tr> 
                                                        <tr>
                                                            <td>5.2</td>
                                                            <td>52</td>
                                                            <td>12</td>
                                                            <td>7</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5.3</td>
                                                            <td>53</td>
                                                            <td>13</td>
                                                            <td>7.5</td>
                                                        </tr>      
                                                        <tr>
                                                            <td>5.4</td>
                                                            <td>54</td>
                                                            <td>14</td>
                                                            <td>8</td>
                                                        </tr>    
                                                        <tr>
                                                            <td>5.5</td>
                                                            <td>55</td>
                                                            <td>15</td>
                                                            <td>8.5</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <p><strong>Please note;</strong></p>
                                            <p class="mb-0"><strong class="pr-2">1.</strong>If your knuckle is significantly larger then the base of your finger</p>
                                            <p class="mb-0"><strong class="pr-2">2.</strong>a) Measure your knuckle size</p>
                                            <p class="mb-0"><strong class="pr-2">3.</strong>b) Measure your Ring Size i.e base of the finger</p>
                                            <p class="mb-0"><strong class="pr-2">4.</strong>c) Pick a size between the Two</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_Sizing 3 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_SizingThree" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_SizingThree" aria-expanded="false" aria-controls="collapseacc_SizingThree" class="d-block position-relative text_black collapsible-link py-3">What’s my bracelet size ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_SizingThree" aria-labelledby="acc_SizingThree" data-parent="#acc_Sizing" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>If you already have a bracelet (can be any!) which fits you well, you can send that across and we’ll make your favourite <strong class="px-1">SAYARTH</strong> bracelet in the same size. Your original bracelet will be returned to you as is, with your <strong class="px-1">SAYARTH</strong> order.</p>

                                            <p>Or follow our quick and easy step-by-step guide on how to measure your bracelet size;</p>
                                            <p class="mb-0"><strong class="pr-2">1.</strong>Measure your wrist using a piece of string, just below the wrist bone, where you would normally wear a bracelet.</p>
                                            <p class="mb-0"><strong class="pr-2">2.</strong>If you are using a String mark the Point where one end meets the other to form a full circle.</p>
                                            <p class="mb-0"><strong class="pr-2">3.</strong>Cut the String at the Marked Point.</p>
                                            <p><strong class="pr-2">4.</strong>Place the String Flat on a Ruler and measure.</p>

                                            <p class="mb-0">Choose between; 6 inch, 6.5 inch, 7 inch or 7.5 inch.</p>
                                            <p class="mb-0">All our bracelets come with a few extra jumps, so don’t worry about a comfort fit!</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_Sizing 4 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_SizingFour" class="card-header bg_transparent shadow-sm border-0 px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_SizingFour" aria-expanded="false" aria-controls="collapseacc_SizingFour" class="d-block position-relative text_black collapsible-link py-3">Do you have length options for your necklaces ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_SizingFour" aria-labelledby="acc_SizingFour" data-parent="#acc_Sizing" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p class="m-0">Yes! Depending on the style of the necklace, we give you respective length options.</p>
                                            <p class="m-0">Please find below a reference image of various chain lengths;</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Care And Repair -->
                        <div class="tab-pane fade faq_content p-lg-5" id="careRepair" role="tabpanel" aria-labelledby="careRepair-tab">
                            <div id="acc_CareRepair" class="accordion shadow">
                                <!-- acc_CareRepair 1 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_CareRepairOne" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_CareRepairOne" aria-expanded="false" aria-controls="collapseacc_CareRepairOne" class="d-block position-relative text_black collapsible-link py-3">How should I keep my jewelry ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_CareRepairOne" aria-labelledby="acc_CareRepairOne" data-parent="#acc_CareRepair" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>Since all of <strong class="px-1">SAYARTH's</strong> jewelry is precious, there are rare chances of it tarnishing. However, you can keep it safe in the box provided to you by us, in any regular jewelry box or if you want to be extra cautious, wrap it up in some cotton first.</p>
                                            <p class="mb-0">Also note, for all the jewelry with the chains, do make sure they’re packed behind in a way that the chains do not tangle up.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_CareRepair 2 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_CareRepairTwo" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_CareRepairTwo" aria-expanded="false" aria-controls="collapseacc_CareRepairTwo" class="d-block position-relative text_black collapsible-link py-3">How can I clean my SAYARTH jewelry at home ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_CareRepairTwo" aria-labelledby="acc_CareRepairTwo" data-parent="#acc_CareRepair" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>It’s easy!</p>
                                            <p class="mb-0"><i class="fas fa-caret-right pr-2"></i> Mix a few drops of mild dish detergent into warm water.</p>
                                            <p class="mb-0"><i class="fas fa-caret-right pr-2"></i>Soak the piece in the water for a minute.</p>
                                            <p class="mb-0"><i class="fas fa-caret-right pr-2"></i>Use a very soft brush to clean the jewelry lightly.</p>
                                            <p class="mb-0"><i class="fas fa-caret-right pr-2"></i>Rinse off with regular water.</p>
                                            <p><i class="fas fa-caret-right pr-2"></i>Lightly pat dry the jewelry with a lint-free cloth or paper towel.</p>
                                            <p class="mb-0">Your piece will look sparkly in no time!</p>
                                            <p class="mb-0">Of course, if you don’t want to go through the hassle, you can send it across to us and we’ll get it cleaned professionally (at no cost) !</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_CareRepair 3 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_CareRepairThree" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_CareRepairThree" aria-expanded="false" aria-controls="collapseacc_CareRepairThree" class="d-block position-relative text_black collapsible-link py-3">What do I do if my jewelry breaks ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_CareRepairThree" aria-labelledby="acc_CareRepairThree" data-parent="#acc_CareRepair" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p class="m-0">Oh no! Don’t worry, we’ll get it fixed! Since we provide a lifetime warranty on all our jewelry, you can send across the piece on any working day and we’ll get it fixed for you in no time, at no cost. Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or call us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to get this done.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_CareRepair 4 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_CareRepairFour" class="card-header bg_transparent shadow-sm border-0    px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_CareRepairFour" aria-expanded="false" aria-controls="collapseacc_CareRepairFour" class="d-block position-relative text_black collapsible-link py-3">What do I do if my jewelry fades or gets scratched ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_CareRepairFour" aria-labelledby="acc_CareRepairFour" data-parent="#acc_CareRepair" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p class="m-0">Not to worry! Our lifetime warranty provides a round of quality of check, re-polishing, rhodium, and cleaning, all at no cost! Contact us on <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or call us on <a href="tel:+919167000870" class="acc_link px-1 font-weight-medium">+91 9167000870</a> to get this done.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Jewelry Info -->
                        <div class="tab-pane fade faq_content p-lg-5" id="jeweleryInfo" role="tabpanel" aria-labelledby="jeweleryInfo-tab">
                            <div id="acc_JeweleryInfo" class="accordion shadow">
                                <!-- acc_JeweleryInfo 1 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoOne" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoOne" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoOne" class="d-block position-relative text_black collapsible-link py-3">Which materials are used to make a SAYARTH piece ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoOne" aria-labelledby="acc_JeweleryInfoOne" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p class="m-0">We only use hallmarked 14kt / 18kt gold with certified lab-grown diamonds.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 2 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoTwo" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoTwo" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoTwo" class="d-block position-relative text_black collapsible-link py-3">Which is better, 14kt or 18kt gold ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoTwo" aria-labelledby="acc_JeweleryInfoTwo" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p>It entirely depends on what you’re looking for! Gold is measured in karats, which indicates its purity level. 18kt gold is made up of 75% pure gold, which makes it a perfect investment option, whilst 14kt gold is made up of 58.50% pure gold, which makes it harder and thus, a more durable option. Worry not! Neither of them will tarnish over time.</p>

                                        <p class="m-0">In case, you need assistance in deciding, you can email us at <a href="mailto:info@sayarth.com" class="acc_link px-1 font-weight-medium">info@sayarth.com</a> or call us on <a href="tel:+919167000870" class="acc_link pl-1 font-weight-medium">+91 9167000870</a>.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 3 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoThree" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoThree" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoThree" class="d-block position-relative text_black collapsible-link py-3">What is hallmarked gold ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoThree" aria-labelledby="acc_JeweleryInfoThree" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p class="m-0">BIS hallmark is a sole agency verified by the Government of India, which authenticates the quality and karat of gold. All <strong class="px-1">SAYARTH</strong> jewelry comes with a laser engraving of the Hallmark code, to authenticate the karat of gold. This can help you resell your piece in the future if needed.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 4 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoFour" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoFour" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoFour" class="d-block position-relative text_black collapsible-link py-3">What are lab-grown diamonds ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoFour" aria-labelledby="acc_JeweleryInfoFour" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p>Lab-grown diamonds are sustainably produced diamonds, which do not harm the earth’s natural state nor are a part of any illegal trade. These diamonds are grown in highly controlled laboratory environments using advanced technological processes that duplicate the conditions under which diamonds naturally develop when they form in the mantle, beneath the Earth’s crust.</p>

                                        <p>Lab-grown diamonds are chemically, physically & optically the same as mined diamonds and are real diamonds. They are proud and sustainable diamonds which indeed sparkle forever. The only difference is the point of origin.</p>

                                        <p class="mb-0">Mined diamonds will always be rare and precious in its way, but if you’re looking at saving some bucks and would like to contribute to sustainable practices, this it is a great option for you!</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 5 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoFive" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoFive" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoFive" class="d-block position-relative text_black collapsible-link py-3">Are lab-grown diamonds real ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoFive" aria-labelledby="acc_JeweleryInfoFive" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                            <p>Absolutely! All our lab-grown diamonds are certified by International independent diamond grading institutes. The certificates issued are identical to mined diamond certificates with the grading of the 4C’s- Cut, Color, Clarity & Carat. Below is a comparison of lab-grown & mined diamonds, denoting the equivalence of both;</p>
                                            
                                            <div class="table-responsive acc_table mt-4">
                                                <table class="table text-center table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Properties</th>
                                                            <th>Earth-mined</th>
                                                            <th>Lab-grown</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Guaranteed Conflict-free</td>
                                                            <td>No</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hardness (MOHS)</td>
                                                            <td>10</td>
                                                            <td>10</td>
                                                        </tr>
                                                        <tr>
                                                            <td>SP3 Carbon Diamond Bonds (%)</td>
                                                            <td>100%</td>
                                                            <td>100%</td>
                                                        </tr>  
                                                        <tr>
                                                            <td>Internal Crystal Structure</td>
                                                            <td>Face-Centered Cubic</td>
                                                            <td>Face-Centered Cubic</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hardness Comparable</td>
                                                            <td>2.42</td>
                                                            <td>2.42</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colour</td>
                                                            <td>Various Grades</td>
                                                            <td>Various Grades</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td>$$$$$$</td>
                                                            <td>$$$$$$</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cut</td>
                                                            <td>Poor to Ideal</td>
                                                            <td>Average-Very Good</td>
                                                        </tr>          
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 6 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoSix" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoSix" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoSix" class="d-block position-relative text_black collapsible-link py-3">Can I get a certificate of authenticity ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoSix" aria-labelledby="acc_JeweleryInfoSix" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p class="mb-0">Of course! Our gold is hallmarked with 18kt gold, by BIS (a sole agency verified by the Government of India) and our diamonds are certified by the international, Solitaire Gemmological Laboratory (SGL). All <strong class="px-1">SAYARTH</strong> jewelry comes with a laser engraving of the Hallmark code, to authenticate the karat of gold and a certificate of diamonds from SGL will also be placed in the packaging you receive with the product.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 7 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoSeven" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoSeven" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoSeven" class="d-block position-relative text_black collapsible-link py-3">Do SAYARTH pieces have a resale value ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoSeven" aria-labelledby="acc_JeweleryInfoSeven" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p  class="mb-0">Similar to mined diamond jewelry, our jewelry also has the same resale value. It is life-long, with the gold and diamonds both valued at the current market price at the time of resale.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 8 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoEight" class="card-header bg_transparent shadow-sm border-bottom px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoEight" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoEight" class="d-block position-relative text_black collapsible-link py-3">What is the quality of your diamonds ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoEight" aria-labelledby="acc_JeweleryInfoEight" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p  class="mb-0">All of our white diamonds are graded colorless-near colorless (F-H) and are graded (VVS-SI) for clarity. Each certificate contains detailed information of the diamond’s cut, carat, color, and clarity. If you have any specific requirements, we are happy to make it possible!</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- acc_JeweleryInfo 9 -->
                                <div class="card border-0 bg_transparent">
                                    <div id="acc_JeweleryInfoNine" class="card-header bg_transparent shadow-sm border-0 px-0">
                                        <h6 class="mb-0 font-weight-normal">
                                            <a href="#" data-toggle="collapse" data-target="#collapseacc_JeweleryInfoNine" aria-expanded="false" aria-controls="collapseacc_JeweleryInfoNine" class="d-block position-relative text_black collapsible-link py-3">Where is SAYARTH's jewelry made ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseacc_JeweleryInfoNine" aria-labelledby="acc_JeweleryInfoNine" data-parent="#acc_JeweleryInfo" class="collapse">
                                        <div class="card-body py-4 px-5">
                                        <p  class="mb-0">All of <strong class="px-1">SAYARTH's</strong> jewelry is handmade in Mumbai by skilled artisans. Each piece goes through intense quality checks, at every stage to ensure the most beautiful jewelry is delivered to you.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>