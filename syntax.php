<?php

namespace MyCompany\Model;

class Office
{
        private $id;
        private $name;
        private $status;

        public function get_id() {
                return $this->id;
        }

        protected function get_status() {
                return $this->status;
        }

        protected function get_names() {
                return $this->name;
        }

        private function get_name() {
                // ...
        }
}

// EOF
