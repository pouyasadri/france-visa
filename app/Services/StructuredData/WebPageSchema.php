<?php

namespace App\Services\StructuredData;

class WebPageSchema extends SchemaBuilder
{
    protected string $url;

    protected string $name;

    protected ?string $description;

    protected ?string $inLanguage;

    protected ?string $aboutId;

    protected ?string $primaryImageUrl;

    public function __construct(
        string $url,
        string $name,
        ?string $description = null,
        ?string $inLanguage = null,
        ?string $aboutId = null,
        ?string $primaryImageUrl = null
    ) {
        $this->setContext()->setType('WebPage');
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->inLanguage = $inLanguage;
        $this->aboutId = $aboutId;
        $this->primaryImageUrl = $primaryImageUrl;
    }

    public function build(): array
    {
        $baseUrl = rtrim(config('app.url'), '/');
        $websiteId = $baseUrl.'/#website';

        $this->add('@id', $this->url)
            ->add('url', $this->url)
            ->add('name', $this->name)
            ->add('description', $this->description)
            ->add('isPartOf', ['@id' => $websiteId]);

        if ($this->inLanguage) {
            $this->add('inLanguage', $this->inLanguage);
        }

        if ($this->aboutId) {
            $this->add('about', ['@id' => $this->aboutId]);
        }

        if ($this->primaryImageUrl) {
            $this->add('primaryImageOfPage', [
                '@type' => 'ImageObject',
                'url' => $this->url($this->primaryImageUrl),
            ]);
        }

        return $this->data;
    }
}
