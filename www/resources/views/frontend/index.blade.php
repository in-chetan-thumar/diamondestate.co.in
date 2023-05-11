@extends('frontend.layouts.master')
@section('title')
    Home
@endsection
@section('section')
    <section class="banner">
        <figcaption>
            <div class="container">
                <h2 class="wow fadeInUp" data-wow-delay="0.2s">Redefining<br> <strong>Affordable Luxury</strong></h2>
            </div>
        </figcaption>
        <img src="{{ asset('assets/frontend/images/banner.jpg') }}" alt="">
    </section>


    <section class="about_us pb0" id="aboutus">
        <div class="container">
            <div class="title_1 text-left">
                <div class="title_main wow fadeInRight" data-wow-delay="0.2s">About Us</div>
            </div>
        </div>
        <div class="about_box_main">
            <div class="container">
                <div class="row g-0">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <figure class="about_box wow fadeInUp" data-wow-delay="0.2s">
                            <h2>What we do</h2>
                            <p>At Diamond Estate, we are committed to crafting iconic residential and commercial landmarks
                                that offer exceptional design, craftsmanship, and service that exceeds expectations.</p>
                            <p>Based in the Heart of India, each of our developments is nestled within a community that
                                offers a plethora of enriching experiences, creating an unparalleled lifestyle that people
                                are bound to fall in love with.</p>
                        </figure>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="row g-0">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <figure class="about_box wow fadeInUp" data-wow-delay="0.4s">
                                    <h2>Mission</h2>
                                    <p>Our mission is to enrich lives by building spaces that inspire and empower people to
                                        lead fulfilled lives. We strive to achieve this with our meticulously crafted luxury
                                        spaces which aim to serve as sanctuaries that nourish the mind, body, and soul. </p>
                                </figure>
                            </div>
                        </div>
                        <div class="row g-0 justify-content-end">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <figure class="about_box wow fadeInUp" data-wow-delay="0.6s">
                                    <h2>Vision</h2>
                                    <p>Leading with our vision of ‘Redefining Affordable Luxury’, we put our hearts and
                                        souls into building spaces that are thoughtfully designed and meticulously crafted
                                        with the highest level of aesthetic and comfort.</p>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent_projects" id="projects">
        <div class="container">
            <div class="title_1 text-left">
                <div class="title_main wow fadeInRight" data-wow-delay="0.2s">Recent Project</div>
            </div>
            <div class="recent_projects_wrpr">
                <div class="recent_projects_row">
                    <div class="row g-4">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="recent_projects_cnt">
                                <span class="wow fadeInRight" data-wow-delay="0.4s">Commercial</span>
                                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Diamond One</h2>
                                <div class="project_dtl wow fadeInRight" data-wow-delay="0.8s">
                                    <ul class="location">
                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 13.43C13.7231 13.43 15.12 12.0331 15.12 10.31C15.12 8.58687 13.7231 7.19 12 7.19C10.2769 7.19 8.88 8.58687 8.88 10.31C8.88 12.0331 10.2769 13.43 12 13.43Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" />
                                                <path
                                                    d="M3.62001 8.49C5.59001 -0.169998 18.42 -0.159997 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.39001 20.54C5.63001 17.88 2.47001 13.57 3.62001 8.49Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" />
                                            </svg> Dhantoli, Nagpur, Maharashtra 440012</li>
                                    </ul>
                                    <ul class="col2">
                                        <li><svg width="24" height="24" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="url(#pattern0)" />
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10674" transform="scale(0.02)" />
                                                    </pattern>
                                                    <image id="image0_95_10674" width="50" height="50"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABfklEQVR4nO2ZwU6DQBCG9+QzaNUH0vok6lm8anwPCPMvJDyAXtSjeqm+ikEvPWEm3SaG1Owu0jIt8yVzmwn78w/swhijKEonAJwBeALwDaAZMojoi9dCRNNYEXdDLx5/x22ME3wX5gCuiqKYmIEpimJirU3cmhpr7am3iIieXXJihGGtTZwrj95k14/syIERRpqm+05I7U1e9qIRCkLXp0I2BNSRMTmC+E2NTwtveZ5fVlW1t81Cml/Hj48syw63XggWYt5DnYFkIS4uxAnx5RPRERHdt+peY67VX+KKmpjasiyPW3X+Y4dEIV3roEICGG1rlQsRD61X8EvMtfpLXFHzz73kfBeEzHZhQ5zF/BeAJCH8Oc3PBLeT6EOjWSNQIQGoIx2AtlYA2lodgLaWMLBORzYJVIgwMEZHak6UMHJrw38k3en50/hwk1yRozciuo4ZvU2d6jmLkTgMBXASVMgj4D6+w9cUN1F3gUfAbOHymRk4areWMCcURTFtfgDseCfFzQ8RZAAAAABJRU5ErkJggg==" />
                                                </defs>
                                            </svg> Sufficient Parking</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="url(#pattern1)" />
                                                <defs>
                                                    <pattern id="pattern1" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10681" transform="scale(0.0111111)" />
                                                    </pattern>
                                                    <image id="image0_95_10681" width="90" height="90"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF8ElEQVR4nO2dW4gcRRSGy1u8oD6IiAoqoqKigi+CimLUh6gQ8QYKIgpBRVF0VRRFWV9ENCruRs1OWBim/r9moBHfJJKg6yUiiCIkRgVZJOJ1k7gS4iXqZuRkK7AM053p7uqeqp7+oV6GnprT35w5depUV41SjhRF0ZEk15Cct21SXnPVfy0rkq+S7C5tAF6pATkWgF96QZP81fXnjLz6QN7XRh6Ma9WgS1INuiTVoEtSDbok1aAdqNFoHEXydQC/xwHN0OYBvFZPapaI5JRDwN2eNuXCGYLX+Pj4wQD+LBD0H/IZatRVg65I6ACwtsx78Vo9lTlXgH+rK3yBpHetVutUAC+Q3CqxXhqAL+W1TqdziqqiygZN8m4LN3aQJblKVU1lgib5OIC9A4QnueYxVSW5AE3ySgDrAHxNcrcdE2aMMbd1u92D5Bqt9c0ZxoSb5L3Sh/Qlfdq+d9uwM9lut89TVQfd6XTOIPnuAWB9qLW+CsBchoF3Tt4rfSRctyAD/sTExOGqiqC11peS3FFU+pihbWg2m0coX9Uv9ZMUbgBP3pETzF8kx5rN5okATgLwiH0tc58AGspXSYGoj9GTSe/hgcPFIG2sT7+P5u0XwOXK40nN1JJ8dm1SZU4vxszcP3Xx5N6+xbMdgH5H+SwZ2fdnCEkCsM5FKIjrP2+oAfCf1voEY8xZJAFgp2QpkhFJaAGwXIUgkt+4CAUJ/ecONQC+ALAnwes3aq1PdwKkqBImyV0uQkFC/6WEGgDbjTGXZAYh8VUGOFlVsSsra1yuhtARuKKvHxR2Zs8u+hEvVgi0bRtcPuL1c6bORgN0d+ABcsBFWCeLqgwHdJosaKqIlZSpEQE9liIL+qqItcFci6oMBHTKLGXXAW+8Bs1Cv8jMoSPvoioD8WhX16dehHW1qMpRBp237Jmy/65PIIYGOkvZM43oGYihgU5b9kwregZiaKDTlj3Tip6BGDrookTPQNSgPQVXe7RVDdpTELVHewquDh1WNWhPQdQe7Sm4KoeO+TS1lxKuryZopKy9FH19ZUFHKWsvRV9fWdBZay9FXV950L4oGPsZiqGh289QDA3dfoZiaOj2MxRDQ7efoRgauv0MxdDQ7Wcohvpmv90Af6fd3/E+yW32YZuF/TtUAWjZn621PrMGnUJRFB1ijLkdwKZB9mZzgKYCUWn2yz68hA0/NWgXIvmkKw9m7dGxkJ8rAjAX24IKRIU6ij2CoSjIXTk9Ro06aGPM8Xb3aBKsLQBWa62v0Vqf3263T5aTAqIoOg7ARfJFAXiJ5Oc2G1kK+V9jzHVq1EHbs4viAG+TA0vS9Bctwr+R5Iu2XagCUiGgJY2TrW8xP/fZyh4UVTbopJMIQvq5ew/a/rT7efMe74/GCQk0gLdjOt6qRlQsCPRsjEfLhvyNACJ7utdqkk9rrR8geYcxZqVkH90CHmQfpqanp4+J4fF3ro4dHJX5Lcm7ZmZmDlUVEICzY0DP5eqY5D+OJiSzUr1rNBqHqYAlCUDM/X2Wq+O41C4H8O8A3BtF0TIVoOxezH73hkKyDgfAvwdwf0iZi8wpxO5+92OMuSdv58tkZhhzhoeL9gOAB70+2M9KQl+M00g18zRnHyRnesju/lardS6Ai40xK0jeKt+mMeYJks8DeINkW4pEKYH/BOBh+QzloaIoOlqcIgb0B0MzzB66ulIGiZQhZQ7AswCOVZ5I7kXS2ASbb/HCSK31DbZqlwq4HGEsnjRs+0m+nGDnZq/+EKJrPZzkpymBbwfwlEwUhhQu3kqwba8x5grleS76SUrgOwE80+9UGNeyFctVcTG5iIMICpUxZoWsoqccNGUCtR7AQ8aYy+Roy7wponiuMeYcktfa8/76pnA97eOQUtN9AnC1jNyO08Yi2xZZvFChCsByAO95ADLRk4OG3PvciFQGPYDaOymZDC5cDCJ7NP16DyBv9jq7cCWSFxhj7iP5pn2WrxQPlnFDJiNe5cllKVo8Cfh6mx18BODHvP9QJ8tyNl+XWSykpOCydvE/0bkaM64G+xwAAAAASUVORK5CYII=" />
                                                </defs>
                                            </svg> Sanitation facility for drivers and servants</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="url(#pattern3)" />
                                                <defs>
                                                    <pattern id="pattern3" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10677" transform="scale(0.0111111)" />
                                                    </pattern>
                                                    <image id="image0_95_10677" width="90" height="90"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADy0lEQVR4nO2aSYvVQBSFS0VBQTf6Cxx26t5hpaBbRxREdCE4rRQUh8VTwXnC2QeN2jmn+knAYSeCgojTVkFdOG104YCzgpuOBFptQyrJi21VveR+cFfNSe49CfXqVEcpQRAEQRAEQRAEQRAEoRTNZnMEyRMAPpKMHNUHAMfDMBxe2cdI8rRDg5N1WlWRRqMxGMB3Dwz+Vd/inlTVaIjR9Vw6AJxSVSUMw+Ekj8U/SA4Nfk/yaKV/DAVBEARBECp5phFV/gzEp2DCqp6BeBi1o0qegYjRFunkpQOddAbiw5kG2zdYzkAEQRAEQag7zWZzKMmDJF+73p7x/9VrAPvjWZ0ZDeCAB0ZElmqfy6j93gMDIhsVz+rkDERrPcH18LRcQRCMt240gAU1NHq+daNJ7nA9OO3XdutGA7ic1gyAlarD0VqvNhh9yXozAF6kNaO1nqI6HJLTDEY/t9oIgFEAelPe5t74b6rD6erqGunFfFrr6YYn/kRVBADPDDNOs9YEybWG9fmCqggkLxlmXGOtCQBNw9NuqIoAYJvz/5KTvGfYZ87JaHxF1tYpXv+S5wla6zFFt17d3d2j+2vDMByWts4m7rkiY8Z5Bt1dZTF6fzHsOMZmNL4vZ+g3SU1PT8/kokYHQTAxqQfwNueee039tlqtcQbdVytRPCN6f46iaFC7+27+Gfp+yr1mFzUawKyUez7I0Rn3xfEsJD85i+Km6A3gVo7ucc7QV5IaksvbMHpZiv5qju5hTs93nEVxU/QGcNKkCcNwCIAfOUOfSRl0SxtGb0rRn83R/Ih7M/Udf+PhLIpnLAGrTJogCMYXMGtnUtf3bUhRo4+k9LorT5f1u+I0ilc5ensTxasevb2J4qboDeCpqihwEcXrEL2TkLxoPYrXIXp7EcXLRO9Oh7ajeNnoXTBGP0rqAMwsurXr98BnlAhKcU3yJoqXjd5a64UFBr2W1JFc2q7RWuslKde5XuABzfcmiv9D9N5awCQkdSQ3tms0gA0p92cB7WZvoniZ6N2nO1fmKyCSh0sYfSh5nfhzrgK6s1kzWI3iZaJ31tvAv2tdiu58CaNbKddZX0B7O2sGq1G8bPQm+a7AoItSdDdLGH0jeR2t9eIC2ndZMwRBMNVKFK9b9HYWxesYvZ1E8TpGbydRvI7R20kUN0VvAHNVTaCNKG5KRnE8VTWhZY7inwbsJu1us+pWSoymGE0P3kTv3mgAr1wPQ3/r5UAavceDgSJPa/eAGd33weAeebP52+DYi9iT2JsBM1oQBEEQBEEQBEEQBEF1Bj8BywvKHAZEIFYAAAAASUVORK5CYII=" />
                                                </defs>
                                            </svg> Solar System</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="recent_projects_img wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="swiper_main_slide">
                                    <div class="gallery-container">
                                        
                                        <div class="swiper-container gallery-main2 gallerybig">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/diamondone1.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/diamondone1.jpg') }}"
                                                            alt="Slide 01"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/diamondone2.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/diamondone2.jpg') }}"
                                                            alt="Slide 02"></a>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="swiper-container gallery-thumbs2 gallerysmall">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/diamondone_thumb1.jpg') }}"
                                                        alt="Slide 01"></div>
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/diamondone_thumb2.jpg') }}"
                                                        alt="Slide 02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a target="_blank"
                                    href="https://goo.gl/maps/HFSjz1HdubuYSLRS7"
                                    class="btn btn-primary locate_btn">Locate <svg width="24" height="18"
                                        viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 0L0 3.33333L10.6667 8V18L24 0Z" fill="white" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent_projects pt0">
        <div class="container">
            <div class="title_1 text-left">
                <div class="title_main wow fadeInRight" data-wow-delay="0.2s">Past Projects</div>
            </div>
            <div class="recent_projects_wrpr">
                <div class="recent_projects_row">
                    <div class="row g-4">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="recent_projects_cnt">
                                <span class="wow fadeInRight" data-wow-delay="0.4s">Residential</span>
                                <h2 class="wow fadeInRight" data-wow-delay="0.6s">KKA's Lifestyle</h2>
                                <div class="project_dtl wow fadeInRight" data-wow-delay="0.8s">
                                    <ul class="location">
                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 13.43C13.7231 13.43 15.12 12.0331 15.12 10.31C15.12 8.58687 13.7231 7.19 12 7.19C10.2769 7.19 8.88 8.58687 8.88 10.31C8.88 12.0331 10.2769 13.43 12 13.43Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" />
                                                <path
                                                    d="M3.62001 8.49C5.59001 -0.169998 18.42 -0.159997 20.38 8.5C21.53 13.58 18.37 17.88 15.6 20.54C13.59 22.48 10.41 22.48 8.39001 20.54C5.63001 17.88 2.47001 13.57 3.62001 8.49Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" />
                                            </svg>
                                            <p>Opp. Gurudwara, Amravati Road, Nagpur,<br> Maharashtra - 440023<br>Mob: <a
                                                    href="tel:+91-7741003300">+91-7741003300</a> / <a
                                                    href="tel:+91-7741005500">+91-7741005500</a><br>Email : <a
                                                    href="mailto:sales@kkalifestyle.com">sales@kkalifestyle.com</a></p>
                                        </li>
                                    </ul>
                                    <ul class="col2">
                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 22H22" stroke="#A4A4A4" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M15.01 21.99L3.01001 22.01L3 7.06998C3 6.39998 3.34001 5.77995 3.89001 5.40995L7.89001 2.73997C8.56001 2.28997 9.43999 2.28997 10.11 2.73997L14.11 5.40995C14.67 5.77995 15 6.39998 15 7.06998L15.01 21.99Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M19.9805 22.01V18" stroke="#A4A4A4" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M20 12C18.9 12 18 12.9 18 14V16C18 17.1 18.9 18 20 18C21.1 18 22 17.1 22 16V14C22 12.9 21.1 12 20 12Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M3 14H15" stroke="#A4A4A4" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M9 22V18.25" stroke="#A4A4A4" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9 10.5C9.82843 10.5 10.5 9.82843 10.5 9C10.5 8.17157 9.82843 7.5 9 7.5C8.17157 7.5 7.5 8.17157 7.5 9C7.5 9.82843 8.17157 10.5 9 10.5Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg> Plenty of Open Spaces</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern4)" />
                                                <defs>
                                                    <pattern id="pattern4" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10760" transform="scale(0.01)" />
                                                    </pattern>
                                                    <image id="image0_95_10760" width="100" height="100"
                                                        xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg> Indoor Sports Facility</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 22H22" stroke="#A4A4A4" stroke-width="1.5"
                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M2.94922 22.0003L2.99922 9.97023C2.99922 9.36023 3.28922 8.78029 3.76922 8.40029L10.7692 2.95027C11.4892 2.39027 12.4992 2.39027 13.2292 2.95027L20.2292 8.39028C20.7192 8.77028 20.9992 9.35023 20.9992 9.97023V22.0003"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M13 17H11C10.17 17 9.5 17.67 9.5 18.5V22H14.5V18.5C14.5 17.67 13.83 17 13 17Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9.5 13.75H7.5C6.95 13.75 6.5 13.3 6.5 12.75V11.25C6.5 10.7 6.95 10.25 7.5 10.25H9.5C10.05 10.25 10.5 10.7 10.5 11.25V12.75C10.5 13.3 10.05 13.75 9.5 13.75Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M16.5 13.75H14.5C13.95 13.75 13.5 13.3 13.5 12.75V11.25C13.5 10.7 13.95 10.25 14.5 10.25H16.5C17.05 10.25 17.5 10.7 17.5 11.25V12.75C17.5 13.3 17.05 13.75 16.5 13.75Z"
                                                    stroke="#A4A4A4" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linejoin="round" />
                                                <path d="M19.0003 7L18.9703 4H14.5703" stroke="#A4A4A4"
                                                    stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg> Club House</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern5)" />
                                                <defs>
                                                    <pattern id="pattern5" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10764" transform="scale(0.01)" />
                                                    </pattern>
                                                    <image id="image0_95_10764" width="100" height="100"
                                                        xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg> Garden</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern6)" />
                                                <defs>
                                                    <pattern id="pattern6" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10753" transform="scale(0.0104167)" />
                                                    </pattern>
                                                    <image id="image0_95_10753" width="96" height="96"
                                                        xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg> Swimming Pool</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern7)" />
                                                <defs>
                                                    <pattern id="pattern7" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10766" transform="scale(0.01)" />
                                                    </pattern>
                                                    <image id="image0_95_10766" width="100" height="100"
                                                        xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg> Jogging Track</li>

                                        <li><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect width="24" height="24" fill="url(#pattern8)" />
                                                <defs>
                                                    <pattern id="pattern8" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#image0_95_10756" transform="scale(0.0104167)" />
                                                    </pattern>
                                                    <image id="image0_95_10756" width="96" height="96"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACZElEQVR4nO3bwW7TQBgE4JXgTTgVGqE+cvyPbCkXKFwAIfJIpWkvIFDQVqWqUFuycSaev55PWqnqwZ3ZjZu1LZdiZmZmZmZmZmZmZmZmZpbTer1+uVqtXpSk1lnz931/FhHfAPyOiF8AvnZd97Yk0WfOPwzDq4i4ArC9P+rvuq47LeKG5PkLgPN/w98r8bGIQ/L8tcD1YwUAbIo4JM9fngh/M4o4JM+fvgCS509fAMr5d9kXSxfYwZj8tOuGln3xHBegZ143tO6L57YAA/u6oXVfPLcFAPu6oXVfPMMFuG6Zn2MEmtsCbKl95QKRyfWVC0Qm11cuEJlcX7lAZHJ95QKRyfWVC0Qm11cuEJlcX7lAZHJ95QKRyfWVC0Qm11cuENkkffu+fxMRHwBc/u+AYwNlH2V83zrH5xHx+u8BFg/dz/YCgPqBu53zRT3Al4k/EdtM48B9P9cD/BQKtFUfh+wbET+8AJh+AfwvCJMtwCd/CWOyM2Bz8yVc1S1RRLwHcDHlKYkE4wB96xy/Wy6XJ2UXhw5UxEGtr1wgMrm+coHI5PrKBSKT6ysXiEyur1wgMrm+coHI5PrKBSKT6ysXiEyur1wgMrm+coHI5PrKBSKT6xsR35/4AxdHD0TWmr91fvYJ9OgrOPWu3tgCz+AMaJqfZre3qh96aL+5e7I/osAzOAOa5mffUIv6ALk+Qquj/nz3MGFkATX75G+Zn1HqS8h+UXvc/NDN8QyQkr0AkudPXwDJ8/P3xWTZ8/P3xWTZ8x9nX0yUPf9x98Uk2fNr7YtnnN/MzMzMzMzMzMzMzMzMytz9ASoHVcZaVc40AAAAAElFTkSuQmCC" />
                                                </defs>
                                            </svg> Gym</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="recent_projects_img wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="swiper_main_slide">
                                    <div class="gallery-container">
                                        <div class="swiper-container gallery-main gallerybig">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/KKA1.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/KKA1.jpg') }}"
                                                            alt="Slide 01"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/KKA2.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/KKA2.jpg') }}"
                                                            alt="Slide 02"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/KKA3.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/KKA3.jpg') }}"
                                                            alt="Slide 03"></a>
                                                </div>
                                                <div class="swiper-slide">
                                                    <a href="{{ asset('assets/frontend/images/KKA4.jpg') }}" data-fancybox="group"><img
                                                            src="{{ asset('assets/frontend/images/KKA4.jpg') }}"
                                                            alt="Slide 03"></a>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="swiper-container gallery-thumbs gallerysmall">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/KKA_thumb1.jpg') }}"
                                                        alt="Slide 01"></div>
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/KKA_thumb2.jpg') }}"
                                                        alt="Slide 02"></div>
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/KKA_thumb3.jpg') }}"
                                                        alt="Slide 03"></div>
                                                <div class="swiper-slide"><img
                                                        src="{{ asset('assets/frontend/images/KKA_thumb4.jpg') }}"
                                                        alt="Slide 03"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a target="_blank"
                                    href="https://goo.gl/maps/JxkGgaDgvp3ToNo78"
                                    class="btn btn-primary locate_btn">Locate <svg width="24" height="18"
                                        viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 0L0 3.33333L10.6667 8V18L24 0Z" fill="white" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="letstalk" id="contact"
        style="background-image: url(assets/frontend/images/form_bg.jpg); background-position: center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-10">
                    <div class="letstalk_form">
                        <div class="title_1 text-left wow fadeInRight" data-wow-delay="0.2s">
                            <div class="title_main">Let’s talk</div>
                        </div>
                        {!! Form::open([
                            'url' => route('frontend.enquiry'),
                            'method' => 'POST',
                            // 'class' => 'wow fadeInUp',
                            // 'data-wow-delay' => '0.2s',
                            'id' => 'enquiry_form',
                        ]) !!}
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group input-box">
                                    {!! Form::label('first_name', 'First name', ['class' => 'input-label']) !!}
                                    {!! Form::text('first_name', null, ['class' => 'form-control input']) !!}
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group input-box">
                                    {!! Form::label('last_name', 'Last name', ['class' => 'input-label']) !!}
                                    {!! Form::text('last_name', null, ['class' => 'form-control input']) !!}
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group input-box">
                                    {!! Form::label('email', 'Email id', ['class' => 'input-label']) !!}
                                    {!! Form::email('email', null, ['class' => 'form-control input']) !!}
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group input-box">
                                    {!! Form::label('mobile', 'Mobile number', ['class' => 'input-label']) !!}
                                    {!! Form::number('mobile', null, ['class' => 'form-control input']) !!}
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group input-box">
                                    {!! Form::label('message', 'Message', ['class' => 'input-label']) !!}
                                    {!! Form::textarea('message', null, [
                                        'class' => 'form-control input',
                                        'id' => '',
                                        'cols' => '30',
                                        'rows' => '10',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 text-right">
                                <div class="submit_btn pull-right">
                                    <div class="btn btn-primary p0">
                                        {!! Form::submit('Submit') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @endsection
    @section('script')
    {!! JsValidator::formRequest('App\Http\Requests\EnquiryRequest', '#enquiry_form') !!}
    <script>
        var galleryThumbs = new Swiper(".gallery-thumbs", {
            centeredSlidesBounds: true,
            slidesPerView: 6,
            watchOverflow: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            spaceBetween: 16,
            direction: 'vertical'
        });

        var galleryMain = new Swiper(".gallery-main", {
            watchOverflow: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            preventInteractionOnTransition: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            thumbs: {
                swiper: galleryThumbs
            }
        });

        galleryMain.on('slideChangeTransitionStart', function() {
            galleryThumbs.slideTo(galleryMain.activeIndex);
        });

        galleryThumbs.on('transitionStart', function() {
            galleryMain.slideTo(galleryThumbs.activeIndex);
        });

        var galleryThumbs2 = new Swiper(".gallery-thumbs2", {
            centeredSlidesBounds: true,
            slidesPerView: 6,
            watchOverflow: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            spaceBetween: 16,
            direction: 'vertical'
        });

        var galleryMain2 = new Swiper(".gallery-main2", {
            watchOverflow: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            preventInteractionOnTransition: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            thumbs: {
                swiper: galleryThumbs2
            }
        });

        galleryMain2.on('slideChangeTransitionStart', function() {
            galleryThumbs.slideTo(galleryMain2.activeIndex);
        });

        galleryThumbs2.on('transitionStart', function() {
            galleryMain2.slideTo(galleryThumbs2.activeIndex);
        });
    </script>

    <script>
        $('#enquiry_form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($('#enquiry_form')[0]);
            var url = $(this).attr('action');
            var method = $(this).attr('method');
            
            if ($(this).valid()) {
                $('#status').show();
                $('#preloader').show();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    processData: false,
                    contentType: false,
                    type: method,
                    data: formData,
                    success: function(data, textStatus, jqXHR) {
                        if (!data.error) {
                          toastr.success(data.message);
                          console.log(data.message)
                          $("body").html(data.view)
                          console.log('sdfgjh')
                        } else {
                            $('#status').hide();
                            $('#preloader').hide();
                            toastr.error(data.message);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error('Error occurred!');
                    }
                });
            }
        });
    </script>
@endsection
