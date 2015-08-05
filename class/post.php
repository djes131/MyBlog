<?php 

class Post extends DbConnect
{
	const POST_TABLE = 'post';

	public function getPostById($id)
	{
		$result = array();
		$id = mysqli::real_escape_string($id);
        $query = "SELECT * FROM.self::POST_TABLE. WHERE id = $id";
        $queryResult = $this->runQuery($query);
        while($row = mysqli_fetch_array($queryResult)) {
        	$result = $row;
        }

        return $result;
	}

	public function getPostByCategoryId($categoryId, $limit = false)
	{
		$result = array();
		$categoryId = mysqli::real_escape_string($categoryId);
		$limit = $limit*1;

        $query = "SELECT * FROM .self::POST_TABLE. WHERE category_id = $categoryId";
        if ($limit) {
        	$query .= ' LIMIT '.$limit;
        }
        $queryResult = $this->runQuery($query);
        while($row = mysqli_fetch_array($queryResult)) {
        	$result[$row['id']] = $row;
        }
        
        return $result;
	}

	public function getPostByUserId($userId)
	{
		$result = array();
        $query = "SELECT * FROM.self::POST_TABLE. WHERE author_id = $userId";
        $queryResult = $this->runQuery($query);
        while($row = mysqli_fetch_array($queryResult)) {
        	$result = $row;
        }
        
        return $result;
	}

	public function getFiveLastPosts($limit=5)
    {
        $result = array();

        $query = "SELECT * FROM post  ORDER BY creat_at DESC LIMIT $limit";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) 
        {
            echo "<H3>".$row['title']."</H3>";
            if(isset($row['img'])&&!empty($row['img'])){
                echo '<p class="leftimg"><img src="'.$row['img'].'">' ."</p>";
            }else{
                echo "";}
            
            echo $row['text'];
            echo "<br/><i>Создано:".$row['creat_at']."</i>";
            echo "<br>";
        }
        
        return $result;
    }
}