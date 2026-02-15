<?php

namespace App\Services\StructuredData;

class CityGuideSchema extends SchemaBuilder
{
    protected string $id;

    protected string $name;

    protected ?string $description;

    protected ?string $imageUrl;

    protected ?array $sameAs;

    protected ?array $geo;

    public function __construct(
        string $id,
        string $name,
        ?string $description = null,
        ?string $imageUrl = null,
        ?array $sameAs = null,
        ?array $geo = null
    ) {
        $this->setContext()->setType('City');
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
        $this->sameAs = $sameAs;
        $this->geo = $geo;
    }

    public function build(): array
    {
        $this->add('@id', $this->id)
            ->add('name', $this->name)
            ->add('description', $this->description);

        if ($this->imageUrl) {
            $this->add('image', $this->url($this->imageUrl));
        }

        if ($this->sameAs) {
            $this->add('sameAs', $this->sameAs);
        }

        if ($this->geo && isset($this->geo['lat'], $this->geo['lng'])) {
            $this->add('geo', [
                '@type' => 'GeoCoordinates',
                'latitude' => $this->geo['lat'],
                'longitude' => $this->geo['lng'],
            ]);
        }

        return $this->data;
    }
}
