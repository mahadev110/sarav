<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page
    exit();
}
?>

<?php
include "includes/header.php";
include "includes/navbar.php";
?>



<!-- Header Start -->
<div class="container-fluid bg-light my-6 mt-0" id="home">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                <!-- <h3 class="text-primary mb-3">Project</h3> -->
                <h1 class="display-3 mb-3">ORION</h1>
                <h2 class="typed-text-output d-inline"></h2>
                <div class="typed-text d-none">Streamlining IT Excellence</div>
                <p class="mt-5">Enhance IT operations with intelligent automation, proactive monitoring, and seamless
                    infrastructure management.</p>


            </div>
            <div class="col-lg-6 text-center">
                <div class="image-frame">
                    <img class="img-fluid" src="img/orion-slide1.jpg" alt="Orion Image">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Header End -->

<!-- orion Start -->
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



<?php include "includes/footer.php"; ?>