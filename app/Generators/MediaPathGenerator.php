<?php


namespace Strix\Generators;


use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class MediaPathGenerator extends DefaultPathGenerator
{
    /*
 * Get a unique base path for the given media.
 */
    protected function getBasePath(Media $media): string
    {
        return $media->getAttribute('uid');
    }
}
