<?php
/**
 * Template Name: Career
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<section class="inner-banner style-2"
    style="background: url(<?php echo get_stylesheet_directory_uri();?>/images/career-banner-bg.jpg); background-size: cover; background-position: bottom center;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <div class="content-box">
                        <span class="pre-title">Discover Your</span>
                        <h2 class="title">DREAM JOB</h2>
                        <div class="content">
                            <p>There are many facets to the Staffing Industry. Regardless of your experience level and
                                focus Cura Recruiting will help you find the sweet spot to call home.</p>
                        </div>
                        <div class="button-container">
                            <a href="#" class="btn btn-blue-fill">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="jobs" id="app">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                // $curl = curl_init();

                // curl_setopt_array($curl, [
                //   CURLOPT_URL => "https://api.recruitcrm.io/v1/jobs",
                //   CURLOPT_RETURNTRANSFER => true,
                //   CURLOPT_ENCODING => "",
                //   CURLOPT_MAXREDIRS => 10,
                //   CURLOPT_TIMEOUT => 30,
                //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                //   CURLOPT_CUSTOMREQUEST => "GET",
                //   CURLOPT_HTTPHEADER => [
                //     "Authorization: Bearer Tm9-Ahlm5SRj49N-3wT1hJieeGKQfms19N4yBZsGL6g_Prbaa_nIzrZLYzlU2WauQeSRwBSQ0qBdKQF7xT55l18xNjU4MTcyOTIx",
                //     "Content-Type: application/json"
                //   ],
                // ]);
                
                // $response = curl_exec($curl);
                // $err = curl_error($curl);
                
                // curl_close($curl);
                
                // if ($err) {
                //   echo "cURL Error #:" . $err;
                // } else {
                // //echo'<pre>';
                // //echo $response;
                // //echo'</pre>';
                // }
                ?>
                <div class="job-head">
                    <h2 class="title">Open positions</h2>
                    <p>Cura Recruiting will help you find the sweet spot to call home.</p>
                </div>
                <div class="job-search-box">
                    <div class="job-search">
                        <div class="search-by-key">
                                                       
                            <div class="left-box">
                                <!-- <input type="text" class="form-control" id="key-search" placeholder="Search Listings"> -->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span  class="search-icon"><i class="fa fa-search"></i></span>
                                    </div>
                                        <input type="search" placeholder="Search Listings" class="form-control border-0">
                                </div>
                            </div>





                            <div class="right-box">
                                <button type="submit" class="btn btn-search">Search</button>
                            </div>
                            
                        </div>
                        <div class="short-by">
                            <div class="left-box">
                                <label for="sortby" class="">Sort by:</label>
                            </div>
                            <div class="right-box">
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option selected>Most Recent</option>
                                    <option value="1">Full-Time</option>
                                    <option value="2">Hourly</option>
                                    <option value="3">Salary</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="open-jobs">
                        <div class="item"  v-for="(job, key) in all_jobs.data">
                            <article>
                                <a :href="job.application_form_url" target="_blank">
                                    <h3 class="job-title">{{job.name}} <span class="job-status">New</span></h3>
                                </a>
                                <div class="job-location"><span class="flag"><img src="<?php echo get_stylesheet_directory_uri();?>/images/usa.png" alt=""></span>{{ job.city }}</div>
                                <div class="short-description">
                                    <p>We’re looking for an experienced {{ job.name}} to join our team.</p>
                                </div>
                                <div class="type-salary">
                                    <ul>
                                        <li class="type"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-clock.png" alt=""></span>Full-time</li>
                                        <li class="salary"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-usd.png" alt=""></span>${{job.min_annual_salary}} - ${{job.max_annual_salary}}</li>
                                    </ul>
                                </div>                                
                            </article>
                        </div>


                        <!-- <div class="item">
                            <article>
                                <a href="#">
                                    <h3 class="job-title">Engineering Manager<span class="job-status">New</span></h3>
                                </a>
                                <div class="job-location"><span class="flag"><img src="<?php echo get_stylesheet_directory_uri();?>/images/usa.png" alt=""></span>Remote, USA</div>
                                <div class="short-description">
                                    <p>We’re looking for an experienced engineering manager to join our team.</p>
                                </div>
                                <div class="type-salary">
                                    <ul>
                                        <li class="type"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-clock.png" alt=""></span>Full-time</li>
                                        <li class="salary"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-usd.png" alt=""></span>$80k - $100k</li>
                                    </ul>
                                </div>
                            </article>
                        </div>


                        <div class="item">
                            <article>
                                <a href="#">
                                    <h3 class="job-title">Engineering Manager<span class="job-status">New</span></h3>
                                </a>
                                <div class="job-location"><span class="flag"><img src="<?php echo get_stylesheet_directory_uri();?>/images/usa.png" alt=""></span>Remote, USA</div>
                                <div class="short-description">
                                    <p>We’re looking for an experienced engineering manager to join our team.</p>
                                </div>
                                <div class="type-salary">
                                    <ul>
                                        <li class="type"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-clock.png" alt=""></span>Full-time</li>
                                        <li class="salary"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-usd.png" alt=""></span>$80k - $100k</li>
                                    </ul>
                                </div>
                            </article>
                        </div>


                        <div class="item">
                            <article>
                                <a href="#">
                                    <h3 class="job-title">Engineering Manager<span class="job-status">New</span></h3>
                                </a>
                                <div class="job-location"><span class="flag"><img src="<?php echo get_stylesheet_directory_uri();?>/images/usa.png" alt=""></span>Remote, USA</div>
                                <div class="short-description">
                                    <p>We’re looking for an experienced engineering manager to join our team.</p>
                                </div>
                                <div class="type-salary">
                                    <ul>
                                        <li class="type"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-clock.png" alt=""></span>Full-time</li>
                                        <li class="salary"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-usd.png" alt=""></span>$80k - $100k</li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <a href="#">
                                    <h3 class="job-title">Engineering Manager<span class="job-status">New</span></h3>
                                </a>
                                <div class="job-location"><span class="flag"><img src="<?php echo get_stylesheet_directory_uri();?>/images/usa.png" alt=""></span>Remote, USA</div>
                                <div class="short-description">
                                    <p>We’re looking for an experienced engineering manager to join our team.</p>
                                </div>
                                <div class="type-salary">
                                    <ul>
                                        <li class="type"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-clock.png" alt=""></span>Full-time</li>
                                        <li class="salary"><span class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icon-usd.png" alt=""></span>$80k - $100k</li>
                                    </ul>
                                </div>
                            </article>
                        </div> -->

                        <v-pagination v-model="all_jobs.current_page" :page-count="all_jobs.last_page"></v-pagination>



                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    Vue.component('v-pagination', window['vue-plain-pagination'])
   new Vue({
  el: '#app',

  data () {
    return {
      all_jobs: ''
    }
  },
  mounted () {
    axios({
        method: "get",
        url: "https://api.recruitcrm.io/v1/jobs",
        headers: {
            Authorization: `Bearer Tm9-Ahlm5SRj49N-3wT1hJieeGKQfms19N4yBZsGL6g_Prbaa_nIzrZLYzlU2WauQeSRwBSQ0qBdKQF7xT55l18xNjU4MTcyOTIx`,
        },
        }).then((response) => {
            this.all_jobs = response.data;
        });
  },
  methods:{
            async list(page=1){
                await axios.get(`https://api.recruitcrm.io/v1/jobs?page=${page}`).then(({response})=>{
                    this.all_jobs = response.data;
                }).catch(({ response })=>{
                    console.error(response)
                })
            }
        }
})
</script>

<section class="steps">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content">
                    <h2 class="title">A Step Above</h2>
                    <div class="content">
                        <p>You won’t get lost in the sea of candidates when you work with our team. Our method ensures
                            timely responses, active participation with a real expert in your field, and complimentary
                            education and guidance on tough topics like negotiating compensation packages. We serve as
                            the connection point between specialized staffing organizations and ideal candidates!</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="tow-box">
                    <div class="left-box">
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/buiding-bg2.jpg" alt="">
                            <a href="#" class="hastag">#GoodToKnow</a>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="steps">
                            <ul>
                                <li>
                                    <span class="qty">100%</span>
                                    <div class="step-text"><span>Customer satisfaction</span></div>
                                </li>
                                <li>
                                    <span class="qty">100S</span>
                                    <div class="step-text"><span>Positions to choose from</span></div>
                                </li>
                                <li>
                                    <span class="qty">50</span>
                                    <div class="step-text"><span>States we service</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="candidates-testimonials">
                            <h2 class="title">What <span>Cura Candidates</span> Have To Say -</h2>
                            <div class="testimonial">
                                <div class="item">
                                    <div class="author-img">
                                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/author.png"
                                            alt="author">
                                    </div>
                                    <div class="content">
                                        <h3 class="author-info">Antonio, Recruiter</h3>
                                        <div class="text">
                                            <p>I had an incredible experience with Cura they set me up with several
                                                interviews that lead to offers. Cam does a great job of knowing the
                                                market and has a lot of information about the companies he partners
                                                with. It was awesome that within our first call Cam was able to consult
                                                with me on what opportunities would be a good fit for me and found me an
                                                amazing opportunity with a strong career path.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="bottom-text">
                    <div class="watermark">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/we-are-national.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h2 class="title">Let <span>Cura</span> help you achieve your goal.</h2>
                    <div class="btn-container">
                        <ul>
                            <li><a href="#" class="btn btn-blue-green">CONTACT US</a></li>
                            <li><a href="#" class="btn btn-find-job">Find A Job</a></li>
                        </ul>
                    </div>
                </div>
                <div class="faq-box">
                    <h3 class="faq-title">FAQ’s</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How do I apply?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can apply directly on this website on the jobs page!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    I’m looking to relocate, which states do you operate in?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Cura Search is a national business and operates in all 50 states within the USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do you negotiate for compensation packages?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our reps can best guide you based on your plans or goals and certainly get you into the right fit, including understanding budgets and market standards. We focus on balancing base salary, commission, growth, and flexibility that correctly works within the needs and wants of the candidate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Are these positions temporary or full-time?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>At this time, Cura Search only focuses on permanent positions. All are W-2 opportunities.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Which companies does Cura recruit for?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Cura Search specializes in finding and placing talent within the Healthcare, Tech, and Life Science staffing industries. We recruit Recruiters, Business Development reps, Accounting Managers, Account executives, Managers, and much more5</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();