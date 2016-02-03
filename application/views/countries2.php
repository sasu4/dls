<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo base_url('assets/images/intro3.png'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <h1>Naše pracoviská vo svete</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-3">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active">Naše pracoviská vo svete</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->
<style>
    #mapa {
        width: 75%;
        height: 400px;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<?php echo print_r($adressa);?>
<script type="text/javascript">
function initMap() {
    var mapCanvas = document.getElementById('mapa');
    var ar = <?php echo json_encode($adressa, JSON_UNESCAPED_UNICODE) ?>;
   // alert(ar[11]['nazov']);
    var mapOptions = {
        center: new google.maps.LatLng(48.140155, 17.113272),
        zoom: 4,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    //pridanie podla adresy
    var infoContent =null;
    for(var j=0;j<ar.length;j++) {
        var adresa = ar[j]['adresa'];
        var ustav = ar[j]['nazov'];
        var content = '<div id="content">'+'<div id="siteNotice"></div>'+
                  ustav+'<div id="bodyContent">'+'<p>'+adresa+'</p>'+'</div>'+'</div>';
        //infoContent = infoContent + [content];
    }
    
    var infoWindow = new google.maps.InfoWindow();
    
    for(var i=0;i<ar.length;i++) {
        var adresa = ar[i]['adresa'];
        var ustav = ar[i]['nazov'];
        var geocoder = new google.maps.Geocoder();                
        geocoder.geocode({
            'address': adresa
        },
        function(results, status) {
            if(status===google.maps.GeocoderStatus.OK) {
                var marker = new google.maps.Marker({
                    position: results[0].geometry.location,
                    map: map
                });   
                
                //var content = '<div id="content">'+'<div id="siteNotice"></div>'+
                  //ustav+'<div id="bodyContent">'+'<p>'+adresa+'</p>'+'</div>'+'</div>';
                
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(ustav);
                        infoWindow.open(map, this);
                    };
                })(marker, i));
                
                //google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                   // return function() {
                     //  infowindow.setContent(content);
                       //infowindow.open(map,marker);
                    //};
                //})(marker,content,infowindow)); 
                //map.setCenter(results[0].geometry.location);
            }
        }
        );
    }
    
}

google.maps.event.addDomListener(window, 'load', initMap);
</script>
<!-- Page Content -->
<section id="map-page" class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <div id="mapa"></div>
                        
            <!--<iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>-->
            <!--<iframe  width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.432688876589!2d17.116372700000003!3d48.14046289999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8941d2b09c51%3A0x7037e8b88011c966!2sGondova+70%2F2%2C+811+02+Bratislava!5e0!3m2!1ssk!2ssk!4v1436442900150"></iframe>-->
        </div><!--/.col-sm-4-->
    </div>
</section><!--/#map-page-->
<section id="countries" class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if ($coun->num_rows() > 0) {
                $i = 0;
                foreach ($coun->result() as $row) {
                    $i++;
                    $data = $this->lectorate->get_lectorate_c($row->country_id)
                    ?>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>"><i class="fa-arrow-circle-o-down"></i><?php echo $data['name_sk']; ?></i></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse in">
                                <?php
                                $lects = $this->lectorate->get_lectorate_of_country($row->country_id);
                                foreach ($lects->result() as $row2) {
                                    ?>
                                    <div class="panel-body">
                                    <?php echo anchor('profile/lectorate/' . $row2->id, $row2->name_orig); ?>
                                    </div>
        <?php } ?>
                            </div>
                        </div>
                    </div>
                    <p class="gap"></p>
                    <?php
                }
            }
            ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</section>
