<?php
declare(strict_types=1);


namespace Strix\Traits\Models;


trait HasRules
{
    /**
     * Returns rules array.
     *
     * @return array
     */
    public static function getRules(): array
    {
        return static::$rules;
    }

    /**
     * Return only the fields that we are interested in from the request.
     * This will include empty fields as a null value.
     *
     * @param $request
     * @return array
     */
    public static function filterRequest(\Illuminate\Foundation\Http\FormRequest $request): array
    {
        return (array) \array_filter(
            $request->only(
                \array_keys(static::$rules)
            )
        );
    }
}
