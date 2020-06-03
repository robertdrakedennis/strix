<?php
declare(strict_types=1);

namespace Strix\Models;

use Strix\Traits\Models\GeneratesNanoId;

/**
 * Strix\Models\Media
 *
 * @property string $id
 * @property string $model_id
 * @property string $model_type
 * @property string $collection_name
 * @property string $name
 * @property string $file_name
 * @property string|null $mime_type
 * @property string $disk
 * @property string|null $conversions_disk
 * @property int $size
 * @property array $manipulations
 * @property array $custom_properties
 * @property array $responsive_images
 * @property int|null $order_column
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $extension
 * @property-read string $human_readable_size
 * @property-read string $type
 * @property-read string $url
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\Spatie\MediaLibrary\MediaCollections\Models\Media ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $uid
 * @method static \Illuminate\Database\Eloquent\Builder|\Strix\Models\Media whereUid($value)
 */
class Media extends \Spatie\MediaLibrary\MediaCollections\Models\Media
{
    use GeneratesNanoId;

    public static function bootHasUuid(): void {}
}
