<?php
 namespace Source;

 class Renderer{
    public function __construct(private string $viewpath)
    {}

    public function view()
    {
        ob_start();

        require BASE_VIEW_PATH. $this->viewpath. ' .php';

        return ob_get_clean();
     
    }
    public static function make(string $viewpath) :static
    {
        return new static($viewpath);
    }
    public function __toString()
    {
        return $this->view();
    }

    }
    


?>