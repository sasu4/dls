<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Naozaj si želáte odstrániť vybranú položku?</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-6"><div class="left">
                <?php 
                    echo anchor('profile_edit/delete_activity/'.$id,'Odstrániť','class="btn btn-lg btn-danger"');
                ?>
                    </div></div>
                    <div class="col-md-6"> <div class="right">
                <?php
                    echo anchor('profile_edit/activities','Zrušiť','class="btn btn-lg btn-primary"');
                ?>
                    </div></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>