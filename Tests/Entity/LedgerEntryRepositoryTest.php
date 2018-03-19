<?php

namespace MauticPlugin\MauticContactLedgerBundle\Tests\Entity;

use Mautic\CoreBundle\Tests\CommonMocks;
use MauticPlugin\MauticContactLedgerBundle\Entity\LedgerEntryRepository;

class LedgerEntryRepositoryTest extends CommonMocks
{
    /** @var \Mautic\CoreBundle\Entity\CommonRepository */
    private $repo;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->repo = $this->getMockBuilder(LedgerEntryRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testGetTableAlias()
    {
    }

    public function testGetContactCost()
    {
    }

    public function testGetContactRevenue()
    {
    }

    public function testGetContactLedger()
    {
    }
}
