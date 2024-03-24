<?php

declare(strict_types=1);

namespace Potter\Link;

use \Potter\Aware\{
    AwareInterface,
    AwareTrait
};

class Link extends AbstractLink implements AwareInterface
{
    use AwareTrait, LinkTrait;
    
    public function __construct(string $href = '', array $rels = [], array $attributes = [])
    {
        $this->setHref($href);
        $this->setRels($rels);
        $this->setAttributes($attributes);
    }
}