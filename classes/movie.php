<?php
class Movie {
    private string  $title;
    private int     $duration;
    private string  $actor;

    function __construct(string $title, int $duration, string $actor) {
        $this-> title       = $title;
        $this-> duration    = $duration;
        $this-> actor       = $actor;
    }

}