<?php

class CustomValidatedFile extends sfValidatedFile {
    /**
      * Generates a random filename for the current file.
      *
      * @return string A random name to represent the current file
      */
    public function generateFilename()
    {
        return $this->getOriginalName();
    }
}