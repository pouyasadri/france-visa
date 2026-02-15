<?php

namespace App\Services\StructuredData;

class UniversitySchema extends SchemaBuilder
{
    protected string $id;

    protected string $name;

    protected string $url;

    protected ?string $description;

    protected ?string $logoUrl;

    protected ?array $sameAs;

    public function __construct(
        string $id,
        string $name,
        string $url,
        ?string $description = null,
        ?string $logoUrl = null,
        ?array $sameAs = null
    ) {
        $this->setContext()->setType('CollegeOrUniversity');
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->description = $description;
        $this->logoUrl = $logoUrl;
        $this->sameAs = $sameAs;
    }

    public function build(): array
    {
        $this->add('@id', $this->id)
            ->add('name', $this->name)
            ->add('url', $this->url)
            ->add('description', $this->description);

        if ($this->logoUrl) {
            $this->add('logo', [
                '@type' => 'ImageObject',
                'url' => $this->url($this->logoUrl),
            ]);
        }

        if ($this->sameAs) {
            $this->add('sameAs', $this->sameAs);
        }

        return $this->data;
    }
}
