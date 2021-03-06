<?php

namespace spec\SitemapPlugin\Factory;

use PhpSpec\ObjectBehavior;
use SitemapPlugin\Factory\SitemapUrlFactory;
use SitemapPlugin\Factory\SitemapUrlFactoryInterface;
use SitemapPlugin\Model\SitemapUrl;
use SitemapPlugin\Model\SitemapUrlInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class SitemapUrlFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SitemapUrlFactory::class);
    }

    function it_implements_sitemap_url_factory_interface()
    {
        $this->shouldImplement(SitemapUrlFactoryInterface::class);
    }

    function it_creates_empty_sitemap_url()
    {
        $this->createNew()->shouldBeLike(new SitemapUrl());
    }
}
