<?php


    class router {
        private $serverRequest;
        private $contentPost;
        private $collectionCuisine;
        private $paramUri;

        private function getPath() {
            //Checks if there is more than one '/' for path a nd params
            if(!isset($this->routeElements[2])) {
                return false;
            }

            $params = explode('?', $this->routeElements[2]);
        }

        public function actionRequest() {
            return $this->execute();
        }

        public function execute() {

        }
    }
?>