<?php get_header(); ?>

    <section class="container-fluid">
        <div class="d-flex justify-content-center align-items-center flex-column animate__animated animate__backInDown">
            <img src="<?php echo get_template_directory_uri()."/imgs/CONTACT-IMAGE.png"; ?>" alt="ContactImage" class="img-fluid contact-image">
            <h2 class="contact-title">Cat Cart Tienda En linea</h2>
            <p class="contact-text text-center col-6">Somos una tienda online dedicada a dar los mejores productos de alta calidad para aportar salud y comodidad a tu gato. Nuestro almacén se encuentra en Puntarenas, Costa Rica.</p>
        </div>
        <div class="values d-flex justify-content-between flex-column">
            <div class="contact-row align-self-start">
                <h2 class="contact-title">Nuestra Familia</h2>
                <p class="values-text col-6">La familia Cat Cart está formada por tres miembros, dos desarrolladores web y una veterinario, quienes decidieron crear una tienda online con almacén ubicado en Puntarenas, Costa Rica.
                Aunque los gatos no hablan, prestar atención a sus comportamientos diarios nos ayudara a entender mejor como se sienten. Entendemos el valor de la vida animal, especialmente los gatos y su significado para muchos propietarios. Esa es la razón por la que Cat Cart llega al mercado brindándote los mejores productos de alta calidad para mantener su salud mental y física mediante una buena nutrición y comodidad.
                   
                   </p>  
            </div>
            <div class="contact-row d-flex justify-content-between flex-column">
                <h2 class="contact-title align-self-end ">Nuestra Mision</h2>
                <p class="green align-right">A través de nuestros valores de cuidado animal, estamos decididos a ser la mejor oferta de accesorios de nutrición y estilo de vida que un dueño de gato puede tener para brindarle la mejor salud a su gato.</p>
            </div>
            <div class="contact-row align-self-start">
                <h2 class="contact-title">Nuestra Visión</h2>
                <p class="green">Estar siempre a tu lado en cada etapa de la vida de tu gato para crear momentos memorables de bienestar.</p>
            </div>
            <div class="doctor-row d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center doctor-col">
                    <img class="doctor-image" src="<?php echo get_template_directory_uri()."/imgs/DOCTOR.png"; ?>" alt="DOCTOR">
                    <div class="doctor-container">
                        <h3 class="doctor-title">Conoce a nuestra veterinaria!</h3>
                        <p class="doctor-text">Ilse Quijada Zamora</p>
                        <p class="doctor-text">Cirugía y medicina animal</p>
                        <p class="doctor-text">Graduada de la Escuela Veterinaria San Franciso de Asis</p>
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

    <?php get_footer("sp"); ?>