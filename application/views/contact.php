<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Kontakt</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active">Kontakt</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="contact-page" class="container">
    <div class="row">
        <div class="col-sm-8">
            <h4>Napíšte nám</h4>
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="meno">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="priezvisko">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="email">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Poslať správu</button>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="správa"></textarea>
                    </div>
                </div>
            </form>
        </div><!--/.col-sm-8-->
        <div class="col-sm-4">
            <h4>Kde nás nájdete</h4>
            <!--<iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>-->
            <iframe  width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.432688876589!2d17.116372700000003!3d48.14046289999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8941d2b09c51%3A0x7037e8b88011c966!2sGondova+70%2F2%2C+811+02+Bratislava!5e0!3m2!1ssk!2ssk!4v1436442900150"></iframe>
        </div><!--/.col-sm-4-->
    </div>
</section><!--/#contact-page-->

