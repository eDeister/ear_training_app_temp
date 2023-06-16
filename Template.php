<?php
class Template
{
    private $file;

    public function render($file, $data = [])
    {
        if (file_exists($file)) {
            $this->file = $file;
            extract($data);
            include $this->file;
        } else {
            throw new Exception('Template file not found.');
        }
    }
}
