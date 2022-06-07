<?php

namespace App\Twill\Api\V1;

use A17\Twill\API\JsonApi\V1\Blocks\BlockSchema;
use A17\Twill\API\JsonApi\V1\Features\FeatureSchema;
use A17\Twill\API\JsonApi\V1\Files\FileSchema;
use A17\Twill\API\JsonApi\V1\Medias\MediaSchema;
use A17\Twill\API\JsonApi\V1\RelatedItems\RelatedItemSchema;
use A17\Twill\API\JsonApi\V1\Settings\SettingSchema;
use A17\Twill\API\JsonApi\V1\Tags\TagSchema;
use A17\Twill\API\JsonApi\V1\Users\UserSchema;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            BlockSchema::class,
            FeatureSchema::class,
            RelatedItemSchema::class,
            FileSchema::class,
            MediaSchema::class,
            SettingSchema::class,
            TagSchema::class,
            UserSchema::class,
        ];
    }

    /**
     * Determine if the resource is authorizable.
     *
     * @return bool
     */
    public function authorizable(): bool
    {
        return false;
    }
}
