<p>Welcome to The Slovakists Around the World Database. Here you can modify your profile.</p><br>
<ul>
<?php
    echo '<li>'.anchor('profile_edit/lector','Môj profil').'</li>';
    echo '<li>'.anchor('profile_edit/workplace','Pracovisko').'</li>';
    echo '<li>'.anchor('profile_edit/head','Vedúci pracoviska').'</li>';
    echo '<li>'.anchor('profile_edit/types_of_study','Typy štúdia').'</li>';
    echo '<li>'.anchor('profile_edit/publication','Publikácie').'</li>';
    echo '<li>'.anchor('profile_edit/students','Študenti').'</li>';
    echo '<li>'.anchor('profile_edit/activities','Aktivity').'<ul>';
        echo '<li>'.anchor('profile_edit/add_activities/1','Vzdelávanie').'</li>';
        echo '<li>'.anchor('profile_edit/add_activities/2','Veda').'</li>';
        echo '<li>'.anchor('profile_edit/add_activities/3','Kultúra').'</li>';
    echo '</ul>'.'</li>';
    echo '<li>'.anchor('profile_edit/additional','Ďalšie informácie').'</li>';
?>
    </ul>
<br>