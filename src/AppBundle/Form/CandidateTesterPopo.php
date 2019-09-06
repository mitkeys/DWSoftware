<?php
declare(strict_types=1);


namespace AppBundle\Form;


use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Validation object for the test
 */
class CandidateTesterPopo
{
    /**
     * @var string
     */
    private $_name;

    /**
     * @var EntityManager
     */
    private $_em;

    /**
     * CandidateTesterPopo constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }

    /**
     * @param ExecutionContextInterface $context
     * @Assert\Callback()
     */
    public function validateName(ExecutionContextInterface $context): void
    {
        // The following statement should not be removed (although it can be changed) in order to
        // continue with the test
       
        $candidatesWithProvidedName = $this->_em->getConnection()->executeQuery(
            'SELECT CONCAT(42, ", ", \'an existing candidate\')',
            ['name' => $this->_name],
            ['name' => \PDO::PARAM_STR]
        )->fetchColumn(0);

        if ($candidatesWithProvidedName !== "42, an existing candidate") {
            $context->buildViolation('Candidate "%name%" is not an existing candidate', [
                '%name%' => $this->_name,
            ])->atPath('name')->addViolation();
        }
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return "42, {$this->_name}";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }
}