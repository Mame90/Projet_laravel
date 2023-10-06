<?php


namespace class;
use class\Traits\Mailable;


 class Invoice
{
    use Mailable;
    public function download():string
    {
        return 'Download';
    }
 
}
?>