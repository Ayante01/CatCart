<?php get_header(); ?>

    <section class="container-fluid">
        <div class="d-flex justify-content-center align-items-center flex-column animate__animated animate__backInDown">
            <img src="<?php echo get_template_directory_uri()."/imgs/CONTACT-IMAGE.png"; ?>" alt="ContactImage" class="img-fluid contact-image">
            <h2 class="contact-title">Cat Cart Shop Online</h2>
            <p class="contact-text text-center col-6">We are an online shop dedicated to giving the best high-quality products to bring health and comfort to your cat. Our stock building is located in Puntarenas, Costa Rica.</p>
        </div>
        <div class="values d-flex justify-content-between flex-column">
            <div class="contact-row align-self-start">
                <h2 class="contact-title">Our family</h2>
                <p class="values-text col-6">The Cat Cart family consists of three members, two web developers and a veterinarian who decided to create an online shop with a stock building located in Puntarenas, Costa Rica. 
                    Even though cats don't speak, paying attention to their daily behaviors will
                    tell a lot of how they feel. We understand the value of animal life, especially cats and its meaning for many owners. That's the reason why Cat Cart comes to market giving you the best high quality products to keep their mental and physical health by a good nutrition and comfort.</p>  
            </div>
            <div class="contact-row d-flex justify-content-between flex-column">
                <h2 class="contact-title align-self-end ">Our mission</h2>
                <p class="green align-right">Through our values of animal care, we are decided to be the best offered of nutrition and lifestyle accessories that a cat owner can have in order to bring the best health to their cat.</p>
            </div>
            <div class="contact-row align-self-start">
                <h2 class="contact-title">Our vission</h2>
                <p class="green">To be by your side on each life stage of your cat on creating memorable moments of wellness</p>
            </div>
            <div class="doctor-row d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center doctor-col">
                    <img class="doctor-image" src="<?php echo get_template_directory_uri()."/imgs/DOCTOR.png"; ?>" alt="DOCTOR">
                    <div class="doctor-container">
                        <h3 class="doctor-title">Meet our vet!</h3>
                        <p class="doctor-text">Ilse Quijada Zamora</p>
                        <p class="doctor-text">Surgery and animal medicine</p>
                        <p class="doctor-text">Graduate from Escuela Veterinaria San Franciso de Asis</p>
                    </div>
                </div>
                <div class="social-info col-2">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri()."/imgs/WHATSAPP.svg"; ?>" alt="Whatsapp" class="contact-icon">
                        <div>
                            <p class="social-text bold">Whatsapp</p>
                            <p class="social-text">+506 88101778</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center social-row">
                        <img src="<?php echo get_template_directory_uri()."/imgs/EMAIL.svg"; ?>" alt="Email" class="contact-icon">
                        <div>
                            <p class="social-text bold">E-mail</p>
                            <p class="social-text">catcart@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

<?php get_footer(); ?>