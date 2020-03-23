<?php 

namespace Recipies\Integration;
use Recipies\Model\Comment;



class DbAccess {

	public function __construct()
	{

	}

	public function connect()
	{
		$connection = mysqli_connect('localhost', 'root', '', 'tastyrecipes' );

		if ($connection)
			return $connection;
		else 
			return false;
	}

	public function authUser($username, $password){

		
		$connect = $this->connect();

		$query = "SELECT * FROM users WHERE username = '$username'";

		if ($sql = mysqli_query($connect, $query))
		{

			$row = mysqli_fetch_assoc($sql);
			$hash = $row['password'];

			$verify = password_verify($password, $hash);
			if ($verify) return true;

		}
		else return false;
	}


	public function insertComment(Comment $data)
	{

		$connect = $this->connect();

		$username = $data->getName();
		$comment = $data->getComment();
		$recipe = $data->getDish();
		

		$query = "INSERT INTO `comments` (`id`, `username`, `comment`, `recipe`) VALUES (NULL, '$username', '$comment', '$recipe')";

		if ($sql = mysqli_query($connect, $query)) return true;
		else return false;
	}

	public function getComment($dish)
	{
		$connect = $this->connect();

		$query = "SELECT * FROM `comments` WHERE recipe = '$dish'";

		if ($sql = mysqli_query($connect, $query))
		{
			$comment = [];
			$i = 0;
			while ($row = mysqli_fetch_assoc($sql))
			{
				$comment[$i] = new Comment($row['username'], $row['comment'], $row['recipe'] , $row['id']);
				$i++;
			}

			return $comment;
		} 
		else return false;
	}

	public function deleteComment($id)
	{
		$username = $_SESSION['name'];
		
		$connect = $this->connect();

		$query = "DELETE FROM `comments` WHERE id = '$id' AND username = '$username'";

		if ($sql = mysqli_query($connect, $query)) return true;
		else return false;

	}
}
 ?>