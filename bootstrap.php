<?php

declare(strict_types=1);

spl_autoload_register(
      function ($className) {
          $path = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $className . '.php';
          if (file_exists($path)) {
                require_once($path);
          }
      }
);
