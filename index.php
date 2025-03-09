<?php 
include "includes/header.php"; 
include "includes/navbar.php"; 
include "includes/slider.php"; 
?>
    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">17</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">Expert in Multi-Cloud, DevOps & Automation | Driving Scalable Solutions
                            & Continuous Innovation</h3>
                    </div>
                    <p class="mb-4">I would enjoy fast paced environment contributing for multiple projects.</p>
                    <p class="mb-4"><strong>Technical:</strong> AWS, Azure, GCP , Consul, Docker, Chef, packer,
                        Terraform, NoSQL, Microservices, Sumologic, Jenkins, Bamboo, Stash, github, artifactory, Python,
                        redis, golang, grafana, vault, Kubernetes,
                        Qualys</p>

                    <!-- <p class="mb-4"><strong> Specialties:</strong> Multi-cloud, Kubernetes, Monitoring,
                        incident management, devtools, Automation,
                        Continuous delivery, Version control, Tool migrations, Extending tools, Continuous Integration,
                        Docker, Atlasssian Specialist, AWS, Change and Release Management, Audit compliance, Deployment,
                        Plugin Development, Build & Release, Service Discovery </p> -->
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Expert in Multi-Cloud & DevOps
                        – Specialized in AWS, Azure, GCP, Kubernetes, and automation.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Seamless CI/CD & Deployment –
                        Ensuring smooth workflows with Terraform, Docker, and Jenkins.</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Reliable & Scalable Solutions –
                        Building high-performance, secure, and future-ready infrastructures.</p>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-3.webp" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src="img/about-4.webp" alt="">
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Technical</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2>
                    </div>
                    <p class="mb-4">AWS, Azure, GCP , Consul, Docker, Chef, packer,
                        Terraform, NoSQL, Microservices, Sumologic, Jenkins, Bamboo, Stash, github, artifactory, Python,
                        redis, golang, grafana, vault, Kubernetes,
                        Qualys</p> -->
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Specialties</h5>
                        <!-- <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">1234</h2> -->
                    </div>
                    <p class="mb-0">Multi-cloud, Kubernetes, Monitoring,
                        incident management, devtools, Automation,
                        Continuous delivery, Version control, Tool migrations, Extending tools, Continuous Integration,
                        Docker, Atlasssian Specialist, AWS, Change and Release Management, Audit compliance, Deployment,
                        Plugin Development, Build & Release, Service Discovery</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">DevOps, Cloud Computing, and Platform Engineering, I have a proven track record of
                        driving infrastructure automation, CI/CD pipelines, and cloud-native solutions. Having worked
                        with industry leaders like Informatica, Elementum, Qualys, Qualcomm, and HP Autonomy, I
                        specialize in multi-cloud environments (AWS, Azure, GCP), Kubernetes, automation, and security
                        operations.</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">DevOps</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Cloud Computing</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Amazon Web Services (AWS)</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="95"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Kubernetes</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Docker</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Jenkins</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Python</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Security Operations</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Microsoft Azure</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Google Cloud Platform (GCP)</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">GitOps</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">FluxCD & Argo</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill"
                                href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill"
                                href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Director of Platform Engineering & Infrastructure</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">9 yrs 6 mos</p>
                                    <p class="mb-0">Informatica, Redwood City, California, United States</p>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Sr. Software Engineer - DevOps</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Dec 2014 - Nov 2015 · 1 yr</p>
                                    <p class="mb-0">Elementum, San Francisco Bay Area</p>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Senior DevOps Engineer / DevOps Engineer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Jan 2012 - Dec 2014 · 3 yrs</p>
                                    <p class="mb-0">Qualys, San Francisco Bay Area</p>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Senior Software Developer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Feb 2011 - Jan 2012 · 1 yr</p>
                                    <p class="mb-0">Qualcomm, San Francisco Bay Area</p>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Software Engineer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Oct 2008 - Feb 2011 · 2 yrs 5 mos</p>
                                    <p class="mb-0">HP Autonomy, Bengaluru Area, India</p>
                                </div>
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Organizational Leadership</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Feb 2023 - Mar 2023</p>
                                    <p class="mb-0">Stanford University Graduate School of Business</p>
                                </div>
                                <div class="col-sm-6">
                                    <h5>BE, Electrical & Electronics</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Anna University, Chennai</p>
                                    <p class="mb-0">Activities: Drama Artist, Mono Acting</p>

                                </div>
                                <div class="col-sm-6">
                                    <h5>Higher Secondary, Computer Software Engineering</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">Arasunagar Matriculation (Ramakrishna Mission)</p>
                                    <p class="mb-0">Activities: All that's covered in 12 years of schooling and more</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-cloud fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Cloud Infrastructure</h4>
                            <h6 class="mb-3">Expert solutions for scalable cloud systems</h6>
                            <span>Design, deploy, and manage cloud-based solutions to enhance performance, security, and
                                efficiency.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-cogs fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">DevOps Engineering</h4>
                            <h6 class="mb-3">Streamlined development and operations</h6>
                            <span>Automate workflows, CI/CD pipelines, and infrastructure management for agile software
                                deployment.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-shield-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Cybersecurity</h4>
                            <h6 class="mb-3">Protect your digital assets</h6>
                            <span>Implement robust security frameworks to safeguard data, networks, and applications
                                from threats.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-server fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Infrastructure Management</h4>
                            <h6 class="mb-3">Efficient IT operations</h6>
                            <span>Optimize IT infrastructure with proactive monitoring, automation, and maintenance
                                strategies.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/proj_orion.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1 arrow-btn" href="login.php">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="ms-sm-4 mt-3">
                            <h4 class="mb-3">Orion</h4>
                            <h6 class="mb-3">Streamlining IT Excellence</h6>
                            <span>Enhance IT operations with intelligent automation, proactive monitoring, and seamless infrastructure management.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/mlstudio.png" alt="">
                        <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1 arrow-btn" href="#">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="ms-sm-4 mt-3">
                            <h4 class="mb-3">ML Studio</h4>
                            <h6 class="mb-3">Empowering AI Innovation</h6>
                            <span>Accelerate machine learning workflows with cutting-edge tools, optimized data pipelines, and scalable AI solutions.</span>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">2100 Seaport Blvd, Redwood City, CA 94063</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold"> (650) 385-5000</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">info@example.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Have a project in mind? Let's discuss how we can bring your ideas to life.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6329.701850933384!2d-122.205204!3d37.511434!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fa2f5dfdc5097%3A0xc479e59839708591!2sInformatica%20LLC!5e0!3m2!1sen!2sus!4v1741546743558!5m2!1sen!2sus"
                    frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
         
        </div>
    </div>
    <!-- Map End -->

<?php include "includes/footer.php"; ?>

