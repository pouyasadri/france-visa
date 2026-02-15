<?php

namespace App\Services\StructuredData;

class BreadcrumbSchema extends SchemaBuilder
{
    protected array $items = [];

    public function __construct()
    {
        $this->setContext()->setType('BreadcrumbList');
    }

    /**
     * Add breadcrumb item
     */
    public function addItem(string $name, string $url, int $position): self
    {
        $this->items[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name,
            'item' => $this->url($url),
        ];

        return $this;
    }

    /**
     * Build breadcrumb schema
     */
    public function build(): array
    {
        $this->add('itemListElement', $this->items);

        return $this->data;
    }

    /**
     * Create breadcrumbs from array
     */
    public static function fromArray(array $items): self
    {
        $schema = new self;
        $position = 1;

        foreach ($items as $item) {
            $schema->addItem($item['name'], $item['url'], $position);
            $position++;
        }

        return $schema;
    }
}
