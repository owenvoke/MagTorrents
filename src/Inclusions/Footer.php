<?php

namespace gabrielcarvalhogama\MagTorrents\Inclusions;

class Footer
{
    public function __construct()
    {
        return '
<footer>
  &copy; Copyright 2016-' . date("Y") . ' Magtorrents.com.br - All Rights Reserved
</footer>
        ';
    }
}