<p>Welcome to The Slovakists Around the World Database.</p><br>

<table align="center">
<?php
$id = 0;
if ($coun->num_rows() > 0) {
    foreach ($coun->result() as $row) {
        $data = $this->lectorate->get_lectorate_c($row->country_id);
        if($id!=$row->country_id) {
            if($id!=0) {
                echo '</ul></td></tr>';
            }
            echo '<tr><td><b>';
            echo anchor('country/'.$data['id'],$data['name']).'</b><ul>';
            echo '<li>';
            echo anchor('profile/lectorate/'.$row->id,$row->name_orig);
            echo '</li>';
        } else {
            echo '<li>';
            echo anchor('profile/lectorate/'.$row->id,$row->name_orig);
            echo '</li>';
        }
        $id = $row->country_id;
    }
    echo '</ul></td></tr>';
}
?>
  
<!--    <tr><td><ul><li>Sofia</li></ul></td><td></td><td></td></tr>
    <tr><td><ul><li>Veľké Tarnovo</li></ul></td><td></td><td></td></tr>
    <tr><td><b>Čína</b></td><td></td><td></td></tr>
    <tr><td><b>Chorvátsko</b></td><td></td></tr>
    <tr><td><b>Fínsko</b></td><td> Rumunsko</td></tr>
    <tr><td><b>Francúzsko</b></td></tr>
    <tr><td><ul><li>Clermont - Ferrand</li></ul></td><td></td><td></td></tr>
    <tr><td><ul><li>Paríž</li></ul></td><td></td><td></td></tr>
    <tr><td><ul><li>Štrasburg</li></ul></td><td></td><td></td></tr>
    <tr><td><b>Maďarsko</b></td></tr>
    <tr><td> Nemecko</td></tr>
    <tr><td> Poľsko</td></tr>
    <tr><td> Rakúsko</td></tr>
    <tr><td> Rumunsko</td></tr>
    <tr><td> Rusko</td></tr>
    <tr><td> Slovinsko</td></tr>
    <tr><td> Srbsko</td></tr>
    <tr><td> Taliansko</td></tr>
    <tr><td> USA - Spojené štáty americké</td></tr>
    <tr><td> Ukrajina</td></tr>-->
</table>
<?php
    echo anchor('home/pages/about','About');
    echo '<br>';
    echo anchor('home/pages/services','Services');
    echo '<br>';
    echo anchor('home/pages/people','People');
    echo '<br>';
    echo anchor('home/pages/contact','Contact');
    echo '<br>';
    echo anchor('home/pages/sas','SAS');
    echo '<br>';
    echo anchor('home/pages/more','More activities');
?>
<br>
<!--<h2>Lectorates</h2>-->
<?php
//if ($list->num_rows() > 0) {
//    foreach ($list->result() as $row) {
//        echo anchor('lectorate/lect/'.$row->id,$row->name_orig);
//        echo '<br>';
//    }
//}?>
<!--<h2>Countries</h2>-->
<?php
//if ($coun->num_rows() > 0) {
//    foreach ($coun->result() as $row) {
//        $data = $this->lectorate->get_lectorate_c($row->country_id);
//        echo anchor('country/'.$data['id'],$data['name']);
//        echo '<br>';
//    }
//}

    