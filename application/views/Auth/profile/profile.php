<p>Welcome to The Slovakists Around the World Database. Here you can modify your profile.</p><br>
<ul>
<?php
    echo '<li>'.anchor('profile/lector','Môj profil').'</li>';
    echo '<li>'.anchor('profile/workplace','Pracovisko').'</li>';
    echo '<li>'.anchor('profile/head','Vedúci pracoviska').'</li>';
    echo '<li>'.anchor('profile/types_of_study','Typy štúdia').'</li>';
    echo '<li>'.anchor('profile/publication','Publikácie').'</li>';
    echo '<li>'.anchor('profile/students','Študenti').'</li>';
    echo '<li>'.'Aktivity'.'<ul>';
        echo '<li>'.anchor('profile/add_activities/1','Vzdelávanie').'</li>';
        echo '<li>'.anchor('profile/add_activities/2','Veda').'</li>';
        echo '<li>'.anchor('profile/add_activities/3','Kultúra').'</li>';
    echo '</ul>'.'</li>';
    echo '<li>'.anchor('profile/additional','Ďalšie informácie').'</li>';
?>
    </ul>
<br>