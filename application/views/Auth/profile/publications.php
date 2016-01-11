<section> <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Publikácie pracoviska</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Uveďte všetky publikácie, ktoré sa týkajú slovenského jazyka a kultúry a vznikli v rámci Vášho pracoviska. Zo zoznamu vyberte všetky relevantné kategórie a uveďte bibliografický údaj v podobe: <br>Priezvisko, Meno. Rok. Názov publikácie. In Názov zborníku/časopisu. Mesto : Vydavateľstvo, rok, s. od-do. ISBN. (Opäť nás zaujímajú predovšetkým aktivity za posledné tri roky.)
                    </div>


                    <?php if ($query->num_rows() > 0) { ?>
                    <table class="table table-striped">
                            <?php foreach ($query->result() as $row) {
                                ?>
                            <tr>
                                <td><?php echo $row->publication_info . ' (' . $row->year . ') - ' . $row->category; ?>
                                        </td> 
                                        <td>
                                                    <?php
                                                    echo anchor('profile_edit/publication_more/' . $row->id, 'Upraviť', 'class="btn btn-outline btn-success btn-xs"');
                                                    echo ' ' . anchor('home' . $row->id, 'Odstrániť', 'class="btn btn-outline btn-danger btn-xs"');
                                                    ?>

                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                        <?php } ?>
                        <hr />
                        <?php echo anchor('profile_edit/add_publication', 'Pridať novú publikáciu', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php if($this->dx_auth->is_admin()) {
                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } else {
                                echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>