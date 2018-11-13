<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedri
 * Date: 12/11/2018
 * Time: 13:13
 */

namespace Album\Model;


class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
    }
}