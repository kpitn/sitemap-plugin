<?php

namespace SitemapPlugin\Provider;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
interface UrlProviderInterface
{
    /**
     * @return array
     */
    public function generate();

    /**
     * @return string
     */
    public function getName();
}
