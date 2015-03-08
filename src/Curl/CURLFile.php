<?php

namespace Curl;

class CURLFile
{
    public $name;
    public $mime;
    public $postname;

    public function __construct($filename, $mimetype = null, $postname= null)
    {
        // TODO
        $this->name = $filename;
    }

    public function getFilename()
    {
        // TODO
    }

    public function getMimeType()
    {
        // TODO
    }

    public function getPostFilename()
    {
        // TODO
    }

    public function setMimeType($mime)
    {
        // TODO
    }

    public function setPostFilename($postname)
    {
        // TODO
    }

    public function __wakeup()
    {
        // TODO
    }

    public function __toString()
    {
        return '@' . $this->name;
    }
}
