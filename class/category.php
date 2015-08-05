<?php

class Category extends DbConnect
{
	public function getAllCategories()
	{
        $result = array();

        $query = "SELECT id, name FROM categorias";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row["name"];
        }

        return $result;		
	}

    public function createMenu($arrayMenu) 
    {
        if (!is_array($arrayMenu) || !count($arrayMenu)) 
        {
            return;
        }
         //echo '<ul>';
        foreach ($arrayMenu as $key => $value) 
            {
                echo '<a href="category.php?id={$key}">';
                echo $value;
                echo '</a>';
            }
        //echo '</ul>';
    }

}