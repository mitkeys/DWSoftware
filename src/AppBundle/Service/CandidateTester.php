<?php
declare(strict_types=1);


namespace AppBundle\Service;


use AppBundle\Form\CandidateTesterPopo;

/**
 * Creates a result from a valid CandidateTesterPopo
 */
class CandidateTester
{
    /**
     * @var string
     */
    private $appRoot;

    /**
     * CandidateTester constructor.
     * @param string $appRoot
     */
    public function __construct(string $appRoot)
    {
        $this->appRoot = $appRoot;
    }

    /**
     * Maps a valid CandidateTesterPopo to the result
     *
     * @param CandidateTesterPopo $candidate
     * @return string
     */
    public function createResultFromCandidate(CandidateTesterPopo $candidate): string
    {
        $nacl = trim(file_get_contents($this->appRoot.DIRECTORY_SEPARATOR."config/nacl"));
        return md5($nacl.trim($candidate->getFullName()));
    }
}