<?php

namespace App\Services\StructuredData;

class CollectionPageSchema extends WebPageSchema
{
    public function build(): array
    {
        parent::build();
        $this->data['@type'] = 'CollectionPage';

        return $this->data;
    }
}
