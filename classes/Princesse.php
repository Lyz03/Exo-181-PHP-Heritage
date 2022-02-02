<?php

class Princesse extends Personnage
{
    private bool $saved = false;

    public function __construct() {
        parent::__construct();

        $this->x = 450;
        $this->y = 450;
    }

    /**
     * @return bool
     */
    public function isSaved(): bool
    {
        return $this->saved;
    }

    /**
     * @param bool $saved
     */
    public function setSaved(bool $saved): void
    {
        $this->saved = $saved;
    }


}