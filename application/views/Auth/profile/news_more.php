<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});</script>
<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pridať/Upraviť novinky</h3>
                </div>
                <div class="panel-body">
                    <?php if (isset($id)) {
                        ?>
                        <?php echo form_open('profile_edit/edit_news'); ?>
                        <fieldset>
                            <?php echo form_hidden('id', $id); ?>
                            <div class="form-group">
                                <?php echo form_label(' Nadpis'); ?>
                                <?php echo form_input('title', $title, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Text'); ?>
                                <?php echo form_textarea('content', $content, 'class="form-control"'); ?>
                            </div>
                            <hr />
                            <?php echo form_submit('profile_edit/edit_new', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                <?php if($this->dx_auth->is_admin()) {
                                                echo anchor('admin/news', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } else {
                                                echo anchor('profile_edit/news', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } ?>
                        <?php } else {
                            ?>
                            <?php echo form_open('profile_edit/edit_news'); ?>
                            <fieldset>
                                <?php echo form_hidden('id', NULL); ?>
                                <div class="form-group">
                                    <?php echo form_label(' Nadpis'); ?>
                                    <?php echo form_input('title', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Text'); ?>
                                    <?php echo form_textarea('content', '', 'class="form-control"'); ?>
                                </div>
                                <hr />
                                <?php echo form_submit('profile_edit/edit_news', 'Pridať', 'class="btn btn-lg btn-success btn-block"'); ?>
                                    <?php if($this->dx_auth->is_admin()) {
                                                echo anchor('admin/news', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } else {
                                                echo anchor('profile_edit/news', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } ?>
                            </fieldset>
                            <?php
                            echo form_close();
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->