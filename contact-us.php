<?php include'header.php';?>
<?php include'navbar.php';?>


<section class="banner d-flex justify-content-center align-items-center">
    <div class="b-head text-center">
        <h1 class="fw-bold">CONTACT US</h1>
        <div class="bread breadcrumb-list">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php" class="text-dark"><i class="fa-solid fa-house"></i></a></li>
                <span>&nbsp; / &nbsp;</span>
                <li aria-current="page">Contact Us</li>
            </ol>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h3>Contact Details</h3>
                <div class="info p-3 mt-1">
                    <h4>Address</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quaerat quis inventore esse impedit laborum molestiae eum quam vel rerum.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info p-3 mt-4">
                            <h4>Contact No</h4>
                            <p>1236547890</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="info p-3 mt-4">
                        <h4>Email</h4>
                        <p>mail@gmail.com</p>
                    </div>
                    </div>
                </div>
                <div class="pt-4 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59986.582642548114!2d73.77042669827989!3d20.00173898822539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb084d22ff73%3A0xe3e70a169bf7cb1b!2sRICH%20System%20Solutions%20Pvt.%20Ltd.%20%7C%20Digital%20Marketing%20%7C%20Bulk%20SMS%20%7C%20Website%20Development!5e0!3m2!1sen!2sin!4v1721823432185!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="col-lg-6 contact p-5">
                <h3>Get In Touch</h3>
                <form action="test.php" method="post">
                    
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" name="name" id="floatingPassword" placeholder="Name">
                        <label for="floatingPassword">Name</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" name="contact" id="floatingPassword" placeholder="Name">
                        <label for="floatingPassword">Phone No</label>
                    </div>
                    <div class="form-floating mt-3">
                        <select class="form-select" name="service" id="floatingSelect" aria-label="Floating label select example">
                            <option value="Land Survey">Land Survey</option>
                            <option value="Topographical Survey">Topographical Survey</option>
                            <option value="Contour Survey">Contour Survey</option>
                            <option value="Railway Survey">Railway Survey</option>
                            <option value="Facade Survey">Facade Survey</option>
                            <option value="Stake Out Survey">Stake Out Survey</option>
                            <option value="GPR Survey">GPR Survey</option>
                            <option value="Canal Survey">Canal Survey</option>
                        </select>
                        <label for="floatingSelect">Services</label>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                    <div class="btn-box mt-3 text-center">
                        
                        <input type="submit" name="submit" value="submit" class="theme-btn btn-style-one">
                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>







<?php include'footer.php';?>


