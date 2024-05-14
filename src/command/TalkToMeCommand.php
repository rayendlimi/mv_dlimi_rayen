<?php

use app\Repository\VinylMixRepository;
use Symfony\Component\Console\Command\Command;

class TalkToMeCommand extends Command
{
public function __construct(
    private VinylMixRepository $vinylMixRepository
)
{}

}