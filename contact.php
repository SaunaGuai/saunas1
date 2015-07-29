<?php 
        require_once ("Includes/simplecms-config.php"); 
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         
?>



<section class="no-margin">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
        src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed">
        </iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contáctenos</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendmail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="input-block-level" required="required" placeholder="Tú nombre">
                        <label>Apellido</label>
                        <input type="text" name="apellido" class="input-block-level" required="required" placeholder="Tú Apellido">
                        <label>Email</label>
                        <input type="text" name="email" class="input-block-level" required="required" placeholder="Tú correo electrónico">
                    </div>
                    <div class="span7">
                        <label>Mensaje</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Enviar Mensaje</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Nuestra Dirección</h4>
            <p>Nos encontramos en la ciudad de Aregua en cercanias del lago Ypakarai.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane, New York<br>
                Lafayette, 1212,  United States
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;email@example.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+123 45 67 89
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.saunasguai.com.py
            </p>
        </div>

    </div>

</section>


<?php 
    include ("Includes/footer.php");
 ?>