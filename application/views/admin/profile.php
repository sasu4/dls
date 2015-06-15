<p>Welcome to The Slovakists Around the World Database. Here you can modify your profile.</p><br>
<ul>
<?php
    echo '<li>'.anchor('profile_edit/lector'.$id,'Môj profil').'</li>';
    echo '<li>'.anchor('profile_edit/workplace'.$id,'Pracovisko').'</li>';
    echo '<li>'.anchor('profile_edit/head'.$id,'Vedúci pracoviska').'</li>';
    echo '<li>'.anchor('profile_edit/types_of_study'.$id,'Typy štúdia').'</li>';
    echo '<li>'.anchor('profile_edit/publication'.$id,'Publikácie').'</li>';
    echo '<li>'.anchor('profile_edit/students'.$id,'Študenti').'</li>';
    echo '<li>'.anchor('profile_edit/activities'.$id,'Aktivity').'</li>';
    echo '<li>'.anchor('profile_edit/additional'.$id,'Ďalšie informácie').'</li>';
?>
    </ul>
<br>