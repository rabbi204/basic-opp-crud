<?php 

	/**
	 * Student Data Management
	 */
	class Student extends DB
	{
		/*
		*	Student add to database by userRegistration
		 */
		public function userRegistration($name,$email,$cell,$uname)
		{
			$sql = "INSERT INTO students (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')";
			$data = parent::dbConnection() -> query($sql);

			if ($data) {

				return "<p class= \"alert alert-success \"> Student added Succesfully <button class=\"close\" 
				data-dismiss=\"alert\"> &times; </button></p>";
			}
		}

		/**
		 * student data fetch
		 */
		public function userShow()
		{
			$sql = "SELECT *FROM students";
			$data = parent::dbConnection() -> query($sql);

			return $data;
		}


		/**
		 * Student data delete by id;
		 */
		public function studentDestroy($id)
		{
			$sql = "DELETE FROM students WHERE id='$id' ";
			$data = parent::dbConnection() -> query($sql);

			if ($data) {

				return "<p class= \"alert alert-success \"> Student Data Deleted Succesfully <button class=\"close\" 
				data-dismiss=\"alert\"> &times; </button></p>";
			}
		}


	}


 ?>