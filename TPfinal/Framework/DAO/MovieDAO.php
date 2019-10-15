<?php
    namespace DAO;
    use Models\Movie as Movie;
    class MovieDAO 
    {
        private $movieList = array();
        public function Add(Movie $movie)
        {
            $this->RetrieveData();
            
          array_push($this->movieList, $movie);
          $this->SaveData();
           
        }
        public function GetAll()
        {
            $this->RetrieveData();
            return $this->movieList;
        }
        private function SaveData()
        {
            $arrayToEncode = array();
            foreach($this->movieList as $movie)
            {
                $valuesArray=array();
                $valuesArray["name"] = $movie->getName();
                $valuesArray["language"] = $movie->getLanguage();
                $valuesArray["image"] = $movie->getImage();
                array_push($arrayToEncode, $valuesArray);
            }
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('movie.json', $jsonContent);
        }
        

        private function RetrieveData()
        {
            $this->movieList = array();

            $jsonContent = file_get_contents("https://api.themoviedb.org/3/movie/now_playing?api_key=5de19b6adfed779f6f309d15cb9b2da2");
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
                //var_dump($arrayToDecode["results"]);
                foreach($arrayToDecode["results"] as $valuesArray)
                {
                    $movie = new Movie();
                    $movie->setName($valuesArray["original_title"]);
                    $movie->setLanguage($valuesArray["original_language"]);
                    $movie->setImage($valuesArray["poster_path"]);
                    array_push($this->movieList, $movie);
                }
            }
        }
    
?>

