<?php
    namespace Controllers;
    use DAO\CinemaDAO as CinemaDAO;
    use Models\Cinema as Cinema;
    class CinemaController
    {
        private $cinemaDAO;
        public function __construct()
        {
            $this->cinemaDAO = new CinemaDAO();
        }
        public function ShowAddView()
        {
            require_once(VIEWS_PATH."cine-add.php");
        }
        public function ShowListView()
        {
            $cinemaList = $this->cinemaDAO->GetAll();
            require_once(VIEWS_PATH."cine-list.php");
        }
        public function Add($name, $address, $capacity)
        {
            $cinema = new Cinema();
            $cinema->setName($name);
            $cinema->setAddress($address);
            $cinema->setCapacity($capacity);
            $this->cinemaDAO->Add($cinema);
            $this->ShowListView();
        }

        public function Delete($name){
            $this->cinemaDAO->delete($name);
            $this->ShowListView();
        }
    }
?>

