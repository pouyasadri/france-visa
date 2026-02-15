<?php

namespace App\Helpers;

class BreadcrumbHelper
{
    protected array $breadcrumbs = [];

    /**
     * Add a breadcrumb item
     */
    public function add(string $title, string $url): self
    {
        $this->breadcrumbs[] = [
            'title' => $title,
            'url' => $url,
        ];

        return $this;
    }

    /**
     * Get all breadcrumbs
     */
    public function get(): array
    {
        return $this->breadcrumbs;
    }

    /**
     * Generate breadcrumb HTML
     */
    public function render(string $separator = '/'): string
    {
        $html = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';

        foreach ($this->breadcrumbs as $index => $breadcrumb) {
            $isLast = $index === count($this->breadcrumbs) - 1;

            if ($isLast) {
                $html .= '<li class="breadcrumb-item active" aria-current="page">'.e($breadcrumb['title']).'</li>';
            } else {
                $html .= '<li class="breadcrumb-item"><a href="'.e($breadcrumb['url']).'">'.e($breadcrumb['title']).'</a></li>';
            }
        }

        $html .= '</ol></nav>';

        return $html;
    }

    /**
     * Convert to array for schema generation
     */
    public function toSchemaArray(): array
    {
        $items = [];

        foreach ($this->breadcrumbs as $breadcrumb) {
            $items[] = [
                'name' => $breadcrumb['title'],
                'url' => $breadcrumb['url'],
            ];
        }

        return $items;
    }
}
