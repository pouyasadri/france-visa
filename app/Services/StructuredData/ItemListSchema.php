<?php

namespace App\Services\StructuredData;

class ItemListSchema extends SchemaBuilder
{
    protected array $items = [];

    protected ?string $name = null;

    protected ?string $itemListOrder = null;

    public function __construct(?string $name = null, ?string $itemListOrder = 'https://schema.org/ItemListOrderAscending')
    {
        $this->setContext()->setType('ItemList');
        $this->name = $name;
        $this->itemListOrder = $itemListOrder;
    }

    public function addItem(int $position, string $url, string $name, ?string $imageUrl = null): self
    {
        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'item' => [
                '@type' => 'WebPage',
                '@id' => $this->url($url),
                'url' => $this->url($url),
                'name' => $name,
            ],
        ];

        if ($imageUrl) {
            $item['item']['primaryImageOfPage'] = [
                '@type' => 'ImageObject',
                'url' => $this->url($imageUrl),
            ];
        }

        $this->items[] = $item;

        return $this;
    }

    public function build(): array
    {
        $this->add('name', $this->name)
            ->add('itemListOrder', $this->itemListOrder)
            ->add('itemListElement', $this->items);

        return $this->data;
    }
}
