<?php

function createMenu($arrayMenu) 
{
    if (!is_array($arrayMenu) || !count($arrayMenu)) 
    {
        return;
    }
    foreach ($arrayMenu as $key => $value) 
    {
        echo "<a href='category.php?id={$key}' class='btn btn-default'>";
        echo $value;
        echo '</a>';
    }
    echo '</ul>';
}

 function getAllCategories() {
        $result = array();

        $query = "SELECT id, name FROM categorias"
        or die("Error in the consult.."
            . mysqli_error($link));
        $queryResult = $this->link->query($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row["name"];
        }

        return $result;
    }