<?php

class Page
{
    private $template;
    private $data;

    public function __construct($templatePath)
    {
        $this->template = file_get_contents($templatePath);
    }

    public function SetData($data)
    {
        $this->data = $data;
    }

    public function Render()
    {
        if (!empty($this->data)) {
            foreach ($this->data as $key => $value) {
                $this->template = str_replace("{{$key}}", $value, $this->template);
            }
        }

        echo $this->template;
    }
}
