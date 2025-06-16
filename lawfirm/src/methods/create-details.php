<?php

function createDetails($title, $id, $includes, $subtitle, $icon){
    echo "
    <div class='section-plain' id='{$id}'>
    <h1><i class='material-symbols-outlined' icon-align>{$icon}</i></h1>
    <h1>{$title}</h1>

    <lb></lb>

    <details open>
        <summary>Details</summary>
        <h2>{$subtitle}</h2>
        <ul>";

    for($i = 0; $i < count($includes); $i++){
        echo "<li>{$includes[$i]}</li>";
    }

    echo "<a href='#'>Back to Top</a>";

    echo "
        </ul>
    </details>
</div>
    ";
}