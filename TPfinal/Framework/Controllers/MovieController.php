<?php
    namespace Controllers;
    use DAO\MovieDAO as MovieDAO;
    use Models\Movie as Movie;
    class MovieController
    {
        private $movieDAO;
        public function __construct()
        {
            $this->movieDAO = new MovieDAO();
        }

        public function ShowAddView()
        {
            require_once(VIEWS_PATH."movie-add.php");
        }
   
       
        public function ShowListView()
        {
            $movieList = $this->movieDAO->GetAll();
            require_once(VIEWS_PATH."movie-list.php");
        }
        public function Add($name, $language, $image)
        {
            $movie = new Movie();
            $movie->setName($name);
            $movie->setLanguage($language);
            $movie->setImage($image);
            $this->movieDAO->Add($movie);
            $this->ShowListView();
        }
    }
?>
