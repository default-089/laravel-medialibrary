<?php

namespace Spatie\MediaLibrary\Conversions\Events;

use Illuminate\Queue\SerializesModels;
use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ConversionWillStart
{
    use SerializesModels;

    public $media;

    public $conversion;

    public $copiedOriginalFile;

    public function __construct(Media $media, Conversion $conversion, string $copiedOriginalFile)
    {
        $this->media = $media;

        $this->conversion = $conversion;

        $this->copiedOriginalFile = $copiedOriginalFile;
    }
}
