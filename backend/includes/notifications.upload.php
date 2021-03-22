<?php
// Checks whether errors have been set
if (isset($errors) && count($errors) > 0) 
{
    echo '
    <ul class="alert alert-danger pl-5">
    <li>'.implode('</li><li>', $errors).'</li> </ul>
    '; }
?>