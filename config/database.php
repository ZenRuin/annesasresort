<?php
    class Env {
        protected $data = [];

        public function __construct($envFilePath = '.env') {
            $this->load($envFilePath);
        }

        protected function load($envFilePath) {
            if (!file_exists($envFilePath)) {
                throw new Exception("Environment file not found: $envFilePath");
            }

            $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            foreach ($lines as $line) {
                if (strpos(trim($line), '#') === 0) {
                    continue;
                }

                if (strpos($line, '=') !== false) {
                    list($key, $value) = explode('=', $line, 2);
                    $this->data[trim($key)] = trim($value);
                }
            }
        }

        public function get($key, $default = null) {
            return $this->data[$key] ?? $default;
        }
    }

    $envFilePath = __DIR__ . '/../../.env';
    $env = new Env($envFilePath);

?>