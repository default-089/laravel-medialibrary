<?php

namespace Spatie\MediaLibrary\ResponsiveImages\Events;

use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ResponsiveImagesGenerated
{
    use SerializesModels;

    public $media;

    public function __construct(Media $media)
    {
        $this->media = $media;
    }
}
